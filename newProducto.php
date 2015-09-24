<?php 

    session_start();


    @$idAdm = @$_SESSION['idAdministrador'];


    if(@$idAdm > 0){ 


 ?>



<!DOCTYPE HTML>
<html>
<head>
<title>Nuevo Producto</title>
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
                <a class="navbar-brand" href="newProducto.php">Nuevo Producto</a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-nav navbar-right">
				
			    <li class="dropdown">
	        		<a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"><img src="images/1.png" alt=""/><span class="badge"></span></a>
	        		<ul class="dropdown-menu">
						<li class="dropdown-menu-header text-center">
							<strong>Cuenta</strong>						</li>
						
            
						
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
        <div class="graphs">
          <div class="xs">
            <h3><strong>Nuevo Producto</strong></h3>
            <div class="well1 white">
              <form method="post" action="nuevoProducto.php"class="form-floating ng-pristine ng-invalid ng-invalid-required ng-valid-email ng-valid-url ng-valid-pattern" novalidate="novalidate" ng-submit="submit()">
                <fieldset>
				<legend>Ingrese por Favor los Datos del Nuevo Producto</legend>
                <div class="form-group">
                  <label class="control-label">Nombre del Producto</label>
                  <input name="nombreProducto" type="text" required="true" class="form-control1 ng-invalid ng-invalid-required ng-touched"  placeholder="Escriba el nombre del Producto..." >
                </div>
                  <div class="form-group">
                  <label class="control-label">DNI del Producto</label>
                  <input name="DNI" type="text" placeholder="Escriba el DNI del producto..." class="form-control1 ng-invalid ng-valid-email ng-invalid-required ng-touched" required/>
                </div>
                  <div class="form-group">
                  <label class="control-label">Codigo</label>
                  <input name="codigo" type="text" placeholder="Escriba el Codigo del Producto...." class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.password" required>
                </div>
                  <div class="form-group">
                  <label class="control-label">Tipo</label>
                  <input name="tipo" type="text" placeholder="Escriba el Tipo del producto..." class="form-control1 ng-invalid ng-valid-url ng-invalid-required ng-touched" ng-model="model.url" required />
                </div>
                  <div class="form-group">
                  <label class="control-label">Valor</label>
                  <input name="valor" type="text" placeholder="Escriba el valor del Producto" class="form-control1 ng-invalid ng-invalid-required ng-valid-pattern ng-touched" ng-model="model.number" ng-pattern="/[0-9]/" required />
                  
                 <br>
				 <br>
                  <div class="form-group">
                  <input type="submit" value="Registrar" class="btn btn-primary" />
				  <button type="reset" class="btn btn-default">Borrar</button>
                  </div>
                </fieldset>
              </form>
            </div>
          </div>
          <div class="copy_layout">
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
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>



<?php 


}else{
 


        echo"

<meta http-equiv='REFRESH' content='0; url= error404.php' >"; 


}

?>