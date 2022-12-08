<?php headerAdmin($data); ?>
<main class="app-content">
    <div class="app-title">
        <div>
            <!-- Button trigger modal -->

            <h1><i class="fa fa-dashboard"></i> <?= $data['page_title'] ?>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable">
                    Agregar Nuevo estado de promociones
                </button>

                <!-- Modal para agregar una promocion -->
                <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalScrollableTitle">Agregar Nuevo Estado de promociones</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <form>
                                    <div class="form-group">
                                        <label class="control-label">Estado de la promocion</label>
                                        <input class="form-control" type="text" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Descripcion</label>
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
                <div class="tile-body">Estados de promociones</div>
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
                                    <div class="dataTables_length" id="sampleTable_length"><label><button class="btn btn-danger" type="button">Exportar a PDF</button>


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
                                                <th class="sorting_asc" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 204.031px;">id</th>
                                         
                                                <th class="sorting" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 149.375px;">Descripcion</th>
                                                <th class="sorting" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 73.2656px;">Estado</th>
                                                <th class="sorting" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 144.172px;">Fecha de creacion</th>
                                                <th class="sorting" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 144.172px;">Fecha de actualizacion</th>
                                                <th class="sorting" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 118.234px;">Opciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr role="row" class="odd">
                                                <td class="sorting_1">1</td>
                                             
                                                <td>Promocion compra de cocacola 3 litros lleva 1 gratis</td>
                                                <td>Activo</td>
                                                <td>22/01/2022</td>
                                                <td>22/01/2022</td>
                                                <td><button class="btn btn-warning" type="button" data-toggle="modal" data-target="#exampleModalScrollable2">Actualizar</button><button class="btn btn-danger" type="button">Eliminar</button></td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td class="sorting_1">2</td>
                                               
                                                <td>Promocion compra de cocacola 3 litros lleva 1 gratis</td>
                                                <td>activo</td>
                                                <td>22/01/2022</td>
                                                <td>22/01/2022</td>
                                                <td><button class="btn btn-warning" type="button" data-toggle="modal" data-target="#exampleModalScrollable2">Actualizar</button><button class="btn btn-danger" type="button">Eliminar</button>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td class="sorting_1">3</td>
                                              
                                                <td>Promocion compra de cocacola 3 litros lleva 1 gratis</td>
                                                <td>Activo</td>
                                                <td>22/01/2022</td>
                                                <td>22/01/2022</td>
                                                <td>
                                                    <button class="btn btn-warning" type="button" data-toggle="modal" data-target="#exampleModalScrollable2">Actualizar</button>
                                                    <button class="btn btn-danger" type="button">Eliminar</button>
                                            <tr role="row" class="odd">
                                                <td class="sorting_1">3</td>
                                               
                                                <td>Promocion compra de cocacola 3 litros lleva 1 gratis</td>
                                                <td>Activo</td>
                                                <td>22/01/2022</td>
                                                <td>22/01/2022</td>
                                                <td>
                                                    <button class="btn btn-warning" type="button" data-toggle="modal" data-target="#exampleModalScrollable2">Actualizar</button>
                                                    <button class="btn btn-danger" type="button">Eliminar</button>
                                                    <div class="modal fade" id="exampleModalScrollable2" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalScrollableTitle">Actualizar Nuevo Estado de promociones</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">

                                                                    <form>
                                                                        <div class="form-group">
                                                                            <label class="control-label">Estado de la promocion</label>
                                                                            <input class="form-control" type="text" placeholder="">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="control-label">Descripcion</label>
                                                                            <input class="form-control" type="text" placeholder="">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="control-label">Estado</label>

                                                                            <div class="form-group">

                                                                                <select class="form-control" id="exampleSelect1">

                                                                                    <option>Activo</option>
                                                                                    <option>inactivo</option>

                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                                    <button type="button" class="btn btn-primary">actualizar</button>
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
                                            <li class="paginate_button page-item previous disabled" id="sampleTable_previous"><a href="#" aria-controls="sampleTable" data-dt-idx="0" tabindex="0" class="page-link">anterior</a></li>
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

</main>
<?php footerAdmin($data); ?>