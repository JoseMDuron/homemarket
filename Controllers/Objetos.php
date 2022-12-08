<?php 

	class Objetos extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		public function Objetos()
		{
			$data['page_id'] = 2;
			$data['page_tag'] = "Objetos - Home Market";
			$data['page_title'] = "Objetos - Home Market";
			$data['page_name'] = "Objetos";
			$this->views->getView($this,"objetos",$data);
		}

	}
 ?>