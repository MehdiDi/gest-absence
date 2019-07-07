<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filiere extends Model
{
    protected $table = 'filieres';
    protected $primaryKey = 'idF';

    public function groups(){
        return $this->hasMany('App\Group');
    }
    public function etudiants(){
        return $this->hasMany('App\Etudiant');
    }
}
