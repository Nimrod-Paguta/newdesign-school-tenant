<x-user-layout>
<center><h3>Instructors:</h3></center>

@role('department')
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#teachermodal">
    Add Instructors
</button>
@endrole
<button type="button" class="btn btn-primary" onclick="window.location.href='/archived'">
    Archived
</button>


<div class="modal fade" id="teachermodal" tabindex="-1" role="dialog" aria-labelledby="teachermodalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="teachermodalLabel">Add Instructors</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('teacher.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="instructor_id">Instructor ID:</label>
                            <input id="instructor_id" class="form-control" type="number" name="instructor_id" value="{{ old('instructor_id') }}" required autofocus autocomplete="off" />
                            <x-input-error :messages="$errors->get('instructor_id')" class="mt-2" />
                        </div>

                        <div class="form-group col-md-">
                      <label for="logo">Upload Logo:</label>
                      <input id="logo" class="form-control" type="file" name="logo" value="{{ old('logo') }}" required autofocus />
                      <x-input-error :messages="$errors->get('logo')" class="mt-2" />
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

                        <div class="form-group col-md-4">
                          <label for="gender">Gender:</label>
                          <select id="gender" class="form-control" name="gender" required autofocus autocomplete="lastname">
                              <option value="female" >Female</option>
                              <option value="male" >Male</option>
                          </select>
                          <x-input-error :messages="$errors->get('gender')" class="mt-2" />
                      </div>


                        <div class="form-group col-md-4">
                            <label for="age">Age:</label>
                            <input id="age" class="form-control" type="number" name="age" value="{{ old('age') }}" required autofocus autocomplete="lastname" />
                            <x-input-error :messages="$errors->get('age')" class="mt-2" />
                        </div>


                        <div class="form-group col-md-8">
                            <label for="email">Email:</label>
                            <input id="email" class="form-control" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="email" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <div class="form-group col-md-6">
                            <label for="status">Status:</label>
                            <select id="status" class="form-control" name="status" required>
                                <option value="Regular">Regular</option>
                                <option value="Part Time">Part Time</option>
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
                                <input id="contact_number" class="form-control" type="number" name="contact_number" value="{{ old('contact_number') }}" required autofocus oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 11)" />
                                <x-input-error :messages="$errors->get('contact_number')" class="mt-2" />
                            </div>



                        <div class="form-group col-md-6">
                            <label for="department">Department:</label>
                            <input id="department" class="form-control" type="text" name="department" value="{{ auth()->user()->department_id }}" readonly required />
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

  <table id="yourDataTableID" class="table table-striped" style="width:100%">
    <thead class="table-header">
      <tr>
      <th><center>Logo:</center></th>
        <th>Instructor Id:</th>
        <th>First Name:</th>
        <th>Last Name:</th>
        <th>Email:</th>
        <th><center>Actions:</center></th>
      </tr>
    </thead>
    <tbody>
      @forelse ($teachers as $teacher)
      <tr>
      <td>
          <center><img src="{{ url($teacher->logo) }}" alt="Img" style="border-radius: 50%; width: 70px; height: 70px;"></center>
        </td>
        <td><h5>{{ $teacher->instructor_id }}</h5></td>
        <td>{{ $teacher->first_name }}</td>
        <td>{{ $teacher->last_name }}</td>
        <td>{{ $teacher->email }}</td>
        <td>
          <center>
            <a href="{{ route('teacher.view', ['id' => $teacher->id]) }}">
              <button type="button" class="btn btn-secondary actions-buttons">View</button>
            </a>
            <!-- <form action="{{ route('teacher.delete', $teacher->id) }}" method="POST" style="display:inline;">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger">Archive</button>
            </form>
            <a class="ahhh" href="{{ route('teacher.edit', ['id' => $teacher->id]) }}">
              <button type="button" class="btn btn-warning actions-buttons">Edit</button>
            </a> -->
          </center>
        </td>
      </tr>
      @empty
      <tr>
        <td colspan="6" style="text-align: center;">No data available</td>
      </tr>
      @endforelse
    </tbody>
  </table>
  @endrole





@role('department')
    @if(auth()->user()->hasRole('department'))
<table  id="yourDataTableID" class="table table-striped" style="width:100%" >
  <thead  class="table-header">
    <tr>
    <th>Instructor Id:</th>
    <th><center>logo:</center></th>
      <th>First Name:</th>
      <th>Last Name:</th>
      <th>Email:</th>
      <th><center>Actions:</center></th>
    </tr>
  </thead>
  <tbody>
    @forelse ($teachers as $teacher)
    @if($teacher->department === auth()->user()->department_id)
      <tr>
      <td><h6>{{ $teacher->instructor_id }}</h6></td>
      <td>
       <center> <img src="{{ url($teacher->logo) }}" alt="Img" style="border-radius: 50%; width: 70px; height: 70px;"></center>
        </td>
        <td>{{ $teacher->first_name }}</td>
        <td>{{ $teacher->last_name }}</td>
        <td>{{ $teacher->email }}</td>
        <td>
     <center>
     <a href="{{ route('teacher.view', ['id' => $teacher->id]) }}">
                                <button type="submit" class="btn btn-secondary actions-buttons" style="width: auto;">View</button>
          </a>
        
          <form action="{{ route('teacher.delete', $teacher->id) }}"  method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" style="width: auto;" class="btn btn-danger">archive</button>
          </form>

          <a class="ahhh"  href="{{ route('teacher.edit', ['id' => $teacher->id]) }}"><button type="submit" style="width: auto;" class="btn btn-warning actions-buttons">Edit</button></a>
     </center>
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