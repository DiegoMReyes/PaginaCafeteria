<?php 
	
	include('conexion.php');

	$user = $_POST['usuario'];
	$password = $_POST['password'];
 


	$sql = "SELECT * FROM Administrador WHERE Estado = 'Activo' " ;

		$cone = new conexion();

		$cone->conecta($sql, 1);

 		 $sigue = 0;


		while($fila = mysql_fetch_array( $resultado)  ){

			if($sigue == 0){ 


			$userB = $fila['User'];
			$passB = $fila['Password'];
			$idAdministrador = $fila['idAdministrador'];


			if($user != "" && $password != ""){ 

						if($user == $userB && $password == $passB ){


							session_start();


							$_SESSION['idAdministrador'] = $idAdministrador ;



							 $voyA = "  <script>  alert('Bienvenido' ); </script>


							 		<html>
						            <head>
						            <meta http-equiv='REFRESH' content='0; url= administrador.php' > 
						            
						            </head>
						            </html> ";

						            $sigue = 1;

						            
 
						}else{

							$voyA =  "<script>  alert('Usuario o contraseña  incorrecto'); </script>";

						}
			}else{

					$voyA = "<script>  alert('Por favor Completa los datos'); </script>";

			}



		}//fin del si

		} 


		if($sigue == 0){ 


		$sql = "SELECT * FROM usuario WHERE Estado = 'Activo' " ;
 
		$cone->conecta($sql, 1);
 

		 $sigue = 0;


		while($fila = mysql_fetch_array( $resultado)  ){

			if($sigue == 0){ 


			$userB = $fila['User'];
			$passB = $fila['Password'];


			if($user != "" || $password != ""){ 

						if($user == $userB && $password == $passB ){


							$idUsuario = $fila['idUsuario'];


							session_start();

							$_SESSION['idUsuario'] = $idUsuario;



							 $voyA = "  <script>  alert('Bienvenido' ); </script>


							 		<html>
						            <head>
						            <meta http-equiv='REFRESH' content='0; url= usuario.php' > 
						            
						            </head>
						            </html> ";

						            $sigue = 1;

						            
 
						}else{

							$voyA =  "<script>  alert('Usuario o contraseña  incorrecto'); </script>";

						}
			}else{

					$voyA = "<script>  alert('Por favor Completa los datos'); </script>";

			}



		}//fin del si

		} 




	}//fin del si mauor 



		echo $voyA;
 
 




 ?>