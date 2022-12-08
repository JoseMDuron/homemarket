 <!-- Essential javascripts for application to work-->
 
 <script> const base_url = "<?= base_url(); ?>"; </script>
 <script src="Assets/js/jquery-3.3.1.min.js"></script>
    <script src="Assets/js/popper.min.js"></script>
    <script src="Assets/js/bootstrap.min.js"></script>

    <script src="Assets/js/main.js"></script>
    
    <!-- The javascript plugin to display page loading on top-->
    <script src="Assets/js/plugins/pace.min.js"></script>
    <!-- para data tables-->
 
    <script type="text/javascript" src="Assets/js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="Assets/js/plugins/dataTables.bootstrap.min.js"></script>

    <script type="text/javascript" src="Assets/js/plugins/sweetalert.min.js"></script>
    <script src="Assets/js/functions_bitacora.js"></script> <!--llamado de funcion usuario-->
    
     <!--Validacion pagina roles-->
    <?php if($data['page_name'] == "Roles Usuario"){  ?>
    <script src="Assets/js/functions_roles.js"></script>
    <?php
    }?>
    <!--Validacion pagina usuarios-->
    <?php if($data['page_name'] == "usuarios"){  ?>
    <script src="Assets/js/functions_usuarios.js"></script> <!--llamado de funcion usuario-->
    <?php
    }?>
        <?php if($data['page_name'] == "Clientes"){  ?>
	    <script src="Assets/js/functions_clientes.js"></script>
      <?php
    }?>

  </body>
</html>