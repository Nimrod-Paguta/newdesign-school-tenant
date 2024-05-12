<?php


namespace App\Http\Controllers\App;
use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use App\Models\Students;
use App\Models\Teacher; 
use App\Models\User; 
use App\Models\Announcement;  

class TenantDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $studentCount = Students::count();
        $instructor = Teacher::count();
        $announcement = Announcement::count();
        $department = User::where('id', '<>', 1)->count();

        return view('app.dashboard', compact('studentCount', 'instructor', 'department', 'announcement'));
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
