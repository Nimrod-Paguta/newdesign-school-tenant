<x-user-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('users.store') }}">
                        @csrf

                        <!-- firstname -->
                        <div class="col-md-6">
                            <label for="depadminfirstname" class="form-label">First Name:</label>
                            <input id="depadminfirstname" class="form-control" type="text" name="depadminfirstname" value="{{ old('depadminfirstname') }}" required autofocus autocomplete="depadminfirstname" />
                            <x-input-error :messages="$errors->get('depadminfirstname')" class="mt-2" />
                        </div>

                        <!-- middlename -->
                        <div class="col-md-6">
                            <label for="depadminmiddlename" class="form-label">Middle Name:</label>
                            <input id="depadminmiddlename" class="form-control" type="text" name="depadminmiddlename" value="{{ old('depadminmiddlename') }}" required autofocus autocomplete="depadminmiddlename" />
                            <x-input-error :messages="$errors->get('depadminmiddlename')" class="mt-2" />
                        </div>

                        <!-- lastname -->
                        <div class="col-md-6">
                            <label for="depadminlastname" class="form-label">Last Name:</label>
                            <input id="depadminlastname" class="form-control" type="text" name="depadminlastname" value="{{ old('depadminlastname') }}" required autofocus autocomplete="depadminlastname" />
                            <x-input-error :messages="$errors->get('depadminlastname')" class="mt-2" />
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

                        <!-- Name -->
                        <div>
                            <x-input-label for="name" :value="__('Name')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <!-- Email Address -->
                        <div class="mt-4">
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <!-- Password -->
                        <div class="mt-4">
                            <x-input-label for="password" :value="__('Password')" />

                            <x-text-input id="password" class="block mt-1 w-full"
                                            type="password"
                                            name="password"
                                            required autocomplete="new-password" />

                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <!-- Confirm Password -->
                        <div class="mt-4">
                            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                            type="password"
                                            name="password_confirmation" required autocomplete="new-password" />

                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ms-4">
                                {{ __('Create') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
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
