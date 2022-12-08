    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="Assets/images/avatar.png" alt="User Image">
        <div>
          <p class="app-sidebar__user-name">Jose Llanes</p>  
          <p class="app-sidebar__user-designation">Administrador</p>
        </div>
      </div>
      <ul class="app-menu">

        <li><a class="app-menu__item" href="<?= base_url(); ?>/dashboard"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
        <li><a class="app-menu__item" href="<?= base_url(); ?>/home"><i class="app-menu__icon fa fa-shopping-basket"></i><span class="app-menu__label">Ver sitio web</span></a></li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-lock"></i><span class="app-menu__label">Seguridad</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="<?= base_url(); ?>/usuarios"><i class="icon fa fa-user"></i>Usuarios</a></li>
            <li><a class="treeview-item" href="<?= base_url(); ?>/roles"><i class="icon fa fa-users"></i>Roles y Permisos</a></li>
   
            <li><a class="treeview-item" href="<?= base_url(); ?>/objetos"><i class="icon fa fa-desktop"></i>Objetos</a></li>
            <li><a class="treeview-item" href="<?= base_url(); ?>/parametros"><i class="icon fa fa-key"></i>Parametros</a></li>
            <li><a class="treeview-item" href="<?= base_url(); ?>/bitacora"><i class="icon fa fa-book"></i>Bitacora</a></li>
            
            <li><a class="treeview-item" href="<?= base_url(); ?>/preguntas_seguridad"><i class="icon fa fa-question-circle"></i>Preguntas de Seguridad</a></li>
          </ul>
        </li>
       
        <li><a class="app-menu__item" href="<?= base_url(); ?>/clientes"><i class="app-menu__icon fa fa-address-book"></i><span class="app-menu__label">Clientes</span></a></li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-archive"></i><span class="app-menu__label">Productos</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="<?= base_url(); ?>/productos"><i class="icon fa fa-product-hunt"></i>Productos</a></li>
            <li><a class="treeview-item" href="<?= base_url(); ?>/categoriasP"><i class="icon fa fa-bars"></i>Categorias</a></li>
            <li><a class="app-menu__item" href="<?= base_url(); ?>/promociones"><i class="app-menu__icon fa fa-address-book"></i><span class="app-menu__label">Promociones</span></a></li>
        <li><a class="app-menu__item" href="<?= base_url(); ?>/descuentos"><i class="app-menu__icon fa fa-shopping-cart"></i><span class="app-menu__label">Descuentos</span></a></li>
          </ul> 
        </li>
        
        <li><a class="app-menu__item" href="<?= base_url(); ?>/pedidos"><i class="app-menu__icon fa fa-shopping-cart"></i><span class="app-menu__label">Pedidos</span></a></li>



        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-archive"></i><span class="app-menu__label">Mantenimiento</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="<?= base_url(); ?>/mantenimiento"><i class="icon fa fa-product-hunt"></i>Pedidos</a></li>
            <li><a class="treeview-item" href="<?= base_url(); ?>/mantenimiento_promo"><i class="icon fa fa-product-hunt"></i>Promociones</a></li>
            <li><a class="treeview-item" href="<?= base_url(); ?>/mantenimiento_descuentos"><i class="icon fa fa-product-hunt"></i>Descuentos</a></li>
      
          </ul> 
        </li>








        <li><a class="app-menu__item" href="<?= base_url(); ?>/Cerrar_session_usuario"><i class="app-menu__icon fa fa-sign-out"></i><span class="app-menu__label">Cerrar Sesion </span></a></li>
      </ul>
    </aside>