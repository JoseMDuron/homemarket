<?php 

	class Cerrar_session_usuario 
    {
		public function __construct()
		{
			
			session_start();//inicializaando sesion
            session_unset();//limpiando variable de sesion
            session_destroy();//destruir variables de session
            header('location: '.base_url().'/login');//reedireciona al login 
			
		
		}

	}
 ?>