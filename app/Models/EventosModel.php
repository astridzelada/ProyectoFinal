<?php

namespace App\Models;

use CodeIgniter\Model;

class EventosModel extends Model
{
    protected $table         = 'eventos_deportivos';
    protected $primaryKey = 'id_evento';
    protected $allowedFields = [
        'id_evento', 'tipo_evento', 'id_equipo_local', 'id_equipo_visitante', 'id_cancha', 'fecha', 'hora_inicio', 'hora_fin', 
        'descripcion', 'resultado_local', 'resultado_visitante',
    ];
}