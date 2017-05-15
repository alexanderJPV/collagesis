<?php
namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */                    
    protected $fillable = [ 'name','ap_paterno','ap_materno','ci','genero','tipo_usuario','email','password','foto','telefono'
    ];        
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function tipo()
    {
        switch ($this->tipo_usuario)
        {
            case 1:
                return 'Estudiante';
            case 2:
                return 'Docente';
            case 3:
                return 'Administrador';
            case 4:
                return 'Director';
            case 5:
                return 'Secretaria';
        }
    }
}
