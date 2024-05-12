<x-user-layout>
<form action="{{ route('students.update', $students->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="Student_no">Student Number</label>
                                <input id="Student_no" class="form-control" type="number" name="Student_no" value = "{{ $students->Student_no }}" required autofocus autocomplete="off" />
                                <x-input-error :messages="$errors->get('Student_no')" class="mt-2" />
                            </div>


                            <div class="form-group">
                                <label for="first_name">First Name</label>
                                <input id="first_name" class="form-control" type="text" name="first_name" value = "{{ $students->first_name }}" required autofocus autocomplete="name" />
                                <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
                            </div>

                            <div class="form-group">
                                <label for="middle_name">Middle Name</label>
                                <input id="middle_name" class="form-control" type="text" name="middle_name" value = "{{ $students->middle_name }}" required autofocus autocomplete="name" />
                                <x-input-error :messages="$errors->get('middle_name')" class="mt-2" />
                            </div>

                            <div class="form-group">
                                <label for="last_name">Last Name</label>
                                <input id="last_name" class="form-control" type="text" name="last_name" value = "{{ $students->last_name }}" required autofocus autocomplete="lastname" />
                                <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
                            </div>

                            <div class="form-group">
                                <label for="gender">Gender</label>
                                <input id="gender" class="form-control" type="text" name="gender" value = "{{ $students->gender }}" required autofocus autocomplete="lastname" />
                                <x-input-error :messages="$errors->get('gender')" class="mt-2" />
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="department">Department</label>
                                <input id="department" class="form-control" type="text" name="department" value = "{{ $students->department }}" readonly required />
                                <x-input-error :messages="$errors->get('department')" class="mt-2" />
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input id="email" class="form-control" type="email" name="email" value = "{{ $students->email }}" required autofocus autocomplete="email" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            <div class="form-group">
                                <label for="date_of_birth">Date of Birth</label>
                                <input id="date_of_birth" class="form-control" type="date" name="date_of_birth" value = "{{ $students->date_of_birth }}" required autofocus autocomplete="date_of_birth" />
                                <x-input-error :messages="$errors->get('date_of_birth')" class="mt-2" />
                            </div>

                            <div class="form-group">
                                <label for="age">Age</label>
                                <input id="age" class="form-control" type="number" name="age" value = "{{ $students->age }}" required autofocus autocomplete="age" />
                                <x-input-error :messages="$errors->get('age')" class="mt-2" />
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="mobile_no">Mobile No</label>
                                <input id="mobile_no" class="form-control" type="number" name="mobile_no" value = "{{ $students->mobile_no }}" required autofocus oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 11)" />
                                <x-input-error :messages="$errors->get('mobile_no')" class="mt-2" />
                            </div>

                            <div class="form-group">
                                <label for="year">Year</label>
                                <select id="year" class="form-control" name="year" required autofocus>
                                    <option value="1st Year" >1st Year</option>
                                    <option value="2nd Year">2nd Year</option>
                                    <option value="3rd Year" >3rd Year</option>
                                    <option value="4th Year" >4th Year</option>
                                </select>
                                <x-input-error :messages="$errors->get('year')" class="mt-2" />
                            </div>

                            <div class="form-group">
                                <label for="year">Year</label>
                                <select id="year" class="form-control" name="year" required autofocus>
                                    <option value="regular" >Regular</option>
                                    <option value="irregular">Irregular</option>
                                </select>
                                <x-input-error :messages="$errors->get('year')" class="mt-2" />
                            </div>


                            

                            <div class="form-group">
                                        <label for="logo">Upload Logo</label>
                                        <input id="logo" class="form-control" type="file" name="logo" value = "{{ $students->logo }}"  required autofocus />
                                        <x-input-error :messages="$errors->get('logo')" class="mt-2" />
                         </div>

                        </div>

                        <div class="col-md-12">
                            <label for="domain_name" class="form-label"><p><h5><center>Address</center></h5></p></label>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="street">Street</label>
                                <input id="street" class="form-control" type="text" name="street" value = "{{ $students->street }}" required autofocus />
                                <x-input-error :messages="$errors->get('street')" class="mt-2" />
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="barangay">Barangay</label>
                                <input id="barangay" class="form-control" type="text" name="barangay" value = "{{ $students->barangay }}" required autofocus />
                                <x-input-error :messages="$errors->get('barangay')" class="mt-2" />
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="municipality">Municipality</label>
                                <input id="municipality" class="form-control" type="text" name="municipality" value = "{{ $students->municipality }}" required autofocus />
                                <x-input-error :messages="$errors->get('municipality')" class="mt-2" />
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="province">Province</label>
                                <input id="province" class="form-control" type="text" name="province" value = "{{ $students->province }}" required autofocus />
                                <x-input-error :messages="$errors->get('province')" class="mt-2" />
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
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


