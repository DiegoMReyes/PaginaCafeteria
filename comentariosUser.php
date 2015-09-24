 <?php 

    session_start();


    @$idUser = @$_SESSION['idUsuario'];


    if(@$idUser > 0){ 


 ?>


 

<!DOCTYPE HTML>
<html>
<head>
<title>Comentarios</title>
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
 
<script src="js/bootstrap.min.js"></script>
</head>
<body>


<div id="resultado"></div>


<?php 
 


$idUsuario = $_SESSION['idUsuario']   ;

 
 ?>


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
                <a class="navbar-brand" href="comentariosUser.php">Comentarios</a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-nav navbar-right">
				 
			    <li class="dropdown">
	        		<a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"><img src="images/1.png" alt=""/><span class="badge"></span></a>
	        		<ul class="dropdown-menu">
						 
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
                                    <a href="listar.php">Listar productos</a>
                                </li>
                            </ul>
                             
                        </li>
                        
                        <li>
                            <a href="#"><i class="fa fa-envelope nav_icon"></i>Mensajes<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="comentariosUser.php">Comentarios</a>
                                </li>
                                <li>
                                    <a href="respuestas.php">Respuestas</a>
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
        <div class="graphs">
	      
        <div class="col-md-8 inbox_right">
        	<div class="Compose-Message">               
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Nuevo mensaje
                    </div>

 

		                    <div class="panel-body">
		                        <div class="alert alert-info">
		                            Por favor escribe los detalles del mensaje
		                        </div>
		                        <hr>
		                        <label>Asunto : </label>

		                        <select name="tipoComentario" id="tipocomentario" class="form-control1 control3">

		                        	<option value="">Seleccione el tipo de comentario </option>	
		                        	<option value="Malo" >Malo</option>
		                        	<option value="Bueno">Bueno</option>
		                        	<option value="Excelente">Excelente</option>

		                        </select> 
		                        <label>Mensaje: </label>
		                        <textarea id="comentario" rows="6" name="comentario" class="form-control1 control2"></textarea>
		                        <hr>
		                        <a href="comentariosUser.php"  id="enviar" class="btn btn-warning btn-warng1" ><span class="glyphicon glyphicon-envelope tag_02"></span> Enviar Mensaje </a>&nbsp;
		                       
		                    </div>
 

                 </div>
              </div>
         </div>
         <div class="clearfix"> </div>
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



<script  >
	
	$("#enviar").click(function(){


						var tipo = $("#tipocomentario").val();
						var comentario = $("#comentario").val();

 

                          $.ajax({
                            method: "POST",
                            url: "nuevomensaje.php",
                            data: {

                            	tipo:tipo , comentario:comentario



                             }
                          })

                          .done(function( msg ) {
                             $("#resultado").html(msg);
               
                          });


                      });



</script>



</body>
</html>

<?php 


}else{
 


        echo"

<meta http-equiv='REFRESH' content='0; url= error404.php' >"; 


}

?>
