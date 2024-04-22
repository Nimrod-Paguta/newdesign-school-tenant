<x-user-layout>
   
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('users') }}
            <x-btn-link class="ml-4 float-right" href="{{ route('users.create')}}">
                        Add Users</x-btn-link>  
        </h2>
   

    <table  id="yourDataTableID" class="table table-striped" style="width:100%">
        <thead  class="table-header">
            <tr>
                <th >Name</th>
                <th >Email</th>
                <th > Role</th>
                <th >Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user) 
            <tr>
                <td >{{$user->name}} </td>
                <td >{{$user->email}}</td>
                <td > @foreach($user->roles as $role)
                        {{ $role->name }}{{ $loop->last ? '':',' }}
                        @endforeach </td>
                <td > <x-btn-link href="{{ route('users.edit',$user->id)}}">Edit</x-btn-link>  </td>
            </tr>
          
            @endforeach
        </tbody>
    </table>


        
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

    <script>
        $(document).ready(function() {
            $('#yourDataTableID').DataTable();
        });
    </script>

</x-user-layout>



<!-- 47:03 -->