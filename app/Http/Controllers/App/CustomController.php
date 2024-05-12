<?php

namespace App\Http\Controllers\App;
use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use App\Models\Custom;
class CustomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function update(Request $request, Custom $custom)
    {
        $validatedData = $request->validate([
            'color' => 'required|string|max:255',       
        ]);

        $custom->update($validatedData);

        return redirect()->back()->with('success', 'Logo updated successfully');
    }

    


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
