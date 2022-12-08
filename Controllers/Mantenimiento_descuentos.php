<?php

class Mantenimiento_descuentos extends Controllers
{
	public function __construct()
	{
		parent::__construct();
	}

	public function Mantenimiento_descuentos()
	{
		$data['page_id'] = 2;
		$data['page_tag'] = "Mantenimiento_descuentos";
		$data['page_title'] = "Mantenimiento Descuentos";
		$data['page_name'] = "Mantenimiento_descuentos";
		$data['page_functions_js'] = "functions_descuento.js";
		$this->views->getView($this, "mantenimiento_descuentos", $data);
	}

	public function getDescuentos()
	{
		$arrData = $this->model->selectDescuentos();
		for ($i = 0; $i < count($arrData); $i++) {
			$btnView = '';
			$btnEdit = '';
			$btnDelete = '';

			if ($arrData[$i]['status'] == 1) {
				$arrData[$i]['status'] = '<span class="badge badge-success">Activo</span>';
			} else {
				$arrData[$i]['status'] = '<span class="badge badge-danger">Inactivo</span>';
			}

			$btnView = '<button class="btn btn-info btn-sm" onClick="fntViewInfo(' . $arrData[$i]['IdDescuento'] . ')" title="Ver descuento"><i class="far fa-eye"></i></button>';
			$btnEdit = '<button class="btn btn-primary  btn-sm" onClick="fntEditInfo(this,' . $arrData[$i]['IdDescuento'] . ')" title="Editar descuento"><i class="fas fa-pencil-alt"></i></button>';
			$btnDelete = '<button class="btn btn-danger btn-sm" onClick="fntDelInfo(' . $arrData[$i]['IdDescuento'] . ')" title="Eliminar descuento"><i class="far fa-trash-alt"></i></button>';

			$arrData[$i]['options'] = '<div class="text-center">' . $btnView . ' ' . $btnEdit . ' ' . $btnDelete . '</div>';
		}
		echo json_encode($arrData, JSON_UNESCAPED_UNICODE);
		die();
	}

	public function setDescuentos()
	{
		if ($_POST) {
			
			if (empty($_POST['txtNombre']) || empty($_POST['txtDescripcion']) || empty($_POST['txtPorcentajeDeduccion']) || empty($_POST['txtEstado'])) {
				$arrResponse = array("status" => false, "msg" => 'Datos Incorrectos.');
			} else {
				$idDescuento = intval($_POST['IdDescuento']);
				$strNombre = ucwords(strClean($_POST['txtNombre']));
				$strDescripcion = ucwords(strClean($_POST['txtDescripcion']));
				$strPorcentajeDeduccion = floatval($_POST['txtPorcentajeDeduccion']);
				$estado = ucwords(strClean($_POST['txtEstado']));

				if($idDescuento == 0) {
					$request_descuento = $this->model->createDescuento($strNombre, $strPorcentajeDeduccion, $estado, $strDescripcion);
				} else {
					$request_descuento = $this->model->updateDescuento($idDescuento, $strNombre, $strPorcentajeDeduccion, $estado, $strDescripcion);
				}

				if ($request_descuento > 0) {
					$arrResponse = array('status' => true, 'msg' => 'Datos guardados correctamente.');
				} else if ($request_descuento == 'exist') {
					$arrResponse = array('status' => false, 'msg' => '¡Atención! el numero de identidad ya existe, ingrese otro.');
				} else {
					$arrResponse = array("status" => false, "msg" => 'No es posible almacenar los datos.');
				}
			}
			echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
		}
		die();
	}
}
