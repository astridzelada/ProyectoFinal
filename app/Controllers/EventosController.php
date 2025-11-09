<?php

namespace App\Controllers;
use App\Models\EventosModel;

class EventosController extends BaseController
{
    public function index(): string

    {
        $eventos = new EventosModel();
        $datos['datos'] = $eventos->findAll();
        return view('eventos', $datos);
    }


    public function agregarEvento()
    {
        $eventos= new EventosModel();
        $datos=[
            'id_evento'=>$this->request->getPost('txt_idEvento'),
            'tipo_evento'=>$this->request->getPost('txt_tipoEvento'),
            'id_equipo_local'=>$this->request->getPost('txt_equipoLocal'),
            'id_equipo_visitante'=>$this->request->getPost('txt_equipoVisitante'),
            'id_cancha'=>$this->request->getPost('txt_cancha'),
            'fecha'=>$this->request->getPost('txt_cancha'),
            'hora_inicio'=>$this->request->getPost('txt_horaInicio'),
            'hora_fin'=>$this->request->getPost('txt_horaFin'),
            'descripcion'=>$this->request->getPost('txt_descripcion'),
            'resultado_local'=>$this->request->getPost('txt_resultadoLocal'),
            'resultado_visitante'=>$this->request->getPost('txt_resultadoVisitante')

        ];

        $eventos->insert($datos);
        return $this->index();
    }


    
    public function buscarEvento($codigo)
    {
         $evento = new EventosModel();
         $datos['datos'] = $evento->where('id_evento',$codigo)->first();
         return view ('form_editar_eventos', $datos);
    }

    public function modificarEvento(){

        $evento = new EventosModel();
        $datos=[
            
            'id_evento'=>$this->request->getPost('txt_idEvento'),
            'tipo_evento'=>$this->request->getPost('txt_tipoEvento'),
            'id_equipo_local'=>$this->request->getPost('txt_equipoLocal'),
            'id_equipo_visitante'=>$this->request->getPost('txt_equipoVisitante'),
            'id_cancha'=>$this->request->getPost('txt_cancha'),
            'fecha'=>$this->request->getPost('txt_cancha'),
            'hora_inicio'=>$this->request->getPost('txt_horaInicio'),
            'hora_fin'=>$this->request->getPost('txt_horaFin'),
            'descripcion'=>$this->request->getPost('txt_descripcion'),
            'resultado_local'=>$this->request->getPost('txt_resultadoLocal'),
            'resultado_visitante'=>$this->request->getPost('txt_resultadoVisitante')
    
        ];
        $codigo = $this->request->getPost('txt_idEvento');
        $evento ->update($codigo, $datos);
         return $this->index(); 

    }

    public function eliminarEvento($codigo){
       
        $evento = new EventosModel();
        $evento->delete($codigo);
        return $this->index(); 
    }
}
