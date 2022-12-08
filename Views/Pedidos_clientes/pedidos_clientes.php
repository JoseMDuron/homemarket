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


        <main>
            <div class="col-md-12" style="max-width: 80%;">
                <div class="tile" style="max-width: 80%;">
                    <h3 class="tile-title">PEDIDOS REALIZADOS</h3>
                    <div class="table-responsive" style="max-width: 80%;">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th># Pedido</th>
                                    <th>Fecha</th>
                                    <th>Estado</th>
                                    <th>Producto</th>
                                    <th>cantidad</th>
                                    <th>total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>17/08/2022</td>
                                    <td>Pendiente</td>
                                    <td>Sardina, leche</td>
                                    <td>5</td>
                                    <td>L. 60.00</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>17/08/2022</td>
                                    <td>Pendiente</td>
                                    <td>Sardina, leche</td>
                                    <td>5</td>
                                    <td>L. 60.00</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>17/08/2022</td>
                                    <td>COMPLETADO</td>
                                    <td>Sardina, leche</td>
                                    <td>5</td>
                                    <td>L. 60.00</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>17/08/2022</td>
                                    <td>COMPLETADO</td>
                                    <td>Sardina, leche</td>
                                    <td>5</td>
                                    <td>L. 60.00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>


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