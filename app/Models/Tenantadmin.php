<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Tenantadmin extends Model
{
    use HasFactory;

    protected $table = "tenantadmin";

    protected $fillable = [
        'id', 
        'email', 
        'tenantadmin', 
        'password', 
        'adminfirstname', 
        'adminmiddlename', 
        'adminlastname', 
        'adminaddress', 
     
       
        
    ]; 

    public function tenant()
    {
        return $this->belongsTo(Tenant::class, 'tenantadmin');
    }

}

