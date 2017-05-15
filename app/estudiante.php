<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class estudiante extends Model
{
    protected $table='estudiante';
    protected $fillable=['rude','grado','id_user'];                
}
