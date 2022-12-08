<?php headerAdmin($data); ?>
<main class="app-content">
  <div class="app-title">



    <div>
      <!-- Button trigger modal -->

      <h1><i class="fa fa-dashboard"></i> <?= $data['page_title'] ?>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable">
          Agregar Nuevo Producto
        </button>


        <!-- Modal -->
        <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Agregar nuevos productos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">

                <form>
                  <div class="form-group">
                    <label class="control-label">Identificador del producto</label>
                    <input class="form-control" type="text" placeholder="">
                  </div>
                  <div class="form-group">
                    <label class="control-label">Identificador categoria</label>

                    <div class="form-group">

                      <select class="form-control" id="exampleSelect1">

                        <option>Abarroteria</option>
                        <option>Bebidas Alcholicas</option>
                        <option>Limpieza</option>
                        <option>Refrescos</option>
                        <option>Cuidado Personal</option>
                        <option>Lacthosa</option>
                        <option>Suplementos</option>
                        <option>Desechables</option>
                        <option>Porcelana y Vidrio</option>
                        <option>Snacks</option>
                        <option>Artesanias Hondureñas</option>
                        <option>Embutidos y Carnes</option>
                        <option>Verduras</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label">Nombre</label>
                    <input class="form-control" type="text" placeholder="">
                    <label class="control-label">Descripcion</label>
                    <input class="form-control" type="text" placeholder="">
                    <label class="control-label">Precio de venta</label>
                    <input class="form-control" type="decimal" placeholder="">
                    <label class="control-label">Cantidad en existencia</label>
                    <input class="form-control" type="number" placeholder="">
                    <label class="control-label">Tamaño</label>
                    <input class="form-control" type="text" placeholder="">
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
        <div class="tile-body">Lista De Productos</div>
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
                        <th class="sorting_asc" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 204.031px;">id producto</th>
                        <th class="sorting" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 339.922px;">id categoria</th>
                        <th class="sorting" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 149.375px;">Nombre</th>
                        <th class="sorting" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 73.2656px;">Descripcion</th>
                        <th class="sorting" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 144.172px;">Precio de venta</th>
                        <th class="sorting" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 118.234px;">Cantidad en existencia</th>
                        <th class="sorting" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 118.234px;">Tamaño</th>

                      </tr>
                    </thead>
                    <tbody>
                      <tr role="row" class="odd">
                        <td class="sorting_1">1</td>
                        <td>1</td>
                        <td>Sardinas la sirena</td>
                        <td>Sardinas en salsa de tomate enlatadas</td>
                        <td>27</td>
                        <td>200</td> <!-- cantidad en existencia -->
                        <td>5 cm de largo, 3 cm de ancho</td>
                        <td><button class="btn btn-warning" type="button" data-toggle="modal" data-target="#exampleModalScrollable2">Actualizar</button><button class="btn btn-danger" type="button">Eliminar</button></td>
                      </tr>
                      <tr role="row" class="even">
                        <td class="sorting_1">2</td>
                        <td>2</td>
                        <td>Cerveza corona</td>
                        <td>Cerveza corona 6 pack de 330ml bebida importada</td>
                        <td>220</td>
                        <td>50</td>
                        <td>330 ml</td>
                        <td><button class="btn btn-warning" type="button" data-toggle="modal" data-target="#exampleModalScrollable2">Actualizar</button><button class="btn btn-danger" type="button">Eliminar</button>
                      </tr>

                      <tr role="row" class="odd">
                        <td class="sorting_1">4</td>
                        <td>4</td>
                        <td>Coca-cola 3 lt</td>
                        <td>Gaseosa de 3 litros</td>
                        <td>65</td>
                        <td>152</td> <!-- cantidad en existencia -->
                        <td>botella de 3 lt</td>
                        <td><button class="btn btn-warning" type="button" data-toggle="modal" data-target="#exampleModalScrollable2">Actualizar</button><button class="btn btn-danger" type="button">Eliminar</button></td>
                      </tr>
                      </tr>
                      <tr role="row" class="odd">
                        <td class="sorting_1">3</td>
                        <td>1</td>
                        <td>Atun</td>
                        <td>Atun en latado </td>
                        <td>30</td>
                        <td>100</td> <!-- cantidad en existencia -->
                        <td>5 cm de largo, 3 cm de ancho</td>
                        <td><button class="btn btn-warning" type="button" data-toggle="modal" data-target="#exampleModalScrollable2">Actualizar</button><button class="btn btn-danger" type="button">Eliminar</button></td>
                      </tr>
                      </tr>
                      <tr role="row" class="odd">
                        <td class="sorting_1">6</td>
                        <td>4</td>
                        <td>Pepsi 2 lt</td>
                        <td>Gaseosa de 2 litros</td>
                        <td>65</td>
                        <td>152</td> <!-- cantidad en existencia -->
                        <td>botella de 3 lt</td>
                        <td><button class="btn btn-warning" type="button" data-toggle="modal" data-target="#exampleModalScrollable2">Actualizar</button><button class="btn btn-danger" type="button">Eliminar</button></td>
                      </tr>
                      </tr>
                      <tr role="row" class="odd">
                        <td class="sorting_1">9</td>
                        <td>4</td>
                        <td>Pepsi 3 lt</td>
                        <td>Gaseosa de 3 litros</td>
                        <td>65</td>
                        <td>20</td> <!-- cantidad en existencia -->
                        <td>botella de 3 lt</td>
                        <td><button class="btn btn-warning" type="button" data-toggle="modal" data-target="#exampleModalScrollable2">Actualizar</button><button class="btn btn-danger" type="button">Eliminar</button></td>
                      </tr>
                      <tr role="row" class="odd">
                        <td class="sorting_1">5</td>
                        <td>3</td>
                        <td>Detergente Xedex</td>
                        <td>Detergente multiaccion bolsa </td>
                        <td>98</td>
                        <td>100</td>
                        <td>1.5km bolsa</td>
                        <td>
                          <button class="btn btn-warning" type="button" data-toggle="modal" data-target="#exampleModalScrollable2">Actualizar</button>
                          <button class="btn btn-danger" type="button">Eliminar</button>
                          <div class="modal fade" id="exampleModalScrollable2" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalScrollableTitle">Actualizar producto</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">

                                  <form>
                                    <div class="form-group">
                                      <label class="control-label">Identificador del producto</label>
                                      <input class="form-control" type="text" placeholder="">
                                    </div>
                                    <div class="form-group">
                                      <label class="control-label">Identificador categoria</label>

                                      <div class="form-group">

                                        <select class="form-control" id="exampleSelect1">

                                          <option>Abarroteria</option>
                                          <option>Bebidas Alcholicas</option>
                                          <option>Limpieza</option>
                                          <option>Refrescos</option>
                                          <option>Cuidado Personal</option>
                                          <option>Lacthosa</option>
                                          <option>Suplementos</option>
                                          <option>Desechables</option>
                                          <option>Porcelana y Vidrio</option>
                                          <option>Snacks</option>
                                          <option>Artesanias Hondureñas</option>
                                          <option>Embutidos y Carnes</option>
                                          <option>Verduras</option>
                                        </select>
                                      </div>
                                    </div>

                                    <div class="form-group">
                                      <label class="control-label">Nombre</label>
                                      <input class="form-control" type="text" placeholder="">
                                      <label class="control-label">Descripcion</label>
                                      <input class="form-control" type="text" placeholder="">
                                      <label class="control-label">Precio de venta</label>
                                      <input class="form-control" type="decimal" placeholder="">
                                      <label class="control-label">Cantidad en existencia</label>
                                      <input class="form-control" type="number" placeholder="">
                                      <label class="control-label">Tamaño</label>
                                      <input class="form-control" type="text" placeholder="">
                                    </div>

                                  </form>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                  <button type="button" class="btn btn-primary">Agregar</button>
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
                      <li class="paginate_button page-item previous disabled" id="sampleTable_previous"><a href="#" aria-controls="sampleTable" data-dt-idx="0" tabindex="0" class="page-link">Siguiente</a></li>
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
          <h5 class="modal-title" id="exampleModalScrollableTitle" style="width: 80%;">REPORTE GENERAL PRODUCTOS</h5>
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
                      <th class="sorting_asc" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 204.031px;">id producto</th>
                      <th class="sorting" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 339.922px;">id categoria</th>
                      <th class="sorting" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 149.375px;">Nombre</th>
                      <th class="sorting" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 73.2656px;">Descripcion</th>
                      <th class="sorting" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 144.172px;">Precio de venta</th>
                      <th class="sorting" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 118.234px;">Cantidad en existencia</th>
                      <th class="sorting" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 118.234px;">Tamaño</th>

                    </tr>
                  </thead>
                  <tbody>
                    <tr role="row" class="odd">
                      <td class="sorting_1">1</td>
                      <td>1</td>
                      <td>Sardinas la sirena</td>
                      <td>Sardinas en salsa de tomate enlatadas</td>
                      <td>27</td>
                      <td>200</td> <!-- cantidad en existencia -->
                      <td>5 cm de largo, 3 cm de ancho</td>
                    
                    </tr>
                    <tr role="row" class="even">
                      <td class="sorting_1">2</td>
                      <td>2</td>
                      <td>Cerveza corona</td>
                      <td>Cerveza corona 6 pack de 330ml bebida importada</td>
                      <td>220</td>
                      <td>50</td>
                      <td>330 ml</td>
                     
                    </tr>

                    <tr role="row" class="odd">
                      <td class="sorting_1">4</td>
                      <td>4</td>
                      <td>Coca-cola 3 lt</td>
                      <td>Gaseosa de 3 litros</td>
                      <td>65</td>
                      <td>152</td> <!-- cantidad en existencia -->
                      <td>botella de 3 lt</td>
                     
                    </tr>
                    </tr>
                    <tr role="row" class="odd">
                      <td class="sorting_1">3</td>
                      <td>1</td>
                      <td>Atun</td>
                      <td>Atun en latado </td>
                      <td>30</td>
                      <td>100</td> <!-- cantidad en existencia -->
                      <td>5 cm de largo, 3 cm de ancho</td>
                   
                    </tr>
                    </tr>
                    <tr role="row" class="odd">
                      <td class="sorting_1">6</td>
                      <td>4</td>
                      <td>Pepsi 2 lt</td>
                      <td>Gaseosa de 2 litros</td>
                      <td>65</td>
                      <td>152</td> <!-- cantidad en existencia -->
                      <td>botella de 3 lt</td>
                    
                    </tr>
                    </tr>
                    <tr role="row" class="odd">
                      <td class="sorting_1">9</td>
                      <td>4</td>
                      <td>Pepsi 3 lt</td>
                      <td>Gaseosa de 3 litros</td>
                      <td>65</td>
                      <td>20</td> <!-- cantidad en existencia -->
                      <td>botella de 3 lt</td>
                     
                    </tr>
                    <tr role="row" class="odd">
                      <td class="sorting_1">5</td>
                      <td>3</td>
                      <td>Detergente Xedex</td>
                      <td>Detergente multiaccion bolsa </td>
                      <td>98</td>
                      <td>100</td>
                      <td>1.5km bolsa</td>
                     

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