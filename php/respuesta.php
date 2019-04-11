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

    $people = array('usuario');
    sort($people);
    echo (var_export($people));



    if (isset($pass[$_GET['usuario']])){
        if ($pass[$_GET['usuario']] == $_GET['password']){
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
