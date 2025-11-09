<?php

namespace App\Models;

use CodeIgniter\Model;

class PagosModel extends Model
{
    protected $table         = 'pagos';
    protected $primaryKey = 'id_pago' ;
    protected $allowedFields = [
        'id_pagos', 'id_usuario', 'concepto','monto', 'fecha_pago', 'metodo_pago', 'estado',
    ];
    //protected $returnType    = \App\Entities\User::class;
    //protected $useTimestamps = true;
}