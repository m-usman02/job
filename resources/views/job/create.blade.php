<x-app-layout>
  <form action="{{route('job.store')}}" method="POST">
    @csrf
   <div class="py-12">
   <div class="max-w-10xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
         <div class="container pt-5 py-5">
            <div class="row">
               <div class="col-md-4">
                  <div class="form-group">
                     <label for="first">First Name</label>
                     <input type="text" class="form-control" placeholder="" id="first" name="first_name" value="{{old('first_name')}}" required>
                     
                  </div>
               </div>
               <!--  col-md-6   -->
               <div class="col-md-4">
                  <div class="form-group">
                     <label for="last">Last Name</label>
                     <input type="text" class="form-control" placeholder="" id="last" name="last_name" value="{{old('last_name')}}" required>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="form-group">
                     <label for="last">Address</label>
                     <input type="text" class="form-control" placeholder="" id="last" name="address" value="{{old('address')}}" required>
                  </div>
               </div>
            </div>
            <div class="row mt-5">
               <div class="col-md-4">
                  <div class="form-group">
                     <label for="last">Phone</label>
                     <input type="tel" class="form-control" placeholder="" id="last" name="phone" value="{{old('phone')}}" required>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="form-group">
                     <label for="last">Email</label>
                     <input type="email" class="form-control" placeholder="" id="last" name="email" value="{{old('email')}}" required>
                  </div>
               </div>
             
            </div>
          
            <hr>
            <div class="row">
               <div class="col-md-4">
                  <div class="form-group">
                     <label for="last">Type</label>
                     <select class="form-control" name="type" required>
                        <option value="">Select one</option>
                        @foreach($types as $type)
                        <option value="{{$type->id}}">{{$type['name']}} </option>
                        @endforeach
                     </select>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="form-group">
                     <label for="last">Issues Found</label>
                     <textarea class="form-control" placeholder="" id="last" name="issue_found">{{old('issue_found')}}</textarea>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="form-group">
                     <label for="last">Issues Described</label>
                     <textarea class="form-control" placeholder="" id="last" name="issue_described">{{old('issue_described')}}</textarea>
                  </div>
               </div>
               <div class="row mt-5">
                  <div class="col-md-4">
                     <div class="form-group">
                        <label for="last">Status</label>
                        <select class="form-control" name="status">
                           <option value="pending" @if(old('status') == "pending") selected @endif>Pending</option>
                           <option value="in_progress" @if(old('status') == "in_progress") selected @endif>In progress</option>
                           <option value="completed" @if(old('status') == "completed") selected @endif>Completed</option>
                        </select>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="form-group">
                        <label for="last">Completion Date</label>
                        <input type="date" class="form-control" placeholder="" id="last" name="completion_date" value="{{old('completion_date')}}">
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="form-group">
                        <label for="last">Note</label>
                        <textarea class="form-control" placeholder="" id="last" name="note">{{old('note')}}</textarea>
                     </div>
                  </div>
               </div>
              </div><button class="btn btn-primary" type="submit">save</button>
            </div>
         </div>
   </div>
</form>
</x-app-layout>