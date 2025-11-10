<?php

namespace App\Controllers;
use App\Models\AdministradorModel;

class AdministradorController extends BaseController
{

    // metodo para inicio de sesion 
    public function index()
    {
        $email = $this->request->getPost('txt_usuario');
        $contra = $this->request->getPost('txt_contra');

        $usuarios = new AdministradorModel();

        $datos = $usuarios->where('email',$email)
            ->where('password',$contra)
            ->first();
        

        if($datos){
            //print_r($datos);
             //echo ("<br>nombre: ". $datos['nombre']);
             //echo ("<br>Tipo Usuario: ". $datos['tipo_usuario_id']);
             if($datos['tipo_usuario_id']==1){
                return view('menuAdmi');
             }elseif($datos['tipo_usuario_id']==2){
                return view('menuEntrenador');
             }elseif($datos['tipo_usuario_id']==3){
                return view('menuJuagador');
            }else{
                echo("Tipo de datos desconocidos");
            }
       
         }else{
            return redirect()->to(base_url(''));
         }
   }
}
