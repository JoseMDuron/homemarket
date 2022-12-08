<?php 

	class Pedidos extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		public function Pedidos()
		{
			$data['page_id'] = 2;
			$data['page_tag'] = "Pedidos - Home Market";
			$data['page_title'] = "Pedidos - Home Market";
			$data['page_name'] = "Pedidos";
			$this->views->getView($this,"pedidos",$data);
		}

	}
 ?>