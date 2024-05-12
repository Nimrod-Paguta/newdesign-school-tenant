<x-newuser-layout>

<h1>Admin List</h1>


    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Add Department
</button>



    


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



     
                <form action="{{ route('admin.store') }}" method="POST" class="row g-3">
                    
                    @csrf

                <div class="col-md-6">
                    <label for="firstname" class="form-label">Firstname:</label>
                    <input type="text" class="form-control" id="firstname" name="firstname" required>
                </div>

                <div class="col-md-6">
                    <label for="middlename" class="form-label">MiddleName:</label>
                    <input type="text" class="form-control" id="middlename" name="middlename" required>
                </div>

                <div class="col-md-6">
                    <label for="lastname" class="form-label">Lastname:</label>
                    <input type="text" class="form-control" id="lastname" name="lastname" required>
                </div>

                <div class="col-md-6">
                    <label for="contactnumber" class="form-label">Contact Number:</label>
                    <input type="text" class="form-control" id="contactnumber" name="contactnumber" required>
                </div>

                <div class="col-md-6">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add Admin</button>
        </form>
      </div>
    </div>
  </div>
</div>



    
    <table id="yourDataTableID" class="table table-striped" style="width:100%">
        <thead class="table-header">
            <tr>
                <th>First Name:</th>
                <th>Middle Name:</th>
                <th>Last Name:</th>
                <th>Street:</th>
                <th>Barangay:</th>
                <th>Municipality</th>
                <th>City</th>
                <th>Email</th>
                <th>Action:</th>
            </tr>
        </thead>
        <tbody>
            @foreach($admins as $student)
                <tr>
                    <td>{{ $student->adminfirstname }}</td>
                    <td>{{ $student->adminmiddlename }}</td>
                    <td>{{ $student->adminlastname }}</td>
                    <td>{{ $student->street }}</td>
                    <td> {{ $student->barangay }}</td>
                    <td>{{ $student->municipality }}</td>
                    <td>{{ $student->city }}</td>
                    <td>{{ $student->email }}</td>
                    <td>
                    <a href="{{ route('admin.view', ['id' => $student->id]) }}">
                    <button type="button" class="btn btn-secondary actions-buttons">View</button>
                    </a>
                    </td>
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

</x-newuser-layout>
