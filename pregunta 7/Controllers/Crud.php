<?php

namespace App\Controllers;
use App\Models\CrudModel;

class Crud extends BaseController
{
    public function index()
    {
        $Crud=new CrudModel();
        $datos=$Crud->listarNombres();

        $data=[
            "datos"=>$datos
        ];
        return view('listado',$data);
    }

    public function crear(){
		$id_persona = $this->CrudModel->create($_POST);
		if ($id_persona==0) {
			$personaj['result'] = 'ERROR';
			$personaj['Message'] = 'No Insertado';
		}else{
			$persona = $this->CrudModel->one($id_persona);
			$personaj['Result'] = 'OK';
			$personaj['Record'] = $persona;
		}
		echo json_encode($personaj);
    }

    public function actualizar(){
        $id = $_POST['id'];
		unset($_POST['id']);
		$status = $this->CrudModel->update($id,$_POST);
		if ($status) {
			$persona = $this->CrudModel->one($id);
			$jTableResult['Result'] = 'OK';
			$jTableResult['Record'] = $persona;
		}else{
			$jTableResult['Result'] = 'ERROR';
			$jTableResult['Message'] = 'No actualizado';
		}
		echo json_encode($jTableResult);
    }

    public function eliminar(){
        $status = $this->CrudModel->delete($_POST['id']);
		if ($status) {
			$jTableResult['Result'] = 'OK';
		}else{
			$jTableResult['Result'] = 'ERROR';
			$jTableResult['Message'] = 'No eliminado';
		}
		echo json_encode($jTableResult);
    }

    public function obtenerCi(){
        
    }
}
