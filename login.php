
 
<!DOCTYPE HTML>
<html>
<head>
<title>Ingresar</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 

<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />


<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet"> 


<script src="js/jquery.min.js"></script>


<script src="js/bootstrap.min.js"></script>

<script "js/jquery-1.11.3.js"></script>

 

</head>



<body id="login">
  <div  "login-logo">
     <br><br><br><h1 align="center">  Cafeteria  </h1>
  </div>
  <br><br><br><br>

  <h2 class="form-heading">Ingresar</h2>
  <div class="app-cam">
	  

        		<input type="text" id="usuario" name='usuario' placeholder="Usuario" required/>
              	<input type="password" id="password" name='password' placeholder="Contraseña " required/>
              
        		<div class="submit" id="enviar"><input type="submit" name="enviar" value="Login"></div>
        		<div class="login-social-link">


                      <a href="register.php" class="facebook" >
                          Registrate Pulsando Aqui 
                      </a>

                  
                 </div>
        		<ul class="new">
 
  </div>



<form method="POST">
  <div id="resultado"></div>
</form> 


    <script > 


      		$(".submit").click(function() {
            var usuario = $("#usuario").val();
            var password = $("#password").val();
            $.ajax({
              method: "POST",
              url: "ingreso.php",
              data: { usuario: usuario , password:password}
            })

            .done(function( msg ) {
               $("#resultado").html(msg);
 
            });
  


          });

 
  </script>
 

   <?php 

    if(isset($_POST['resultado'])  == 1 )  {

     


    }


    ?>
 

 


</body>
</html>
