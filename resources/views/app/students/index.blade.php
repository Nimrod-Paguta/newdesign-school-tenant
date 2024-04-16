<x-user-layout>
<h1>hi im nimrod </h1>

<form action="{{ route('students.store') }}" method="POST">
    @csrf

    <label for="name">First Name:</label>
    <input type="text" name="first_name" required>

    <label for="lastname">Last Name:</label>
    <input type="text" name="last_name" required>

    <label for="age">Age:</label>
    <input type="number" name="age" required>

    <label for="email">Email:</label>
    <input type="email" name="email" required>

    <label for="date_of_birth">Date of Birth:</label>
<input type="date" name="date_of_birth" required>

    <label for="address">Address:</label>
    <input type="text" name="address" required>

    <button type="submit">Submit</button>
    <a class="nav-link" href="{{ route('students.index') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Back</span>
    </a>
</form>


<table class="table">
  <thead>
    <tr>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Age</th>
      <th>Email</th>
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
      <tr>
        <td colspan="7">No students found</td>
      </tr>
    @endforelse
  </tbody>
</table>

</x-user-layout>

