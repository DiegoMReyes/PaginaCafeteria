<?php 

if (!empty($_POST['Fecha'])) {
	$Fecha = $_POST['Fecha'];


	$conecte = mysql_connect( "localhost" , "diego" , "diego" );

	mysql_select_db('cafeteria' , $conecte);


	$sqlC = "SELECT Nombre, Valor FROM producto";

	$arrN = array();

	$resultado = mysql_query($sqlC);

	$contador = 0;
	$retornar = 0;

		while($fila = mysql_fetch_array($resultado)){
			
			$Nombre = $fila['Nombre'];
			$valor = $fila['Valor'];

			$tot = $_POST[$Nombre];

			

			$arrN[$Nombre] = $tot;

			$numero = $arrN[$Nombre];

		

			$total = $numero * $valor;

		

			

			$contador++;

			$retornar += $total;

		}

		$sql = "INSERT INTO Ventas (Fecha, TotalVenta) VALUES('$Fecha', $retornar) ";	
		$resultado = mysql_query($sql);

		echo("
 			<html>
    		<head>
    		<meta http-equiv='REFRESH' content='0; url= listarProducto.php' > 
    			<script>alert('Se Registro correctamente la Venta :D');</script>
    		</head>
			</html>
 		");


}


?>