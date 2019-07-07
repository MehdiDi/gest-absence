<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Absence extends Model
{
    protected $table = 'absences';
    protected $primaryKey = 'idA';

    public $timestamps = false;
}
