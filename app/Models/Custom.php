<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Custom extends Model
{
    use HasFactory;
    protected $table = 'custom'; // Specify the correct table name

    
    protected $fillable = [
        'color'
    ]; 

}
