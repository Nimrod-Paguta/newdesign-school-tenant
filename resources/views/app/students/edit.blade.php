<x-user-layout>
<h1>hi im edit</h1>
<td>{{ $students->first_name }} {{ $students->last_name }}</td>

<form action="{{ route('students.update', $students->id) }}" method="POST">

    @csrf
    @method('PUT')

    <label for="name">First Name:</label>
    <input type="text" name="first_name" value = "{{ $students->first_name }}" required>

    <label for="lastname">Last Name:</label>
    <input type="text" name="last_name" value = "{{ $students->last_name }}" required>

    <label for="age">Age:</label>
    <input type="number" name="age" value = "{{ $students->age }}" required>

    <label for="email">Email:</label>
    <input type="email" name="email" value = "{{ $students->email }}" required>

    <label for="date_of_birth">Date of Birth:</label>
<input type="date" name="date_of_birth" value = "{{ $students->date_of_birth }}" required>

    <label for="address">Address:</label>
    <input type="text" name="address" value = "{{ $students->address }}" required>

    <button type="submit">Submit</button>
</form>



</x-user-layout>


