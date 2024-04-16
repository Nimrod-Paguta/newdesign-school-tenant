<?php

namespace App\Http\Controllers\App;
use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use App\Models\Students;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Students::all();
        return view('app.students.index', compact('students'));
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
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'age' => 'required|string',
            'email' => 'required|string|max:255',
            'date_of_birth' => 'required|string|max:255',
            'address' => 'required|string',
        ]);

        Students::create($request->all());

        return redirect()->route('students.index')->with('success', 'Student created successfully!');

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
    public function edit($id)
    {
        $students = Students::findOrFail($id);
        return view('app.students.edit', compact('students'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'age' => 'required|string',
            'email' => 'required|string|max:255',
            'date_of_birth' => 'required|string|max:255',
            'address' => 'required|string',
        ]);

        $students = Students::findOrFail($id);
        $students->update($request->all());

        return redirect()->route('students.edit', $id)->with('success', 'Student updated successfully!');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
