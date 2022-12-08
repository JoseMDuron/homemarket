<?php 

	class Parametros extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		public function Parametros()
		{
			$data['page_id'] = 2;
			$data['page_tag'] = "Parametros - Home Market";
			$data['page_title'] = "Parametros - Home Market";
			$data['page_name'] = "Parametros";
			$this->views->getView($this,"parametros",$data);
		}

	}
 ?>