<x-user-layout>


<style>


</style>



<div class="row" style="margin-top: 15px;">
 <div class="col-lg-4">
   <div class="card mb-4">
     <div class="card-body text-center">
       <h5 class="my-3">{{ $departmentadmin->name }}</h5>
       <p class="text-muted mb-1">departmentadmined Driver of CDRRMO</p>
       <p class="text-muted mb-4">Bay Area, San Francisco, CA</p>
       <div class="d-flex justify-content-center mb-2">
       
       
       </div>
     </div>
   </div>
 
 </div>
 
 <div class="col-lg-8">
 <h3>Owner's Profile</h3>
   <div class="card mb-4">
     <div class="card-body">
       <div class="row">
         <div class="col-sm-3">
           <p class="mb-0">Vehicle Owner:</p>
         </div>
         <div class="col-sm-9">
           <p class="text-muted mb-0">{{ $departmentadmin->name }} {{ $departmentadmin->middlename }} {{ $departmentadmin->lastname }}</p>
         </div>
       </div>
       <hr>

       <div class="row">
         <div class="col-sm-3">
           <p class="mb-0">Gender:</p>
         </div>
         <div class="col-sm-9">
           <p class="text-muted mb-0">{{ $departmentadmin->gender }}</p>
         </div>
       </div>
       <hr>

       <div class="row">
         <div class="col-sm-3">
           <p class="mb-0">Email:</p>
         </div>
         <div class="col-sm-9">
           <p class="text-muted mb-0">{{ $departmentadmin->email }}</p>
         </div>
       </div>
       <hr>
       
       
       <div class="row">
         <div class="col-sm-3">
           <p class="mb-0">Address:</p>
         </div>
         <div class="col-sm-9">
           <p class="text-muted mb-0">{{ $departmentadmin->barangay }}, {{ $departmentadmin->municipality }}, {{ $departmentadmin->province }}</p>
         </div>
       </div>
       <hr>
       <div class="row">
         <div class="col-sm-3">
           <p class="mb-0">Phone Number:</p>
         </div>
         <div class="col-sm-9">
           <p class="text-muted mb-0">{{ $departmentadmin->contactnumber }}</p>
         </div>
       </div>
       <hr>
       <div class="row">
         <div class="col-sm-3">
           <p class="mb-0">Emergency Number:</p>
         </div>
         <div class="col-sm-9">
           <p class="text-muted mb-0">{{ $departmentadmin->emergencynumber }}</p>
         </div>
       </div>
       <hr>
       <div class="row">
         <div class="col-sm-3">
           <p class="mb-0">Medical Condition:</p>
         </div>
         <div class="col-sm-9">
           <p class="text-muted mb-0">{{ $departmentadmin->medicalcondition ? $departmentadmin->medicalcondition : "None" }}</p>
         </div>
       </div>
       <hr>
       <div class="row">
         <div class="col-sm-3">
           <p class="mb-0">Brand</p>
         </div>
         <div class="col-sm-9">
           <p class="text-muted mb-0">{{ $departmentadmin->brand }}</p>
         </div>
       </div>
       
       <hr>
       <div class="row">
         <div class="col-sm-3">
           <p class="mb-0">Model:</p>
         </div>
         <div class="col-sm-9">
           <p class="text-muted mb-0">{{ $departmentadmin->model }}</p>
         </div>
       </div>
       <hr>
       <div class="row">
         <div class="col-sm-3">
           <p class="mb-0">Vehicle License:</p>
         </div>
         <div class="col-sm-9">
           <p class="text-muted mb-0">{{ $departmentadmin->vehiclelicense }}</p>
         </div>
       </div>
       <hr>
       <div class="row">
         <div class="col-sm-3">
           <p class="mb-0">Vehicle Type:</p>
         </div>
         <div class="col-sm-9">
           <p class="text-muted mb-0">{{ $departmentadmin->type }}</p>
         </div>
       </div>
       <hr>
       <div class="row">
         <div class="col-sm-3">
           <p class="mb-0">Color:</p>
         </div>
         <div class="col-sm-9">
           <p class="text-muted mb-0">{{ $departmentadmin->color }}</p>
         </div>
       </div>
       <hr>
       <div class="row">
         <div class="col-sm-3">
           <p class="mb-0">Date departmentadmined:</p>
         </div>
         <div class="col-sm-9">
           <p class="text-muted mb-0">{{ $departmentadmin->created_at }}</p>
         </div>
       </div>
       
     </div>
   </div>
  
 </div>
</div>
</div>
</section>

</div>

    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

    <!-- Include Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

    <!-- Include DataTables JS -->
    <script src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.2/js/dataTables.bootstrap5.js"></script>

    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">

    <!-- Include DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.2/css/dataTables.bootstrap5.css">





</x-user-layout>