<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $table = 'teacher'; // Specify the correct table name


        protected $fillable = [
    
            'instructor_id', 
            'first_name', 
            'middle_name', 
            'last_name', 
            'department', 
            'email', 
            'status', 
            'date_of_birth', 
            'contact_number', 
            'street', 
            'barangay', 
            'municipality', 
            'province', 
         
        ];   
}
