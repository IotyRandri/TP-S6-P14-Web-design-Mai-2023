<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Domaine_Application extends Model
{
    use HasFactory;

    public function resume(){
        return $this->hasOne(Resume_Domaine_Application::class,'id','idresume');
    }

    protected $table = 'domaine_application';
    protected $primary_key = 'id';
    public $timestamps = false;
}
