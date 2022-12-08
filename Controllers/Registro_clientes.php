<?php 

	class Registro_clientes extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		public function Registro_clientes()
		{
			$data['page_id'] = 2;
			$data['page_tag'] = "clientes";
			$data['page_title'] = "clientes";
			$data['page_name'] = "clientes";
			$this->views->getView($this,"registro_clientes",$data);
		}


		public function setRegistroUsuario(){
			if ($_POST) {

				//validacion de todos los datos fueron enviados	
				if (empty($_POST['txtNombre']) ||empty($_POST['txtEmail'])|| empty($_POST['txtcontrasena'])  ||  empty($_POST['txtcontrasenaM']) || empty($_POST['txtTelefono']) || empty($_POST['txtDireccion'])) {
					$arrResponse = array("status" => false, "msg" => 'Datos incorrectos.');
				} else { //limpiar los datos 
					//crear variables donde estamos almacenando

			
					$strNombre = (strClean($_POST['txtNombre']));
					$strEmail = (strClean($_POST['txtEmail']));
					$strContrasena = (strClean($_POST['txtcontrasena']));
					$strConfirmContrasena = (strClean($_POST['txtcontrasenaM']));
					$intTelefono = intval(strClean($_POST['txtTelefono']));
					$strDireccion = ucwords(strClean($_POST['txtDireccion']));

					$request_user = "";
					if($strContrasena != $strConfirmContrasena){
	
						$arrResponse = array("status" => false, "msg" => 'Las contraseñas deben ser iguales');
	
					}else{
	
						
							$strPassword =  empty($_POST['txtcontrasena']) ? hash("SHA256", passGenerator()) : hash("SHA256", $_POST['txtcontrasena']);
		
							$request_user = $this->model->insertUsuario($strNombre, $intTelefono,  $strDireccion,$strEmail, $strPassword );
																		 
							
					
						if ($request_user > 0) {

							$strPasswordC = (strClean($_POST['txtcontrasena']));
							$strEmail = strtolower(strClean($_POST['txtEmail'])); //la funcion strlower convierte todos los valores de txt en minusculas y strClean limpia los campos que intentan hacer una consulta sql
						//envia como parametro el email al metodo getUserEmail del modelo	
					
		
							//$id_Usuario = $arrData['id_usuario'];
							$nombreUsuario = $strNombre;
	
						$url_recovery = base_url() . '/home';
	
				
						$dataUsuario = array('nombreUsuario' => $nombreUsuario,
							'email' => $strEmail,
							'password' => $strPasswordC,
							'asunto' => 'Bienvenido (a) - ' . NOMBRE_REMITENTE,
							'url_recovery' => $url_recovery
						);
							
							$sendEmail = sendMailLocal($dataUsuario, 'correo_bienvenida');
					
							if($request_user !='exist'){
								
								
							 $arrResponse = array('status' => true, 'msg' => 'Datos guardados correctamente.');
		
							}else if ($request_user =='exist') {
								$arrResponse = array('status' => false, 'msg' => '¡Atención! el email  ya existe, ingrese otro.');
							} else {
								$arrResponse = array("status" => false, "msg" => 'No es posible almacenar los datos.');
							}
		
						}
					}
					}
	
				echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
			}
			die();
		}

        

	}
 ?>