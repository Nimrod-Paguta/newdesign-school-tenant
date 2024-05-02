<x-user-layout>
    <h1>Department Admins</h1>

    <table  id="yourDataTableID" class="table table-striped" style="width:100%">
        <thead class="table-header">
            <tr>
                <th>ID</th>
                <th>First Name:</th>
               <th>Address:</th>
                <th>Email</th>
                <!-- Add other column headings here -->
            </tr>
        </thead>
        <tbody>
            @foreach($departmentadmins as $admin)
                <tr>
                    <td>{{ $admin->departmentadmin }}</td>
                    <td>{{ $admin->depadminfirstname }} {{ $admin->depadminmiddlename }} {{ $admin->depadminlastname }}</td>
                    <td>{{ $admin->street }} {{ $admin->barangay }} {{ $admin->municipality }} {{ $admin->city }}</td>
                    <td>{{ $admin->email }}</td>
                    <!-- Add other table data columns here --> 
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
