<?php
	headerTienda($data);
?>
<section class="h-100 gradient-form" style="background-color: #fff;">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-xl-10" style="max-width: 70%;">
            <div class="card rounded-3 text-black" style="max-width: 70%;">
              <div class="col-lg-6" style="max-width: 100%;">
                <div class="card-body p-md-5 mx-md-4">
                  <div class="text-center">
                  <img class="logo_login" src="Assets/images/logo.jpeg" alt="User Image" style="max-width: 100px;" style="border: 10px;">
                    <h4 class="mt-1 mb-5 pb-1">HOME MARKET</h4>
                  </div>
                  <form  id="formLogin_clientes" name="formLogin_clientes" action="" class="login-form" >
                  <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example11">INGRESA TU CORREO ELECTRONICO PARA REESTABLECER TU CONTRASEÑA.</label>
                    <label class="form-label" for="form2Example11">Correo:</label>
                      <input type="email" id="txtEmailCliente" class="form-control" placeholder="" name="txtEmailCliente"/>
                    </div>
                    <div class="text-center pt-1 mb-5 pb-1">
                      <button type="submit" class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="button"> ACEPTAR  
                    </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
	<?php
		footerTienda($data);
	?>
	