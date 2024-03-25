<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenantadmin extends Model
{
    use HasFactory;

    protected $table = "tenantadmin";

    protected $fillable = [

        'firstname', 
        'middlename', 
        'lastname', 
        'contactnumber', 
        'email' 
        
    ]; 

}

