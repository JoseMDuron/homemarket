<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Main CSS-->
  <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/Assets/css/main.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/Assets/css/estilos_login.css">
  <!-- Font-icon css-->
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Iniciar Sesion</title>
</head>

<body class="  pace-done">
  <div class="pace  pace-inactive">
    <div class="pace-progress" data-progress-text="100%" data-progress="99" style="transform: translate3d(100%, 0px, 0px);">
      <div class="pace-progress-inner"></div>
    </div>
    <div class="pace-activity"></div>
  </div>
  <section class="material-half-bg">
    <div class="cover"></div>
  </section>
  <section class="login-content">
    <div class="logo">
      <h1><img class="logo_login" src="<?= base_url(); ?>/Assets/images/logo.jpeg" alt="User Image"></h1>
    </div>
    <div class="login-box" style="padding-top: 5m;">
      <form class="login-form" action="" id="formPrimer_Ingreso" name="formPrimer_Ingreso">
        <center>
          <h5>!Hola <?= $data['Nombre']; ?> </h5>
        </center>


        <h5 class="login-head"><i class=""></i>Ingresa tus preguntas de seguridad</h5>
        <div class="form-group">

          <div class="form-group">
            <label>Ingrese su pregunta</label>

            <input type="hidden" id="email" name="email" value="<?= $data['email']; ?>" action="" required></input>
            <select class="form-control" aria-label="Default select example" id="form_list_preguntasP" name="form_list_preguntasP"></select>


          </div>
        </div>

        <label class="control-label">Respuesta:</label>

        <input class="form-control" id="txt_Respuesta" name="txt_Respuesta" type="text">
        <div class="form-group">
          <div class="utility">

          </div>
          <div class="form-group btn-container">
            <br>

            <button class="btn btn-primary btn-block" type="submit"><i class="fa fa-sign-in fa-lg fa-fw"></i>ACEPTAR</button>
            <div class="form-group mt-3">

              <p class="semibold-text mb-0"><a href="<?= base_url(); ?>/login" data-toggle="flip"><i class="fa fa-angle-left fa-fw"></i> Regresar </a></p> <br>
            </div>

          </div>
          <br> <br>
      </form>

    </div>
  </section>

  <script>
    const base_url = "<?= base_url(); ?>"; // nos ayuda a usar la funcion base url donde nos devuelve la ruta raiz del proyecto y por lo tanto se puede usar en archivo js de login
  </script>
  <!-- Essential javascripts for application to work-->
  <script src="<?= base_url(); ?>/Assets/js/jquery-3.3.1.min.js"></script>
  <script src="<?= base_url(); ?>/Assets/js/popper.min.js"></script>
  <script src="<?= base_url(); ?>/Assets/js/bootstrap.min.js"></script>
  <script src="<?= base_url(); ?>/Assets/js/main.js"></script>
  <!-- The javascript plugin to display page loading on top-->
  <script src="<?= base_url(); ?>/Assets/js/plugins/pace.min.js"></script>
  <script type="text/javascript" src="<?= base_url(); ?>/Assets/js/plugins/sweetalert.min.js"></script>
  <script src="<?= base_url(); ?>/Assets/js/<?= $data['page_functions_js']; ?>"></script>


</body>

</html>