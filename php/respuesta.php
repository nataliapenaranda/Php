<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Respuesta Inicio de Sesion</title>
</head>
<body>
    <?php
    $people = [
    "usuario1" => "1234",
    "usuario2" => "4321",
    "usuario3" => "9856",
    ];

    function ordenar($people){
        echo '<center><h1>Bienvenido usuario</h1></center>' ;
        echo '<h2>Lista de usuarios:</h2>';
        return $people;

        ksort($people);
        echo '<h3>Lista ordenada ascendetemente:</h3>';
        return $people;

        krsort($people);
        echo '<h4>Lista ordenada descendetemente:</h4>';
        return $people;
    }

    if (isset($people[$_GET['usser']])){
        if ($people[$_GET['usser']] == $_GET['pass']){

            ordenar();

        }else{
            echo 'Contraseña incorrecta';
        }
    }else{
        echo 'Usuario no encontrado';
    }


    ?>
</body>
