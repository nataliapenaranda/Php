<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1><?php echo 'Pagina en php'; ?></h1>
    <h2>Bienvenido</h2>

    <p>Esta es una pagina desarrolladas con PHP</p>

    <br>

    <form action="respuesta.php" method="get">
        <input type="text" name="usser" id="usuario" placeholder="Usuario">
        <input type="password" name="pass" id="password" placeholder="Contraseña">
        <input type="submit" value="Enviar">
    </form>

    Bienvenido <?php echo htmlspecialchars($_POST['usuario']); ?>.Recuerde que su contraseña es <?php echo (int)$_POST['password']; ?> años.
</body>
