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

        $path = ''; // Initialize $path variable
        $filename = ''; // Initialize $filename variable

        $request->validate([
            'instructor_id' => 'required|string|max:255',
            'first_name' => 'required|string|max:255',
            'middle_name' => 'required|string',
            'last_name' => 'required|string|max:255',
            'contact_number' => 'required|string|max:255',
            'department' => 'required|string',
            'email' => 'required|string|max:255',
            'date_of_birth' => 'required|string',
            'status' => 'required|string',
            'street' => 'required|string',
            'gender' => 'required|string',
            'age' => 'required|string',
            'barangay' => 'required|string',
            'municipality' => 'required|string',
            'province' => 'required|string',
            'logo' => 'nullable|mimes:png,jpg,jpeg,webp',

        ]);

        if($request->has('logo')){
            $file = $request->file('logo'); 
            $extension = $file->getClientOriginalExtension(); 

            $filename = time().'.'.$extension; 

            $path = 'upload/logos/'; 
            $file->move( $path, $filename); 
        }

        Teacher::create([
            'instructor_id' => $request->instructor_id,
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'last_name' => $request->last_name,
            'department' => $request->department,
            'email' => $request->email,
            'date_of_birth' => $request->date_of_birth,
            'status' => $request->status,
            'street' => $request->street,
            'gender' => $request->gender,
            'age' => $request->gender,
            'barangay' => $request->barangay,
            'municipality' => $request->municipality,
            'contact_number' => $request->contact_number,
            'province' => $request->province,
            'logo' => $path.$filename ,
        ]);

        return redirect()->route('teacher.index')->with('success', 'Teacher created successfully!');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $teacher = Teacher::findOrFail($id);
    
        
        return view('app.teacher.view', compact('teacher'));
    }
    


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $teacher = Teacher::findOrFail($id);    
    
        
        return view('app.teacher.edit', compact('teacher'));
    }


    /**
     * Update the specified resource in storage.
     */
public function update(Request $request, string $id)
{
    $validatedData = $request->validate([
        'instructor_id' => 'required|string|max:255|unique:teacher,instructor_id',
        'first_name' => 'required|string|max:255',
        'middle_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'department' => 'required|string|max:255',
        'email' => 'required|string|max:255|unique:teacher,email',
        'date_of_birth' => 'required|date',
        'status' => 'required|string|max:255',
        'street' => 'required|string|max:255',
        'gender' => 'required|string|max:255',
        'barangay' => 'required|string|max:255',
        'age' => 'required|string|max:255',
        'municipality' => 'required|string|max:255',
        'province' => 'required|string|max:255',
        'contact_number' => 'required|string|max:255',
    ]);

    $teacher = Teacher::findOrFail($id);
    $teacher->update($request->all());

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
        $teacher->logo = 'upload/logos/' . $logoName;
        $teacher->save();
    }


    return redirect()->route('teacher.index')->with('success', 'Teacher updated successfully!');
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
        $teacher = Teacher::findOrFail($id);
        $teacher->delete(); // This performs a soft delete

        // You may redirect back or return a response as needed
        return redirect()->route("teacher.index")->with('success', 'Teacher archived successfully');
    }

    public function restore($id){
        $teacher=Teacher::withTrashed()->find($id); 
        $teacher->restore(); 
        return redirect()->route('teacher.index')->with('success', 'teacher deleted successfully!');
    }

    public function archived()
    {
        // Retrieve only archived teachers
        $archivedTeachers = Teacher::onlyTrashed()->get();
        
        return view("app.archieve.archdata", compact('archivedTeachers'));
    }





}
