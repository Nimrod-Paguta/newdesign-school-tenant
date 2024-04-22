<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DepartmentAdmin extends Model
{
    use HasFactory;

    protected $table = "departmentadmin";

    protected $fillable = [
        'id', 
        'email', 
        'departmentadmin', 
        'password', 
        'depadminfirstname', 
        'depadminmiddlename', 
        'depadminlastname', 
        'street', 
        'barangay', 
        'municipality', 
        'city', 
        
    ]; 
    
    public function departmentadmin()
    {
        return $this->belongsTo(User::class, 'departmentadmin');
    }
}
