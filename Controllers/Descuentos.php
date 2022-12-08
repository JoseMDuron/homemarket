<?php

class Descuentos extends Controllers
{
	public function __construct()
	{
		parent::__construct();
	}

	public function Descuentos()
	{
		$data['page_id'] = 2;
		$data['page_tag'] = "Descuentos - Home Market";
		$data['page_title'] = "Descuentos - Home Market";
		$data['page_name'] = "Descuentos";
		$this->views->getView($this, "descuentos", $data);
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

				if ($idDescuento == 0) {
					$request_descuento = $this->model->createDescuento($strNombre, $strPorcentajeDeduccion, $estado, $strDescripcion);
				} else {
					$request_descuento = $this->model->updateDescuento($idDescuento, $strNombre, $strPorcentajeDeduccion, $estado, $strDescripcion);
				}

				if ($request_descuento > 0) {
					$arrResponse = array('status' => true, 'msg' => 'Datos guardados correctamente.');
				} else {
					$arrResponse = array("status" => false, "msg" => 'No es posible almacenar los datos.');
				}
			}
			echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
		}
		die();
	}

	public function getDescuento($idDescuento)
	{
		$idDescuento = intval($idDescuento);
		if ($idDescuento > 0) {
			$arrData = $this->model->selectDescuento($idDescuento);
			if (empty($arrData)) {
				$arrResponse = array('status' => false, 'msg' => 'Datos no encontrados.');
			} else {
				$arrResponse = array('status' => true, 'data' => $arrData);
			}
			echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
		}
		die();
	}

	public function getDescuentos()
	{
		$arrData = $this->model->selectDescuentos();

		for ($i = 0; $i < count($arrData); $i++) {
			$btnView = '';
			$btnEdit = '';
			$btnDelete = '';

			if ($arrData[$i]['Estado'] == 1) {
				$arrData[$i]['Estado'] = '<span class="badge badge-success">Activo</span>';
			} else {
				$arrData[$i]['Estado'] = '<span class="badge badge-danger">Inactivo</span>';
			}

			$btnView = '<button class="btn btn-info btn-sm" onClick="fntViewInfo(' . $arrData[$i]['Id_Descuento'] . ')" title="Ver descuento"><i class="fa fa-eye"></i></button>';
			$btnEdit = '<button class="btn btn-primary btn-sm" onClick="fntEditInfo(this,' . $arrData[$i]['Id_Descuento'] . ')" title="Editar descuento"><i class="fa fa-pencil-square-o"></i></button>';
			$btnDelete = '<button class="btn btn-danger btn-sm" onClick="fntDelInfo(' . $arrData[$i]['Id_Descuento'] . ')" title="Eliminar descuento"><i class="fa fa-trash"></i></button>';

			$arrData[$i]['options'] = '<div class="text-center">' . $btnView . ' ' . $btnEdit . ' ' . $btnDelete . '</div>';
		}
		echo json_encode($arrData, JSON_UNESCAPED_UNICODE);
		die();
	}

	public function deleteDescuento()
	{
		if ($_POST) {

			$IdDescuento = intval($_POST['idDescuento']);
			$requestDelete = $this->model->deleteDescuento($IdDescuento);
			if ($requestDelete) {
				$arrResponse = array('status' => true, 'msg' => 'Se ha eliminado el descuento');
			} else {
				$arrResponse = array('status' => false, 'msg' => 'Error al eliminar el descuento.');
			}
			echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
		}
		die();
	}
}
