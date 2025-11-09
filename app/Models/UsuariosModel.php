<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuariosModel extends Model
{
    protected $table         = 'usuarios';
    protected $primaryKey = 'id_usuario' ;
    protected $allowedFields = [
        'id_usuario', 'nombre','apellido','fecha_nacimiento','DPI','telefono','email','direccion',
        'rol','categoria','posicion','licencia','especialidad','estado',
    ];

}