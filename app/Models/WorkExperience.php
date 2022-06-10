<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkExperience extends Model
{
    use HasFactory;
    
    protected $table = 'work_experience';

    protected $fillable = ['application_id','designation','from_date','to_date'];

    //Casts of the model dates
    protected $casts = [
        'from_date' => 'date',
        'to_date' => 'date'
    ];
}
