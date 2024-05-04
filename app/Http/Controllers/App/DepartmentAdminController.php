<?php

namespace App\Http\Controllers\App;
use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use App\Models\DepartmentAdmin;
use App\Models\User;

class DepartmentAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Load all department admins and users
        $departmentadmins = DepartmentAdmin::all();
        $users = User::all();

        return view('app.departmentadmin.index', compact('departmentadmins', 'users'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $departmentadmin = DepartmentAdmin::findOrFail($id);
        return view('app.departmentadmin.view', compact('departmentadmin'));
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $departmentadmin = DepartmentAdmin::findOrFail($id);
        return view('app.departmentadmin.edit', compact('departmentadmin'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validate the incoming request
        $validatedData = $request->validate([
            'depadminfirstname' => 'required|string|max:255',
            'depadminmiddlename' => 'nullable|string|max:255',
            'depadminlastname' => 'required|string|max:255',
            'street' => 'required|string|max:255',
            'barangay' => 'required|string|max:255',
            'municipality' => 'required|string|max:255',
            'city' => 'required|string|max:255',
        ]);

        // Find the DepartmentAdmin by id
        $departmentadmin = DepartmentAdmin::findOrFail($id);


        // Update the DepartmentAdmin with validated data
        $departmentadmin->update($validatedData);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Department admin updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
