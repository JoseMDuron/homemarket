<?php 

	class Ajustes_clientes extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		public function Ajustes_clientes()
		{
			$data['page_id'] = 2;
			$data['page_tag'] = "Ajustes";
			$data['page_title'] = "Ajustes";
			$data['page_name'] = "Ajustes";
			$this->views->getView($this,"ajustes_clientes",$data);
		}

	}
 ?>