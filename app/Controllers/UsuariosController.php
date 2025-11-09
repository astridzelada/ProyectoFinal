<?php

namespace App\Controllers;
use App\Models\UsuariosModel;

class UsuariosController extends BaseController
{
    public function index(): string
    {
        $usuarios = new UsuariosModel();

        $datos['datos'] = $usuarios->findAll();
        return view('usuarios', $datos);
    }
     public function agregarUsuario()

    {
        $usuarios = new UsuariosModel();

        $datos=[
            'id_usuario'=>$this->request->getPost('txt_codigo'),
            'nombre'=>$this->request->getPost('txt_nombre'),
            'apellido'=>$this->request->getPost('txt_apellido'),
            'fecha_nacimiento'=>$this->request->getPost('txt_fechanac'),
            'DPI'=>$this->request->getPost('txt_dpi'),
            'telefono'=>$this->request->getPost('txt_telefono'),
            'email'=>$this->request->getPost('txt_correo'),
            'direccion'=>$this->request->getPost('txt_direccion'),
            'rol'=>$this->request->getPost('txt_rol'),
            'categoria'=>$this->request->getPost('txt_categoria'),
            'posicion'=>$this->request->getPost('txt_posicion'),
            'licencia'=>$this->request->getPost('txt_licencia'),
            'especialidad'=>$this->request->getPost('txt_especialidad'),
            'estado'=>$this->request->getPost('txt_estado'),
        ];
        //print_r($datos);
        $usuarios->insert($datos);
        return $this->index();
    }

    public function buscarUsuarios($codigo){

        $usuario = new UsuariosModel();

        $datos['datos'] = $usuario->where('id_usuario', $codigo)->first();
        return view('form_editarusuario',$datos);
    }

    public function modificarUsuarios(){
        $usuario = new UsuariosModel();
        $datos=[
            'nombre'=>$this->request->getPost('txt_nombre'),
            'apellido'=>$this->request->getPost('txt_apellido'),
            'fecha_nacimiento'=>$this->request->getPost('txt_fechanac'),
            'DPI'=>$this->request->getPost('txt_dpi'),
            'telefono'=>$this->request->getPost('txt_telefono'),
            'email'=>$this->request->getPost('txt_correo'),
            'direccion'=>$this->request->getPost('txt_direccion'),
            'rol'=>$this->request->getPost('txt_rol'),
            'categoria'=>$this->request->getPost('txt_categoria'),
            'posicion'=>$this->request->getPost('txt_posicion'),
            'licencia'=>$this->request->getPost('txt_licencia'),
            'especialidad'=>$this->request->getPost('txt_especialidad'),
            'estado'=>$this->request->getPost('txt_estado'),
            
        ];

        $codigo=$this->request->getPost('txt_codigo');
        $usuario->update($codigo, $datos);
        return $this->index();
    }

    public function eliminarUsuarios($codigo){
        $usuario = new UsuariosModel();
        $usuario->delete($codigo);
        return $this->index();
    }
}
