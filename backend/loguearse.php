<?php

error_reporting(E_ALL);
ini_set('display_errors' , 1);

$data = $_POST;

$enlace = mysqli_connect("localhost", "root", "" , "bd_backend");
if (!$enlace) {
    echo "Error: no se puede conectar a MySQL" , PHP_EQL;
    echo "errno de depuracion" , mysqli_connect_errno(), PHP_EQL;
    echo "error de depuracion" , mysqli_connect_error (), PHP_EQL;
    exit;
}

$sql = "SELECT * FROM usuarios WHERE email = '".$data["email"]."'";

$result = mysqli_query($enlace , $sql);

if (mysqli_num_rows ($result) > 0) {
    while ($usuario = mysqli_fetch_assoc($result)) {
        echo "email: ". $usuario["email"]." - Nombre: " . $usuario["Nombre"]. " - Apellido: " .$usuario["Apellido"]. "<br>";
        $hash = $usuario["password"];
        
        if (password_verify($data["password"] , $hash)) {
            echo "La contraseña es válida!";
        } else {
            echo "La contraseña no es válida, ";
        }
    }
} else {
    echo "Su usuario no se encuentra registrado en nuestra base de datos";
}

?>