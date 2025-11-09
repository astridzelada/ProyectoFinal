<?php

namespace App\Controllers;
use App\Models\PagosModel;

class PagosController extends BaseController
{
    public function index(): string
    {
        $pagos = new PagosModel();

        $datos['datos'] = $pagos->findAll();
        return view('pagos', $datos);
    }

     public function agregarPago()

    {
        $pagos = new PagosModel();

        $datos=[
            'id_pago'=>$this->request->getPost('txt_codigo'),
            'id_usuario'=>$this->request->getPost('txt_usuario'),
            'concepto'=>$this->request->getPost('txt_concepto'),
            'monto'=>$this->request->getPost('txt_monto'),
            'fecha_pago'=>$this->request->getPost('txt_fecha'),
            'metodo_pago'=>$this->request->getPost('txt_metodo'),
            'estado'=>$this->request->getPost('txt_estado'),
        ];
        //print_r($datos);
        $pagos->insert($datos);
        return $this->index();
    }

      public function buscarPagos($codigo){

        $pago = new PagosModel();

        $datos['datos'] = $pago->where('id_pago', $codigo)->first();
        return view('form_editarpago',$datos);
    }

    public function modificarPagos(){
        $pago = new PagosModel();
        $datos=[
            'id_ususario'=>$this->request->getPost('txt_usuario'),
            'concepto'=>$this->request->getPost('txt_concepto'),
            'monto'=>$this->request->getPost('txt_monto'),
            'fecha_pago'=>$this->request->getPost('txt_pago'),
            'metodo_pago'=>$this->request->getPost('txt_metodo'),
            
            
        ];

        $codigo=$this->request->getPost('txt_codigo');
        $pago->update($codigo, $datos);
        return $this->index();
    }

    public function eliminarPagos($codigo){
        $pago = new PagosModel();
        $pago->delete($codigo);
        return $this->index();
    }
}
