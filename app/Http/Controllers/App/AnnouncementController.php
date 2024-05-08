<?php

namespace App\Http\Controllers\App;
use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use App\Models\Announcement;  


class AnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $announcements = Announcement::all();
        return view('app.announcement.index', ['announcements' => $announcements]);    
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
            'why' => 'required|string|max:255',
            'when' => 'required|string|max:255',
            'what' => 'required|string',
            'where' => 'required|string|max:255',
            'date' => 'required|string',
            'who' => 'required|string',
   
        ]);

        Announcement::create($request->all());

        return redirect()->route('announcement.index')->with('success', 'announcement created successfully!');

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
    public function edit($id)
    {
        $announcement = Announcement::findOrFail($id);
        return view('app.announcement.edit', compact('announcement'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $announcement = Announcement::findOrFail($id); // Fetch the announcement from the database
        $request->validate([
            'why' => 'required|string|max:255',
            'when' => 'required|string|max:255',
            'what' => 'required|string',
            'where' => 'required|string|max:255',
            'date' => 'required|string',
            'who' => 'required|string',
        ]);
    
        $announcement->update($request->all()); // Update the announcement
    
        return redirect()->route('announcement.index')->with('success', 'Announcement updated successfully!');
    }
    


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $announcement = Announcement::findOrFail($id);
        // Delete the tenant
        $announcement->delete();
    
        return redirect()->route('announcement.index')->with('success', 'Tenant and associated admin deleted successfully');
    }
    
}
