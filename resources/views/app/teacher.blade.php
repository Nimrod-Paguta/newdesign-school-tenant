<x-user-layout>

<h1>Teacher</h1>

<x-btn-link href="{{ route('users.index')}}">Users</x-btn-link> 

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Add Department
</button>
<x-input-error :messages="$errors->get('email')" class="mt-2" />
<!-- 
<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                            
                            <form method="POST" action="{{ route('teacher.store') }}">
                    @csrf

                    
                    <div >
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                   
                    <div class="mt-4">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                   
                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Password')" />

                        <x-text-input id="password" class="block mt-1 w-full"
                                        type="password"
                                        name="password"
                                        required autocomplete="new-password" />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                 
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




 -->






        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document"> <!-- Change modal-dialog class to adjust width (e.g., modal-sm, modal-lg, modal-xl) -->
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">



     
                <form method="POST" action="{{ route('teacher.store') }}" class="row g-3">
                    
                @csrf

                <!-- Name -->
                <div class="col-md-6">
                    <label for="name" class="form-label">Name</label>
                    <input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    <!-- Add error messages here if necessary -->
                </div>

                <!-- Email Address -->
                <div class="col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input id="email" class="form-control" type="email" name="email" :value="old('email')" required autocomplete="username" />
                    <!-- Add error messages here if necessary -->
                </div>

                <!-- Password -->
                <div class="col-md-6">
                    <label for="password" class="form-label">Password</label>
                    <input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" />
                    <!-- Add error messages here if necessary -->
                </div>

                <!-- Confirm Password -->
                <div class="col-md-6">
                    <label for="password_confirmation" class="form-label">Confirm Password</label>
                    <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
                    <!-- Add error messages here if necessary -->
                </div>
          



                </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" >Add Teacher</button>
        </form>
      </div>
    </div>
  </div>
</div>

    
















    <h1>List of Teachers</h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach($teachers as $teacher)
                <tr>
                    <td>{{ $teacher->name }}</td>
                    <td>{{ $teacher->email }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>










             <!-- Custom styles for this template-->
    <link href="{{ asset('css/sidebar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/noanimation.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
    </div>

</x-user-layout>