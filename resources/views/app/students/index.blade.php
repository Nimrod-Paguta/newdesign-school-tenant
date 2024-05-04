<x-user-layout>
<center><h3>Students:</h3></center>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Add Student
</button>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Student</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('students.store') }}" method="POST">
                    @csrf

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="Student_no">Student Number:</label>
                                <input id="Student_no" class="form-control" type="text" name="Student_no" value="{{ old('Student_no') }}" required autofocus autocomplete="off" />
                                <x-input-error :messages="$errors->get('Student_no')" class="mt-2" />
                            </div>

                            <div class="form-group">
                                <label for="first_name">First Name:</label>
                                <input id="first_name" class="form-control" type="text" name="first_name" value="{{ old('first_name') }}" required autofocus autocomplete="name" />
                                <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
                            </div>

                            <div class="form-group">
                                <label for="middle_name">Middle Name:</label>
                                <input id="middle_name" class="form-control" type="text" name="middle_name" value="{{ old('middle_name') }}" required autofocus autocomplete="name" />
                                <x-input-error :messages="$errors->get('middle_name')" class="mt-2" />
                            </div>

                            <div class="form-group">
                                <label for="last_name">Last Name:</label>
                                <input id="last_name" class="form-control" type="text" name="last_name" value="{{ old('last_name') }}" required autofocus autocomplete="lastname" />
                                <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="department">Department:</label>
                                <input id="department" class="form-control" type="text" name="department" value="{{ auth()->user()->name }}" readonly required />
                                <x-input-error :messages="$errors->get('department')" class="mt-2" />
                            </div>

                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input id="email" class="form-control" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="email" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            <div class="form-group">
                                <label for="date_of_birth">Date of Birth:</label>
                                <input id="date_of_birth" class="form-control" type="date" name="date_of_birth" value="{{ old('date_of_birth') }}" required autofocus autocomplete="date_of_birth" />
                                <x-input-error :messages="$errors->get('date_of_birth')" class="mt-2" />
                            </div>

                            <div class="form-group">
                                <label for="age">Age:</label>
                                <input id="age" class="form-control" type="number" name="age" value="{{ old('age') }}" required autofocus autocomplete="age" />
                                <x-input-error :messages="$errors->get('age')" class="mt-2" />
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="mobile_no">Mobile No:</label>
                                <input id="mobile_no" class="form-control" type="tel" name="mobile_no" value="{{ old('mobile_no') }}" required autofocus autocomplete="tel" />
                                <x-input-error :messages="$errors->get('mobile_no')" class="mt-2" />
                            </div>

                            <div class="form-group">
                                <label for="year">Year:</label>
                                <input id="year" class="form-control" type="text" name="year" value="{{ old('year') }}" required autofocus />
                                <x-input-error :messages="$errors->get('year')" class="mt-2" />
                            </div>

                            <div class="form-group">
                                <label for="status">Status:</label>
                                <input id="status" class="form-control" type="text" name="status" value="{{ old('status') }}" required autofocus />
                                <x-input-error :messages="$errors->get('status')" class="mt-2" />
                            </div>
                        </div>

                        <div class="col-md-12">
                            <label for="domain_name" class="form-label"><p><center>Address:</center></p></label>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="street">Street:</label>
                                <input id="street" class="form-control" type="text" name="street" value="{{ old('street') }}" required autofocus />
                                <x-input-error :messages="$errors->get('street')" class="mt-2" />
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="barangay">Barangay:</label>
                                <input id="barangay" class="form-control" type="text" name="barangay" value="{{ old('barangay') }}" required autofocus />
                                <x-input-error :messages="$errors->get('barangay')" class="mt-2" />
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="municipality">Municipality:</label>
                                <input id="municipality" class="form-control" type="text" name="municipality" value="{{ old('municipality') }}" required autofocus />
                                <x-input-error :messages="$errors->get('municipality')" class="mt-2" />
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="province">Province:</label>
                                <input id="province" class="form-control" type="text" name="province" value="{{ old('province') }}" required autofocus />
                                <x-input-error :messages="$errors->get('province')" class="mt-2" />
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{ route('students.index') }}" class="btn btn-secondary">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



@role('admin')

<table  id="yourDataTableID" class="table table-striped" style="width:100%" >
  <thead  class="table-header">
    <tr>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Age</th>
      <th>Email</th>
      <th>Department</th>
      <th>Date of Birth</th>
    
      <th>Address</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    @forelse ($students as $student)
      <tr>
        <td>{{ $student->first_name }}</td>
        <td>{{ $student->last_name }}</td>
        <td>{{ $student->age }}</td>
        <td>{{ $student->email }}</td>
        <td>{{ $student->department }}</td>
        <td>{{ $student->date_of_birth }}</td>
        <td>{{ $student->address }}</td>
       
        <td>
          <a href="{{ route('students.edit', $student->id) }}"><button type="button" class="btn btn-primary">Edit</button></a>
          <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
          </form>
        </td>
      </tr>
    @empty
    
    @endforelse
  </tbody>
</table>

<!-- <tr>
        <td colspan="7">No students found</td>
      </tr> -->

@endrole


@role('department')
    @if(auth()->user()->hasRole('department'))
        <table  id="yourDataTableID" class="table table-striped" style="width:100%">
            <thead class="table-header">
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Age</th>
                    <th>Email</th>
                    <th>Date of Birth</th>
                    <th>Address</th>
                    <th>Department</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($students as $student)
                    @if($student->department === auth()->user()->name)
                        <tr>
                            <td>{{ $student->first_name }}</td>
                            <td>{{ $student->last_name }}</td>
                            <td>{{ $student->age }}</td>
                            <td>{{ $student->email }}</td>
                            <td>{{ $student->date_of_birth }}</td>
                            <td>{{ $student->address }}</td>
                            <td>{{ $student->department }}</td>
                            <td>
                                <a href="{{ route('students.edit', $student->id) }}"><button type="button" class="btn btn-primary">Edit</button></a>
                                <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endif
                @empty
                    <!-- <tr>
                        <td colspan="7">No students found</td>
                    </tr> -->
                @endforelse
            </tbody>
        </table>
    @endif
@endrole



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

