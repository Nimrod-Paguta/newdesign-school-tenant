<x-newuser-layout>



<style>
    .card {
        width: calc(25% - 20px); /* Adjust the width as needed */
        border: 1px solid #ddd;
        border-radius: 5px;
        padding: 10px;
        margin: 10px;
        display: flex;
        vertical-align: top;
        box-sizing: border-box;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    .card-header {
        font-weight: bold;
        margin-bottom: 5px;
    }

    .card-body {
        color: #555;
    }

    .card-actions {
        margin-top: 10px;
    }

    .btn-danger,
    .btn-edit {
        background-color: #007bff;
        color: #fff;
        border: none;
        padding: 5px 10px;
        cursor: pointer;
    }

    .btn-danger {
        background-color: #dc3545;
    }
</style>
<h3>Total Colleges: {{ $totalTenants }}</h3>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Add College
</button>
@if ($errors->has('email'))
    <div class="alert alert-danger mt-2" role="alert">
        {{ $errors->first('email') }}
    </div>
@endif



<div id="cardsContainer" class="row">
    @foreach($tenants as $tenant)
        <div class="card">
            <div class="card-header">{{ $tenant->name }}</div>
            <div class="card-body">
                <p>Department Admin: <span class="text-blue-500">{{ $tenant->email }}</span></p>
                <p>Domain: 
                    <span class="text-green-500">
                        @foreach($tenant->domains as $domain)
                            {{ $domain->domain }}{{ $loop->last ? '' : ',' }}
                        @endforeach
                    </span>
                </p>
               <center> <img src="{{ asset($tenant->logo) }}" alt="Img" style="width: 150px; height: 150px;">
</center>
            </div>
            <a href="{{ route('tenants.view', $tenant->id) }}">
            <form action="{{ route('tenants.destroy', $tenant->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger btn-sm" value="Delete" />
                    </form>

        <button type="button" class="btn btn-secondary actions-buttons">View</button>
    </a>
        </div>
    @endforeach
</div>




    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document"> <!-- Change modal-dialog class to adjust width (e.g., modal-sm, modal-lg, modal-xl) -->
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Department</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">




                <form method="POST" action="{{ route('tenants.store') }}" class="row g-3" enctype="multipart/form-data">
    @csrf
    <!-- Name -->
    <div class="col-md-6">
        <label for="name" class="form-label">Department Name</label>
        <input id="name" class="form-control" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" />
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>

       <!-- Name -->
       <div class="col-md-6">
        <label for="department_id" class="form-label">Department ID</label>
        <input id="department_id" class="form-control" type="text" name="department_id" value="{{ old('department_id') }}" required autofocus autocomplete="department_id" />
        <x-input-error :messages="$errors->get('department_id')" class="mt-2" />
    </div>


    

    <!-- Domain Name -->
    <div class="col-md-6">
        <label for="domain_name" class="form-label">Department Domain</label>
        <input id="domain_name" class="form-control" type="text" name="domain_name" value="{{ old('domain_name') }}" required autofocus autocomplete="domain_name" />
        <x-input-error :messages="$errors->get('domain_name')" class="mt-2" />
    </div>


    <div class="form-group col-md-4">
                            <label for="logo">Logo</label>
                            <input id="logo" class="form-control" type="file" name="logo" value="{{ old('logo') }}" required autofocus autocomplete="address-level1" />
                            <x-input-error :messages="$errors->get('logo')" class="mt-2" />
                        </div>




        <!-- Domain Name -->
        <div class="col-md-10">
        <label for="domain_name" class="form-label"><p><center>Admin for Department</center></p></label>
        </div>



    <!-- firstname  -->
    <div class="col-md-6">
        <label for="adminfirstname" class="form-label">First Name:</label>
        <input id="adminfirstname" class="form-control" type="text" name="adminfirstname" value="{{ old('adminfirstname') }}" required autofocus autocomplete="adminfirstname" />
        <x-input-error :messages="$errors->get('adminfirstname')" class="mt-2" />
    </div>

    <!-- middlename -->
    <div class="col-md-6">
        <label for="adminmiddlename" class="form-label">Middle Name:</label>
        <input id="adminmiddlename" class="form-control" type="text" name="adminmiddlename" value="{{ old('adminmiddlename') }}" required autofocus autocomplete="adminmiddlename" />
        <x-input-error :messages="$errors->get('adminmiddlename')" class="mt-2" />
    </div>

    <!-- lastname -->
    <div class="col-md-6">
        <label for="adminlastname" class="form-label">Last Name:</label>
        <input id="adminlastname" class="form-control" type="text" name="adminlastname" value="{{ old('adminlastname') }}" required autofocus autocomplete="adminlastname" />
        <x-input-error :messages="$errors->get('adminlastname')" class="mt-2" />
    </div>


    <!-- Address -->
    <div class="col-md-6">
        <label for="street" class="form-label">Street:</label>
        <input id="street" class="form-control" type="text" name="street" value="{{ old('street') }}" required autofocus autocomplete="street" />
        <x-input-error :messages="$errors->get('street')" class="mt-2" />
    </div>

      <!-- Address -->
      <div class="col-md-6">
        <label for="barangay" class="form-label">Barangay:</label>
        <input id="barangay" class="form-control" type="text" name="barangay" value="{{ old('barangay') }}" required autofocus autocomplete="barangay" />
        <x-input-error :messages="$errors->get('barangay')" class="mt-2" />
    </div>

      <!-- Address -->
      <div class="col-md-6">
        <label for="municipality" class="form-label">Municipality:</label>
        <input id="municipality" class="form-control" type="text" name="municipality" value="{{ old('municipality') }}" required autofocus autocomplete="municipality" />
        <x-input-error :messages="$errors->get('municipality')" class="mt-2" />
    </div>

      <!-- Address -->
      <div class="col-md-6">
        <label for="city" class="form-label">City:</label>
        <input id="city" class="form-control" type="text" name="city" value="{{ old('city') }}" required autofocus autocomplete="city" />
        <x-input-error :messages="$errors->get('city')" class="mt-2" />
    </div>

     <!-- Address -->
     <div class="col-md-6">
        <label for="gender" class="form-label">Gender:</label>
        <input id="gender" class="form-control" type="text" name="gender" value="{{ old('gender') }}" required autofocus autocomplete="gender" />
        <x-input-error :messages="$errors->get('gender')" class="mt-2" />
    </div>


     <!-- Address -->
     <div class="col-md-6">
        <label for="phonenumber" class="form-label">Contact Number:</label>
        <input id="phonenumber" class="form-control" type="text" name="phonenumber" value="{{ old('phonenumber') }}" required autofocus autocomplete="phonenumber" />
        <x-input-error :messages="$errors->get('phonenumber')" class="mt-2" />
    </div>
     

 
    <!-- Email Address -->
    <div class="col-md-6">
        <label for="email" class="form-label">Email</label>
        <input id="email" class="form-control" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" />
    </div>


    <!-- Password -->
<div class="col-md-6">
    <label for="password" class="form-label">Password</label>
    <div class="input-group">
        <input id="password" class="form-control" type="password" name="password" readonly required autocomplete="new-password" />
        <button type="button" class="btn btn-secondary" id="generatePassword">Generate</button>
    </div>
    <x-input-error :messages="$errors->get('password')" class="mt-2" />
</div>


 
<div class="col-md-6" id="confirmPasswordWrapper" style="display: none;">
    <label for="password_confirmation" class="form-label">Confirm Password</label>
    <div class="input-group">
        <input id="password_confirmation" class="form-control" type="text" name="password_confirmation" required autocomplete="new-password" />
        <button type="button" class="btn btn-primary" id="confirmPassword">Confirm</button>
    </div>
    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
</div>

<div class="modal-footer" style="padding-top: 26px;">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    <button type="submit" class="btn btn-primary">Add Department</button>
</div>

</form>

                </div>
            </div>
        </div>
    </div>

    <script>
    // Function to generate random password
    function generatePassword() {
        const length = 10; // Length of the generated password
        const charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+<>?"; // Characters to include in the password
        let password = "";
        for (let i = 0; i < length; ++i) {
            const randomIndex = Math.floor(Math.random() * charset.length);
            password += charset[randomIndex];
        }
        return password;
    }

    // Event listener for the generate password button
    document.getElementById("generatePassword").addEventListener("click", function() {
        const passwordField = document.getElementById("password");
        const confirmPasswordField = document.getElementById("password_confirmation");
        const generatedPassword = generatePassword();
        passwordField.value = generatedPassword;
        confirmPasswordField.value = generatedPassword;
        passwordField.removeAttribute("readonly"); // Make password field editable
        passwordField.focus(); // Set focus to the password field
    });

    // Event listener for confirming the password
    document.getElementById("confirmPassword").addEventListener("click", function() {
        const passwordField = document.getElementById("password");
        passwordField.setAttribute("readonly", true); // Make password field readonly again
    });
</script>






    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.10/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.10/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function() {
            $('#tenantsTable').DataTable();
        });
    </script>




</x-newuser-layout>