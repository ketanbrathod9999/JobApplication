<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChoosedTechnologies extends Model
{
    use HasFactory;
    
    protected $table = 'choosed_technologies';

    protected $fillable = ['application_id','technology_id','knowledge_level'];

    function technology(){
        return $this->belongsTo('App\Models\Technologies','technology_id');
    }
}
