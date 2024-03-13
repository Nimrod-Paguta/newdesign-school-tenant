<x-user-layout>

{{ __("You're logged in!") }}

@role('admin') 

<x-btn-link href="{{ route('users.index')}}">Users</x-btn-link> 

@endrole


</x-user-layout>

