<?php

namespace App\Http\Controllers\App;
use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use App\Models\Teacher;  
class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers = Teacher::all();
        
        return view('app.teacher.index', compact('teachers'));   
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
        $request->validate([
            'instructor_id' => 'required|string|max:255',
            'first_name' => 'required|string|max:255',
            'middle_name' => 'required|string',
            'last_name' => 'required|string|max:255',
            'department' => 'required|string',
            'email' => 'required|string|max:255',
            'date_of_birth' => 'required|string',
            'status' => 'required|string',
            'street' => 'required|string',
            'barangay' => 'required|string',
            'municipality' => 'required|string',
            'province' => 'required|string',

        ]);

        Teacher::create($request->all());

        return redirect()->route('teacher.index')->with('success', 'Teacher created successfully!');

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
