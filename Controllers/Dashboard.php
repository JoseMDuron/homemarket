<?php 

	class Dashboard extends Controllers{
		public function __construct()
		{
			parent::__construct();
			session_start();
			if(empty($_SESSION['login'])){//validamos si existe la variable de session que seria login y lo que va hacer es redireccionar al login 
				header('Location: '.base_url().'/login');//muestra la vista 
			}
		}

		public function dashboard()
		{
			$data['page_id'] = 2;
			$data['page_tag'] = "Dashboard - Home Market";
			$data['page_title'] = "Dashboard - Home Market";
			$data['page_name'] = "dashboard";
			$this->views->getView($this,"dashboard",$data);
		}

	}
 ?>