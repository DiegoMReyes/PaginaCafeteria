<?php 

$busca = $_POST['busca'];
 
if($busca != ""){

echo ' 

<table class="table">
     <thead>
        <tr>
          <th>#</th>
          
          <th>Nombre del Producto</th>
          <th>DNI</th>
          <th>Codigo</th>
		  <th>Tipo de Producto</th>
		  <th>Valor del Producto</th>
       
      <th></th>
      <th></th>
        </tr>
      </thead>
      <tbody>'


      ?>
        <?php

       require_once("conexion.php");
         
        $sql = "SELECT * FROM Producto WHERE Nombre LIKE '$busca%'  AND Estado ='Activo' ";
 

        $con = new conexion();
 
        $con->conecta($sql, 1);
  
        $contador = 1;

        while($fila = mysql_fetch_array($resultado)){

          echo "
            <tr>
            <td>".$contador."</td>
             
             <td>".$fila['Nombre']."</td>
             <td>".$fila['DNI']."</td> 
             <td>".$fila['Codigo']."</td> 
             <td>".$fila['Tipo']."</td> 
             <td>".$fila['Valor']."</td> 
               
              </tr>
          ";

          $contador++;

        }

        
       
       echo ' 
         
      </tbody>
    </table>


    ';



}else{


	echo "";

}




 ?>