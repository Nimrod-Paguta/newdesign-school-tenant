<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; 

class Students extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [

        'Student_no', 
        'first_name', 
        'middle_name', 
        'last_name', 
        'department', 
        'email', 
        'date_of_birth', 
        'age', 
        'mobile_no', 
        'year', 
        'status',  
        'street', 
        'barangay', 
        'municipality', 
        'province', 

        
    ]; 
}


