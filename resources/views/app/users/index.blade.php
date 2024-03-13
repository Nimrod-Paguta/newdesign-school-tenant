<x-user-layout>
   
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('users') }}
            <x-btn-link class="ml-4 float-right" href="{{ route('users.create')}}">
                        Add Users</x-btn-link>  
        </h2>
   

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900"> 
                    
                <div class="relative over-flow-x-auto">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Email
                </th>
                <th scope="col" class="px-6 py-3">
                    Role
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user) 
            <tr>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="flex items-center">
                       
                        <div class="ml-4">
                            <!-- Add your product name here -->
                            <div class="text-sm font-medium text-gray-900">
                                {{$user->name}}
                            </div>
                        </div>
                    </div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <!-- Add your product color here -->
                    <span class="text-gray-500">
                    {{$user->email}}
                    </span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <!-- Add your product category here -->
                    <span class="text-gray-500">
                        @foreach($user->roles as $role)
                        {{ $role->name }}{{ $loop->last ? '':',' }}
                        @endforeach
                            
                    </span> 
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <!-- Add your product price here -->
                    <span class="text-gray-900">
                    <x-btn-link href="{{ route('users.edit',$user->id)}}">Edit</x-btn-link>  
                    </span>
                </td>
            </tr>
            <!-- Add more rows with your data as needed -->
            @endforeach
        </tbody>
    </table>
</div>

                   
                </div> 
            </div>
        </div>
    </div>
</x-user-layout>



<!-- 47:03 -->