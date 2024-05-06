<x-user-layout>


        <form method="POST" action="{{ route('users.update', $user->id) }}">
                    @csrf
                    @method('put') 
                   

                    <div class="row">

                    
                                <h5><center>Department info:</center></h5>

                                                        
                                <div class="col-md-4">                    
                                    <div class="form-group">

                                        <label for="name">Department Name:</label>
                                        <input id="name" class="form-control" type="text" name="name" value="{{ $user->name }}" required autofocus />
                                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                    </div>
                                    

                                    </div>
                                    <div class="col-md-4">                    
                                  

                                    
                                    

                                    </div>






                                <h5><center>Admin info:</center></h5>



                                
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="adminfirstname">Fistname: </label>
                                <input id="adminfirstname" class="form-control" type="text" name="adminfirstname" value="{{ $user->adminfirstname }}"  required autofocus autocomplete="off" />
                                <x-input-error :messages="$errors->get('adminfirstname')" class="mt-2" />
                            </div>

                            <div class="form-group">
                                <label for="street">Street:</label>
                                <input id="street" class="form-control" type="text" name="street" value="{{ $user->street }}" required autofocus autocomplete="lastname" />
                                <x-input-error :messages="$errors->get('street')" class="mt-2" />
                            </div>

                            
                            <div class="form-group">
                                <label for="city">City:</label>
                                <input id="city" class="form-control" type="text" name="city" value="{{ $user->city }}" required autofocus />
                                <x-input-error :messages="$errors->get('city')" class="mt-2" />
                            </div>

                            
                            <div class="form-group">
                            <button type="submit" class="btn btn-primary">Add Department</button>
                                <a href="/users" class="btn btn-secondary">Back</a>
                                </div>

                           
                        </div>

                        <div class="col-md-4">
                        <div class="form-group">
                                <label for="adminmiddlename">Middle Name:</label>
                                <input id="adminmiddlename" class="form-control" type="text" name="adminmiddlename" value="{{ $user->adminmiddlename }}" required autofocus autocomplete="name" />
                                <x-input-error :messages="$errors->get('adminmiddlename')" class="mt-2" />
                            </div>

                            <div class="form-group">
                                <label for="barangay">Barangay:</label>
                                <input id="barangay" class="form-control" type="text" name="barangay" value="{{ $user->barangay }}" required autofocus />
                                <x-input-error :messages="$errors->get('barangay')" class="mt-2" />
                            </div>

                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input id="email" class="form-control" type="email" name="email" value="{{ $user->email }}" required autofocus autocomplete="email" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>


                     

</div>
                       


<div class="col-md-4">


<div class="form-group">
                                <label for="adminlastname">Last Name:</label>
                                <input id="adminlastname" class="form-control" type="text" name="adminlastname" value="{{ $user->adminlastname }}" required autofocus autocomplete="name" />
                                <x-input-error :messages="$errors->get('adminlastname')" class="mt-2" />
                            </div>
                        


                            
                            <div class="form-group">
                                <label for="municipality">Municipality:</label>
                                <input id="municipality" class="form-control" type="text" name="municipality" value="{{ $user->municipality }}" required autofocus />
                                <x-input-error :messages="$errors->get('municipality')" class="mt-2" />
                            </div>

                            <div class="mb-6">
                        <x-input-label for="roles" :value="__('Roles')" /> 
                        <select multiple class="block w-full rounded-md border-gray-300 shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50" name="roles[]">
                            @foreach($roles as $role)
                                <option value="{{ $role->id }}" @if(in_array($role->id, $user->roles->pluck('id')->toArray())) selected @endif>{{ $role->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    
                            
                     
                   
                   
                          


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
