<?php

namespace App\Controllers;
use App\Models\EquiposModel;

class EquiposController extends BaseController
{
    public function index(): string
    {
        $equipos = new EquiposModel();

        $datos['datos'] = $equipos->findAll();
        return view('equipos', $datos);
    }

    public function agregarEquipo()

    {
        $equipos = new EquiposModel();

        $datos=[
            'id_equipo'=>$this->request->getPost('txt_codigo'),
            'nombre_equipo'=>$this->request->getPost('txt_nombre'),
            'categoria'=>$this->request->getPost('txt_categoria'),
            'id_entrenador'=>$this->request->getPost('txt_entrenador'),
            'fecha_creacion'=>$this->request->getPost('txt_fecha'),
        ];
        //print_r($datos);
        $equipos->insert($datos);
        return $this->index();
    }

    public function buscarEquipo($codigo){

        $equipos = new EquiposModel();

        $datos['datos'] = $equipos->where('id_equipo', $codigo)->first();
        return view('form_editarequipo',$datos);
    }

    public function modificarEquipo(){
        $equipos = new EquiposModel();
        $datos=[
            'nombre_equipo'=>$this->request->getPost('txt_nombre'),
            'categoria'=>$this->request->getPost('txt_categoria'),
            'id_entrenador'=>$this->request->getPost('txt_entrenador'),
            'fecha_creacion'=>$this->request->getPost('txt_creacion'),
        ];

        $codigo=$this->request->getPost('txt_codigo');
        $equipos->update($codigo, $datos);
        return $this->index();
    }

    public function eliminarEquipo($codigo){
        $equipos = new EquiposModel();
        $equipos->delete($codigo);
        return $this->index();
    }
}
