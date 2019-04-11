<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Respuesta</title>
</head>
<body>
    <?php

    $pass = [
    "natalia" => "penaranda",
    "user" => "1234",
    "DWeb" => "ean",
    ];

    if ($_GET['usser'] in $pass){
        if ($pass[$_GET['usser']] == $_GET['pass']){
            echo 'Bienvenido';
        }else{
            echo 'Contraseña incorrecta';
        }
    }else{
        echo 'Usuario no encontrado';
    }

    ?>
</body>
</html>
