<?php 

	class Mantenimiento extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		public function Mantenimiento()
		{
			$data['page_id'] = 2;
			$data['page_tag'] = "Mantenimiento";
			$data['page_title'] = "Mantenimiento";
			$data['page_name'] = "Mantenimiento";
			$this->views->getView($this,"mantenimiento",$data);
		}

	}
 ?>