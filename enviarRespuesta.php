<?php 

	if (!empty($_POST['idComentario'])) {

		$idComentario = $_POST['idComentario'];
		$respuesta = $_POST['comentario'];

		$conecte = mysql_connect( "localhost" , "diego" , "diego" );

		mysql_select_db('cafeteria' , $conecte);

		$sql = "INSERT INTO Respuesta (Comentario_idComentario, Respuesta) VALUES ($idComentario, '$respuesta')";

		$resultado = mysql_query($sql);

		echo("
 			<html>
    		<head>
    		<meta http-equiv='REFRESH' content='0; url= Mensajes.php' > 
    			<script>alert('Se respondio el mensaje');</script>
    		</head>
			</html>
 		");

	}


?>