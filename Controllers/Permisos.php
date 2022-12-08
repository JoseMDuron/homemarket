<?php 

	class Permisos extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		public function Permisos()
		{
			$data['page_id'] = 2;
			$data['page_tag'] = "Permisos - Home Market";
			$data['page_title'] = "Permisos - Home Market";
			$data['page_name'] = "Permisos";
			$this->views->getView($this,"permisos",$data);
		}

	}
 ?>