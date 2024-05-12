<x-user-layout>


<style>


</style>

<center><h3>Student Profile</h3></center>
<a href="/students" class="btn btn-secondary">Back</a>
<div class="row" style="margin-top: 15px;">
 <div class="col-lg-4">
   <div class="card mb-4">
     <div class="card-body text-center">
    <center> <img src="{{ url($student->logo) }}" alt="Img" style="width: 275px; height: 230px;"></center>
       <h5 class="my-3">{{ $student->first_name }}</h5>
       <p class="text-muted mb-1"><i> Department of Community Affairs</i></p>
       
       <div class="d-flex justify-content-center mb-2">
       </div>
     </div>
   </div>
 </div>
 
 
 <div class="col-lg-8">
   <div class="card mb-4">
     <div class="card-body">
       <div class="row">
         <div class="col-sm-3">
           <p class="mb-0">Full Name:</p>
         </div>
         <div class="col-sm-9">
           <p class="text-muted mb-0">{{ $student->first_name }} {{ $student->middle_name }} {{ $student->last_name }}</p>
         </div>
       </div>
       <hr>

       <div class="row">
         <div class="col-sm-3">
           <p class="mb-0">Gender:</p>
         </div>
         <div class="col-sm-9">
           <p class="text-muted mb-0">{{ $student->gender }}</p>
         </div>
       </div>
       <hr>
       <div class="row">
         <div class="col-sm-3">
           <p class="mb-0">Birth Date:</p>
         </div>
         <div class="col-sm-9">
           <p class="text-muted mb-0">{{ $student->date_of_birth }}</p>
         </div>
       </div>
       

       <hr>
       <div class="row">
         <div class="col-sm-3">
           <p class="mb-0">Age:</p>
         </div>
         <div class="col-sm-9">
           <p class="text-muted mb-0">{{ $student->age }}</p>
         </div>
       </div>
       <hr>


       <div class="row">
         <div class="col-sm-3">
           <p class="mb-0">Email:</p>
         </div>
         <div class="col-sm-9">
           <p class="text-muted mb-0">{{ $student->email }}</p>
         </div>
       </div>
       <hr>
       
       <div class="row">
         <div class="col-sm-3">
           <p class="mb-0">Phone Number:</p>
         </div>
         <div class="col-sm-9">
           <p class="text-muted mb-0">{{ $student->mobile_no }}</p>
         </div>
       </div>
       <hr>
       
       <div class="row">
         <div class="col-sm-3">
           <p class="mb-0">Address:</p>
         </div>
         <div class="col-sm-9">
           <p class="text-muted mb-0">{{ $student->street }}, {{ $student->barangay }}, {{ $student->municipality }}, {{ $student->province }}</p>
         </div>
       </div>
       <hr>
       <div class="row">
         <div class="col-sm-3">
           <p class="mb-0">Status:</p>
         </div>
         <div class="col-sm-9">
           <p class="text-muted mb-0">{{ $student->status }}</p>
         </div>
       </div>
       <hr>
       <div class="row">
         <div class="col-sm-3">
           <p class="mb-0">Date created:</p>
         </div>
         <div class="col-sm-9">
           <p class="text-muted mb-0">{{ $student->created_at }}</p>
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