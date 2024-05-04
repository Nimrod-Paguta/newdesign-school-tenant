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

    public function paymentroute($id){
        $user = User::findOrFail($id);
        return view('app.payment.payment', ['user' => $user]); 
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::with('roles')->get();
    
        return view('app.users.create', ['users' => $users]);
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        if (auth()->user()->id === 1 && empty(auth()->user()->payment)) {
            return redirect()->route('users.create')->with('payment_required', true);
        }
        
        if (User::count() == 3) {
            if (auth()->user()->id == 1) {
                if (auth()->user()->payment != 100) {
                    return redirect()->route('payment.payment', ['id' => auth()->user()->id])->with('exceeded_limit', true);
                }
            } else {
                return redirect()->route('users.create');
            }
        }
        
    


        // Validation
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'depadminfirstname' => 'required|string|max:255',
            'depadminmiddlename' => 'required|string|max:255',
            'depadminlastname' => 'required|string|max:255',
            'street' => 'required|string|max:255',
            'barangay' => 'required|string|max:255',
            'municipality' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
           
        ]);
    
        // Check if user count exceeds 3
        // if (User::count() >= 3) {
        //     // If more than or equal to 3 users, redirect back with an error message
        //     return redirect()->route('users.create')->with('exceeded_limit', true);
        // }
    
        // If user count is less than 3, proceed to create user and department admin
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password, // Store the password as provided, without hashing
          
        ]);


            // Assign the "department" role to the user
        $departmentRole = Role::where('name', 'department')->first();
        $user->assignRole($departmentRole);

    
        $departmentAdmin = DepartmentAdmin::create([
            'departmentadmin' => $user->id,
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
    
        return redirect()->route('users.create');
    }
    

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        $departmentadmin = DepartmentAdmin::findOrFail($id);
        
        return view('app.users.view', compact('user', 'departmentadmin'));
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



     public function payment(Request $request, string $id)
     {
         $request->validate([
             'payment' => 'required|numeric', // Assuming payment is a numeric value
         ]);
     
         $user = User::findOrFail($id);
         $user->payment = $request->input('payment');
         $user->save();
     
         return redirect()->route('users.create')->with('success', 'Payment information updated successfully.');
     }




     
     


    public function destroy(User $user)
    {
        //
    }
}
