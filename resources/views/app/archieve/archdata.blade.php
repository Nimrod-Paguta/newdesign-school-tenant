<x-user-layout>

<a href="/teacher" class="btn btn-success" id="registerReport" style="margin-right: 10px; width: 100px;">Back</a>

        <h5>Archived Data:</h5>
        <table id="yourDataTableID" class="table table-striped" style="width:100%">
            <thead class="table-header">
                <tr>
                    <th>Id</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Barangay</th>
                    <th>City</th>
                   <td>Action</td>
                </tr>
            </thead>
            <tbody>
            @foreach($archivedTeachers as $teacher)
                <tr>
                    <td>{{ $teacher->id }}</td>
                    <td>{{ explode(' ', $teacher->created_at)[0] }}</td>
                    <td>{{ explode(' ', $teacher->created_at)[1] }}</td>
                    <td>{{ $teacher->barangay }}</td>
                    <td>{{ $teacher->city }}</td>
                    <td>
                    <form method="POST" action="{{ route('teacher.restore', ['id' => $teacher->id]) }}" style="display:inline;">
                            @csrf
                            @method('GET')
                            <button type="submit" class="btn btn-warning actions-buttons btn-sm">Restore</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            


                <!-- Add other rows as needed -->
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
