<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    protected $table = 'Docente';    
    protected $fillable = [ 'especialidad','antiguedad','id_user'];        
}
