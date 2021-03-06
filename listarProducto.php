<?php 

    session_start();


    @$idAdm = @$_SESSION['idAdministrador'];


    if(@$idAdm > 0){ 


 ?>


<!DOCTYPE HTML>
<html>
<head>
<title>Lista de productos</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->  
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
</head>
<body>
<div id="wrapper">
         <!-- Navigation -->
        <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="listarproducto.php">Lista de productos</a>
            </div>
            <!-- /.navbar-header -->
     <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
              
              
            </li>
          <li class="dropdown">
              <a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"><img src="images/1.png"><span class="badge"></span></a>
              <ul class="dropdown-menu">
            <li class="dropdown-menu-header text-center">
              <strong>Cuenta</strong>
            </li>
              
            <li class="m_2"><a href="salir.php"><i class="fa fa-lock"></i>Salir</a></li>  
              </ul>
            </li>
      </ul>
			 
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="administrador.php"><i class="fa fa-dashboard fa-fw nav_icon"></i>Inicio</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-laptop nav_icon"></i>Productos<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="listarProducto.php">Listar Productos</a>
                                </li>
								<li>
                                    <a href="newProducto.php">Nuevo Producto</a>
                                </li>
								          </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                        <li>
                            <a href="#"><i class="fa fa-envelope nav_icon"></i>Mensajes<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="inbox.html">Comentarios</a>
                                </li>
								<li>
									<a href="">Solicitudes</a>
								</li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                         
                        <li>
                            <a href="#"><i class="fa fa-table nav_icon"></i>Usuarios<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="Usuarios.php">Listar Usuarios</a>
                                </li>
                            </ul>
                            <li>
                            <a href=""><i class="fa fa-flask nav_icon"></i>Inventario<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="Inventario.php">Registrar Ventas</a>
                                </li>
                <li>
                                    <a href="listarVentas.php">Listar Ventas</a>
                                </li>
                
                            </ul>
                            </li>
                            <!-- /.nav-second-level -->
                        </li>
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <div id="page-wrapper">
        <div class="col-md-12 graphs">
	   <div class="xs">
  	 <h3>Productos Registrados</h3>
  	 <div class="panel-body1">
   <table class="table">
     <thead>
        <tr>
          <th>#</th>
          
          <th>Nombre del Producto</th>
          <th>DNI</th>
          <th>Codigo</th>
		  <th>Tipo de Producto</th>
		  <th>Valor del Producto</th>
       
      <th></th>
      <th></th>
        </tr>
      </thead>
      <tbody>
        <?php

       require_once("conexion.php");
         
        $sql = "SELECT * FROM Producto WHERE Estado ='Activo' ";
 

        $con = new conexion();
 
        $con->conecta($sql, 1);
  
        $contador = 1;

        while($fila = mysql_fetch_array($resultado)){

          echo "
            <tr>
            <td>".$contador."</td>
             
             <td>".$fila['Nombre']."</td>
             <td>".$fila['DNI']."</td> 
             <td>".$fila['Codigo']."</td> 
             <td>".$fila['Tipo']."</td> 
             <td>".$fila['Valor']."</td> 
               
              <td><a href='eliminarProducto.php?idProducto=".$fila['idProducto']."'><image src='Iconos/Delete2.png'></image></a></td>
          <td><a href='ActualizarProducto.php?idProducto=".$fila['idProducto']."'><image src='Iconos/Actualizar.png'></image></a></td>

              </tr>
          ";

          $contador++;

        }

        ?> 
       
         
      </tbody>
    </table>
    </div>
     <div class="bs-example4" data-example-id="simple-responsive-table">
       <!-- /.table-responsive -->
       <!-- /.table-responsive -->
</div>
  </div>
        </div>
        </div>
      <!-- /#page-wrapper -->
   </div>
    <!-- /#wrapper -->
<!-- Nav CSS -->
<link href="css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>



 
<?php 


}else{
 


        echo"

<meta http-equiv='REFRESH' content='0; url= error404.php' >"; 


}

?>
