<?php 



$user = $_POST['user'];

 

       require_once("conexion.php");
         
        $sql = "SELECT * FROM Administrador WHERE idAdministrador= $user  AND Estado ='Activo' ";
 

        $con = new conexion();
 
        $con->conecta($sql, 1);
  
        $contador = 1  ;




 
$fila = mysql_fetch_array($resultado);





 echo '

 <center>

  <h3>Administrador</h3>  

  <div class="form-signin app-cam" >

   
 	  <input type="password" class="form-control1" id="c" name="c" placeholder="Contraseña Actual" required >
      <input type="password" class="form-control1" id="c1" name="c1" placeholder="Nueva Contraseña" required >
      <input type="password" class="form-control1" id="c2" name="c2" placeholder="Confirmar contraseña" required>

      <form method="POST">
          <input type="submit" id="enviar">
   	  </form>

  <div>


 ';

$password = $fila["Password"];

 

?>

<div id="resultado"></div>

 

<script >


                      $("#enviar").click(function(){

 						              var c = $("#c").val();
                          var c1 = $("#c1").val();
                          var c2 = $("#c2").val();


                          $.ajax({
                              method: "POST",
                              url: "admactu.php",
                              data: { c:c , c1:c1 , c2:c2}
                            })

                            .done(function( msg ) {
                               $("#resultado").html(msg);
                 
                            });

  


                      });



 </script>
 