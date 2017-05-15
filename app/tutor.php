<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tutor extends Model
{
    protected $table='tutor';
    protected $fillable=['ocupacion','role','id_user'];
}
