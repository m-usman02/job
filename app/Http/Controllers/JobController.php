<?php

namespace App\Http\Controllers;

use App\Http\Requests\JobStoreRequest;
use App\Models\Job;
use App\Models\Customer;
use App\Models\JobType;
use DB;
use Illuminate\Http\Request;
use PDF;
use App;
class JobController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {        
        $jobs = Job::with('customer','type')->latest()->paginate(40);
        
        $search = $request->search;
        return view('job.index', compact('jobs','search'));
    }

    public function exportPdf(Job $job)
    {        
        $job->load('customer','type');
        $date = $job->created_at->toDateString();
        $job = $job->toArray();     
        $job['created_at'] = $date;
        // // $pdf = PDF::loadView('invoice');
        // // dd($pdf->download);
        // dd($job);
      
        // return $pdf->download('invoice');

       
        //   return view('invoice', compact('job')); 
        $pdf = PDF::loadView('invoice', compact('job'));
    
        return $pdf->download('invoice.pdf');
    }

    public function create()
    {     
       
        $types = JobType::all();      
        return view('job.create', compact('types'));
    }

    public function customerEdit(Customer $customer)
    {
       
        return view('customer.edit',compact('customer'));
    }

    public function customerUpdate(Request $request,Customer $customer)
    {
        $data = $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:500'],
            'phone' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255',"unique:users,email,$customer->id"],            
        ]);

        $customer->update($data);
        return redirect()->route('job.index');
    }

    public function edit(Job $job)
    {      
     
        $types = JobType::all();   
        $job->load('type','customer');   
        return view('job.edit',compact('types','job'));
    }

    /**
     * @param \App\Http\Requests\JobStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {    
       
        

        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:500'],
            'phone' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255','unique:customers'],
            'type' => ['required', 'string', 'max:255'],
            'issue_described' => ['nullable','string', 'max:1000'],
            'issue_found' => ['nullable','string', 'max:1000'],        
            'completion_date' => ['nullable','string', 'max:255'],
            'note' => ['nullable','string', 'max:2000'],
            'status' => ['nullable','string', 'max:255']
        ]);
        $type = JobType::find($request->type);

        $customer = Customer::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'address' =>  $request->address,
            'phone' => $request->phone,
            'email' => $request->email,
        ]);
        
        $job = Job::create([
            'customer_id'=>$customer->id,
            'job_id'=>now()->format('Y').now()->format('m').now()->format('d').now()->format('H').now()->format('i'),
            'type_id' => $request->type,
            'issue_described' => $request->issue_described,
            'issue_found' => $request->issue_found,      
            'completion_date' => $request->completion_date,
            'note' => $request->note,
            'price'=> $type->price,
            'status'=>$request->status 
        ]);

        return redirect()->route('job.index');
    }

    public function update(Request $request,Job $job)
    {          
        

        $request->validate([        
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:500'],
            'phone' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255','unique:customers,email,'.$job->customer_id],   
            'type' => ['required', 'string', 'max:255'],
            'issue_described' => ['nullable','string', 'max:1000'],
            'issue_found' => ['nullable','string', 'max:1000'],        
            'completion_date' => ['nullable','string', 'max:255'],
            'note' => ['nullable','string', 'max:2000'],
            'status' => ['nullable','string', 'max:255']
        ]);
        $customer = Customer::find($job->customer_id);
        $customer->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'address' =>  $request->address,
            'phone' => $request->phone,
            'email' => $request->email,
        ]);

        $type = JobType::find($request->type);

       
        
        $job->update([           
            'type_id' => $request->type,
            'issue_described' => $request->issue_described,
            'issue_found' => $request->issue_found,      
            'completion_date' => $request->completion_date,
            'note' => $request->note,
            'price'=> $type->price,
            'status'=>$request->status
        ]);

        return redirect()->route('job.index');
    }

    public function destroy(Job $job)
    {               
        $job->delete();
        return redirect()->route('job.index');
    }

    public function search(Request $request)
    {
     
        $jobs = Job::with('type','customer')->where(function($q) use($request){
            $q->where('job_id','LIKE',"%".$request->search."%")
            ->orWhereHas('customer',function($query) use($request){
                $query->where('last_name','LIKE',"%".$request->search."%")->orWhere('phone','LIKE',"%".$request->search."%");
            });
        });
        // ->when($request->search,function($q) use($request){          
        //    return $q->orWhere('job_id','LIKE',"%".$request->search."%");
        // });

        // if(!empty($request->search)){          
        //     $jobs->orWhereHas('customer',function($query) use($request){
        //         $query->orWhere('last_name','LIKE',"%".$request->search."%")->orWhere('phone','LIKE',"%".$request->search."%");
        //     });
        // }else{
        //     $jobs->with('customer');
        // }
      
        $jobs = $jobs->paginate(40);
        $search = $request->search;
        return view('job.index', compact('jobs','search'));
    }
}
