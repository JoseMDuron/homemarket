<?php
	headerTienda($data);
?>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Main CSS-->
  <link rel="stylesheet" type="text/css" href="Assets/css/main.css">
  <link rel="stylesheet" type="text/css" href="Assets/css/estilos_login.css">
  <link rel="stylesheet" type="text/css" href="Assets/css/estilos_login.css">
  <!-- Font-icon css-->
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" type="text/css" href="Assets/css/main.css">
  <link rel="stylesheet" type="text/css" href="Assets/css/estilos_login.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
  <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/Assets/css/estilos_registro.css">

  <title>Iniciar Sesion</title>
</head>

<body>
  <section id="formregistroUsuariox" name="formregistroUsuariox" class="contact-box">
    <div class="row no-gutters bg-dark">
      <div class="col-xl-5 col-lg-12 register-bg">
        <div class="position-absolute testiomonial p-4">
          <h3 class="font-weight-bold text-light"></h3>
        </div>
      </div>
      <div class="col-xl-7 col-lg-12 d-flex">
        <div class="container align-self-center p-6">
          <h1 class="font-weight-bold mb-3">Crea tu cuenta</h1>

          <p class="text">Ingresa la siguiente información para registrarte.</p>

          <form id="formregistroClientes" name="formregistroClientes">
            <div class="form-row mb-2">
              <div class="form-group col-md-6">
                <label for="txtNombre" id="letra">Nombre</label>
                <input type="text" placeholder="Ingresa tu nombre " class="form-control valid validText" id="txtNombre" name="txtNombre" onkeyup="mayus(this)" onkeypress="return SoloLetras(event);" required="">
              </div>
              <div class="form-group col-md-6">
                <label for="txtEmail" id="letra">Correo Electronico</label>
                <input type="email" placeholder="Ingresa tu correo electronico " class="form-control valid validEmail" id="txtEmail" name="txtEmail" onkeyUp="this.value=this.value.toLowerCase();" required="">
              </div>
            </div>


            <div class="form-group mb-3">
              <div class="form-row">


                <div class="form-group col-md-6">
                  <label for="txtcontrasena" id="letra">Contraseña</label>
                  <!---- required pattern="[A-Z,1-9,a-z,@$!%*?&];"  maxlength="8"    onKeyDown="sinespacio(this);" onkeyup="noespacio(this, event);"--->
                  <input type="password" placeholder="Ingresa tu contraseña" class="form-control valid validText" id="txtcontrasena" name="txtcontrasena">

                  <div class="valid-feedback">
                    Es correcto
                  </div>
                  <div class="invalid-feedback">
                    La contraseña debe contener 1 carácter especial, 1 minúscula y al menos 8 caractés
                  </div>
                  <!--Creacion de aviso de clave segura-->
                  <label>
                    <input type="checkbox" id="viewPasswordee" class="label-text mover"><span id="letra2" class="label-text">Mostrar contraseña</span>
                </div>

                <div class="form-group col-md-6">
                  <label for="txtcontrasenaM" id="letra">Confirmar Contraseña</label>
                  <!---- required pattern="[A-Z,1-9,a-z,@$!%*?&];"  maxlength="8"    onKeyDown="sinespacio(this);" onkeyup="noespacio(this, event);"--->
                  <input type="password" placeholder="Ingresa tu contraseña" class="form-control valid validText" id="txtcontrasenaM" name="txtcontrasenaM">
                  <!--Creacion de aviso de clave segura-->
                  <input type="checkbox" id="viewPasswordee2" class="label-text mover"><span id="letra2" class="label-text">Mostrar contraseña</span>

                </div>

                <div class="form-group col-md-6">
                  <label for="txtTelefono" id="letra">Teléfono</label>
                  <!--onkeypress="return controlTag(event);"-->
                  <input type="text" placeholder="Ingresa tu telefono " class="form-control valid validNumber" id="txtTelefono" name="txtTelefono" onkeypress="return solonumero(event);" maxlength="8" required="">
                </div>

                <div class="form-group col-md-6">
                  <label for="txtDireccion" id="letra">Dirección</label>
                  <input type="text" placeholder="Ingresa tu dirección " class="form-control valid validText" id="txtDireccion" name="txtDireccion" onkeyup="mayus(this)" required="">
                </div>


              </div><br>

              <div class="form-group mb-5">
                <button type="submit" class="btn btn-warning width-100">Regístrate</button>
                <a class="btn btn-primary width-100" href="<?= base_url(); ?>/home"><i></i> Regresar </a>
              </div>


          </form>

        </div>
      </div>
    </div>
  </section>
</body>
<?php
		footerTienda($data);
	?>
<script>
  const base_url = "<?= base_url(); ?>"; // nos ayuda a usar la funcion base url donde nos devuelve la ruta raiz del proyecto y por lo tanto se puede usar en archivo js de login
</script>

<!-- Essential javascripts for application to work-->
<script src="Assets/js/jquery-3.3.1.min.js"></script>
<script src="Assets/js/popper.min.js"></script>
<script src="Assets/js/bootstrap.min.js"></script>
<script src="Assets/js/main.js"></script>

<!-- The javascript plugin to display page loading on top-->
<script src="Assets/js/plugins/pace.min.js"></script>
<script type="text/javascript" src="Assets/js/plugins/sweetalert.min.js"></script>
<script type="text/javascript" src="Assets/js/<?= $data['page_functions_js']; ?>"></script>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<!--Script de validacion-->

<script>
  let password = document.getElementById("txtcontrasena");

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
  let password2 = document.getElementById("txtcontrasenaM");

  let viewPassword2 = document.getElementById('viewPasswordee2');


  let click2 = false;

  viewPassword2.addEventListener('click', (e) => {
    if (!click2) {
      password2.type = 'text'
      click2 = true
    } else if (click2) {
      password2.type = 'password'
      click2 = false
    }
  })
</script>
<!--Validaciones de solo letras-->
<script>
  function SoloLetras(e) {
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toString();
    letras = " áéíóúabcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
    especiales = ["8,13,37,39,46"]; //CARACTERES DE LA TABLA ASCII

    tecla_especial = false
    for (var i in especiales) {
      if (key == especiales[i]) {
        tecla_especial = true;
        break;
      }
    }

    if (letras.indexOf(tecla) == -1 && !tecla_especial) {
      //alert("Ingresar solo letras")
      return false;
    }
  }
</script>

<!--Validaciones de solo letras mayusculas-->
<script type="text/javascript">
  function mayus(e) {
    e.value = e.value.toUpperCase();
  }
</script>

<!--Solo numeros-->
<script type="text/javascript">
  function solonumero(e) {
    tecla = (document.all) ? e.keyCode : e.which;
    if (tecla == 8) return true;
    else if (tecla == 0 || tecla == 9) return true;
    // patron =/[0-9\s]/;// -> solo letras
    patron = /[0-9\s]/; // -> solo numeros
    te = String.fromCharCode(tecla);
    return patron.test(te);
  }
</script>

<script src="<?= base_url(); ?>/Assets/js/functions_registro_usuario.js"></script>

</html>