<?php 

	class Clientes extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		public function Clientes()
		{+
			$data['page_id'] = 2;
			$data['page_tag'] = "Clientes  - Home Market";
			$data['page_title'] = "Clientes  - Home Market";
			$data['page_name'] = "Clientes";
			$this->views->getView($this,"clientes",$data);
		}

		public function getClientes()
		{
			$arrData = $this->model->selectClientes();
			for ($i=0; $i < count($arrData); $i++) {
				if($arrData[$i]['Categoria'] == 1)
			{
				$arrData[$i]['Categoria'] = '<span class="badge badge-success">Cliente Normal</span>';
			} else{
				$arrData[$i]['Categoria'] = '<span class="badge badge-warning">Cliente Vip</span>';
			}

			$arrData[$i]['options'] = '<div class="text-center">
			<button class="btn btn-info btn-sm btnViewCliente" cl="'.$arrData[$i]['Id_Cliente'].'" title="Ver Cliente"><i class="far fa-eye"></i></button>
			<button class="btn btn-primary" btn-sm btnActCli" cl="'.$arrData[$i]['Id_Cliente'].'" title="Actualizar"><i class="fa-solid fa-square-pen"></i></button>
			<button class="btn btn-danger" btn-sm btnAEliCli" cl="'.$arrData[$i]['Id_Cliente'].'" title="Eliminar"><i class="far fa-trash-alt"></i></button>
			</div>';
			}
			
			echo json_encode($arrData,JSON_UNESCAPED_UNICODE);
			die();
			
		
		}
		public function setClientes()
		{
			if($_POST){
				//dep($_POST);
				//echo $_POST['txtNumIdentidad'];
				if(empty($_POST['txtNombre']) || empty($_POST['txtApellidos']) || empty($_POST['txtCorreoelectronico']) || empty($_POST['txttelefono']) ||
				empty($_POST['listCat']) || empty($_POST['txtContraseña']) || empty($_POST['txtNumIdentidad']) || empty($_POST['txtFecharegistro']) )
			{
				$arrResponse = array("status" => false, "msg" => 'Datos Incorrectos.');
			}else {
				$strNombre = ucwords(strClean($_POST['txtNombre']));
				$strApellidos = ucwords(strClean($_POST['txtApellidos']));
				$strCorreo_Cliente = strtolower(strClean($_POST['txtCorreoelectronico']));
				$intTelefono = intVal(strClean($_POST['txttelefono']));
				$intCategoria = intVal(strClean($_POST['listCat']));
				$strContraseña = ucwords(strClean($_POST['txtContraseña']));
				$strNumero_Identidad = strCLean($_POST['txtNumIdentidad']);
				$strFecha_de_registro = strCLean($_POST['txtFecharegistro']);

				$strContraseña = empty($_POST['txtContraseña']) ? hash("SHA256",passGenerator()) : hash("SHA256",$_POST['txtContraseña']);
				$request_user = $this->model->insertCliente($strNombre, $strApellidos, $strCorreo_Cliente, $intTelefono, $strContraseña, $intCategoria, $strNumero_Identidad, $strFecha_de_registro);

				if($request_user > 0 )
				{
					$arrResponse = array('status' => true, 'msg' => 'Datos guardados correctamente.');
				} else if($request_user == 'exist'){
					$arrResponse = array('status' => false, 'msg' => '¡Atención! el numero de identidad ya existe, ingrese otro.');
				}else{
					$arrResponse = array("status" => false, "msg" => 'No es posible almacenar los datos.');
				}

			}
				echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
			}
			die();
		
		}
		public function getCliente(int $Id_Cliente)
		{
			echo $Id_Cliente;
			die();
		}

		
	}
	
	 		
?>