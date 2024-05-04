<x-user-layout>


<form action="{{ route('users.store') }}" method="POST">
                    @csrf

                   

                    <div class="row">

                    
                                <h5><center>Department info:</center></h5>

                                                        
                                <div class="col-md-4">                    
                                    <div class="form-group">

                                        <label for="name">Department Name:</label>
                                        <input id="name" class="form-control" type="text" name="name" value="{{ old('name') }}" required autofocus />
                                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                    </div>

                                    </div>





                                <h5><center>Admin info:</center></h5>



                                
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="depadminfirstname">Fistname: </label>
                                <input id="depadminfirstname" class="form-control" type="text" name="depadminfirstname" value="{{ old('depadminfirstname') }}" required autofocus autocomplete="off" />
                                <x-input-error :messages="$errors->get('depadminfirstname')" class="mt-2" />
                            </div>

                            <div class="form-group">
                                <label for="street">Street:</label>
                                <input id="street" class="form-control" type="text" name="street" value="{{ old('street') }}" required autofocus autocomplete="lastname" />
                                <x-input-error :messages="$errors->get('street')" class="mt-2" />
                            </div>

                            
                            <div class="form-group">
                                <label for="city">City:</label>
                                <input id="city" class="form-control" type="text" name="city" value="{{ old('city') }}" required autofocus />
                                <x-input-error :messages="$errors->get('city')" class="mt-2" />
                            </div>

                         
                        <div class="form-group">
                                                  
                                        <div class="form-group">
                                            <label for="password_confirmation">Confirm Password:</label>
                                            <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" value="{{ old('password_confirmation') }}" required autofocus autocomplete="new-password_confirmation" />
                                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                        </div>

                        </div>

                        
                           
                       
                           
                        </div>

                        <div class="col-md-4">
                        <div class="form-group">
                                <label for="depadminmiddlename">Middle Name:</label>
                                <input id="depadminmiddlename" class="form-control" type="text" name="depadminmiddlename" value="{{ old('depadminmiddlename') }}" required autofocus autocomplete="name" />
                                <x-input-error :messages="$errors->get('depadminmiddlename')" class="mt-2" />
                            </div>

                            <div class="form-group">
                                <label for="barangay">Barangay:</label>
                                <input id="barangay" class="form-control" type="text" name="barangay" value="{{ old('barangay') }}" required autofocus />
                                <x-input-error :messages="$errors->get('barangay')" class="mt-2" />
                            </div>

                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input id="email" class="form-control" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="email" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>


                     

</div>
                       


<div class="col-md-4">


<div class="form-group">
                                <label for="depadminlastname">Last Name:</label>
                                <input id="depadminlastname" class="form-control" type="text" name="depadminlastname" value="{{ old('depadminlastname') }}" required autofocus autocomplete="name" />
                                <x-input-error :messages="$errors->get('depadminlastname')" class="mt-2" />
                            </div>
                        


                            
                            <div class="form-group">
                                <label for="municipality">Municipality:</label>
                                <input id="municipality" class="form-control" type="text" name="municipality" value="{{ old('municipality') }}" required autofocus />
                                <x-input-error :messages="$errors->get('municipality')" class="mt-2" />
                            </div>

                            
                   
                        <div class="form-group">
                                                    <label for="password">Password:</label>
                                                    <input id="password" class="form-control" type="password" name="password" value="{{ old('password') }}" required autofocus />
                                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                   
                          


                            


</div>



                                <div class="form-group">
                            <button type="submit" class="btn btn-primary">Add Department</button>
                                <a href="{{ route('students.index') }}" class="btn btn-secondary">Back</a>
                                </div>



                </form>


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
