<?php headerAdmin($data); ?>
<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="fa fa-dashboard"></i> <?= $data['page_title'] ?></h1>

    </div>
    <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item"><a href="#">PAGINA PRINCIPAL</a></li>
    </ul>
  </div>
  <div class="row">
    <div class="btn btn-success coloured-icon" style="width: 350px; max-width: 100%;"><i class="icon fa fa-users fa-3x"></i>
      <div class="info">
        <h4>
        <a id="demoNotify" style="color: #fff;" href="clientes">CLIENTES</a>
        </h4>
        <p><b>
            <h4>109</h4>
          </b></p>
      </div>
    </div>
    <div class="btn btn-success coloured-icon"><i class="icon fa fa-shopping-bag" style="width: 150px;"></i>
      <div class="info">
        <h4>
        <a id="demoNotify" style="color: #fff;" href="productos">Productos</a>
        </h4>
        <p><b></b></p>
        <h4><b>159</b></h4>
        <p></p>
      </div>
    </div>
    <div class="btn btn-success coloured-icon"><i class="icon fa fa-truck" style="width: 150px;"></i>
      <div class="info">
        <h4>
        <a id="demoNotify" style="color: #fff;" href="pedidos">Pedidos</a>
        </h4>
        <p><b></b></p>
        <h4><b>15</b></h4>
        <p></p>
      </div>
    </div>
    <div class="btn btn-success coloured-icon"><i class="icon fa fa-shopping-basket" style="width: 150px;"></i>
      <div class="info">
        <h4>
        <a id="demoNotify" style="color: #fff;" href="home">Sitio Web</a>
        </h4>
        <p><b></b></p>
        <h4><b></b></h4>
        <p></p>
      </div>
    </div>
  </div>
  <div class="col-md-12">
    <div class="tile">
      <h3 class="tile-title">Ultimos Pedidos</h3>
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>#</th>
              <th>Nombre Cliente</th>
              <th>Estado</th>
              <th>Monto</th>
              <th>Fecha</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Mark</td>
              <td>Pendiente</td>
              <td>550.25</td>
              <td>13/08/2022 14:07</td>
            </tr>
            <tr>
              <td>2</td>
              <td>Jacob</td>
              <td>Aprobado</td>
              <td>1400.00</td>
              <td>13/08/2022 14:07</td>
            </tr>
            <tr>
              <td>3</td>
              <td>Larry</td>
              <td>Aprobado</td>
              <td>400.00</td>
              <td>13/08/2022 14:07</td>
            </tr>
            <tr>
              <td>4</td>
              <td>Jacob</td>
              <td>Pendiente</td>
              <td>1500.00</td>
              <td>13/08/2022 14:07</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="col-md-12">
    <div class="tile">
      <h3 class="tile-title">Pedidos Pendientes</h3>
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>#</th>
              <th>Nombre Cliente</th>
              <th>Estado</th>
              <th>Monto</th>
              <th>Fecha</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Mark</td>
              <td>Pendiente</td>
              <td>550.25</td>
              <td>13/08/2022 14:07</td>
            </tr>
            <tr>
              <td>2</td>
              <td>Jacob</td>
              <td>Pendiente</td>
              <td>1400.00</td>
              <td>13/08/2022 14:07</td>
            </tr>
            <tr>
              <td>3</td>
              <td>Larry</td>
              <td>Pendiente</td>
              <td>400.00</td>
              <td>13/08/2022 14:07</td>
            </tr>
            <tr>
              <td>4</td>
              <td>Jacob</td>
              <td>Pendiente</td>
              <td>1500.00</td>
              <td>13/08/2022 14:07</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  </div>

  </div>
</main>
<?php footerAdmin($data); ?>