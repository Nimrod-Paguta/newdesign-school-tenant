<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail; 
use App\Mail\MailNotify; 
use App\Models\Tenant; 
class MailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $password = 'password'; // Assuming this is the password you want to pass
        $mailData = [
            'title' => 'This is Mail',
            'body' => 'This is another mail',
            'password' => $password // Corrected the assignment operator here
        ];



        // $tenants = Tenant::all();
        
        // return view('mails.welcome', compact('tenants')); 



        // Mail::to('nimnom729@gmail.com')->send(new MailNotify($mailData)); 

        // dd('Email Success'); 
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
