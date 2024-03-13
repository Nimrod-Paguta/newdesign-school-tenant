<?php

namespace App\Http\Controllers\App;
use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use App\Models\Teacher;  
use App\Models\User;
use Illuminate\Validation\Rules;
use Spatie\Permission\Models\Role; 
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teacher = Teacher::all();
        return view('app.teacher', ['teacher'=>$teacher]);    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|confirmed|min:8', // Adjust password requirements as needed
        ]);

        // Create the teacher
        $teacher = Teacher::create($validatedData);

        // Create a user with the teacher's details
        $user = User::create([
            'name' => $teacher->name,
            'email' => $teacher->email,
            'password' => Hash::make($request->password), // Ensure to hash the password
        ]);

        // Login the user
       

        return redirect()->route('app.teacher');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
