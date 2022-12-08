<?php headerAdmin($data); ?>
<main class="app-content">
  <div class="app-title">
    <div>
      <!-- Button trigger modal -->

      <h1><i class="fa fa-dashboard"></i> <?= $data['page_title'] ?>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable">
          Agregar Nuevo Rol
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Agregar Rol</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">

                <form>
                  <div class="form-group">
                    <label class="control-label">Nombre de Rol</label>
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
        <div class="tile-body">Roles de usario</div>
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
              
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <table class="table table-hover table-bordered dataTable no-footer" id="tableRoles" role="grid" aria-describedby="sampleTable_info">
                    <thead>
                      <tr role="row">
                        <th class="sorting_asc" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" >id</th>

                        <th class="sorting" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" >Rol</th>
                        <th class="sorting" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" >Estado</th>
                        <th class="sorting" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" >Descripcion</th>
                
                        <th class="sorting" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" >Opciones</th>
                      </tr>
                    </thead>
                    <tbody>

                    </tbody>
                  </table>
                </div>
              </div>
              </form>
            </div>
          
          </div>
          <!--MODAL DEL REPORTE PDF FIN -->
        </div>
      </div>
    </div>
  </div>
  </div>

</main>
<?php footerAdmin($data); ?>