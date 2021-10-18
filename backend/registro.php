<?php

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>shop - login</title>
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="index.php"><img src="img/logo.png" /></a>
            </div>
        </nav>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
<header class="masthead-login">
            <div class="container d-flex h-100 align-items-center">
              <div class="col-4 mx-auto">
                <div class="text-left">
                    <form method="post" action="registrarse.php">
                      <input type="text" name="Nombre" class="form-control mb-4" placeholder="Ingrese su nombre">
                      <input type="text" name="Apellido" class="form-control mb-4" placeholder="Ingrese su apellido">
                      <input type="email" name="email" class="form-control mb-4" placeholder="Ingrese su correo electronico">
                      <input type="password" name="password" class="form-control mb-4" placeholder="Ingrese su contraseña">
                      <input type="password" name="password2" class="form-control mb-4" placeholder="Repita su contraseña">
                      <button type="submit" class="btn btn-login btn-block"> Registrar </button>
                    </form>
                </div>
              </div>
            </div>
</header>








