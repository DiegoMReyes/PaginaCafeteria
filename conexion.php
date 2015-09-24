 
<?php 


	class conexion {


		function conecta($sql, $num){ 

			Global $resultado;

					$conecte = mysql_connect( "localhost" , "diego" , "diego" );

					mysql_select_db('cafeteria' , $conecte);


					if($num == 1){

					$resultado = mysql_query($sql);

				    }else{mysql_query($sql);   }

		}


	}

 ?> 