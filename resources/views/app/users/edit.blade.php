<x-user-layout>
<x-slot name="header">
    <h2 class="font-semibold text-3xl text-gray-800 leading-tight">
        {{ __('Edit User') }}
    </h2>
</x-slot>
<a href="/users"> back </a>

        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <div class="p-8">
                <form method="POST" action="{{ route('users.update', $user->id) }}">
                    @csrf
                    @method('put') 

                    <!-- Name -->
                    <div class="mb-6">
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input id="name" class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50" type="text" name="name" :value="old('name',$user->name)" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <!-- Email Address -->
                    <div class="mb-6">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50" type="email" name="email" :value="old('email',$user->email)" required autocomplete="email" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Roles -->
                    <div class="mb-6">
                        <x-input-label for="roles" :value="__('Roles')" /> 
                        <select multiple class="block w-full rounded-md border-gray-300 shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50" name="roles[]">
                            @foreach($roles as $role)
                                <option value="{{ $role->id }}" @if(in_array($role->id, $user->roles->pluck('id')->toArray())) selected @endif>{{ $role->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Update Button -->
                    <div class="flex justify-end">
                        <x-primary-button>
                            {{ __('Update') }}
                        </x-primary-button>
                    </div>
                </form>
            </div> 
        </div>


</x-user-layout>
