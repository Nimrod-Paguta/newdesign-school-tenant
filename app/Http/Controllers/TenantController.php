<?php

namespace App\Http\Controllers;
use Illuminate\Validation\ValidationException;

use App\Models\Tenant;
use App\Models\Tenantadmin;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Str;
use App\Mail\MailNotify; 
use Illuminate\Support\Facades\Mail; 

class TenantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
    public function index()
    {

        
        $tenants = Tenant::with('domains')->get(); 
        $totalTenants = Tenant::count();
      
        return view('tenants.index', ['tenants' => $tenants, 'totalTenants' => $totalTenants]);    
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
        return view('tenants.index'); 
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
             'adminfirstname' => 'required|string|max:255',
             'adminmiddlename' => 'required|string|max:255',
             'adminlastname' => 'required|string|max:255',
             'adminaddress' => 'required|string|max:255',
             'password' => ['required', 'confirmed', Rules\Password::defaults()],
         ]);
     
         try {
             // Create the tenant
             $tenant = Tenant::create([
                 'id' => Str::uuid(),
                 'name' => $request->name,
                 'email' => $request->email,
                 'domain_name' => $request->domain_name,
                 'password' => $request->password, // Store the password as provided, without hashing
             ]);
     
             // Create the tenant admin
             $tenantadmin = Tenantadmin::create([
                 'tenant_id' => $tenant->id,
                 'email' => $request->email,
                 'adminfirstname' => $request->adminfirstname,
                 'adminmiddlename' => $request->adminmiddlename,
                 'adminlastname' => $request->adminlastname,
                 'adminaddress' => $request->adminaddress,
                 'password' => $request->password, // Store the password as provided, without hashing
             ]);
     
             // Prepare email data
             $mailData = [
                 'title' => 'Welcome to our platform!',
                 'body' => 'Your account has been created successfully. Here is your password: ' . $request->password,
             ];
     
             // Send email
             Mail::to($request->email)->send(new MailNotify($mailData));
     
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
