<?php 

	session_start();

	//$user = $_SESSION['usuario'] ;

	

	if(!empty($_POST['nombreProducto'])){

		

		$conecte = mysql_connect( "localhost" , "diego" , "diego" );

		mysql_select_db('cafeteria' , $conecte);


		$nombre = $_POST['nombreProducto'];
		$DNI = $_POST['DNI'];
		$codigo = $_POST['codigo'];
		$tipo = $_POST['tipo'];
		$valor = $_POST['valor'];

		$sqlC = "SELECT * FROM producto WHERE Nombre = '".$nombre."';";
		

		$resultado = mysql_query($sqlC);

		
		$entrar = 0;

		while($fila = mysql_fetch_array($resultado)){
			
			echo"<script>Entre en el While</script>";
			$entrar++;

		}
		
		if($entrar==0){

			$sql = "INSERT INTO producto(Administrador_idAdministrador, Nombre, DNI, Codigo, Tipo, Valor, Estado)  
				VALUES(1,'$nombre','$DNI','$codigo','$tipo','$valor','Activo')";

		

			$resultado = mysql_query($sql);
		
		 
 		
 			echo("
 			<html>
    		<head>
    		<meta http-equiv='REFRESH' content='0; url= listarProducto.php' > 
    			<script>alert('Se guardo el registro correctamente');</script>
    		</head>
			</html>
 		");
 		}else{
 			echo("
 			<html>
    		<head>
    		<meta http-equiv='REFRESH' content='0; url= listarProducto.php' > 
    			<script>confirm('El Producto ya se encuentra registrado en el sistema');</script>
    		</head>
			</html>
 		");
 		}

	}

?>