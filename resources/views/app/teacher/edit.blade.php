<x-user-layout>
<form class="row g-3 needs-validation" method="post" action="{{ route('teacher.update', ['id' => $teacher->id]) }}" enctype="multipart/form-data">
@method('PUT')
@csrf
 


<div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="instructor_id">Instructor ID:</label>
                            <input id="instructor_id" class="form-control" type="number" name="instructor_id" value = "{{ $teacher->instructor_id }}" required autofocus autocomplete="instructor_id" />
                            <x-input-error :messages="$errors->get('instructor_id')" class="mt-2" />
                        </div>


                        <div class="form-group col-md-4">
                                        <label for="logo">Upload Logo:</label>
                                        <input id="logo" class="form-control" type="file" name="logo" value="{{ old('logo') }}" required autofocus />
                                        <x-input-error :messages="$errors->get('logo')" class="mt-2" />
                                    </div>
                                    
                                    
                        <div class="form-group col-md-4">
                            <label for="first_name">First Name:</label>
                            <input id="first_name" class="form-control" type="text" name="first_name"  value = "{{ $teacher->first_name }}" required autofocus autocomplete="name" />
                            <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
                        </div>

                        <div class="form-group col-md-4">
                            <label for="middle_name">Middle Name:</label>
                            <input id="middle_name" class="form-control" type="text" name="middle_name"  value = "{{ $teacher->middle_name }}" autofocus autocomplete="name" />
                            <x-input-error :messages="$errors->get('middle_name')" class="mt-2" />
                        </div>

                        <div class="form-group col-md-4">
                            <label for="last_name">Last Name:</label>
                            <input id="last_name" class="form-control" type="text" name="last_name"  value = "{{ $teacher->last_name}}" required autofocus autocomplete="lastname" />
                            <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
                        </div>

                        <div class="form-group col-md-4">
                            <label for="gender">Gender:</label>
                            <input id="gender" class="form-control" type="text" name="gender"  value = "{{ $teacher->gender}}" required autofocus autocomplete="lastname" />
                            <x-input-error :messages="$errors->get('gender')" class="mt-2" />
                        </div>

                        
                        <div class="form-group col-md-4">
                            <label for="age">Age:</label>
                            <input id="age" class="form-control" type="text" name="age"  value = "{{ $teacher->age}}" required autofocus autocomplete="lastname" />
                            <x-input-error :messages="$errors->get('age')" class="mt-2" />
                        </div>



                        <div class="form-group col-md-8">
                            <label for="email">Email:</label>
                            <input id="email" class="form-control" type="email" name="email"  value = "{{ $teacher->email}}" required autofocus autocomplete="email" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <div class="form-group col-md-6">
                            <label for="status">Status:</label>
                            <select id="status" class="form-control" name="status" required>
                                <option value="Regular">Regular</option>
                                <option value="Part Time">Part Time</option>
                            </select>
                            <x-input-error :messages="$errors->get('status')" class="mt-2" />
                        </div>

                        <div class="form-group col-md-6">
                            <label for="date_of_birth">Date of Birth:</label>
                            <input id="date_of_birth" class="form-control" type="date" name="date_of_birth" v value = "{{ $teacher->date_of_birth }}" required autofocus autocomplete="date_of_birth" />
                            <x-input-error :messages="$errors->get('date_of_birth')" class="mt-2" />
                        </div>

                      

                        <div class="form-group col-md-6">
                                <label for="contact_number">Contact Number:</label>
                                <input id="contact_number" class="form-control" type="number" name="contact_number"  value = "{{ $teacher->contact_number }}" required autofocus />
                                <x-input-error :messages="$errors->get('contact_number')" class="mt-2" />
                            </div>



                        <div class="form-group col-md-6">
                            <label for="department">Department:</label>
                            <input id="department" class="form-control" type="text" name="department" value="{{ auth()->user()->name }}" readonly required />
                            <x-input-error :messages="$errors->get('department')" class="mt-2" />
                        </div>

                        <!-- Address Section -->
                        <div class="col-md-12">
                            <h5 class="mt-4">Address</h5>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="street">Street:</label>
                            <input id="street" class="form-control" type="text" name="street"  value = "{{ $teacher->street }}" required autofocus autocomplete="street-address" />
                            <x-input-error :messages="$errors->get('street')" class="mt-2" />
                        </div>

                        <div class="form-group col-md-4">
                            <label for="barangay">Barangay:</label>
                            <input id="barangay" class="form-control" type="text" name="barangay"  value = "{{ $teacher->barangay }}" required autofocus autocomplete="address-level2" />
                            <x-input-error :messages="$errors->get('barangay')" class="mt-2" />
                        </div>

                        <div class="form-group col-md-4">
                            <label for="municipality">Municipality:</label>
                            <input id="municipality" class="form-control" type="text" name="municipality"  value = "{{ $teacher->municipality }}" required autofocus autocomplete="address-level2" />
                            <x-input-error :messages="$errors->get('municipality')" class="mt-2" />
                        </div>

                        <div class="form-group col-md-4">
                            <label for="province">Province:</label>
                            <input id="province" class="form-control" type="text" name="province"  value = "{{ $teacher->province }}" required autofocus autocomplete="address-level1" />
                            <x-input-error :messages="$errors->get('province')" class="mt-2" />
                        </div>
                     </div>
                       <div class="form-group col-md-4">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{ route('teacher.index') }}" class="btn btn-secondary">Back</a>
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
