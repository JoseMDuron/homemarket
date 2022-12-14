<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
    <meta name="description" content="Home Market">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="StartLinks">
    <meta name="theme-color" content="#1b219d">
    <!-- Main CSS-->
   <title><?= $data['page_tag'] ?></title>
    <link rel="stylesheet" type="text/css" href="Assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="Assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="Assets/css/estilos_dashboard.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

  </head>
  <body class="app sidebar-mini">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="<?= base_url(); ?>/dashboard">Home Market</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li><a class="dropdown-item" href="<?= base_url(); ?>/ajustes"><i class="fa fa-cog fa-lg"></i> Ajustes</a></li>
           
            <li><a class="dropdown-item" href="<?= base_url(); ?>/Cerrar_session_usuario"><i class="fa fa-sign-out fa-lg"></i> Cerrar Sesion</a></li>
          </ul>
        </li>
      </ul>
    </header>
    <?php require_once("nav_admin.php"); ?>