<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    protected $table = 'etudiants';
    protected $primarykey = 'idE';
    public $timestamps = false;

    public function group(){
        return $this->belongsTo('App\Group');
    }
    
    public function filiere() {
        return $this->belongsTo('App\Filiere');
    }
}
