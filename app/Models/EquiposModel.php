<?php

namespace App\Models;

use CodeIgniter\Model;

class EquiposModel extends Model
{
    protected $table         = 'equipos';
    protected $primaryKey = 'id_equipo' ;
    protected $allowedFields = [
        'id_equipo', 'nombre_equipo', 'categoria','id_entrenador', 'fecha_creacion',
    ];

}