<?php 

	class Promociones extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		public function Promociones()
		{
			$data['page_id'] = 2;
			$data['page_tag'] = "Promociones - Home Market";
			$data['page_title'] = "Promociones - Home Market";
			$data['page_name'] = "Promociones";
			$this->views->getView($this,"promociones",$data);
		}

	}
 ?>