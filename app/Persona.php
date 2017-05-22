<?php
namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Persona extends Authenticatable
{
    use Notifiable;

    protected $table = 'personas';

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function tipo()
    {
        switch ($this->permiso)
        {
            case 1:
                return 'Administrador';
            case 2:
                return 'Docente';
            case 3:
                return 'Estudiante';
            case 4:
                return 'Director';
            case 5:
                return 'Secretaria';
        }
    }
}
