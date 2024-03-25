<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tenantadmin;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

       
        $admins = Tenantadmin::all();
      
        
        return view('admin.index', compact('admins'));   
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
            'firstname' => 'required|string|max:255',
            'middlename' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'contactnumber' => 'required|string|max:255',
            'email' => 'required|string|max:255',
           
        ]);

        Tenantadmin::create($request->all());

        return redirect()->route('admin.index')->with('success', 'Student created successfully!');
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
