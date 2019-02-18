<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/login.css">

</head>
<body>
   <body class="text-center">
    <form class="form-signin">
  <img class="mb-4" src="img/logotipo.png">
  <h1 id="text1" class="h3 mb-3 font-weight-normal">Inicio Sesion</h1>
  <label for="inputEmail" class="sr-only">Correo Electronico</label>
  <input type="email" id="inputEmail" class="form-control" placeholder="Dirección de correo" required autofocus>
  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me"> Recuerdame
    </label>
  </div>
  <button class="btn btn-lg btn-primary btn-block" id= "buttonSign" type="button">Iniciar</button>
  <p class="mt-5 mb-3 text-muted">&copy; 2017-2019</p>
</form>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>  
<script>

    $("#buttonSign").click(function(){
      //obtener e valor del email
    let correo = $("#inputEmail").val();
    //obtener el valor del password
    let password = $("#inputPassword").val();
    let obj = {
      "accions" : "login",
      "correo" : correo,
      "password" : password  
    };
    if (correo == "" || password == "") {
       alert("Inserta Correo y Contraseña Codigo Error:03");
    } 
    else{
    $.post('includes/_funciones.php', obj, function() {});
    }
    //enviar a validar esos valores
    //en caso de ser valido redireccionar a usuario.php
    //en caso de no ser valido enviar mensaje de error 
});
</script>
</body>
</html>