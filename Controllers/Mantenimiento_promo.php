<?php 

	class Mantenimiento_promo extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		public function Mantenimiento_promo()
		{
			$data['page_id'] = 2;
			$data['page_tag'] = "Mantenimiento_promociones";
			$data['page_title'] = "Mantenimiento_promociones";
			$data['page_name'] = "Mantenimiento_promociones";
			$this->views->getView($this,"mantenimiento_promo",$data);
		}

	}
 ?>