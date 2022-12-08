<?php

    class clientesModel extends Mysql
    {
        private $intId_Cliente;
        private $strNombre;
        private $strApellidos;
        private $strCorreo_Cliente;
        private $intTelefono;
        private $intContraseña;
        private $intCategoria;
        private $strNumero_ID;
        private $strFecha_de_registro;

        public function __construct()
        {
            parent::__construct();
        }

        public function selectClientes()
        {
            $sql = "SELECT * FROM tbl_clientes WHERE Categoria !=0";
            $request = $this->select_all($sql);
            return $request;
        }

        
        

        public function insertCliente(string $nombre, string $apellidos, string $correo_cliente, int $telefono,  string $contraseña, int $categoria, string $numero_id, string $fecharegistro)
        {

            $this->strNombre = $nombre;
            $this->strApellidos = $apellidos;
            $this->strCorreo_Cliente = $correo_cliente;
            $this->intTelefono = $telefono;
            $this->intContraseña = $contraseña;
            $this->intCategoria = $categoria;
            $this->strNumero_Identidad = $numero_id;
            $this->strFecha_de_registro = $fecharegistro;
            $return = 0;

            $sql = "SELECT * FROM tbl_clientes WHERE
                    correo_cliente ='{$this->strCorreo_Cliente}' or numero_id = '{$this->strNumero_Identidad}'";
            $request = $this->select_all($sql);
            if(empty($request))
            
             {
                    $query_insert = "INSERT INTO tbl_clientes(
                        nombre,apellidos,correo_cliente,telefono,contrasena,categoria,numero_id,fecha_registro)
                                VALUES(?,?,?,?,?,?,?,?)";
                        $arrData = array($this->strNombre,
                                $this->strApellidos,
                                $this->strCorreo_Cliente,
                                $this->intTelefono,
                                $this->intContraseña,
                                $this->intCategoria,
                                $this->strNumero_Identidad,
                                $this->strFecha_de_registro);
                     $request_insert = $this->insert($query_insert,$arrData);
                     $return = $request_insert;
                }else{
                     $return = "exist";
                    }
                return $return;
            
         }  
         
        
     }
    
?>