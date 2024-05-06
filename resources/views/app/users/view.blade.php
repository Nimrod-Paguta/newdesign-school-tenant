<x-user-layout>


<style>


</style>


<a href="/users" class="btn btn-secondary">Back</a>
<div class="row" style="margin-top: 15px;">
 <div class="col-lg-4">
   <div class="card mb-4">
     <div class="card-body text-center">
      <center>   <img  src="{{ url($user->logo) }}" alt="User Logo" style="width: 270px; height: 260px;"></center>
       <h5 class="my-3">{{ $user->name }}</h5>
       <p class="text-muted mb-1"><i> Department of Community Affairs</i></p>
       
       <div class="d-flex justify-content-center mb-2">
       
       
       </div>
     </div>
   </div>
 
 </div>
 
 <div class="col-lg-8">
 <h3>Admin's Profile</h3>
   <div class="card mb-4">
     <div class="card-body">
       <div class="row">
         <div class="col-sm-3">
           <p class="mb-0">Full Name:</p>
         </div>
         <div class="col-sm-9">
           <p class="text-muted mb-0">{{ $user->adminfirstname }} {{ $user->adminmiddlename }} {{ $user->adminlastname }}</p>
         </div>
       </div>
       <hr>

       <div class="row">
         <div class="col-sm-3">
           <p class="mb-0">Gender:</p>
         </div>
         <div class="col-sm-9">
           <p class="text-muted mb-0">{{ $user->gender }}</p>
         </div>
       </div>
       <hr>

       <div class="row">
         <div class="col-sm-3">
           <p class="mb-0">Email:</p>
         </div>
         <div class="col-sm-9">
           <p class="text-muted mb-0">{{ $user->email }}</p>
         </div>
       </div>
       <hr>
       
       
       <div class="row">
         <div class="col-sm-3">
           <p class="mb-0">Address:</p>
         </div>
         <div class="col-sm-9">
           <p class="text-muted mb-0">{{ $user->barangay }}, {{ $user->municipality }}, {{ $user->province }}</p>
         </div>
       </div>
       <hr>
       <div class="row">
         <div class="col-sm-3">
           <p class="mb-0">Phone Number:</p>
         </div>
         <div class="col-sm-9">
           <p class="text-muted mb-0">{{ $user->contactnumber }}</p>
         </div>
       </div>
       <hr>
       @if ($user->id != 1)
      <div class="row">
          <div class="col-sm-3">
              <p class="mb-0">No. Of Students</p>
          </div>
          <div class="col-sm-9">
              <p class="text-muted mb-0">{{ $user->contactnumber }}</p>
          </div>
      </div>
      <hr>
      @endif

       @if ($user->id == 1)
      <div class="row">
          <div class="col-sm-3">
              <p class="mb-0">No. of Department:</p>
          </div>
          <div class="col-sm-9">
              <p class="text-muted mb-0">{{ $user->contactnumber }}</p>
          </div>
      </div>
      <hr>
      @endif
    
       <div class="row">
         <div class="col-sm-3">
           <p class="mb-0">Date created:</p>
         </div>
         <div class="col-sm-9">
           <p class="text-muted mb-0">{{ $user->created_at }}</p>
         </div>
       </div>
       
     </div>
   </div>
  
 </div>
</div>
</div>
</section>

</div>


    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">





</x-user-layout>