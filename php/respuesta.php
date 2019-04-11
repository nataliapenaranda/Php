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
            echo '<h1>Bienvenido usuario</h1>' ;


            echo 'Lista de usuarios:';
            print_r ($people);

            var estandar= sort($people);
            echo 'Lista ordenada ascendetemente:';
            print_r (estandar);

            var invertida= asort($people);
            echo 'Lista ordenada descendetemente:';
            print_r (invertida);

        }else{
            echo 'Contraseña incorrecta';
        }
    }else{
        echo 'Usuario no encontrado';
    }


    ?>
</body>
