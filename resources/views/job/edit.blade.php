<x-app-layout>
  <form action="{{route('job.update',$job->id)}}" method="POST">
    @csrf
    @method('PUT')
   <div class="py-12">
   <div class="max-w-10xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
         <div class="container pt-5 py-5">
         <div class="row">
               <div class="col-md-4">
                  <div class="form-group">
                     <label for="first">First Name</label>
                     <input type="text" class="form-control" placeholder="" id="first" name="first_name" value="{{$job->customer->first_name}}" required>
                     
                  </div>
               </div>
               <!--  col-md-6   -->
               <div class="col-md-4">
                  <div class="form-group">
                     <label for="last">Last Name</label>
                     <input type="text" class="form-control" placeholder="" id="last" name="last_name" value="{{$job->customer->last_name}}" required>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="form-group">
                     <label for="last">Address</label>
                     <input type="text" class="form-control" placeholder="" id="last" name="address" value="{{$job->customer->address}}" required>
                  </div>
               </div>
            </div>
            <div class="row mt-5">
               <div class="col-md-4">
                  <div class="form-group">
                     <label for="last">Phone</label>
                     <input type="text" class="form-control" placeholder="" id="last" name="phone" value="{{$job->customer->phone}}" required>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="form-group">
                     <label for="last">Email</label>
                     <input type="email" class="form-control" placeholder="" id="last" name="email" value="{{$job->customer->email}}" required>
                  </div>
               </div>
             
            </div>
            <hr>
            <div class="row pt-5 py-5">
               <div class="col-md-4">
                  <div class="form-group">
                     <label for="last">Type</label>
                     <select class="form-control" name="type" required>
                        <option value="">Select one</option>
                        @foreach($types as $type)
                        <option value="{{$type->id}}" @if($job->type_id == $type->id) selected @endif>{{$type['name']}} </option>
                        @endforeach
                     </select>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="form-group">
                     <label for="last">Issues Found</label>
                     <textarea class="form-control" placeholder="" id="last" name="issue_found">{{$job->issue_found}}</textarea>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="form-group">
                     <label for="last">Issues Described</label>
                     <textarea class="form-control" placeholder="" id="last" name="issue_described">{{$job->issue_described}}</textarea>
                  </div>
               </div>
               <div class="row mt-5">
                  <div class="col-md-4">
                     <div class="form-group">
                        <label for="last">Status</label>
                        <select class="form-control" name="status">
                           <option value="pending" @if($job->status == "pending") selected @endif>Pending</option>
                           <option value="in_progress" @if($job->status == "in_progress") selected @endif>In progress</option>
                           <option value="completed" @if($job->status == "completed") selected @endif>Completed</option>
                        </select>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="form-group">
                        <label for="last">Completion Date</label>
                        <input type="date" class="form-control" placeholder="" id="last" name="completion_date" value="{{$job->completion_date}}">
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="form-group">
                        <label for="last">Note</label>
                        <textarea class="form-control" placeholder="" id="last" name="note">{{$job->note}}</textarea>
                     </div>
                  </div>
               </div>
              </div><button class="btn btn-primary" type="submit">save</button>
            </div>
         </div>
   </div>
</form>
</x-app-layout>