<x-newuser-layout>
<div class="hayt">
            <h3>Reporting Details</h3>
            <button type="button" class="btn btn-outline-primary ms-1 mb-3" onclick="window.location.href='/tenants'">Back</button>


        <div class="row">
            <div class="col-lg-5">
                <div class="card mb-4">
                    <div class="card-body text-center">
                        <div class="mapform">
                        <center> <img src="{{ asset($tenant->logo) }}" alt="Img" style="width: 250px; height: 250px;">
                        </center>
                            <h3>{{ $tenant->name }}</h3>
                            <p>lorem ipsum, lorem ipsum</p>
                        </div>
                        <div class="d-flex justify-content-center mb-2"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
            <h3>Tenant's Information:</h3>
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">College Name:</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{ $tenant->name }}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Domain Name:</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{ $tenant->domain_name }}.localhost</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Description:</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">Description</p>
                            </div>
                        </div>
                        <!-- <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Model:</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">model</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Address:</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">address</p>
                            </div>
                        </div> -->
                    </div>
                </div>

                @if ($tenant->admin)
                <h3>Tenant Admin Details:</h3>
                <div class="card mb-4">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Admin id:</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{ $tenant->admin->id }}</p>
                            </div>
                        </div>
                        <hr>
                        
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Full Name:</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{ $tenant->admin->adminfirstname }}  {{ $tenant->admin->adminmiddlename }} {{ $tenant->admin->adminlastname }}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Email:</p>
                            </div>
                            <div class="col-sm-9">
                               <p> {{ $tenant->admin->email }}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Address:</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"> {{ $tenant->admin->street }} {{ $tenant->admin->barangay }} {{ $tenant->admin->municipality }} {{ $tenant->admin->city }}</p>
                            </div>
                        </div>
                       
                        
                        <div class="row">
                            
                            <div class="col-sm-9">
                           
                             @else
                                <p>No associated Tenant Admin found.</p>
                            @endif
                            </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
<!-- 

    <h1>Details of Tenant:</h1>
    <p>Name Of Tenant: {{ $tenant->name }}</p>
    <p>ID of Tenant: {{ $tenant->id }}</p>
    <p>Email: {{ $tenant->email }}</p>
    <p>Domain Name: {{ $tenant->domain_name }}</p>




    @if ($tenant->admin)
        <h2>Tenant Admin Details:</h2>
        <p>Admin Email: {{ $tenant->admin->email }}</p>
        <p>First Name: {{ $tenant->admin->adminfirstname }}</p>
        <p>Middle Name: {{ $tenant->admin->adminmiddlename }}</p>
        <p>Last Name: {{ $tenant->admin->adminlastname }}</p>
        <p>Address: {{ $tenant->admin->street }}</p>
    @else
        <p>No associated Tenant Admin found.</p>
    @endif -->

</x-newuser-layout>
 
