<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $table = 'groups';
    protected $primaryKey = 'idG';
    public $timestamps = false;

    public function filiere() {
        return $this->belongsTo('App\Filiere');
    }

    public function etudiants() {
        return $this->hasMany('App\Etudiant');
    }
}
