<?php 

	class Registro_ClientesModel extends Mysql
	{
       // private $intIdUsuario;
        //private $strRol;
		private $strNombre;
		private $strPassword;
       // private $intprimeringreso;
		private $intTelefono;
        private $strDireccion;
		private $strEmail;
        private $strstatus;
        //private $strfechaultimaconexion;
        //private $strfechavencimiento;
        //private $intpreguntascontestadas;

		public function __construct()
		{ 
			parent::__construct();
		}	
	
        public function insertUsuario(string $nombre,  int $telefono,string $direccion,string $email,string $password ){

         
            $this->strNombre = $nombre;
            $this->strEmail = $email;
       
            $this->strPassword = $password;
            $this->intTelefono = $telefono;
            $this->strDireccion = $direccion;
         
            //$return = 0;

            $sql = "SELECT * FROM tbl_clientes where
                    Correo_Cliente = '$this->strEmail'"; 
            $request = $this->select_all($sql); 
            //validacion de que no existe un identidad y email  igual

            //SELECT * FROM tbl_ms_usuarios where Correo_Electronico = 'ana@gmail.com' or Num_Identidad = 08012;
            
            if(empty($request)){
                $query_insert = "INSERT INTO tbl_clientes (nombre,Telefono,Direccion,Correo_Cliente,contrasena)
                    VALUES(?,?,?,?,?)";
                $arrData = array(
                                 $this->strNombre,
                                 $this->intTelefono,
                                 $this->strDireccion,
                                 $this->strEmail,
                                 $this->strPassword);

                $request_insert = $this->insert($query_insert,$arrData);
                $return = $request_insert;                 
            }else{
                $return = "exist";
            }
            return $return;
        }  //FinalCodigo insertar en la tabla
		

      
   
	}
 ?>