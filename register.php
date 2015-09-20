


<!DOCTYPE HTML>
<html>
<head>
              <title>Registro</title>
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

              <script src="js/programador.js"></script>

</head>


<body id="login">

<div id="resultado"></div>


  <div  "login-logo">
     <br><br><br><h1 align="center">  Cafeteria  </h1>
  </div>
  <br><br><br><br>
  <h2 class="form-heading">Registrar</h2>
  <div class="form-signin app-cam" >
      <p>Ingrese sus datos personales</p>
      <input type="text" class="form-control1" name="nombre" id="nombre" placeholder="Nombres" required autofocus="">
      <input type="text" class="form-control1" name="apellido" id="apellido" placeholder="Apellidos" required autofocus="">
      
      <select required  name='tipo' id='tipo' class="form-control1"  autofocus="" >
        
         <option value="">Seleccione tipo de Documento</option>
        
         <option   value='Registro civil'  >Registro Civil</option>
         <option    value='Tarjeta de Identidad'  >Tarjeta de Identidad</option>
         <option    value='Cedula de Ciudadania'   > Cedula de Ciudadania</option>
        

      </select>

      <br><br>

      <input type="text" name="numero" id="numero" class="form-control1" placeholder="Numero de Documento" required autofocus="">
      
      <div class="genero"  required>
        <label for="masculino"  class="label_radio">
            <input type="radio" id="genero" value="Masculino" name="genero" required> Masculino
        </label>
        <label for="femenino"  class="label_radio">
            <input type="radio" id="genero" value="Femenino" name="genero"  required> Femenimo
        </label>
	  </div>

    <br><br>

    	  <h4> Introduzca los datos de su cuenta a continuación</h4>
      <input type="text" name="user" class="form-control1" id="usuario" placeholder="Nombre de Usuario" required autofocus="">
      <input type="password" class="form-control1" id="c1" name="c1" placeholder="Contraseña" required >
      <input type="password" class="form-control1" id="c2" name="c2" placeholder="Confirmar contraseña" required>
      <label class="checkbox-custom check-success">
         <label for="checkbox1">
         <input type="checkbox" value="" id="checkbox1" required> Estoy de acuerdo con los Términos de Servicio y Política de Privacidad</label> 
      </label>
      <div id="enviar" ><button class="btn btn-lg btn-success1 btn-block" name ='boton' type="submit" onclick="ConfirmDelete()">Enviar Datos</button></div>
      <div class="registration">
          Ya registrado.
          <a class="" href="login.php">
                Ingresar
          </a>
      </div>

      
      

  </div>
 
             <script >


                      $("#enviar").click(function(){



                          
                          var nombre = $("#nombre").val();
                          var apellido = $("#apellido").val();
                          var tipo = $("#tipo").val();
                          var numero = $("#numero").val();
                          var genero = $("#genero").val();

                          var usuario = $("#usuario").val();
                          var c1 = $("#c1").val();
                          var c2 = $("#c2").val();


                          $.ajax({
                            method: "POST",
                            url: "registroUser.php",
                            data: {
                             nombre:nombre , apellido: apellido,
                             tipo: tipo, numero: numero,
                             genero: genero,
                             usuario: usuario , c1:c1 , c2:c2}
                          })

                          .done(function( msg ) {
                             $("#resultado").html(msg);
               
                          });


                      });



             </script>
    
</body>


</html>


