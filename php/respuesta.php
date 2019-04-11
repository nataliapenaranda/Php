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


    if (isset($people[$_GET['usser']])){
        if ($people[$_GET['usser']] == $_GET['pass']){

             /**
             * Devuelve el array de usuarios predeterminado
             * @access public
             * @param array $people users array
             * @return $people
             */

            echo '<center><h1>Bienvenido usuario</h1></center>' ;
            echo '<h2>Lista de usuarios:</h2>';
            print_r($people);

            /**
             * Devuelve el array de usuarios ordenado de manera ascendente
             *Haciendo uso del metodo ksort, que sirve para ordenar
             *un array de forma ascendente a partir de de sus claves
             * @access public
             * @param array $people users array
             * @return $people ascendente
             */

            ksort($people);
            echo '<h3>Lista ordenada ascendetemente:</h3>';
            print_r($people);

            /**
             * Devuelve el array de usuarios ordenado de manera descendente
             *Haciendo uso del metodo krsort, que sirve para ordenar
             *un array de forma descendente a partir de de sus claves
             * @access public
             * @param array $people users array
             * @return $people descendente
             */

            krsort($people);
            echo '<h4>Lista ordenada descendetemente:</h4>';
            print_r($people);


        }else{
            echo 'Contraseña incorrecta';
            header("HTTP/1.0 404 Not Found");
            header ('Location: /404.html');

        }
    }else{
        echo 'Usuario no encontrado';
        header("HTTP/1.0 404 Not Found");
        header ('Location: /404.html');
    }


    ?>
</body>
