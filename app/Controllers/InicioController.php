<?php

namespace App\Controllers;

class InicioController extends BaseController
{
    public function index()
    {
        return view('inicio'); // Carga la vista: app/Views/inicio.php
    }
}
