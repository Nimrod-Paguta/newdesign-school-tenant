<?php

namespace App\Http\Controllers;

use App\Models\Tenant;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Str;

class TenantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tenants = Tenant::with('domains')->get(); 

        return view('tenants.index', ['tenants'=>$tenants]);    
        
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('tenants.create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());   
        //validation 
        $ValidatedData = $request->validate([ 
                'name' => 'required|string|max:255', 
                'email' => 'required|email|max:255', 
                'domain_name' => 'required|string|max:255|unique:domains,domain', 
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]); 
        
        $tenant = Tenant::create([
            'id' => Str::uuid(),
                'name' => $request->name, 
                'email' => $request->email, 
                'domain_name' => $request->domain_name, 
                'password' => $request->password,
        ]); 
        


        $tenant->domains()->create([
            'domain' => $ValidatedData['domain_name'].'.'.config('app.domain')
        ]); 
        return redirect()->route('tenants.index'); 

    } 

    /**
     * Display the specified resource.
     */
    public function show(Tenant $tenant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tenant $tenant)
    {
        return view('tenants.edit', compact('tenant'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tenant $tenant)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            // Add other validation rules for your fields
        ]);
    
        $tenant->update($validatedData);
    
        return redirect()->route('tenants.index')->with('success', 'Tenant updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tenant $tenant)
    {
       
        $tenant->delete();

        return redirect()->route('tenants.index')->with('success', 'Tenant deleted successfully');
    }
}
