<!-- resources/views/app/teacher/create.blade.php -->

<x-user-layout>

    <h1>Create Teacher</h1>

    <form action="{{ route('app.teacher.store') }}" method="POST">
        @csrf <!-- CSRF token field for security -->

        <label for="name">Firstname:</label>
        <input type="text" name="name" required>

        <label for="email">Email:</label>
        <input type="email" name="email" required>

        <label for="password">Password:</label>
        <input type="password" name="password" required>

        <button type="submit">Submit</button>
        <a class="nav-link" href="{{ route('app.teacher') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Back</span>
        </a>
    </form>

</x-user-layout>
