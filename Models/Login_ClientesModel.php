<?php 

	class Login_ClientesModel extends Mysql
	{
        //variables a usar
        private $intIdUsuario;
        private $strUsuario;
        private $strPassword;
       
        private $strEmail;

		public function __construct()
		{
			parent::__construct();
			
		}

        public function loginCliente(string $usuario, string $password){

            $this->strUsuario = $usuario; // asigamos a la variable usuario el valor que la funcion trae como parametro de usuario y lo mismo para la contrasena
            $this->strPassword = $password;
            $sql = "SELECT id_cliente ,nombre FROM tbl_clientes WHERE 
                    correo_cliente = '$this->strUsuario' and
                    contrasena = '$this->strPassword' ";
                    
                    $request = $this->select($sql);
                    return $request;
        }
        
        public function getClientEmail(string $strEmail){
            $this->strUsuario = $strEmail;
            $sql = "SELECT id_Usuario ,nombre,estado FROM tbl_ms_usuarios WHERE 
            correo_electronico = '$this->strUsuario' and
            estado = 1 ";

            $request = $this->select($sql);
            return $request;

        }
        public function setTokenClient(int $id_Usuario, string $token){
            $this->intIdUsuario = $id_Usuario;
            $this->strToken = $token;

            $sql = "UPDATE tbl_ms_usuarios SET token = ? WHERE id_Usuario = $this->intIdUsuario";
            $arrData = array($this->strToken);
            $request = $this->update($sql,$arrData);
            return $request;

        }
        public function getCliente(string $email, string $token){//obtiene el id de la persona y valida si el token es igual al que esta en la BD
            $this->strUsuario = $email;
            $this->strToken = $token;
            $sql = "SELECT id_Usuario FROM tbl_ms_usuarios WHERE correo_electronico = '$this->strUsuario' and
            token = '$this->strToken' and estado = 1";
            $request = $this->select($sql);
            return $request;

        }
        public function insertPasswordClient(int $id_Usuario, string $contraseña){
            $this->intIdusuario = $id_Usuario;
            $this->strPassword = $contraseña;
            $sql = "UPDATE tbl_ms_usuarios SET contraseña = ?, Token = ? WHERE id_Usuario = $this->intIdusuario";
            $arrData = array($this->strPassword, "");
            $request = $this->update($sql,$arrData);
            return $request;
        }
     
        	

	}
?>