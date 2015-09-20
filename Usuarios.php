<!DOCTYPE HTML>
<html>
	<head>
				<title>Modern an Admin Panel Category Flat Bootstarp Resposive Website Template | Basic_tables :: w3layouts</title>
				<meta name="viewport" content="width=device-width, initial-scale=1">
				<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
				<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
				Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
				<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
				  
				<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
				 
				<link href="css/style.css" rel='stylesheet' type='text/css' />
				<link href="css/font-awesome.css" rel="stylesheet"> 
				 
				<script src="js/jquery.min.js"></script>
				 
				<script src="js/bootstrap.min.js"></script>
	</head>
<body>





<?php
	

	include('administrador.php');

    include('conexion.php');

?>
 

<div id="wrapper">

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


<?php
      $sql = "SELECT * FROM Usuario WHERE Estado='Activo' ";

     $cone = new conexion();

		$cone->conecta($sql, 1);

    $class = 0; $numeropl = 0;

    $d = 0;

      $_SESSION['guardoIDs'] = array();

     


    tabla();

    function  tabla(){ 

      Global $fila , $resultado , $numeropl, $class;

      Global $nombre , $apellido, $user, $id , $d;




      while ($fila = mysql_fetch_array($resultado)){

            	$nombre = $fila['Nombre'];
            	$apellido = $fila['Apellido'];
            	$user = $fila['User'];
              $id = $fila['idUsuario'];

              $d = $fila['numeroDocumento'];

               array_push($_SESSION['guardoIDs'] , array( 'lodIDs' => $d ));


              $numeropl++;

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



        


 
      ?>
    
      

     </tbody>
    </table>


      <form action="q.php" method="POST"  >

       <label>Que estudiante desea eliminar</label>

          <input type="number" name="number" min="1"  <?php Global $numeropl;  echo 'max="'.$numeropl.'"' ;   ?>  required/>
          <input type="submit" name='envio' value='Eliminar' /> 

      </form>





       </div>


       </div>
      </div>



      </div>
 

 </div>

</body>
</html>
 