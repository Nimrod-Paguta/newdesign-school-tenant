<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;
    protected $table = 'announcement'; // Specify the correct table name


    protected $fillable = [

        'why',
        'when', 
        'what', 
        'where', 
        'who', 
        'date',  

        
    ]; 
}
