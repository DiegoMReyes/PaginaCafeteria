<?php 

if (!empty($_POST['Nombre'])) {
	
	$Nombre = $_POST['Nombre'];
	$DNI = $_POST['DNI'];
	$Codigo = $_POST['Codigo'];
	$Tipo = $_POST['Tipo'];
	$Valor = $_POST['Valor'];
	$idProducto = $_POST['idProducto'];


	$conexion = mysql_connect("localhost", "diego", "diego");
    
    if(!$conexion){
    
        die("<h1>No se ha podido conectar: ".mysql_error()."</h1>");
    
    }
    mysql_select_db("cafeteria", $conexion);

    $sql = "UPDATE Producto SET 
    		Nombre='".$Nombre."', 
    		DNI='".$DNI."', 
    		Codigo = '".$Codigo."', 
    		Tipo = '".$Tipo."', 
    		Valor = '".$Valor."'

    		WHERE idProducto=$idProducto";

    mysql_query($sql);

    mysql_close();

    echo" 
	<html>
    <head>
    <meta http-equiv='REFRESH' content='0; url= listarProducto.php' > 
    	<script>confirm('El Producto se actualizo correctamente')</script>
    </head>
	</html>


";

}





?> 