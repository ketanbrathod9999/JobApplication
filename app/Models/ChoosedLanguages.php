<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChoosedLanguages extends Model
{
    use HasFactory;
    
    protected $table = 'choosed_languages';

    protected $fillable = ['application_id','language_id','read','write','speak'];

    function language(){
        return $this->belongsTo('App\Models\Languages','language_id');
    }
}
