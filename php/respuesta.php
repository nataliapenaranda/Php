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
            echo 'Bienvenido usuario' ;

            <br>

            echo 'Lista de usuarios:';
            print_r ($people);


        }else{
            echo 'Contraseña incorrecta';
        }
    }else{
        echo 'Usuario no encontrado';
    }


    ?>
</body>
