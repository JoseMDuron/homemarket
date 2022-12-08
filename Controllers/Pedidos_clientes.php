<?php 

	class Pedidos_clientes extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		public function Pedidos_clientes()
		{
			$data['page_id'] = 2;
			$data['page_tag'] = "";
			$data['page_title'] = "";
			$data['page_name'] = "";
			$this->views->getView($this,"pedidos_clientes",$data);
		}

	}
 ?>