<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resume_Domaine_Application extends Model
{
    use HasFactory;

    public function domaineapplication(){
        return $this->belongsTo(Domaine_Application::class,'iddomaineapplication','id');
    }

    public $timestamps = false;
    protected $table = 'resume_domaine_application';
}
