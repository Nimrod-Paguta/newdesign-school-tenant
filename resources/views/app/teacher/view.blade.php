<x-user-layout>


<style>


</style>


<a href="/teachers" class="btn btn-secondary">Back</a>
<div class="row" style="margin-top: 15px;">
 <div class="col-lg-4">
   <div class="card mb-4">
     <div class="card-body text-center">
    <center> <img src="{{ url($teacher->logo) }}" alt="Img" style="width: 275px; height: 270px;"></center>
       <h5 class="my-3">{{ $teacher->first_name }}</h5>
       <p class="text-muted mb-1"><i> Department of Community Affairs</i></p>
       
       <div class="d-flex justify-content-center mb-2">
       </div>
     </div>
   </div>
 </div>
 
 
 <div class="col-lg-8">
 <h3>Instructor's Profile:</h3>
   <div class="card mb-4">
     <div class="card-body">
       <div class="row">
         <div class="col-sm-3">
           <p class="mb-0">Full Name:</p>
         </div>
         <div class="col-sm-9">
           <p class="text-muted mb-0">{{ $teacher->first_name }} {{ $teacher->middle_name }} {{ $teacher->last_name }}</p>
         </div>
       </div>
       <hr>

       <div class="row">
         <div class="col-sm-3">
           <p class="mb-0">Gender:</p>
         </div>
         <div class="col-sm-9">
           <p class="text-muted mb-0">{{ $teacher->gender }}</p>
         </div>
       </div>
       <hr>
       <div class="row">
         <div class="col-sm-3">
           <p class="mb-0">Birth Date:</p>
         </div>
         <div class="col-sm-9">
           <p class="text-muted mb-0">{{ $teacher->date_of_birth }}</p>
         </div>
       </div>
       

       <hr>
       <div class="row">
         <div class="col-sm-3">
           <p class="mb-0">Age:</p>
         </div>
         <div class="col-sm-9">
           <p class="text-muted mb-0">{{ $teacher->age }}</p>
         </div>
       </div>
       <hr>


       <div class="row">
         <div class="col-sm-3">
           <p class="mb-0">Email:</p>
         </div>
         <div class="col-sm-9">
           <p class="text-muted mb-0">{{ $teacher->email }}</p>
         </div>
       </div>
       <hr>
       
       <div class="row">
         <div class="col-sm-3">
           <p class="mb-0">Phone Number:</p>
         </div>
         <div class="col-sm-9">
           <p class="text-muted mb-0">{{ $teacher->contact_number }}</p>
         </div>
       </div>
       <hr>
       
       <div class="row">
         <div class="col-sm-3">
           <p class="mb-0">Address:</p>
         </div>
         <div class="col-sm-9">
           <p class="text-muted mb-0">{{ $teacher->street }}, {{ $teacher->barangay }}, {{ $teacher->municipality }}, {{ $teacher->province }}</p>
         </div>
       </div>
       <hr>
       <div class="row">
         <div class="col-sm-3">
           <p class="mb-0">Status:</p>
         </div>
         <div class="col-sm-9">
           <p class="text-muted mb-0">{{ $teacher->status }}</p>
         </div>
       </div>
       <hr>
       <div class="row">
         <div class="col-sm-3">
           <p class="mb-0">Date created:</p>
         </div>
         <div class="col-sm-9">
           <p class="text-muted mb-0">{{ $teacher->created_at }}</p>
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