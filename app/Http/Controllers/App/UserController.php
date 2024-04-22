<?php

namespace App\Http\Controllers\App;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller; 
use App\Models\User; 
use App\Models\DepartmentAdmin; 
use Spatie\Permission\Models\Role; 

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::with('roles')->get(); 

        return view('app.users.index', ['users'=>$users]);    
        
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('app.users.create'); 
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
                'email' => 'required|email|max:255|unique:users,email',  
                'depadminfirstname'  => 'required|string|max:255', 
                'depadminmiddlename'  => 'required|string|max:255', 
                'depadminlastname'  => 'required|string|max:255', 
                'street'  => 'required|string|max:255', 
                'barangay'  => 'required|string|max:255', 
                'municipality'  => 'required|string|max:255', 
                'city'  => 'required|string|max:255', 
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]); 
        

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password, // Store the password as provided, without hashing
        ]);

        $departmentadmin = DepartmentAdmin::create([
            'departmentadmin' =>  $user->id, 
            'email' => $request->email,
            'depadminfirstname' => $request->depadminfirstname,
            'depadminmiddlename' => $request->depadminmiddlename,
            'depadminlastname' => $request->depadminlastname,
            'street' => $request->street,
            'barangay' => $request->barangay,
            'municipality' => $request->municipality,
            'city' => $request->city,
            'password' => $request->password, // Store the password as provided, without hashing
        ]);
        // User::create($ValidatedData); 
//  $user->roles()->sync($request->input('roles')); 

           

        return redirect()->route('users.index'); 


    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $roles = Role::get(); 

        return view('app.users.edit', ['user'=>$user, 'roles'=>$roles]);    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $ValidatedData = $request->validate([
            'name' => 'required|string|max:255', 
            'email' => 'required|email|max:255|unique:users,email,'.$user->id, 
             'roles'=>'required|array'
        ]); 
    

    $user->update($ValidatedData);  
    $user->roles()->sync($request->input('roles')); 
    return redirect()->route('users.index'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
