<?php 

 include('conexion.php');


 session_start();


 $id = $_SESSION['idAdministrador'];





  
	$c = $_POST['c'];
	$c1 = $_POST['c1'];
	$c2 = $_POST['c2'];
 


	$sql = "SELECT * FROM Administrador WHERE idAdministrador=$id AND Estado = 'Activo' " ;

		$cone = new conexion();

		$cone->conecta($sql, 1);

 


 $fila = mysql_fetch_array( $resultado)  ;
 
			$userB = $fila['User'];
			$passB = $fila['Password'];

			 


			if($c != "" && $c1 != "" && $c2){ 


				if($c1 == $c2){ 
 

						if($c == $passB ){




							$sql = "UPDATE Administrador SET Password='$c1' WHERE idAdministrador=$id";


							$cone->conecta($sql, 0);

							$voyA =  "<script> alert('Contraseña actualizada correctamente'); </script>";

  
 
						            
 
						}else{

							$voyA =  "<script> alert('Datos incorrectos'); </script>";

						}


				}else{
					$voyA =  "<script> alert('La nueva contraseña no coincide'); </script>";


				}


			}else{

					$voyA = "<script>  alert('Por favor Completa los datos'); </script>";

			}








			echo $voyA;
 



 

 ?>