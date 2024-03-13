<x-user-layout>

<h1>Teacher</h1>

<x-btn-link href="{{ route('users.index')}}">Users</x-btn-link> 

<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                            
                            <form method="POST" action="{{ route('teacher.store') }}">
                    @csrf

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



        @foreach($tenants as $tenant)
<tr>
    <td class="px-6 py-4 whitespace-nowrap">
        <div class="flex items-center">
            <div class="ml-4">
                <div class="text-sm font-medium text-gray-900">
                    {{ $tenant->name }}
                </div>
            </div>
        </div>
    </td>
    <td class="px-6 py-4 whitespace-nowrap">
        <span class="text-blue-500">
            {{ $tenant->email }}
        </span>
    </td>
    <!-- Assuming domains relationship is defined -->
    <td class="px-6 py-4 whitespace-nowrap">
        <span class="text-green-500">
            @foreach($tenant->domains as $domain)
                {{ $domain->domain }}{{ $loop->last ? '' : ',' }}
            @endforeach
        </span>
    </td>
    <!-- Actions for each tenant, e.g., edit, delete -->
    <td class="px-6 py-4 whitespace-nowrap">
        <form action="{{ route('tenants.destroy', $tenant->id) }}" method="post">
            @csrf
            @method('DELETE') 
            <input type="submit" class="btn btn-danger btn-sm" value="Delete"/>
        </form>

        <form action="{{ route('tenants.edit', $tenant->id) }}" method="get">
            @csrf
            <button type="submit" class="btn btn-edit btn-sm">Edit</button>
        </form>
    </td>
</tr>
@endforeach




             <!-- Custom styles for this template-->
    <link href="{{ asset('css/sidebar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/noanimation.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
    </div>

</x-user-layout>