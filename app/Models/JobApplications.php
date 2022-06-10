<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobApplications extends Model
{
    use HasFactory;
    
    protected $table = 'job_applications';

    //Casts of the model dates
    protected $casts = [
        'date_of_birth' => 'date'
    ];
    
    function department(){
        return $this->belongsTo('App\Models\Departments','department_id');
    }

    function state(){
        return $this->belongsTo('App\Models\States','state_id');
    }

    function relationship_status(){
        return $this->belongsTo('App\Models\RelationShipStatus','relationship_status_id');
    }

    function preferd_location(){
        return $this->belongsTo('App\Models\PreferdLocation','prefered_location_id');
    }

    function work_experiences(){
        return $this->hasMany('App\Models\WorkExperience','application_id');
    }

    function language_knowns(){
        return $this->hasMany('App\Models\ChoosedLanguages','language_id');
    }

    function technologies_knowns(){
        return $this->hasMany('App\Models\ChoosedTechnologies','technology_id');
    }

    function referance_contacts(){
        return $this->hasMany('App\Models\ReferanceContacts','application_id');
    }
}
