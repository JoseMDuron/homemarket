<?php 

	class RolesModel extends Mysql
	{
		public function __construct()
		{
			parent::__construct();
			
		}
		
		public function selectRoles()
		{

		$sql = "SELECT * FROM tbl_ms_rol ";
	
		$request = $this->select_all($sql);

		return $request;

		}
	
	}
?>