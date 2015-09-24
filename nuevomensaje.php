<?php 

	 
	 session_start();


		$idUsuario = $_SESSION['idUsuario']   ;

		@$tipo = $_POST['tipo'];
		@$comentario = $_POST['comentario'];
 


if($tipo != "" && $comentario != ""){ 


		$tipo = $_POST['tipo'];
		$comentario = $_POST['comentario'];


		require_once('conexion.php');

		$con = new conexion();


		$sql = "  INSERT INTO comentario (Usuario_idUsuario,Administrador_idAdministrador,TipoComentario,Comentario)  
				VALUES( $idUsuario, 1, '$tipo' , '$comentario')  ";


		$con->conecta($sql, 0);

		echo "<script >alert('Su comentario fue exitosamente enviado')</script>";

	
}else{

		echo "<script >alert('Por favor complete los datos')</script>";

}


	

 ?>