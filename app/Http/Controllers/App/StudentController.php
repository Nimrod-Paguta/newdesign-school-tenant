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
        $path = ''; // Initialize $path variable
        $filename = ''; // Initialize $filename variable
        $request->validate([
            'Student_no' => 'required|string|max:255',
            'first_name' => 'required|string|max:255',
            'middle_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'department' => 'required|string',
            'email' => 'required|string|max:255',
            'date_of_birth' => 'required|string|max:255',
            'age' => 'required|string',
            'mobile_no' => 'required|string|max:255',
            'year' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            'gender' => 'required|string|max:255',
            'street' => 'required|string',
            'barangay' => 'required|string|max:255',
            'municipality' => 'required|string|max:255',
            'province' => 'required|string|max:255',
            'logo' => 'nullable|mimes:png,jpg,jpeg,webp',
         
        ]);

        if($request->has('logo')){
            $file = $request->file('logo'); 
            $extension = $file->getClientOriginalExtension(); 

            $filename = time().'.'.$extension; 

            $path = 'upload/logos/'; 
            $file->move( $path, $filename); 
        }

        Students::create([
            'Student_no' => $request->Student_no,
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'last_name' => $request->last_name,
            'department' => $request->department,
            'email' => $request->email,
            'age' => $request->age,
            'date_of_birth' => $request->date_of_birth,
            'status' => $request->status,
            'year' => $request->year,
            'gender' => $request->gender,
            'street' => $request->street,
            'mobile_no' => $request->mobile_no,
            'barangay' => $request->barangay,
            'municipality' => $request->municipality,
            'contact_number' => $request->contact_number,
            'province' => $request->province,
            'logo' => $path.$filename ,
        ]);

        return redirect()->route('students.index')->with('success', 'Student created successfully!');

    }



    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $student = Students::findOrFail($id);
    
        
        return view('app.students.view', compact('student'));
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
            'Student_no' => 'required|string|max:255',
            'first_name' => 'required|string|max:255',
            'middle_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'department' => 'required|string',
            'email' => 'required|string|max:255',
            'date_of_birth' => 'required|string|max:255',
            'age' => 'required|string',
            'mobile_no' => 'required|string|max:255',
            'year' => 'required|string|max:255',
            'gender' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            'street' => 'required|string',
            'barangay' => 'required|string|max:255',
            'municipality' => 'required|string|max:255',
            'province' => 'required|string|max:255',
        ]);

        $students = Students::findOrFail($id);
        $students->update($request->all());

      // Handle the logo upload
      if ($request->hasFile('logo')) {
        // Validate the logo
        $request->validate([
            'logo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Get the uploaded file
        $logo = $request->file('logo');
        // Generate a unique filename for the logo
        $logoName = 'logo_' . time() . '.' . $logo->getClientOriginalExtension();
        // Store the logo in the public directory
        $logo->move(public_path('upload/logos'), $logoName);
        // Update the user's logo path in the database
        $students->logo = 'upload/logos/' . $logoName;
        $students->save();
    }

        return redirect()->route('students.index')->with('success', 'Student updated successfully!');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function delete($id)
    {
        $student = Students::findOrFail($id);
        $student->delete(); // This performs a soft delete

        // You may redirect back or return a response as needed
        return redirect()->route("students.index")->with('success', 'Teacher archived successfully');
    }

    public function restore($id){
        $student=Students::withTrashed()->find($id); 
        $student->restore(); 
        return redirect()->route('students.index')->with('success', 'teacher deleted successfully!');
    }


    public function archived()
    {
        // Retrieve only archived teachers
        $archivedStudent = Students::onlyTrashed()->get();
        
        return view("app.archieve.student", compact('archivedStudent'));
    }



}
