

<?php 

    session_start();


    @$idAdm = @$_SESSION['idAdministrador'];


    if(@$idAdm > 0){ 


 ?>



<!DOCTYPE HTML>
<html>
<head>
<title>Inicio</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="css/lines.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->  
<!-- Nav CSS -->
<link href="css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<!-- Graph JavaScript -->
<script src="js/d3.v3.js"></script>
<script src="js/rickshaw.js"></script>
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
                <a class="navbar-brand" href="administrador.php">Bienvenido Administrador</a>
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
						<li class="m_2" id="actualizar"><a href="#"><i class="fa fa-bell-o"></i> Actualizar <span class="label label-info"></span></a></li>
						<li class="m_2"><a href=""><i class="fa fa-envelope-o"></i> Mensajes <span class="label label-success"></span></a></li>
						<li class="m_2"><a href="#"><i class="fa fa-tasks"></i> Respuestas <span class="label label-danger"></span></a></li>
						 
						<li class="divider"></li>
						<li class="m_2"><a href="salir.php"><i class="fa fa-lock"></i>Salir</a></li>	
	        		</ul>
	      		</li>
			</ul>
			<div class="navbar-form navbar-right">
               <div id="buscar"><input type="text" class="form-control" id="busca" value="Buscar Producto..." onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Buscar Producto..';}"></div>
            </div>
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
                                    <a href="compose.html">Solicitudes</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                         
                        <li>
                            <a href="#"><i class="fa fa-table nav_icon"></i>Usuarios<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                   <div id="Usuarios"> <a href="Usuarios.php">Listar Usuarios</a> <div>
                                </li>
                            </ul>

                        </li>
                        <li>

                            <a href=""><i class="fa fa-flask nav_icon"></i>Inventario<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="Inventario.php">Registrar Ventas</a>
                                </li>
                <li>
                                    <a href="listarVentas.php">Listar Ventas</a>
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


         <div id="resultado">

        
      <!-- /#page-wrapper -->
   </div>
    <!-- /#wrapper -->
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>


    <script>
    $("#actualizar").click(function() {
 

            var user = $("#actualizar").val();
            $.ajax({
                method: "POST",
                url: "ActualizarAdm.php",
                data: { user:user}
            })

            .done(function( msg ) {
                $("#resultado").html(msg);
            });

    });




        $("#buscar").change(function() {
 

            var busca = $("#busca").val();
            $.ajax({
                method: "POST",
                url: "Buscar.php",
                data: { busca:busca}
            })

            .done(function( msg ) {
                $("#resultado").html(msg);
            });

    });


    </script>


 
<?php 


}else{
 


        echo"

<meta http-equiv='REFRESH' content='0; url= error404.php' >"; 


}

?>

 