<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReferanceContacts extends Model
{
    use HasFactory;
    
    protected $table = 'referance_contacts';

    protected $fillable = ['application_id','name','contact_number','relation'];
}
