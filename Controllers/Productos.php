<?php 

	class Productos extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		public function Productos()
		{
			$data['page_id'] = 2;
			$data['page_tag'] = "Productos - Home Market";
			$data['page_title'] = "Productos - Home Market";
			$data['page_name'] = "Productos";
			$this->views->getView($this,"productos",$data);
		}

	}
 ?>