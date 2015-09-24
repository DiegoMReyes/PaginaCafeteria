<?php 

if(!empty($_GET['idProducto'])){

	$idProducto = $_GET['idProducto'];



	$conexion = mysql_connect("localhost", "diego", "diego");
    if(!$conexion){
    
        die("<h1>No se ha podido conectar: ".mysql_error()."</h1>");
    
    }
    mysql_select_db("cafeteria", $conexion);

    $sql = "UPDATE Producto SET Estado='Inactivo' WHERE idProducto=$idProducto";

    mysql_query($sql);

    mysql_close();

    echo" 
	<html>
    <head>
    <meta http-equiv='REFRESH' content='0; url= listarProducto.php' > 
    	<script>alert('El Producto se elimino correctamente')</script>
    </head>
	</html>


";
}

?>