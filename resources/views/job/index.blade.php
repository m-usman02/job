<x-app-layout>
   <x-slot name="header">
      <h6 class="font-semibold text-xl text-gray-800 leading-tight">
         Jobs
      </h6>
   </x-slot>
   <div class="py-12">
      <div class="container-fluid">
         <div class="col-lg-12">
            <div class="bg-white shadow-sm sm:rounded-lg table-responsive">
       
               <div class="col-md-12">
               
                  <form method="GET" action="{{route('job.search')}}">
                     <div class="input-group">
                        <input type="text" class="form-control mt-2 my-1 mx-4 w-25" required placeholder="search" name="search" value="{{!empty('search') ? $search  : null }}">
                        <div class="input-group-append">
                           <button class="btn btn-primary mt-2 my-1 mx-4">Search</button>
                        </div>
                     </div>
                  </form>
              
               </div>
               <div class="p-6 bg-white border-b border-gray-200">
                  <table class="table table-striped table-responsive" id="job" width="100%">
                     <thead>
                        <tr>
                           <th>Select</th>
                           <th class="w-100">Job ID</th>
                           <th class="w-100">Date Created</th>
                           <th>Job Type</th>
                           <th class="w-100">First Name</th>
                           <th class="w-100">Last Name</th>
                           <th>Address</th>
                           <th>Phone</th>
                           <th>Email</th>
                           <th class="w-100">Issues Described</th>
                           <th class="w-100">Issues Found</th>
                           <th>Status</th>
                           <th class="w-100">Completion Date</th>
                           <th>Price</th>
                           <th>Note</th>
                           <th>Edit</th>
                           <th>Delete</th>
                           <th class="w-100">Invoice</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach($jobs as $job)
                        <tr>
                           <td ><input type="checkbox" name="id[]" value="{{$job->id}}"/></td>
                           <td >{{$job->job_id}}</td>
                           <td >{{$job->created_at->toDateString()}}</td>
                           <td>{{ $job->type->name }}</td>
                           <td>{{$job->customer->first_name}}</td>
                           <td>{{$job->customer->last_name}}</td>
                           <td>{{$job->customer->address}}</td>
                           <td>{{$job->customer->phone}}</td>
                           <td>{{$job->customer->email}}</td>
                           <td>{{$job->issue_described}}</td>
                           <td>{{$job->issue_found}}</td>
                           <td>{{$job->status}}</td>
                           <td>{{$job->completion_date}}</td>
                           <td>{{$job->price}}</td>
                           <td>{{$job->note}}</td>
                           <td>
                              <a href="{{route('job.edit',$job->id)}}"><button class="btn btn-primary">Edit</button></a>        
                           </td>
                           <td>
                              <a href="{{route('job.destroy',$job->id)}}"><button class="btn btn-danger" data-method="DELETE" data-confirm="Are you sure?" onClick="event.preventDefault();if(confirm('are you sure')){getElementById('delete-{{$job->id}}').submit()}">Delete</button></a>
                              <form method="POST"  action="{{route('job.destroy',$job->id)}}" id="delete-{{$job->id}}">
                                 @csrf
                                 @method('DELETE')
                              </form>
                           </td>
                           <td>      
                              <a href="{{route('invoice',$job->id)}}"><button class="btn btn-primary"> Invoice</button></a>       
                           </td>
                           {{--
                           <td> 
                              @if(!empty($job->customer))    
                              <a href="{{route('customer.edit',$job->customer->id)}}"><button class="btn btn-primary">Customer</button></a>
                              @endif
                           </td>
                           --}}
                        </tr>
                        @endforeach
                     </tbody>
                  </table>
                  {{$jobs->links()}} 
               </div>
            </div>
         </div>
      </div>
   </div>
</x-app-layout>