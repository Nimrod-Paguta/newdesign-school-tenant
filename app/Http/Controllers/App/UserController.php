<?php

namespace App\Http\Controllers\App;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller; 
use App\Models\User; 
use App\Models\Students;
use App\Models\DepartmentAdmin; 
use App\Models\Teacher;  
use App\Mail\MailNotify; 
use Illuminate\Support\Facades\Mail; 
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



    public function userlayout($id){
        $users = User::all($id);
        
        return view('components.user-layout', compact('users'));   
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

        
        $path = ''; // Initialize $path variable
        $filename = ''; // Initialize $filename variable


        if (auth()->user()->id === 1 && empty(auth()->user()->payment)) {
            return redirect()->route('users.create')->with('payment_required', true);
        }
        
        if (User::count() == 3) {
            if (auth()->user()->id == 1) {
                $payment = auth()->user()->payment;
                if ($payment != 100 && $payment != 200) {
                    return redirect()->route('payment.payment', ['id' => auth()->user()->id])->with('exceeded_limit', true);
                }
            } 
        }
        

        if (User::count() == 6) {
            if (auth()->user()->id == 1) {
                if (auth()->user()->payment != 300) {
                    return redirect()->route('payment.payment', ['id' => auth()->user()->id])->with('exceeded_limit', true);
                }
            } 
        }
        
    


        // Validation
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'adminfirstname' => 'required|string|max:255',
            'adminmiddlename' => 'required|string|max:255',
            'adminlastname' => 'required|string|max:255',
            'street' => 'required|string|max:255',
            'barangay' => 'required|string|max:255',
            'municipality' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'logo' => 'nullable|mimes:png,jpg,jpeg,webp',
            'gender' => 'required|string|max:255',
            'department_id' => 'required|string|max:255|unique:users,department_id',
            'phonenumber' => 'required|string|max:255',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
           
        ]);


        
        if($request->has('logo')){
            $file = $request->file('logo'); 
            $extension = $file->getClientOriginalExtension(); 

            $filename = time().'.'.$extension; 

            $path = 'upload/logos/'; 
            $file->move( $path, $filename); 
        }


    
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
            'logo' => $path.$filename ,
            'adminfirstname' => $request->adminfirstname,
            'adminmiddlename' => $request->adminmiddlename,
            'adminlastname' => $request->adminlastname,
            'street' => $request->street,
            'barangay' => $request->barangay,
            'municipality' => $request->municipality,
            'city' => $request->city,
            'gender' => $request->gender,
            'phonenumber' => $request->phonenumber,
            'department_id' => $request->department_id,

        ]);

        $mailData = [
            'title' => 'Welcome to our platform!',
            'body' => 'Your account has been created successfully.',
            'name' => $request->name, // Pass name here
            'password' =>  $request->password, // Pass password here
        ];
 
         // Send email
         Mail::to($request->email)->send(new MailNotify($mailData));


            // Assign the "department" role to the user
        $departmentRole = Role::where('name', 'department')->first();
        $user->assignRole($departmentRole);

    
        // $departmentAdmin = DepartmentAdmin::create([
        //     'departmentadmin' => $user->id,
        //     'email' => $request->email,
        //     'depadminfirstname' => $request->depadminfirstname,
        //     'depadminmiddlename' => $request->depadminmiddlename,
        //     'depadminlastname' => $request->depadminlastname,
        //     'street' => $request->street,
        //     'barangay' => $request->barangay,
        //     'municipality' => $request->municipality,
        //     'city' => $request->city,
        //     'password' => $request->password, // Store the password as provided, without hashing
        // ]);
    
        return redirect()->route('users.create');
    }
    

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        $studentCount = 0;
    
        // Check if the user is a teacher
        if ($user->id != 1) {
            $students = Students::where('department', $user->department_id)->get();
            $studentCount = $students->count();
        }

                // Check if the user is a teacher
        if ($user->id != 1) {
            $teacher = Teacher::where('department', $user->department_id)->get();
            $teacherCount = $teacher->count();
        }
    
        return view('app.users.view', compact('user', 'studentCount', 'teacherCount'));
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
        $validatedData = $request->validate([
             //  'roles'=>'required|array', 
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,'.$user->id,
            'adminfirstname' => 'required|string|max:255',
            'adminmiddlename' => 'required|string|max:255',
            'adminlastname' => 'required|string|max:255',
            'street' => 'required|string|max:255',
            'barangay' => 'required|string|max:255',
            'municipality' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'gender' => 'required|string|max:255',
            'phonenumber' => 'required|string|max:255',
        ]);
    
        $user->update($validatedData);
         // $user->roles()->sync($request->input('roles')); 
    
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
            $user->logo = 'upload/logos/' . $logoName;
            $user->save();
        }
    
        return redirect()->route('users.index')->with('success', 'User updated successfully');
    }
    




    public function updateLogo(Request $request, $userId)
    {
        // Validate the incoming request
        $request->validate([
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust validation rules as needed
        ]);

        // Find the user by ID
        $user = User::findOrFail($userId);

        // Handle the logo upload
        if ($request->hasFile('logo')) {
            // Get the uploaded file
            $logo = $request->file('logo');
            // Generate a unique filename for the logo
            $logoName = 'logo_' . time() . '.' . $logo->getClientOriginalExtension();
            // Store the logo in the public directory
            $logo->move(public_path('upload/logos'), $logoName);
            // Update the user's logo path in the database
            $user->logo = 'upload/logos/' . $logoName;
            $user->save();
        }

        // Redirect back or return a response as needed
        return redirect()->back()->with('success', 'Logo updated successfully');
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



     public function destroy($id)
     {
         $user = User::findOrFail($id);
         
         // Find students and teachers with matching department
         $students = Students::where('department', $user->department_id)->get();
         $teachers = Teacher::where('department', $user->department_id)->get();
         
         // Delete associated students
         foreach ($students as $student) {
             $student->delete();
         }
         
         // Delete associated teachers
         foreach ($teachers as $teacher) {
             $teacher->delete();
         }
         
         // Delete the user
         $user->delete();
     
         return redirect()->route('users.index')->with('success', 'User, students, and teachers deleted successfully');
     }

     



}
