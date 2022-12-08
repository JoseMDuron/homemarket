<?php 

	class Bitacora extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		public function Bitacora()
		{
			$data['page_id'] = 2;
			$data['page_tag'] = "Bitacora- Home Market";
			$data['page_title'] = "Bitacora  - Home Market";
			$data['page_name'] = "Bitacora";
			$this->views->getView($this,"bitacora",$data);
		}

		public function getBitacora()
        {
         $arrData = $this->model->selectBitacora();
		 echo json_encode($arrData,JSON_UNESCAPED_UNICODE);
		die();
        }
	}
 ?>