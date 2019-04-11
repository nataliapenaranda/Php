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
            echo '<center><h1>Bienvenido usuario</h1></center>' ;


            echo '<h2>Lista de usuarios:</h2>';
            print_r ($people);

            $estandar = sort($people);
            echo '<h3>Lista ordenada ascendetemente:</h3>';
            print_r ($people)

            $invertida = asort($people);
            echo '<h4>Lista ordenada descendetemente:</h4>';
            print_r ($people);

        }else{
            echo 'Contraseña incorrecta';
        }
    }else{
        echo 'Usuario no encontrado';
    }


    ?>
</body>
