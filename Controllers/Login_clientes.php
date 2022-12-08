<?php 

	class Login_clientes extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		public function Login_clientes()
		{
			$data['page_id'] = 3;
			$data['page_tag'] = "Login_clientes";
			$data['page_title'] = "";
			$data['page_name'] = "";
			$data['page_functions_js'] = "functions_login_clientes.js";
			$this->views->getView($this,"login_clientes",$data);
		}
		public function loginClientesWeb(){
		//dep($_POST);
	//	die();

		if ($_POST) { // SI SE REALIZA UNA PETICION POST
			if (empty($_POST['txtEmailCliente']) || empty($_POST['txtPasswordCliente'])) { //valida que los textbox esten vacios y manda msj de error
				$arrResponse = array('status' => false, 'msg' => 'Error de datos');
			} else { //si no estan vacios
				$strUsuario = strtolower(strClean($_POST['txtEmailCliente'])); //obtiene el correo electronico en minisculas en caso de que este en mayusculas 
				$strPassword =hash("SHA256", $_POST['txtPasswordCliente']);	 //encripta la contrasena
				$requestUser = $this->model->loginCliente($strUsuario, $strPassword); //en la variable requestUser va almacenar lo que este en la funcion loginUser del modelo y se envia como parametro el usuario y la contrasena
				////dep($requestUser);
				//die();

				if (empty($requestUser)) {
					$arrResponse = array('status' => false, 'msg' => 'El usuario o la contraseña es incorrecta');
				} else {
					$arrData = $requestUser;
					
						$_SESSION['id_User'] = $arrData['id_cliente'];
					//	$_SESSION['login'] = true;
						$arrResponse = array('status' => true, 'msg' => 'ok');
				
				}
			}
			echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
		}
		die();
	}

	public function resetPassCliente()
	{

		if ($_POST) {

			if (empty($_POST['txtEmailReiniciarCliente'])) { //validar que el campo del correo no este vacio
				$arrResponse = array('status' => false, 'msg' => 'Error de datos');
			} else {
				$token = token(); //almacena el valor del token que se genera en la funcion token
				$strEmail = strtolower(strClean($_POST['txtEmailReiniciarCliente'])); //la funcion strlower convierte todos los valores de txt en minusculas y strClean limpia los campos que intentan hacer una consulta sql
				$arrData = $this->model->getClientEmail($strEmail); //envia como parametro el email al metodo getUserEmail del modelo	
				if (empty($arrData)) {
					
					$arrResponse = array('status' => false, 'msg' => 'No existe un usuario asociado con este correo');
				} else {
					
					$id_Usuario = $arrData['id_Usuario'];
					$nombreUsuario = $arrData['nombre'];

					$url_recovery = base_url() . '/login_clientes/confirmclient/' . $strEmail . '/' . $token;

					$requestUpdate = $this->model->setTokenClient($id_Usuario, $token);

					$dataUsuario = array(
						'nombreUsuario' => $nombreUsuario,
						'email' => $strEmail,
						'asunto' => 'Recuperar cuenta - ' . NOMBRE_REMITENTE,
						'url_recovery' => $url_recovery
					);

					if ($requestUpdate) {


						$sendEmail = sendEmail($dataUsuario, 'email_cambioPassword');
						//var_dump($sendEmail);
						//	exit;
						if ($sendEmail) {
							$arrResponse = array('status' => true, 'msg' => 'Se ha enviado un email a tu cuenta de correo para cambiar la contraseña');
						} else {
							$arrResponse = array('status' => false, 'msg' => 'No es posible realizar el proceso, intenta mas tarde');
						}
					} else {
						$arrResponse = array('status' => false, 'msg' => 'No es posible realizarsss el proceso, intenta mas tarde');
					}
				}
			}
			echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
		}
		die();
	}

	public function confirmClient(string $params)
	{ //confirma que el usuario ingresado exista en la base de datos, si es verdadero entonces le muestra la vista del cambio de contraseña

		if (empty($params)) {
			header('Location: ' . base_url().'/login_clientes'); //regresa a la ruta raiz del proyecto si no hay parametro
		} else {
			$arrParams = explode(',', $params); // por medio de explode convierte a un arreglo toda la cadena
			$strEmail = strClean($arrParams[0]); //valor del arreglo en la posicion 0
			$strToken = strClean($arrParams[1]); //valor del arreglo en la posicion 1

			$arrResponse = $this->model->getCliente($strEmail, $strToken);
			$arrData = $this->model->getClientEmail($strEmail); //envia como parametro el email al metodo getUserEmail del modelo	
			$nombreUsuario = $arrData['nombre'];



			if (empty($arrResponse)) {
				header('Location: ' . base_url().'/login_clientes'); //regresa a la ruta raiz del proyecto si no hay parametro
			} else {
				$data['page_name'] = "cambiar_contraseña";
				$data['page_tag'] = "cambiar contrasña";
				$data['page_title'] = "Cambiar contraseña";
				$data['id_Usuario'] = $arrResponse['id_Usuario'];
				$data['Email'] = $strEmail;
				$data['Token'] = $strToken;
				$data['nombre'] = $nombreUsuario;
				$data['page_functions_js'] = "functions_login_clientes.js";
				$this->views->getView($this, "cambio_contraseña_clientes", $data);//se abre la vista
			}
		}
		die();
	}
	public function setPasswordClient()
	{
		if (empty($_POST['id_Usuario']) || empty($_POST['txtpassword_C']) || empty($_POST['txt_token']) ||empty($_POST['txtpassword_C']) || empty($_POST['txtpasswordconfirm_C'])) { //valida que todos los campos esten llenos
			$arrResponse = array(
				'status' => false,
				'msg' => 'Error de datos'
			);
		} else {
			$intIdusuario = intval($_POST['id_Usuario']); //intval convierte a entero la variable
			$strPassword = $_POST['txtpassword_C'];
			$strPasswordConfirm = ($_POST['txtpasswordconfirm_C']);
			$strEmail = strClean($_POST['txt_email']);
			$strToken = strClean($_POST['txt_token']);

			if ($strPassword != $strPasswordConfirm) {
				$arrResponse = array(
					'status' => false,
					'msg' => 'Las contraseñas no son iguales'
				);
			} else {
				$arrResponseUser = $this->model->getClient($strEmail, $strToken);
				if (empty($arrResponseUser)) {
					$arrResponse = array(
						'status' => false,
						'msg' => 'Error de datos'
					);
				} else {
					$strPassword = ($strPassword); // para encriptar contraseña
					$requestPass = $this->model->insertPasswordClient($intIdusuario, $strPassword);

					if ($requestPass) {
						$arrResponse = array(
							'status' => true,
							'msg' => 'Contraseña actualizada con exito'
						);
					} else {
						$arrResponse = array(
							'status' => false,
							'msg' => 'No es posible realizar el proceso, intente mas tarde'
						);
					}
				}
			}
		}
		echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
		die();
	}
	}
 ?>