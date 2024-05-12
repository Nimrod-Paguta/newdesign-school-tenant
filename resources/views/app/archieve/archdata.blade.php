<x-user-layout>

<a href="/teacher" class="btn btn-success" id="registerReport" style="margin-right: 10px; width: 100px;">Back</a>

        <h5>Archived Data:</h5>
        <table id="yourDataTableID" class="table table-striped" style="width:100%">
            <thead class="table-header">
                <tr>
                <th>Profile:</th>
                    <th>Instrutor Id:</th>
                    <th>Name:</th>
                    <th>Address:</th>
                    <th>Date</th>
                    <th>Time</th>
                   
                  <th>Action:</th>
                </tr>
            </thead>
            <tbody>
            @foreach($archivedTeachers as $teacher)
                <tr>
                    <td>
                    <center> <img src="{{ url($teacher->logo) }}" alt="Img" style="border-radius: 50%; width: 70px; height: 70px;"></center>
                    </td>
                    <td>{{ $teacher->instructor_id }}</td>
                    <td>{{ $teacher->first_name }} {{ $teacher->middle_name }} {{ $teacher->last_name }}</td>
                    <td>{{ $teacher->street }} {{ $teacher->barangay }} {{ $teacher->municipality }}</td>
                    <td>{{ explode(' ', $teacher->deleted_at)[0] }}</td>
                    <td>{{ explode(' ', $teacher->created_at)[1] }}</td>
                    <td>
                    <form method="POST" action="{{ route('teacher.restore', ['id' => $teacher->id]) }}" style="display:inline; ">
                            @csrf
                            @method('GET')
                            <button type="submit" style="width: 100%;" class="btn btn-warning actions-buttons btn-sm">Restore</button>
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
