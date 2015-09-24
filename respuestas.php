
<?php 

    session_start();


    @$idUser = @$_SESSION['idUsuario'];


    if(@$idUser > 0){ 


 ?>




<!DOCTYPE HTML>
<html>
<head>
<title>Modern an Admin Panel Category Flat Bootstarp Resposive Website Template | Basic_tables :: w3layouts</title>
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
                <a class="navbar-brand" href="respuestas.php">Respuestas</a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-nav navbar-right">
				
			    <li class="dropdown">
	        		<a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"><img src="images/1.png" alt=""/><span class="badge"></span></a>
	        		<ul class="dropdown-menu">
						 
						 
						<li class="divider"></li>
						
						<li class="m_2"><a href="salir.php"><i class="fa fa-lock"></i> Salir</a></li>	
	        		</ul>
	      		</li>
			</ul>
			<form class="navbar-form navbar-right">
            </form>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="usuario.php"><i class="fa fa-dashboard fa-fw nav_icon"></i>Inicio</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-laptop nav_icon"></i>Productos<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="listar.php">Listar Productos</a>
                                </li>
								
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                        <li>
                            <a href="#"><i class="fa fa-envelope nav_icon"></i>Mensajes<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="comentariosUser.php">Comentarios</a>
                                </li>
								<li>
									<a href="">Respuestas</a>
								</li>
                                
                            </ul>
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
  	 <h3>Respuestas de los comentarios</h3>
  	 <div class="panel-body1">
   <table class="table">
     <thead>
        <tr>


        <th>#</th>
          <th>Comentario</th>
          <th>Respuesta</th>
         
        </tr>
      </thead>
      <tbody>
        <?php

       require_once("conexion.php");
         
        $sql = "SELECT * FROM comentario WHERE  Usuario_idUsuario =$idUser ";
 

        $con = new conexion();
 
        $con->conecta($sql, 1);
  
        $contador = 1;

        while($fila = mysql_fetch_array($resultado)){


          $sql = "SELECT * FROM respuesta WHERE Comentario_idComentario= ".$fila['idComentario']." AND Comentario_Usuario_idUsuario= $idUser";

          $con->conecta($sql, 0);
 
          $resul = mysql_query($sql);

          $row = mysql_fetch_array($resul);

          $respuesta = $row['Respuesta'];

          if($respuesta == ""){

            $respuesta = "<span style='color:blue'> Sin respuesta</span>";

          }


          echo "
            <tr>
            <td>".$contador.". </td>
            <td>  ".$fila['Comentario']." </td>
             
              <td>  $respuesta</td>
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