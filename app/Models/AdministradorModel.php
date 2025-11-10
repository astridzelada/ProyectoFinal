<?php

namespace App\Models;

use CodeIgniter\Model;

class AdministradorModel extends Model
{
    protected $table         = 'administrador';
    protected $primaryKey = 'usuario_id' ;
    protected $allowedFields = [
        'usuario_id', 'nombre','email','password','tipo_usuarios_id'
    ];

}