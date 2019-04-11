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
    "ean" => "1234",
    ];
    if (isset($pass[$_GET['usser']])){
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
