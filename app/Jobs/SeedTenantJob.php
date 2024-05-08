<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

use App\Models\{
    Tenant, 
    User, 
    Teacher
}; 

class SeedTenantJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    protected $tenant; 
    protected $teacher; 
    public function __construct(Tenant $tenant)
    {
        $this->tenant = $tenant; 
    }

   

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $this->tenant->run(function(){
           $user = User::create([
                'name' => $this->tenant->name, 
                'email' => $this->tenant->email, 
                'password' => $this->tenant->password, 
                'adminfirstname' => $this->tenant->adminfirstname, 
                'adminmiddlename' => $this->tenant->adminmiddlename, 
                'adminlastname' => $this->tenant->adminlastname, 
                'street' => $this->tenant->street, 
                'barangay' => $this->tenant->barangay, 
                'municipality' => $this->tenant->municipality,
                'logo' => $this->tenant->logo,
                'city' => $this->tenant->city, 
                'gender' => $this->tenant->gender,
                'phonenumber' => $this->tenant->phonenumber, 


            ]); 

            $user->assignRole('admin');
        }); 

       
    }
}
