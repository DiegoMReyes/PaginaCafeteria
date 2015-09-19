 

<?php 

 
	
	$name = $_POST['nombre'];
	$apell = $_POST['apellido'];
	$tipo = $_POST['tipo'];
	$number = $_POST['numero'];
	$genero= $_POST['genero'];
	$user = $_POST['usuario'];
	$password = $_POST['c1'];
	$confirm= $_POST['c2'];


	if($password == $confirm){
 
		include('conexion.php');
		$con = new conexion();


		$sql = "SELECT * FROM Usuario WHERE Estado='Activo' ";
		$paso = 0;

		$con->conecta($sql,1);

		while($fila = mysql_fetch_array( $resultado)){

			$userP = $fila['User'];
			$numberP = $fila['numeroDocumento'];
			 

			if($user == $userP && $numberP == $number){

					$paso++;

			}

		}
		

		if($paso == 0){ 	



			$sql = "INSERT INTO Usuario (Nombre, Apellido , tipoDocumento, numeroDocumento, Genero, User , Password , Estado)
					 	 VALUES('$name' , '$apell' , '$tipo' , '$number'  , '$genero' , '$user' , '$password', 'Activo' )";

			
			$con->conecta($sql,0);
 

		}


	}else{ 
 

	}	


	echo "<script> alert('ole'); </script>";

 ?>