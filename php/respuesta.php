<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Respuesta</title>
</head>
<body>
    <?php
    $pass = [
    "natalia" => "cordoba",
    "manuel" => "castillo",
    "krusty" => "ean",
    ];
    if (isset($pass[$_POST['usser']])){
        if ($pass[$_POST['usser']] == $_POST['pass']){
            echo 'Bienvenido';
        }else{
            echo 'Contraseña incorrecta';
        }
    }else{
        echo 'Usuario no encontrado';
    }
    ?>
</body>
