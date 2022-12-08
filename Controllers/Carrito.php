<?php 

	class Carrito extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		public function Carrito()
		{
			$data['page_id'] = 2;
			$data['page_tag'] = "";
			$data['page_title'] = "";
			$data['page_name'] = "";
			$this->views->getView($this,"carrito",$data);
		}

	}
 ?>