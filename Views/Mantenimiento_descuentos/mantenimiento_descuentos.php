<?php headerAdmin($data); ?>
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-dashboard"></i> <?= $data['page_title'] ?> </h1>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalMantenimientoDescuentos">
                Agregar Nuevo descuento
            </button>
            <!-- Modal para agregar un descuento -->
            <div class="modal fade" id="modalMantenimientoDescuentos" tabindex="-1" role="dialog" aria-labelledby="modalMantenimientoDescuentosTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalMantenimientoDescuentosTitle">Agregar Nuevo Descuento</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form id="formDescuentos" name="formDescuentos">
                                <input type="hidden" name="IdDescuento" id="IdDescuento" value="0" />
                                <div class="form-group">
                                    <label class="control-label">Nombre</label>
                                    <input class="form-control" id="txtNombre" type="text" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Porcentaje Deduccion</label>
                                    <input class="form-control" id="txtPorcentajeDeduccion" type="text" placeholder="">
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Descripcion</label>
                                    <input class="form-control" id="txtDescripcion" type="text" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Estado</label>
                                    <div class="form-group">
                                        <select class="form-control" id="txtEstado">
                                            <option value="1">Activo</option>
                                            <option value="0">inactivo</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                    <button type="submit" id="btnActionForm" class="btn btn-primary">
                                        <span id="btnText">Agregar</span>
                                    </button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modalViewDescuento" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header header-primary">
                        <h5 class="modal-title" id="titleModal">Datos del Descuento</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <td>Id:</td>
                                    <td id="celId"></td>
                                </tr>
                                <tr>
                                    <td>Nombre:</td>
                                    <td id="celNombre"></td>
                                </tr>
                                <tr>
                                    <td>Porcentaje Deduccion:</td>
                                    <td id="celPorcentajeDeduccion"></td>
                                </tr>
                                <tr>
                                    <td>Descripcion:</td>
                                    <td id="celDescripcion"></td>
                                </tr>
                                <tr>
                                    <td>Estado:</td>
                                    <td id="celEstado"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        </ul>
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
                                    <div class="dataTables_length" id="sampleTable_length">
                                        <label>
                                            <select name="sampleTable_length" aria-controls="sampleTable" class="form-control form-control-sm" style="width: 130px;">
                                                <option value="10">Ascendente</option>
                                                <option value="25">Descendente</option>
                                            </select>
                                        </label>
                                    </div>

                                </div>

                                <div style="width: 130px;">
                                    <div class="dataTables_length" id="sampleTable_length">
                                        <label>
                                            <button class="btn btn-danger" type="button">Exportar a PDF</button>
                                        </label>
                                    </div>

                                </div>
                                <div style="width: 100px;">
                                    <div class="dataTables_length" id="sampleTable_length">
                                        <label>
                                            <button class="btn btn-danger" type="button" style="background-color: grey; border-color:gray;"> IMPRIMIR</button>
                                        </label>
                                    </div>

                                </div>
                                <div style="width: 50px;">
                                    <div class="dataTables_length" id="sampleTable_length">
                                        <label>
                                            <button class="btn btn-success" type="button" style="background-color: green;">Exportar a EXCEL</button>
                                        </label>
                                    </div>

                                </div>
                                <div style="width: 600px;">
                                    <div id="sampleTable_filter" class="dataTables_filter">
                                        <label>
                                            Buscar:
                                            <input type="search" class="form-control form-control-sm" placeholder="" aria-controls="sampleTable">
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <table class="table table-hover table-bordered dataTable no-footer" id="mantenimientoDescuentosTable" role="grid" aria-describedby="sampleTable_info">
                                        <thead>
                                            <tr role="row">
                                                <th class="sorting_asc" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 204.031px;">id</th>
                                                <th class="sorting" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 149.375px;">Nombre</th>
                                                <th class="sorting" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 73.2656px;">Descripcion</th>
                                                <th class="sorting" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 144.172px;">Porcentaje Deduccion</th>
                                                <th class="sorting" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 144.172px;">Estado</th>
                                                <th class="sorting" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 118.234px;">Opciones</th>
                                            </tr>
                                        </thead>
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
<script src="Assets/js/jquery-3.3.1.min.js"></script>
<script src="Assets/js/popper.min.js"></script>
<script src="Assets/js/bootstrap.min.js"></script>
<script src="Assets/js/main.js"></script>
<script src="Assets/js/plugins/pace.min.js"></script>
<script type="text/javascript" src="Assets/js/plugins/sweetalert.min.js"></script>
<script type="text/javascript" src="Assets/js/<?= $data['page_functions_js']; ?>"></script>
<?php footerAdmin($data); ?>