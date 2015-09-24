<?php 

    session_start();


    @$idAdm = @$_SESSION['idAdministrador'];


    if(@$idAdm > 0){ 


 ?>


<!DOCTYPE HTML>
<html>
<head>
<title>Usuarios</title>
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
                <a class="navbar-brand" href="Usuarios.php">Usuarios</a>
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
                                    <a href="newProducto.html">Nuevo Producto</a>
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
  	 <h3>Usuarios</h3>
  	<div class="bs-example4" data-example-id="contextual-table">
    <table class="table">
      <thead>
        <tr>
          <th>#</th>
          <th>Nombre</th>
          <th>Apellido</th>
          <th>Usuario</th>
          <th>No. Documento</th>
          <th>Elminar</th>
        </tr>
      </thead>


	<tbody>


      <?php  

      

       

      include('conexion.php');


      $sql = "SELECT * FROM Usuario WHERE Estado='Activo' ";

     $cone = new conexion();

		$cone->conecta($sql, 1);

    $class = 0; $numeropl = 0;

    $d = 0;
 
    $arrayids = array();


    
    function  tabla(){ 

      Global $fila , $resultado , $numeropl, $class;

      Global $nombre , $apellido, $user, $id , $d , $arrayids;




      while ($fila = mysql_fetch_array($resultado)){

            	$nombre = $fila['Nombre'];
            	$apellido = $fila['Apellido'];
            	$user = $fila['User'];
              $id = $fila['idUsuario'];

              $d = $fila['numeroDocumento'];


               $numeropl++;

              $arrayids[$numeropl] = $id;
 
 

              switch ($class) {
                case 0: fila("active") ; $class = 1 ; break;
                case 1: fila(""); $class = 2 ; break;
                case 2: fila("success"); $class = 3 ; break;
                case 3: fila(""); $class = 4 ; break;
                case 4: fila("info"); $class = 5 ; break;
                case 5: fila(""); $class = 6 ; break;
                case 6: fila("warning"); $class = 7 ; break;
                case 7: fila(""); $class = 8 ; break;
                case 8: fila("danger"); $class = 9 ; break;
                case 9: fila(""); $class = 0 ; break;
                default:  fila(""); break;
              }


              

 
      }


    }

      function  fila($class){

          Global $nombre , $apellido, $user, $d ;
          Global $numeropl;

          Global $id;

            echo'

                  <tr class="'.$class.'">
                    <th scope="row">'.$numeropl.'</th>
                    <td> '.$nombre.' </td>
                    <td>  '.$apellido.'  </td>
                    <td>  '.$user.'  </td>
                    <td>  '.$d .'  </td>
                    <td> <a href="tablesEl.php?red='.$id.'" ><img  width="40px" height="40px" src="images/Eliminar.jpg"  /></a> </td>
                  </tr>





              '; 


      }


      tabla();

        


 
      ?>
    
      

      </tbody>
    </table>


      <form action="#" method="POST"  >

       <label>Que usuario desea eliminar</label>

          <input type="number" name="number" value="num" min="1"  <?php Global $numeropl;  echo 'max="'.$numeropl.'"' ;   ?>  required/>
          <input type="submit" name='envio' value='Eliminar' /> 

      </form>



      <?php 


      if(isset($_POST['envio'])){

           $idd =  $_POST['number'];



           Global $arrayids;

           $red = $arrayids[$idd] ;


          echo "  <meta http-equiv='REFRESH' content='0; url= tablesEl.php?red=".$red."' > 
          <script>  alert('Eliminado correctamente'); </script> "


          ;


      }





       ?>



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