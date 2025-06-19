<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactForm extends Model
{

    use HasFactory;
    protected $fillable = [
        'full_name',
        'email', 
        'phone_number',
        'subject',
        'message'
    ];
    
    // Disable mass assignment protection if needed
    // protected $guarded = [];
}
