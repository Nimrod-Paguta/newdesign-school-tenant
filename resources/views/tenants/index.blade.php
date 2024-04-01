<x-newuser-layout>



    <style>
        /* Add some basic styling to your table for better design */
        #tenantsTable {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        #tenantsTable th,
        #tenantsTable td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        #tenantsTable th {
            background-color: #f2f2f2;
        }

        .btn-danger {
            background-color: #dc3545;
            color: #fff;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
        }

        .btn-edit {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
        }
    </style>

<h1>Total Tenants: {{ $totalTenants }}</h1>



    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Add Department
    </button>
    @if ($errors->has('email'))
    <div class="alert alert-danger mt-2" role="alert">
        {{ $errors->first('email') }}
    </div>
    @endif




    <table id="tenantsTable">
        <thead>
            <tr>
                <th scope="col" class="px-6 py-3">Name</th>
                <th scope="col" class="px-6 py-3">Email</th>
                <th scope="col" class="px-6 py-3">Domain</th>
                <th scope="col" class="px-6 py-3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tenants as $tenant)
            <tr>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="flex items-center">
                        <div class="ml-4">
                            <div class="text-sm font-medium text-gray-900">
                                {{$tenant->name}}
                            </div>
                        </div>
                    </div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <span class="text-blue-500">
                        {{$tenant->email}}
                    </span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <span class="text-green-500">
                        @foreach($tenant->domains as $domain)
                        {{ $domain->domain }}{{ $loop->last ? '' : ',' }}
                        @endforeach
                    </span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <form action="{{ route('tenants.destroy', $tenant->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger btn-sm" value="Delete" />
                    </form>

                    <form action="{{ route('tenants.edit', $tenant->id) }}" method="get">
                        @csrf
                        <button type="submit" class="btn btn-edit btn-sm">Edit</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>




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




                <form method="POST" action="{{ route('tenants.store') }}" class="row g-3">
    @csrf
    <!-- Name -->
    <div class="col-md-6">
        <label for="name" class="form-label">Department Name:</label>
        <input id="name" class="form-control" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" />
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>

    <!-- Domain Name -->
    <div class="col-md-6">
        <label for="domain_name" class="form-label">Department Domain:</label>
        <input id="domain_name" class="form-control" type="text" name="domain_name" value="{{ old('domain_name') }}" required autofocus autocomplete="domain_name" />
        <x-input-error :messages="$errors->get('domain_name')" class="mt-2" />
    </div>




        <!-- Domain Name -->
        <div class="col-md-10">
        <label for="domain_name" class="form-label"><p><center>Admin for Department:</center></p></label>
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
        <label for="adminaddress" class="form-label">Address:</label>
        <input id="adminaddress" class="form-control" type="text" name="adminaddress" value="{{ old('adminaddress') }}" required autofocus autocomplete="adminaddress" />
        <x-input-error :messages="$errors->get('adminaddress')" class="mt-2" />
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
        <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
        <button type="button" class="btn btn-primary" id="confirmPassword">Confirm</button>
    </div>
    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
</div>


    <div class="modal-footer">
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