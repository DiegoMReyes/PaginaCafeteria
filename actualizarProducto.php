<!DOCTYPE HTML>
<html>
<head>
<title>Actualizar Producto</title>
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
                <a class="navbar-brand" href="index.html">Registrar Estudiante</a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-nav navbar-right">
				
			    <li class="dropdown">
	        		<a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"><img src="images/1.png" alt=""/><span class="badge"></span></a>
	        		<ul class="dropdown-menu">
						<li class="dropdown-menu-header text-center">
							<strong>Cuenta</strong>						</li>
						<li class="m_2"><a href="#"><i class="fa fa-bell-o"></i> Actualizar <span class="label label-info"></span></a></li>
						<li class="m_2"><a href="#"><i class="fa fa-envelope-o"></i> Mensajes <span class="label label-success"></span></a></li>
						<li class="m_2"><a href="#"><i class="fa fa-tasks"></i> Respuestas <span class="label label-danger"></span></a></li>
						<li><a href="#"><i class="fa fa-comments"></i> Comentarios <span class="label label-warning"></span></a></li>
						<li class="dropdown-menu-header text-center">
							<strong>Ajustes</strong>						</li>
						<li class="m_2"><a href="#"><i class="fa fa-user"></i> Perfil</a></li>
						<li class="m_2"><a href="#"><i class="fa fa-wrench"></i> Configurar</a></li>
						
						<li class="divider"></li>
						
						<li class="m_2"><a href="#"><i class="fa fa-lock"></i> Salir</a></li>	
	        		</ul>
	      		</li>
			</ul>
			<form class="navbar-form navbar-right">
              <input type="text" class="form-control" value="Buscar Producto.." onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Buscar Producto..';}">
            </form>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="index.html"><i class="fa fa-dashboard fa-fw nav_icon"></i>Inicio</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-laptop nav_icon"></i>Productos<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="listarProducto.php">Listar Productos</a>
                                </li>
								<li>
                                    <a href="newProducto.html">Nuevo Producto</a>
                                </li>
								<li>
                                    <a href="">Eliminar Productos</a>
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
                                    <a href="basic_tables.html">Listar Usuarios</a>
                                </li>

                            </ul>
                            <a href=""><i class="fa fa-flask nav_icon"></i>Inventario</a>
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
      </tr>
      </thead>
      <tbody>
      <?php 

      if(!empty($_GET['idProducto'])){
        
        $idProducto = $_GET['idProducto'];

        require_once("conexion.php");
         
        $sql = "SELECT * FROM Producto WHERE idProducto= '".$idProducto."' ;";
 

        $con = new conexion();
 
        $con->conecta($sql, 1);
  
        $contador = 1;

        while($fila = mysql_fetch_array($resultado)){

          $Nombre = $fila['Nombre'];
          $DNI = $fila['DNI'];
          $Codigo = $fila['Codigo'];
          $Tipo = $fila['Tipo'];
          $Valor = $fila['Valor'];

          echo "
             <tr>
             <td>".$contador."</td>
             <td>".$Nombre."</td>
             <td>".$DNI."</td> 
             <td>".$Codigo."</td> 
             <td>".$Tipo."</td> 
             <td>".$Valor."</td> 
             </tr>
          ";

          $contador++;

        }
        
      }else{

        echo "<h5>Por favor busque un producto para actualizarlo</h5>";

      }

      ?>
      <h3>Datos del producto a actualizar</h3>

       
        
      </tbody>
    </table>
    </div>
     <div class="bs-example4" data-example-id="simple-responsive-table">
       <!-- /.table-responsive -->
       <!-- /.table-responsive -->
</div>
  </div>
  <form action="updateProducto.php" method="POST">
      <div class="form-group has-success">
        <label class="control-label" for="inputSuccess1">Input with success</label>
        <?php  echo '<input type="text" class="form-control1" id="inputSuccess1" name="Nombre" value='.$Nombre.'>'; ?>
        <?php  echo '<input type="text" class="form-control1" id="inputSuccess1" name="DNI" value='.$DNI.'>'; ?>
        <?php  echo '<input type="text" class="form-control1" id="inputSuccess1" name="Codigo" value='.$Codigo.'>'; ?>
        <?php  echo '<input type="text" class="form-control1" id="inputSuccess1" name="Tipo" value='.$Tipo.'>'; ?>
        <?php  echo '<input type="text" class="form-control1" id="inputSuccess1" name="Valor" value='.$Valor.'>'; ?>
        <?php  echo '<input type="hidden" name="idProducto" value='.$idProducto.'>'; ?>
        <input class="btn-success btn" type="Submit" value="Click Para Actualizar">
        

      </div>
    </form>

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
