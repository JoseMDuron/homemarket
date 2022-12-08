<?php 

	class Roles extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		public function Roles()
		{
			$data['page_id'] = 2;
			$data['page_tag'] = "Roles Usuario - Home Market";
			$data['page_title'] = "Roles Usuario - Home Market";
			$data['page_name'] = "Roles Usuario";
			$this->views->getView($this,"roles",$data);
		}
			//mostrar los datos de los roles
			public function getRoles()
			{
					$arrData = $this->model->selectRoles();	//guardamos en una variable la llamada al modelo de select roles de la carpeta models
					
					for ($i=0; $i < count($arrData); $i++){
					$arrData[$i]['opciones']='<button class="btn btn-warning" type="button" data-toggle="modal" data-target="#exampleModalScrollable2">Actualizar</button><button class="btn btn-danger" type="button">Eliminar</button>';

					}

					echo json_encode($arrData,JSON_UNESCAPED_UNICODE);
					die();

			}


	}
 ?>