<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Respuesta</title>
</head>
<body>
    <?php
    $people = [
    "usuario1" => "1234",
    "usuario2" => "4321",
    "usuario3" => "ean",
    ];
    if (isset($people[$_GET['usser']])){
        if ($people[$_GET['usser']] == $_GET['pass']){
            echo 'Bienvenido';

            echo 'Lista de usuarios:' ($users);

        }else{
            echo 'Contraseña incorrecta';
        }
    }else{
        echo 'Usuario no encontrado';
    }


    ?>
</body>
