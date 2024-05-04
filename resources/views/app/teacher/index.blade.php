<x-user-layout>
<center><h3>Instructors:</h3></center>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Add Instructors
</button>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Instructors</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('teacher.store') }}" method="POST">
                    @csrf

                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="instructor_id">Instructor ID:</label>
                            <input id="instructor_id" class="form-control" type="text" name="instructor_id" value="{{ old('instructor_id') }}" required autofocus autocomplete="off" />
                            <x-input-error :messages="$errors->get('instructor_id')" class="mt-2" />
                        </div>

                        <div class="form-group col-md-4">
                            <label for="first_name">First Name:</label>
                            <input id="first_name" class="form-control" type="text" name="first_name" value="{{ old('first_name') }}" required autofocus autocomplete="name" />
                            <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
                        </div>

                        <div class="form-group col-md-4">
                            <label for="middle_name">Middle Name:</label>
                            <input id="middle_name" class="form-control" type="text" name="middle_name" value="{{ old('middle_name') }}" autofocus autocomplete="name" />
                            <x-input-error :messages="$errors->get('middle_name')" class="mt-2" />
                        </div>

                        <div class="form-group col-md-4">
                            <label for="last_name">Last Name:</label>
                            <input id="last_name" class="form-control" type="text" name="last_name" value="{{ old('last_name') }}" required autofocus autocomplete="lastname" />
                            <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
                        </div>

                        <div class="form-group col-md-8">
                            <label for="email">Email:</label>
                            <input id="email" class="form-control" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="email" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <div class="form-group col-md-6">
                            <label for="status">Status:</label>
                            <select id="status" class="form-control" name="status" required>
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                            <x-input-error :messages="$errors->get('status')" class="mt-2" />
                        </div>

                        <div class="form-group col-md-6">
                            <label for="date_of_birth">Date of Birth:</label>
                            <input id="date_of_birth" class="form-control" type="date" name="date_of_birth" value="{{ old('date_of_birth') }}" required autofocus autocomplete="date_of_birth" />
                            <x-input-error :messages="$errors->get('date_of_birth')" class="mt-2" />
                        </div>

                        <div class="form-group col-md-6">
                            <label for="contact_number">Contact Number:</label>
                            <input id="contact_number" class="form-control" type="text" name="contact_number" value="{{ old('contact_number') }}" required autofocus autocomplete="tel" />
                            <x-input-error :messages="$errors->get('contact_number')" class="mt-2" />
                        </div>
                        <div class="form-group col-md-6">
                            <label for="department">Department:</label>
                            <input id="department" class="form-control" type="text" name="department" value="{{ auth()->user()->name }}" readonly required />
                            <x-input-error :messages="$errors->get('department')" class="mt-2" />
                        </div>

                        <!-- Address Section -->
                        <div class="col-md-12">
                            <h5 class="mt-4">Address</h5>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="street">Street:</label>
                            <input id="street" class="form-control" type="text" name="street" value="{{ old('street') }}" required autofocus autocomplete="street-address" />
                            <x-input-error :messages="$errors->get('street')" class="mt-2" />
                        </div>

                        <div class="form-group col-md-4">
                            <label for="barangay">Barangay:</label>
                            <input id="barangay" class="form-control" type="text" name="barangay" value="{{ old('barangay') }}" required autofocus autocomplete="address-level2" />
                            <x-input-error :messages="$errors->get('barangay')" class="mt-2" />
                        </div>

                        <div class="form-group col-md-4">
                            <label for="municipality">Municipality:</label>
                            <input id="municipality" class="form-control" type="text" name="municipality" value="{{ old('municipality') }}" required autofocus autocomplete="address-level2" />
                            <x-input-error :messages="$errors->get('municipality')" class="mt-2" />
                        </div>

                        <div class="form-group col-md-4">
                            <label for="province">Province:</label>
                            <input id="province" class="form-control" type="text" name="province" value="{{ old('province') }}" required autofocus autocomplete="address-level1" />
                            <x-input-error :messages="$errors->get('province')" class="mt-2" />
                        </div>



                    </div>



                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{ route('teacher.index') }}" class="btn btn-secondary">Back</a>
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
    @forelse ($teachers as $teacher)
      <tr>
        <td>{{ $teacher->first_name }}</td>
        <td>{{ $teacher->last_name }}</td>
        <td>{{ $teacher->age }}</td>
        <td>{{ $teacher->email }}</td>
        <td>{{ $teacher->department }}</td>
        <td>{{ $teacher->date_of_birth }}</td>
        <td>{{ $teacher->address }}</td>
        <td>
          <a href="{{ route('teacher.edit', $teacher->id) }}"><button type="button" class="btn btn-primary">Edit</button></a>
          <form action="{{ route('teacher.destroy', $teacher->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
          </form>
        </td>
      </tr>
    @empty
      <!-- <tr>
        <td colspan="7">No teacher found</td>
      </tr> -->
    @endforelse
  </tbody>
</table>
@endrole




@role('department')
    @if(auth()->user()->hasRole('department'))
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
    @forelse ($teachers as $teacher)
    @if($teacher->department === auth()->user()->name)
      <tr>
        <td>{{ $teacher->first_name }}</td>
        <td>{{ $teacher->last_name }}</td>
        <td>{{ $teacher->age }}</td>
        <td>{{ $teacher->email }}</td>
        <td>{{ $teacher->department }}</td>
        <td>{{ $teacher->date_of_birth }}</td>
        <td>{{ $teacher->address }}</td>
        <td>
          <a href="{{ route('teacher.edit', $teacher->id) }}"><button type="button" class="btn btn-primary">Edit</button></a>
          <form action="{{ route('teacher.destroy', $teacher->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
          </form>
        </td>
      </tr>
      @endif
    @empty
      <!-- <tr>
        <td colspan="7">No teacher found</td>
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