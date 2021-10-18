<?php

$data = $_POST;

if ($data['password'] != $data['password2']) {
    echo 'Las contraseñas no coinciden';
    header ("refresh:2 ; url=registro.php");
} else {
    $data['password'] = password_hash($data['password'] , PASSWORD_DEFAULT);
    unset ($data['password2']);
    $enlace = mysqli_connect("localhost", "root", "" , "bd_backend");
        if (!$enlace) {
            echo "Error: no se puede conectar a MySQL" , PHP_EQL;
            echo "errno de depuracion" , mysqli_connect_errno(), PHP_EQL;
            echo "error de depuracion" , mysqli_connect_error (), PHP_EQL;
        }
    $sql = "INSERT INTO usuarios (Nombre , Apellido , email , password) 
    VALUES ('".$data["Nombre"]."' , '".$data["Apellido"]."' , '".$data["email"]."' ,'".$data["password"]."')";
        if (mysqli_query( $enlace , $sql )) {
            echo "Usuario Registrado Correctamente!";
        } else {
            echo "Error: " .$sql ."</br>" . mysqli_error ($enlace);
        }
 }

?>





