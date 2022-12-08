<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home Market</title>

  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">

  <link rel="icon" type="image/png" href="Assets/tienda/images/icons/favicon.png" />
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="Assets/tienda/vendor/bootstrap/css/bootstrap.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="Assets/tienda/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="Assets/tienda/fonts/iconic/css/material-design-iconic-font.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="Assets/tienda/fonts/linearicons-v1.0.0/icon-font.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="Assets/tienda/vendor/animate/animate.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="Assets/tienda/vendor/css-hamburgers/hamburgers.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="Assets/tienda/vendor/animsition/css/animsition.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="Assets/tienda/vendor/select2/select2.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="Assets/tienda/vendor/daterangepicker/daterangepicker.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="Assets/tienda/vendor/slick/slick.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="Assets/tienda/vendor/MagnificPopup/magnific-popup.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="Assets/tienda/vendor/perfect-scrollbar/perfect-scrollbar.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="Assets/tienda/css/util.css">
  <link rel="stylesheet" type="text/css" href="Assets/tienda/css/main.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="Assets/css/estilos_home.css">
  
</head>

<body>


  <!-- Large modal -->

 
  <div class="main-navbar shadow-sm sticky-top">
		<div class="top-navbar">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-2 my-auto d-none d-sm-none d-md-block d-lg-block">
						<h5 class="brand-name">Home Market</h5>
					</div>
					<div class="col-md-5 my-auto">
						<form role="search">
							<div class="input-group">
								<input type="search" placeholder="Busca tus productos" class="form-control" />
								<button class="btn bg-white" type="submit">
									<i class="fa fa-search"></i>
								</button>
							</div>
						</form>
					</div>
					<div class="col-md-5 my-auto">
						<ul class="nav justify-content-end">
							<li class="nav-item">
								<a class="nav-link" href="home">
									<i class="fa fa-home"></i> INICIO
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="carrito">
									<i class="fa fa-shopping-cart"></i> Carrito (0)
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">
									<i class="fa fa-heart"></i> Favoritos (0)
								</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
									<i class="fa fa-user"></i> Usuario
								</a>

								<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
									<li><a class="dropdown-item" href="ajustes_clientes"><i class="fa fa-user"></i> Perfil</a></li>
									<li><a class="dropdown-item" href="login_clientes"><i class="fa fa-user"></i> Iniciar Sesion</a></li>
									<li><a class="dropdown-item" href="pedidos_clientes"><i class="fa fa-list"></i> Mis pedidos</a></li>

									<li><a class="dropdown-item" href="carrito"><i class="fa fa-shopping-cart"></i>Compras</a></li>
									<li><a class="dropdown-item" href="home"><i class="fa fa-sign-out"></i> Cerrar Sesion</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<nav class="navbar navbar-expand-lg">
			<div class="container-fluid">
				<a class="navbar-brand d-block d-sm-block d-md-none d-lg-none" href="#">
					Funda Ecom
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

			</div>
		</nav>
    <div class="row user">
        <div class="col-md-12">
          <div class="profile">
            <div >
            <img class="app-sidebar__user-avatar" src="Assets/images/avatar.png" alt="User Image">
              <h4>Jose</h4>
              <p>USUARIO</p>
            </div>
            <div class="cover-image"></div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="tile p-0">
            <ul class="nav flex-column nav-tabs user-tabs">
              
              <li class="nav-item"><a class="nav-link active" href="#user-settings" data-toggle="tab">Ajustes</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-9">
          <div class="tab-content">
            <div class="tab-pane" id="user-timeline">
              <div class="timeline-post">
                <div class="post-media"><a href="#"><img src="Assets/images/avatar.png">></a>
                  <div class="content">
                    <h5><a href="#">John Doe</a></h5>
                    <p class="text-muted"><small>2 January at 9:30</small></p>
                  </div>
                </div>
                <div class="post-content">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,	quis tion ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <ul class="post-utility">
                  <li class="likes"><a href="#"><i class="fa fa-fw fa-lg fa-thumbs-o-up"></i>Like</a></li>
                  <li class="shares"><a href="#"><i class="fa fa-fw fa-lg fa-share"></i>Share</a></li>
                  <li class="comments"><i class="fa fa-fw fa-lg fa-comment-o"></i> 5 Comments</li>
                </ul>
              </div>
              <div class="timeline-post">
                <div class="post-media"><a href="#"><img src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg"></a>
                  <div class="content">
                    <h5><a href="#">John Doe</a></h5>
                    <p class="text-muted"><small>2 January at 9:30</small></p>
                  </div>
                </div>
                <div class="post-content">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,	quis tion ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <ul class="post-utility">
                  <li class="likes"><a href="#"><i class="fa fa-fw fa-lg fa-thumbs-o-up"></i>Like</a></li>
                  <li class="shares"><a href="#"><i class="fa fa-fw fa-lg fa-share"></i>Share</a></li>
                  <li class="comments"><i class="fa fa-fw fa-lg fa-comment-o"></i> 5 Comments</li>
                </ul>
              </div>
            </div>
            <div class="tab-pane fade active show" id="user-settings">
              <div class="tile user-settings">
                <h4 class="line-head">Ajustes</h4>
                <form>
                  <div class="row mb-4">
                    <div class="col-md-4">
                      <label>Nombre</label>
                      <input class="form-control" type="text">
                    </div>
                    <div class="col-md-4">
                      <label>Apellido</label>
                      <input class="form-control" type="text">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-8 mb-4">
                      <label>Correo</label>
                      <input class="form-control" type="text">
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-8 mb-4">
                      <label>Telefono</label>
                      <input class="form-control" type="text">
                    </div>
                    <div class="col-md-8 mb-4">
                      <label>Direccion</label>
                      <input class="form-control" type="text">
                    </div>
                    <div class="col-md-8 mb-4">
                      <label>Identidad</label>
                      <input class="form-control" type="text">
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-8 mb-4">
                      <label>Contraseña</label>
                      <input class="form-control" type="text">
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-8 mb-4">
                      <label>Nueva contraseña</label>
                      <input class="form-control" type="text">
                    </div>
                  </div>
                  <div class="row mb-10">
                    <div class="col-md-12">
                      <button class="btn btn-primary" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i> Guardar Cambios</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
   
    <!-- Essential javascripts for application to work-->
    <script src="Assets/js/jquery-3.3.1.min.js"></script>
    <script src="Assets/js/popper.min.js"></script>
    <script src="Assets/js/bootstrap.min.js"></script>
    <script src="Assets/js/main.js"></script>

    <!-- The javascript plugin to display page loading on top-->
    <script src="Assets/js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>