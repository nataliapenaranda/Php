<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1><?php echo 'Pagina en php'; ?></h1>
    <h2>Bienvenido</h2>

    <p>Esta es una pagina desarrollda con PHP</p>

    <br>

    <form action="respuesta.php" method="get">
        <input type="text" name="usser" id="usser" placeholder="Usuario">
        <input type="password" name="pass" id="pass" placeholder="Contraseña">
        <input type="submit" value="Enviar">
    </form>
</body>
