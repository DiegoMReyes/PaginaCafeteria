

<!DOCTYPE html>
<html>
<head>
	<title></title>

</head>
<body>

<?php  

		require_once("conexion.php");
 

		         $id = $_REQUEST['red'];

		         $sql = "  UPDATE Usuario SET Estado='Inactivo' WHERE idUsuario= '$id'  ";
		          
		          $con22 = new conexion();
		          $con22->conecta($sql, 0);
 

		           echo "  <meta http-equiv='REFRESH' content='0; url= Usuarios.php' >


		           

		            ";



?>


</body>

</html>