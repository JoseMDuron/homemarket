<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Main CSS-->
  <link rel="stylesheet" type="text/css" href="Assets/css/main.css">
  <link rel="stylesheet" type="text/css" href="Assets/css/estilos_login.css">
  <!-- Font-icon css-->
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Iniciar Sesion</title>
</head>

<body class="">

  <section class="material-half-bg">
    <div class="cover"></div>
  </section>
  <section class="login-content">
    <div class="logo">
      <h1><img class="logo_login" src="Assets/images/logo.jpeg" alt="User Image"></h1>
    </div>
    <div class="login-box">
      <form id="formLogin" class="login-form" name="formLogin" action="">
        <!--INICIO DEL FORMULARIO LOGIN  -->
        <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>INICIAR SESION</h3>
        <div class="form-group">
          <label class="control-label">USUARIO</label>
          <input id="txtEmail" class="form-control" type="email" name="txtEmail" placeholder="" autofocus="">
        </div>
        <div class="form-group">
          <label class="control-label">CONTRASEÑA</label>
          <input class="form-control" type="password" id="txtPasswordl" name="txtPasswordl" placeholder="">
        </div>
        <label>
          <input type="checkbox" id="viewPasswordee" class="label-text mover"><span class="label-text">Mostrar contraseña</span>
        </label>

        <div class="form-group">
          <div class="utility">
            <div class="animated-checkbox">

            </div>
            <center>
              <p class="semibold-text mb-2"><a href="reiniciar_contraseña">¿OLVIDÓ SU CONTRASEÑA ?</a></p>
            </center>
          </div>
        </div>

        <div class="form-group btn-container">
          <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>INGRESAR</button>
 
        <a class="btn btn-primary btn-block" href="registro_usuario">Registrarse</a>
        </div>

      </form>
      <form class="forget-form" id="form_reiniciar_contraseñas" name="form_reiniciar_contraseñas" action="">
        <center>
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-lock"></i>Olvidó su contraseña ?</h3>
        </center>
        <div class="form-group">
          <label class="control-label">Correo de usuario</label>
          <input class="form-control" id="txt_correo_reiniciar" name="txt_correo_reiniciar" type="text" placeholder="Email">
        </div>
        <div class="form-group btn-container">
          <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-unlock fa-lg fa-fw"></i>ACEPTAR</button>
        </div>
        <div class="form-group mt-3">
          <p class="semibold-text mb-0"><a href="#" data-toggle="flip"><i class="fa fa-angle-left fa-fw"></i> Regresar al login</a></p>
        </div>
      </form>
    </div>
  </section>
  <script>
    const base_url = "<?= base_url(); ?>"; // nos ayuda a usar la funcion base url donde nos devuelve la ruta raiz del proyecto y por lo tanto se puede usar en archivo js de login
  </script>
  <!-- Essential javascripts for application to work-->
  <script src="Assets/js/jquery-3.3.1.min.js"></script>
  <script src="Assets/js/popper.min.js"></script>
  <script src="Assets/js/bootstrap.min.js"></script>
  <script src="Assets/js/main.js"></script>
  <script>
    let password = document.getElementById("txtPasswordl");

    let viewPassword = document.getElementById('viewPasswordee');


    let click = false;

    viewPassword.addEventListener('click', (e) => {
      if (!click) {
        password.type = 'text'


        click = true
      } else if (click) {
        password.type = 'password'

        click = false
      }
    })
  </script>
   <script>
    let password = document.getElementById("txtPassword");

    let viewPassword = document.getElementById('viewPasswordee');


    let click = false;

    viewPassword.addEventListener('click', (e) => {
      if (!click) {
        password.type = 'text'


        click = true
      } else if (click) {
        password.type = 'password'

        click = false
      }
    })
  </script>
  <!-- The javascript plugin to display page loading on top-->
  <script src="Assets/js/plugins/pace.min.js"></script>
  <script type="text/javascript" src="Assets/js/plugins/sweetalert.min.js"></script>
  <script type="text/javascript" src="Assets/js/<?= $data['page_functions_js']; ?>"></script>
</body>

</html>