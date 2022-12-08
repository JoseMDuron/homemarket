<?php headerAdmin($data); ?>
<main class="app-content">
  <div class="app-title">
    <div>
      <!-- Button trigger modal -->

      <h1><i class="fa fa-dashboard"></i> <?= $data['page_title'] ?>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable">
          Agregar Pedido
        </button>
        <!-- Modal -->
        <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Agregar Pedido</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">

                <form>
                  <div class="form-group">
                    <label class="control-label">Producto</label>
                    <input class="form-control" type="text" placeholder="">
                  </div>
                  <div class="form-group">
                    <label class="control-label">Cliente:</label>
                    <input class="form-control" type="text" placeholder="">
                  </div>
                  <div class="form-group">
                    <label class="control-label">Empleado:</label>
                    <input class="form-control" type="text" placeholder="">
                  </div>
                  <div class="form-group">
                    <label class="control-label">Fecha:</label>
                    <input class="form-control" type="text" placeholder="">
                  </div>
                  <div class="form-group">
                    <label class="control-label">Cantidad:</label>
                    <input class="form-control" type="text" placeholder="">
                  </div>
                  <div class="form-group">
                    <label class="control-label">Precio venta</label>
                    <input class="form-control" type="text" placeholder="">
                    <div class="form-group">
                      <div class="dataTables_length" id="sampleTable_length"><label>Forma de Pago<select name="sampleTable_length" aria-controls="sampleTable" class="form-control form-control-sm">
                            <option value="10">Tarjeta de Credito</option>
                            <option value="25">Efectivo</option>
                            <option value="35">Transferencia Electronica</option>
                          </select>
                      </div>
                      <div class="form-group">
                        <label class="control-label">Total:</label>
                        <input class="form-control" type="text" placeholder="">
                      </div>
                      <div class="form-group">
                        <label class="control-label">CAI:</label>
                        <input class="form-control" type="text" placeholder="">
                      </div>
                      <div class="col-sm-12 col-md-6">
                        <div class="dataTables_length" id="sampleTable_length"><label>Estado Pedido<select name="sampleTable_length" aria-controls="sampleTable" class="form-control form-control-sm">
                              <option value="10">Pendiente</option>
                              <option value="25">Cancelado</option>
                              <option value="25">Completado</option>
                            </select> </label></div>
                      </div>


                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary">Agregar</button>
              </div>
            </div>
          </div>
        </div>

      </h1>

    </div>
    <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item"><a href="<?= base_url(); ?>/roles"><?= $data['page_title'] ?></a></li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="tile">
        <div class="tile-body">Pedidos</div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="tile">
        <div class="tile-body">
          <div class="table-responsive">
            <div id="sampleTable_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
              <div class="row">
                <div class="col-sm-12 col-md-6" style="width: 100%; max-width: 10%">
                  <div class="dataTables_length" id="sampleTable_length"><label>Filtrar<select name="sampleTable_length" aria-controls="sampleTable" class="form-control form-control-sm" style="width: 100px;">
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                      </select> </label>
                  </div>

                </div>
                <div class="col-sm-12 col-md-6" style="width: 450%; max-width: 30%;">
                  <div class="dataTables_length" id="sampleTable_length"><label><select name="sampleTable_length" aria-controls="sampleTable" class="form-control form-control-sm" style="width: 130px;">
                        <option value="10">Ascendente</option>
                        <option value="25">Descendente</option>

                      </select> </label>
                  </div>
                </div>

                <div style="width: 130px;">
                  <div class="dataTables_length" id="sampleTable_length"><label><button class="btn btn-danger" type="button" data-toggle="modal" data-target="#exampleModalScrollablePDF">Exportar a PDF</button>
                      </select> </label>
                  </div>
                </div>
                <div style="width: 100px;">
                  <div class="dataTables_length" id="sampleTable_length"><label><button class="btn btn-danger" type="button" style="background-color: grey; border-color:gray;"> IMPRIMIR</button>
                      </select> </label>
                  </div>
                </div>
                <div style="width: 50px;">
                  <div class="dataTables_length" id="sampleTable_length"><label><button class="btn btn-success" type="button" style="background-color: green;">Exportar a EXCEL</button>
                      </select> </label>
                  </div>
                </div>
                <div style="width: 600px;">
                  <div id="sampleTable_filter" class="dataTables_filter"><label>Buscar:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="sampleTable"></label></div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <table class="table table-hover table-bordered dataTable no-footer" id="sampleTable" role="grid" aria-describedby="sampleTable_info">
                    <thead>
                      <tr role="row">
                        <th class="sorting_asc" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 204.031px;">Id Pedido</th>
                        <th class="sorting" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 339.922px;">Id Cliente</th>

                        <th class="sorting" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 73.2656px;">IdFormapago</th>
                        <th class="sorting" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 144.172px;">Producto</th>
                        <th class="sorting" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 73.2656px;">Cliente</th>
                        <th class="sorting" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 144.172px;">Empleado</th>
                        <th class="sorting" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 339.922px;">Fecha</th>
                        <th class="sorting" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 149.375px;">Cantidad</th>
                        <th class="sorting" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 73.2656px;">Precio de Venta</th>
                        <th class="sorting" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 144.172px;">Forma de pago</th>
                        <th class="sorting" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 73.2656px;">Total</th>
                        <th class="sorting" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 144.172px;">CAI</th>
                        <th class="sorting" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 144.172px;">Estado de Pedido</th>
                        <th class="sorting" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 144.172px;">Opciones</th>

                    </thead>
                    <tbody>


                      <tr role="row" class="odd">
                        <td class="sorting_1">1</td>
                        <td>02983</td>

                        <td>34239</td>
                        <td>Chile</td>
                        <td>Max Vertappen</td>
                        <td>Toto Wolf</td>
                        <td>02-01-2022</td>
                        <td>1</td>
                        <td>35.80Lps</td>
                        <td>Tarjeta de Credito</td>
                        <td>35.80Lps</td>
                        <td>0001-001-01-8326464</td>
                        <td>pendiente</td>
                        <td><button class="btn btn-warning" type="button" data-toggle="modal" data-target="#exampleModalScrollable2">Actualizar</button><button class="btn btn-danger" type="button">Eliminar</button>
                        <td> <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Generar Factura</button>
                      </tr>

                    </tbody>
                    <tr role="row" class="odd">
                      <td class="sorting_1">1</td>
                      <td>52983</td>

                      <td>94239</td>
                      <td>Azucar , jabon , detergente </td>
                      <td>Phelps</td>
                      <td>Steve Wonder</td>
                      <td>02-04-2022</td>
                      <td>3</td>
                      <td>100.20Lps</td>
                      <td>Tarjeta de Credito</td>
                      <td>200.40Lps</td>
                      <td>0001-001-01-875sd64</td>
                      <td>Cancelado</td>
                      <td><button class="btn btn-warning" type="button" data-toggle="modal" data-target="#exampleModalScrollable2">Actualizar</button>
                        <button class="btn btn-danger" type="button">Eliminar</button>
                        <!-- Large modal -->
                      <td> <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Generar Factura</button>

                        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg" style="font-weight: 900;">
                            <div class="modal-content" style="width: 1200px;" style="position: center;">

                              <section class="invoice">
                                <div class="row mb-4">
                                  <div class="col-6">
                                    <h2 class="page-header"><i class="fa fa-globe"></i>Recibo de compras -- Home Market</h2>
                                  </div>
                                  <div class="col-6">
                                    <h5 class="text-right">Fecha: 01/01/2022</h5>
                                  </div>
                                </div>
                                <div class="row invoice-info">
                                  <div class="col-4">De
                                    <address><strong>Home Market</strong><br>Comayagua<br>Honduras<br>New Delhi<br>Email: homemarket@vali.com</address>
                                  </div>
                                  <div class="col-4">PARA
                                    <address><strong>John Doe</strong><br>Aldea de suyapa, calle 2,<br>Tegucigalpa, CA 94107<br>Telefono: (504) 539-1037<br>Email: john.doe@gmail.com</address>
                                  </div>
                                  <div class="col-4"><b>Factura #007612</b><br><br><b>Pedido ID:</b> 4F3S8J<br><b>Fecha de pago:</b> 2/22/2014<br><b>Cuenta:</b> 968-34567 <br><b>Forma de pago:</b>Efectivo</div>
                                </div>
                                <div class="row">
                                  <div class="col-12 table-responsive">
                                    <table class="table table-striped">
                                      <thead>
                                        <tr>
                                          <th>Codigo</th>
                                          <th>Producto</th>
                                          <th>Serie #</th>
                                          <th>Description</th>
                                          <th>Cantidad</th>
                                          <th>Descuento</th>
                                          <th>Subtotal</th>
                                          <th>ISV</th>
                                          <th>Total</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td>1</td>
                                          <td>Sixpack Coronas</td>
                                          <td>455-981-221</td>
                                          <td>Paquete de 6 cervezas coronas</td>
                                          <td>2</td>
                                          <td>0.00</td>
                                          <td>L. 350.00</td>
                                          <td>L. 25.00</td>
                                          <td>L. 375.00</td>
                                        </tr>
                                        <tr>
                                          <td>2</td>
                                          <td>leche entera sula</td>
                                          <td>247-925-726</td>
                                          <td>Bolsa de leche entera sula</td>
                                          <td>1</td>
                                          <td>0.00</td>
                                          <td>L. 28.00</td>
                                          <td>L. 2.00</td>
                                          <td>L. 30.00</td>
                                        </tr>
                                        <tr>
                                          <td>3</td>
                                          <td>Zambos</td>
                                          <td>545-457-47</td>
                                          <td>Bolsa de zambos grande</td>
                                          <td>6</td>
                                          <td>L. 15.00</td>
                                          <td>L. 100 </td>
                                          <td>L. 15.00</td>
                                          <td>L. 100.00</td>
                                        </tr>
                                        <tr>
                                          <td>4</td>
                                          <td>Sardina picosa</td>
                                          <td>757-855-857</td>
                                          <td>Lata pequeña de sardina</td>
                                          <td>2</td>
                                          <td>L. 5.00</td>
                                          <td>L. 55 </td>
                                          <td>L. 15.00</td>
                                          <td>L. 60.00</td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                                <div class="row d-print-none mt-2">
                                  <div class="col-12 text-right"><button class="btn btn-secondary" type="button">Imprimir</button> </div>
                                </div>
                              </section>



                            </div>
                          </div>
                        </div>


                    </tr>
                    </tbody>
                    <tr role="row" class="odd">
                      <td class="sorting_1">1</td>
                      <td>42983</td>

                      <td>84239</td>
                      <td>Jabon Tocador</td>
                      <td>PhillCollins</td>
                      <td>Jeyson</td>
                      <td>02-02-2022</td>
                      <td>10</td>
                      <td>50.00Lps</td>
                      <td>Tarjeta de Credito</td>
                      <td>550.00Lps</td>
                      <td>0001-001-01-87546464</td>
                      <td>Completado</td>
                      <td><button class="btn btn-warning" type="button" data-toggle="modal" data-target="#exampleModalScrollable2">Actualizar</button><button class="btn btn-danger" type="button">Eliminar</button>
                      <td> <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Generar Factura</button>

                    </tr>
                    </tbody>
                    <tr role="row" class="odd">
                      <td class="sorting_1">1</td>
                      <td>52983</td>

                      <td>54239</td>
                      <td>Cafe</td>
                      <td>Steve Jobs</td>
                      <td>Elon Musk</td>
                      <td>03-08-2022</td>
                      <td>20</td>
                      <td>10.00Lps</td>
                      <td>Tarjeta de Credito</td>
                      <td>200.00Lps</td>
                      <td>0001-001-01-87546464</td>
                      <td>Completado</td>
                      <td><button class="btn btn-warning" type="button" data-toggle="modal" data-target="#exampleModalScrollable2">Actualizar</button><button class="btn btn-danger" type="button">Eliminar</button>
                      <td> <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Generar Factura</button>
                        <div class="modal fade" id="exampleModalScrollable2" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-scrollable" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalScrollableTitle">Actualizar Pedido</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">

                                <form>
                                  <div class="form-group">
                                    <label class="control-label">Producto</label>
                                    <input class="form-control" type="text" placeholder="">
                                  </div>
                                  <div class="form-group">
                                    <label class="control-label">Cliente:</label>
                                    <input class="form-control" type="text" placeholder="">
                                  </div>
                                  <div class="form-group">
                                    <label class="control-label">Empleado:</label>
                                    <input class="form-control" type="text" placeholder="">
                                  </div>
                                  <div class="form-group">
                                    <label class="control-label">Fecha:</label>
                                    <input class="form-control" type="text" placeholder="">
                                  </div>
                                  <div class="form-group">
                                    <label class="control-label">Cantidad:</label>
                                    <input class="form-control" type="text" placeholder="">
                                  </div>
                                  <div class="form-group">
                                    <label class="control-label">Precio venta</label>
                                    <input class="form-control" type="text" placeholder="">
                                    <div class="form-group">
                                      <div class="dataTables_length" id="sampleTable_length"><label>Forma de Pago<select name="sampleTable_length" aria-controls="sampleTable" class="form-control form-control-sm">
                                            <option value="10">Tarjeta de Credito</option>
                                            <option value="25">Efectivo</option>
                                            <option value="35">Transferencia Electronica</option>
                                          </select>
                                      </div>
                                      <div class="form-group">
                                        <label class="control-label">Total:</label>
                                        <input class="form-control" type="text" placeholder="">
                                      </div>
                                      <div class="form-group">
                                        <label class="control-label">CAI:</label>
                                        <input class="form-control" type="text" placeholder="">
                                      </div>
                                      <div class="col-sm-12 col-md-6">
                                        <div class="dataTables_length" id="sampleTable_length"><label>Estado Pedido<select name="sampleTable_length" aria-controls="sampleTable" class="form-control form-control-sm">
                                              <option value="10">Pendiente</option>
                                              <option value="25">Cancelado</option>
                                              <option value="25">Completado</option>
                                            </select> </label></div>
                                      </div>


                                </form>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                <button type="button" class="btn btn-primary">Actualizar</button>
                              </div>
                            </div>
                      </td>


                    </tr>
                    </tbody>

                  </table>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12 col-md-5">
                  <div class="dataTables_info" id="sampleTable_info" role="status" aria-live="polite"></div>
                </div>
                <div class="col-sm-12 col-md-7">
                  <div class="dataTables_paginate paging_simple_numbers" id="sampleTable_paginate">
                    <ul class="pagination">
                      <li class="paginate_button page-item previous disabled" id="sampleTable_previous"><a href="#" aria-controls="sampleTable" data-dt-idx="0" tabindex="0" class="page-link">Anterior</a></li>
                      <li class="paginate_button page-item active"><a href="#" aria-controls="sampleTable" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                      <li class="paginate_button page-item "><a href="#" aria-controls="sampleTable" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                      <li class="paginate_button page-item "><a href="#" aria-controls="sampleTable" data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                      <li class="paginate_button page-item "><a href="#" aria-controls="sampleTable" data-dt-idx="4" tabindex="0" class="page-link">4</a></li>
                      <li class="paginate_button page-item "><a href="#" aria-controls="sampleTable" data-dt-idx="5" tabindex="0" class="page-link">5</a></li>
                      <li class="paginate_button page-item "><a href="#" aria-controls="sampleTable" data-dt-idx="6" tabindex="0" class="page-link">6</a></li>
                      <li class="paginate_button page-item next" id="sampleTable_next"><a href="#" aria-controls="sampleTable" data-dt-idx="7" tabindex="0" class="page-link">Siguiente</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--MODAL DEL REPORTE PDF -->

  <div class="modal fade" id="exampleModalScrollablePDF" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document" style="min-width: 1500px;">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalScrollableTitle" style="width: 80%;">REPORTE GENERAL PEDIDOS</h5>
          <h5 class="modal-title" id="exampleModalScrollableTitle">Fecha: 18/8/2022</h5>
          <h5 class="modal-title" id="exampleModalScrollableTitle">Tipo de archivo: PDF</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="row">
              <div class="col-sm-12">
                <table class="table table-hover table-bordered dataTable no-footer" id="sampleTable" role="grid" aria-describedby="sampleTable_info">
                  <thead>
                    <tr role="row">
                      <th class="sorting_asc" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 204.031px;">Id Pedido</th>
                      <th class="sorting" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 339.922px;">Id Cliente</th>

                      <th class="sorting" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 73.2656px;">IdFormapago</th>
                      <th class="sorting" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 144.172px;">Producto</th>
                      <th class="sorting" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 73.2656px;">Cliente</th>
                      <th class="sorting" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 144.172px;">Empleado</th>
                      <th class="sorting" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 339.922px;">Fecha</th>
                      <th class="sorting" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 149.375px;">Cantidad</th>
                      <th class="sorting" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 73.2656px;">Precio de Venta</th>
                      <th class="sorting" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 144.172px;">Forma de pago</th>
                      <th class="sorting" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 73.2656px;">Total</th>
                      <th class="sorting" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 144.172px;">CAI</th>
                      <th class="sorting" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 144.172px;">Estado de Pedido</th>
                  

                  </thead>
                  <tbody>


                    <tr role="row" class="odd">
                      <td class="sorting_1">1</td>
                      <td>02983</td>

                      <td>34239</td>
                      <td>Chile</td>
                      <td>Max Vertappen</td>
                      <td>Toto Wolf</td>
                      <td>02-01-2022</td>
                      <td>1</td>
                      <td>35.80Lps</td>
                      <td>Tarjeta de Credito</td>
                      <td>35.80Lps</td>
                      <td>0001-001-01-8326464</td>
                      <td>pendiente</td>
                      
                    </tr>

                  </tbody>
                  <tr role="row" class="odd">
                    <td class="sorting_1">1</td>
                    <td>52983</td>

                    <td>94239</td>
                    <td>Azucar , jabon , detergente </td>
                    <td>Phelps</td>
                    <td>Steve Wonder</td>
                    <td>02-04-2022</td>
                    <td>3</td>
                    <td>100.20Lps</td>
                    <td>Tarjeta de Credito</td>
                    <td>200.40Lps</td>
                    <td>0001-001-01-875sd64</td>
                    <td>Cancelado</td>
                 
                  
                  

                  </tr>
                  </tbody>
                  <tr role="row" class="odd">
                    <td class="sorting_1">1</td>
                    <td>42983</td>

                    <td>84239</td>
                    <td>Jabon Tocador</td>
                    <td>PhillCollins</td>
                    <td>Jeyson</td>
                    <td>02-02-2022</td>
                    <td>10</td>
                    <td>50.00Lps</td>
                    <td>Tarjeta de Credito</td>
                    <td>550.00Lps</td>
                    <td>0001-001-01-87546464</td>
                    <td>Completado</td>
                  

                  </tr>
                  </tbody>
                  <tr role="row" class="odd">
                    <td class="sorting_1">1</td>
                    <td>52983</td>

                    <td>54239</td>
                    <td>Cafe</td>
                    <td>Steve Jobs</td>
                    <td>Elon Musk</td>
                    <td>03-08-2022</td>
                    <td>20</td>
                    <td>10.00Lps</td>
                    <td>Tarjeta de Credito</td>
                    <td>200.00Lps</td>
                    <td>0001-001-01-87546464</td>
                    <td>Completado</td>
                    


                  </tr>
                  </tbody>

                </table>
              </div>
            </div>

          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary">DESCARGAR</button>
        </div>
      </div>
      <!--MODAL DEL REPORTE PDF FIN -->
</main>
<?php footerAdmin($data); ?>