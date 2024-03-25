<?php

namespace App\Http\Controllers;
use Illuminate\Validation\ValidationException;

use App\Models\Tenant;
use App\Models\Tenantadmin;
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
        $totalTenants = Tenant::count();
        $tenantadmins = Tenantadmin::all(); 
    
        return view('tenants.index', ['tenants' => $tenants, 'totalTenants' => $totalTenants], compact('tenantadmins'));    
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tenantadmins = Tenantadmin::all(); 
        return view('tenants.index', compact('tenantadmins')); 
    }
    

    /**
     * Store a newly created resource in storage.
     */
  


public function store(Request $request)
{
    // Validate the request data
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255|unique:tenants,email', // Check uniqueness in the 'tenants' table
        'domain_name' => 'required|string|max:255|unique:domains,domain',
        'tenantadmin' => 'required|string|max:255',
        'password' => ['required', 'confirmed', Rules\Password::defaults()],
    ]);

    try {
        // Create the tenant
        $tenant = Tenant::create([
            'id' => $request->name,
            'name' => $request->name,
            'email' => $request->email,
            'domain_name' => $request->domain_name,
            'tenantadmin' => $request->tenantadmin,
            'password' => $request->password,
        ]);

        // Create domain for the tenant
        $tenant->domains()->create([
            'domain' => $validatedData['domain_name'] . '.' . config('app.domain')
        ]);

        return redirect()->route('tenants.index')->with('success', 'Tenant created successfully');
    } catch (ValidationException $e) {
        // If email validation fails due to uniqueness, show an alert
        return back()->withErrors(['email' => 'The email address already exists.'])->withInput();
    }
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
