<x-app-layout>
  <form action="{{route('customer.update',$customer->id)}}" method="POST">
    @csrf
   <div class="py-12">
   <div class="max-w-10xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
         <div class="container pt-5 py-5">
            <div class="row">
               <div class="col-md-4">
                  <div class="form-group">
                     <label for="first">First Name</label>
                     <input type="text" class="form-control" placeholder="" id="first" name="first_name" value="{{$customer->first_name}}" required>
                     
                  </div>
               </div>
               <!--  col-md-6   -->
               <div class="col-md-4">
                  <div class="form-group">
                     <label for="last">Last Name</label>
                     <input type="text" class="form-control" placeholder="" id="last" name="last_name" value="{{$customer->last_name}}" required>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="form-group">
                     <label for="last">Address</label>
                     <input type="text" class="form-control" placeholder="" id="last" name="address" value="{{$customer->address}}" required>
                  </div>
               </div>
            </div>
            <div class="row mt-5">
               <div class="col-md-4">
                  <div class="form-group">
                     <label for="last">Phone</label>
                     <input type="text" class="form-control" placeholder="" id="last" name="phone" value="{{$customer->phone}}" required>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="form-group">
                     <label for="last">Email</label>
                     <input type="email" class="form-control" placeholder="" id="last" name="email" value="{{$customer->email}}" required>
                  </div>
               </div>
             
            </div>
          
           
            <button class="btn btn-primary mt-5" type="submit">save</button>
              
              </div>
            </div>
         
   </div>
</form>
</x-app-layout>