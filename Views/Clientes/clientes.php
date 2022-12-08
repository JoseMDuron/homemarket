<?php headerAdmin($data); ?>
<main class="app-content">
  <div class="app-title">
    <div>
      <!-- Button trigger modal -->

      <h1><i class="fa fa-dashboard"></i> <?= $data['page_title'] ?>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ClientesModal">
          Agregar Cliente
        </button>

        <!-- Modal -->
        <div class="modal fade" id="ClientesModal" name="ClientesModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Agregar cliente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">

                <form id="formCliente" name="formCliente" class="form-horizontal">
                                <input id="ID_cliente" type="hidden"  name="ID_cliente" value="">
                                <p class="text-primary"> Todos los campos son obligatorios.</p>
                 <!-- <div class="form-row">
                      <div class="form-group col-md-6">
                          <label for="txtID_cliente">ID_cliente</label>
                          <input type="text" class="form-control" id="txtID_cliente" name="txtID_cliente"  required="">
                      </div> -->
                  </div>               
                  <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="txtNombre">Nombre</label>
                            <input type="text" class="form-control" id="txtNombre" name="txtNombre" required="">
                        </div>
                    
                        <div class="form-group col-md-6">
                            <label for="txtApellidos">Apellidos</label>
                            <input type="text" class="form-control" id="txtApellidos" name="txtApellidos" required="">
                        </div>
                    </div> 

                    <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="txtCorreoelectronico">Correo_Cliente</label>
                            <input type="email" class="form-control" id="txtCorreoelectronico" name="txtCorreoelectronico" required="">
                            
                          </div>
                          <div class="form-group col-md-6">
                            <label for="txttelefono">Telefono</label>
                            <input type="text" class="form-control" id="txttelefono" name="txttelefono" required="">
                            
                          </div>

                          

                    </div>
                    <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="txtContraseña">Contraseña</label>
                            <input type="password" class="form-control" id="txtContraseña" name="txtContraseña">
                            
                          </div> 

                    </div>


                    <div class="form-group">
                    <label for="listCat">Categoria</label>
                    <select class="form-control" id="listCat" name="listCat" requied>
                      <option value="1">Cliente Normal</option>
                      <option value="2">Cliente Vip</option>
                      
                    </select>
                  </div>


                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="txtNumIdentidad">Numero_Identidad</label>
                            <input type="text" class="form-control" id="txtNumIdentidad" name="txtNumIdentidad" required="">
                        </div>
                    
                        <div class="form-group col-md-6">
                            <label for="txtFecharegistro">Fecha_de_registro</label>
                            <input type="date" class="form-control" id="txtFecharegistro" name="txtFecharegistro" required="">
                        </div>
                    </div>  
                    <div class="tile-footer">
                      <button class="btn btn-primary" type="submit"><i class="fa-solid fa-check"></i>Guardar</button>&nbsp;&nbsp;&nbsp;<a

                      class="btn btn-danger" data-dismiss="modal"><i class="fa-solid fa-circle-xmark"></i>Cerrar</a>
                     </div>
                  
                </form>
              </div>
              
            </div>
          </div>
        </div>


         <!-- Modal -->
        <div class="modal fade" id="ClientesModal" name="ClientesModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Agregar cliente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">

                <form id="formCliente" name="formCliente" class="form-horizontal">
                                <input id="ID_cliente" type="hidden"  name="ID_cliente" value="">
                                <p class="text-primary"> Todos los campos son obligatorios.</p>
                 <!-- <div class="form-row">
                      <div class="form-group col-md-6">
                          <label for="txtID_cliente">ID_cliente</label>
                          <input type="text" class="form-control" id="txtID_cliente" name="txtID_cliente"  required="">
                      </div> -->
                  </div>               
                  <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="txtNombre">Nombre</label>
                            <input type="text" class="form-control" id="txtNombre" name="txtNombre" required="">
                        </div>
                    
                        <div class="form-group col-md-6">
                            <label for="txtApellidos">Apellidos</label>
                            <input type="text" class="form-control" id="txtApellidos" name="txtApellidos" required="">
                        </div>
                    </div> 
                    <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="txtCorreoelectronico">Correo_Cliente</label>
                            <input type="email" class="form-control" id="txtCorreoelectronico" name="txtCorreoelectronico" required="">
                            
                          </div>
                          <div class="form-group col-md-6">
                            <label for="txttelefono">Telefono</label>
                            <input type="text" class="form-control" id="txttelefono" name="txttelefono" required="">
                            
                          </div>
                          
                    </div>
                    <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="txtContraseña">Contraseña</label>
                            <input type="password" class="form-control" id="txtContraseña" name="txtContraseña">
                            
                          </div> 
                          

                    </div>

                    <div class="form-group">
                    <label for="listCat">Categoria</label>
                    <select class="form-control" id="listCat" name="listCat" requied>
                      <option value="1">Cliente Normal</option>
                      <option value="2">Cliente Vip</option>
                      
                    </select>
                  </div>


                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="txtNumIdentidad">Numero_Identidad</label>
                            <input type="text" class="form-control" id="txtNumIdentidad" name="txtNumIdentidad" required="">
                        </div>
                    
                        <div class="form-group col-md-6">
                            <label for="txtFecharegistro">Fecha_de_registro</label>
                            <input type="date" class="form-control" id="txtFecharegistro" name="txtFecharegistro" required="">
                        </div>
                    </div>  
                    <div class="tile-footer">
                      <button class="btn btn-primary" type="submit"><i class="fa-solid fa-check"></i>Guardar</button>&nbsp;&nbsp;&nbsp;<a

                      class="btn btn-danger" data-dismiss="modal"><i class="fa-solid fa-circle-xmark"></i>Cerrar</a>
                     </div>
                  
                </form>
              </div>
              
            </div>
          </div>
        </div>


        <!-- Modal -->
        <div class="modal fade" id="modalViewClientes" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header header-primary">
                <h5 class="modal-title" id="titleModal">Datos del cliente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <table class="table table-borderes">
                  <tbody>
                    <tr>
                      <td>Id Cliente:</td>
                      <td id="celId_cliente">5</td>
                    </tr>
                    <tr>
                      <td>Nombre:</td>
                      <td id="celNombre">leonel</td>
                    </tr>
                    <tr>
                      <td>Apellido:</td>
                      <td id="celApellido">Messi</td>
                    </tr>
                    <tr>
                      <td>Correo_Cliente:</td>
                      <td id="celCorreoelectronico">heyb@gmail.com</td>
                    </tr>
                    <tr>
                      <td>Telefono:</td>
                      <td id="celTelefono">1154</td>
                    </tr>
                    
                    <tr>
                      <td>Contraseña:</td>
                      <td id="celContraseña">1aa154</td>
                    </tr>
                    
                    <tr>
                      <td>Categoria:</td>
                      <td id="celCategoria">Cliente Vip</td>
                    </tr>
                    <tr>
                      <td>NumeroID:</td>
                      <td id="celNumeroID">0801</td>
                    </tr>
                    <tr>
                      <td>Fecha_Registro:</td>
                      <td id="celFecha_Registro">2022/10/15</td>
                    </tr>
                  </tbody>
                </table>
                
              </div>
              <div class="tile-footer">
                      <button class="btn btn-primary" data-dismiss="modal"><i class="fa-solid fa-check"></i>Cerrar</a>
              </div>
            </div>
          </div>
        </div>

        

      </h1>

    </div>
    <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item"><a href="<?= base_url(); ?>/clientes"><?= $data['page_title'] ?></a></li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="tile">
        <div class="tile-body">Clientes</div>
      </div>
    </div>
  </div>
  
  <div class="row">
      <div class="col-md-12">
        <div class="title">
          <div class="title-body">
              <div class="table-responsive">
                <table class="table table-hover table-bordered " id="tableClientes" name="tableClientes">
                    <thead>
                    <tr>
                      <th>Id_Cliente</th>
                      <th>Nombre</th>
                      <th>Apellido</th>
                      <th>Correo_electronico</th>
                      <th>Telefono</th>
                      <th>Contraseña</th>
                      <th>Categoria</th>
                      <th>Numero ID</th>
                      <th>Fecha_Registro</th>
                      <th>Acciones</th>
                    
                    </thead>
                    <tbody>
                    </tbody>
                  </table>
              </Div>
          </Div>
      </Div>
    </Div>
  </Div>
                    
</main>
<?php footerAdmin($data); ?>