<x-newuser-layout>
<div class="hayt">
            <h3>Reporting Details</h3>
            <button type="button" class="btn btn-outline-primary ms-1 mb-3" onclick="window.location.href='/tenants'">Back</button>


        <div class="row">
            <div class="col-lg-5">
                <div class="card mb-4">
                    <div class="card-body text-center">
                        <div class="mapform">
                       
                        </center>
                            <h3>{{ $admins->adminfirstname }} {{ $admins->adminmiddlename }} {{ $admins->adminlastname }}</h3>
                            <p>lorem ipsum, lorem ipsum</p>
                        </div>
                        <div class="d-flex justify-content-center mb-2"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
            <h3>admins's Information:</h3>
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Tenant ID:</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{ $admins->tenantadmin }}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Address:</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{ $admins->street }} {{ $admins->barangay }} {{ $admins->municipality }} {{ $admins->city }}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Gender:</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{ $admins->gender }}</p>
                            </div>
                        </div>
                        <hr>

                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Contact Number:</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{ $admins->phonenumber }}</p>
                            </div>
                        </div>
                        <hr>

                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Email:</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0">{{ $admins->email }}</p>
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

                    </div>
                    
                </div>
            </div>
        </div>
    </div>


</x-newuser-layout>
 
