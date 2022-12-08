<?php 

	class CategoriasP extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		public function CategoriasP()
		{
			$data['page_id'] = 2;
			$data['page_tag'] = "Categorias Productos- Home Market";
			$data['page_title'] = "Categorias Productos  - Home Market";
			$data['page_name'] = "Categorias Productos";
			$this->views->getView($this,"categoriasP",$data);
		}

	}
 ?>