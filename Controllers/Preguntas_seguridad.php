<?php 

	class Preguntas_seguridad extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		public function Preguntas_seguridad()
		{
			$data['page_id'] = 2;
			$data['page_tag'] = "";
			$data['page_title'] = "Preguntas seguridad";
			$data['page_name'] = "Preguntas seguridad";
			$this->views->getView($this,"preguntas_seguridad",$data);
		}

	}
 ?>