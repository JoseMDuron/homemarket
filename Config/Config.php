<?php 
	
	//define("BASE_URL", "http://localhost/ProyectoHomeMarket/");
	const BASE_URL = "http://localhost:80/ProyectoHomeMarket";

	//Zona horaria
	date_default_timezone_set('America/Guatemala');

	//Datos de conexión a Base de Datos
	const DB_HOST = "localhost";
	const DB_NAME = "proyectohomemarket";
	const DB_USER = "root";
	const DB_PASSWORD = "";
	const DB_CHARSET = "charset=utf8";
	// PARA ENVIO DE CORREO
	const ENVIRONMENT = 1;// LOCAL: 0 PRODUCCION 1;

	//Deliminadores decimal y millar Ej. 24,1989.00
	const SPD = ".";
	const SPM = ",";

	//Simbolo de moneda
	const SMONEY = "L";
	$UsuarioG = 2;

	//Datos envio de correo electronico

	const NOMBRE_REMITENTE = "Home Market";
	const EMAIL_REMITENTE = "no-replay@startlinks1.com";

	const NOMBRE_EMPRESA = "Home Market";
	const WEB_EMPRESA = "www.homemarket.com";

 ?>