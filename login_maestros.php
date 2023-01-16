<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/loginestilos.css">
    <script src="https://kit.fontawesome.com/5521a46d8a.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="login_General_Container">
        <div class="login_Container">
            <h2>LOGIN PARA MAESTROS</h2>
            <form action="login_maestros.php" method="post">
                Ingrese su usuario
                <input type="text" name="userMaestro" id=""><br>
                Ingrese su contraseña
                <input type="password" name="contraseñaMaestro" id=""><br>
                <input type="submit" value="Entrar" id="submitBtn">
            </form>
            <span id="inicio"><a href="index.php"><i class="fa-solid fa-house"></i>Inicio</a></span>
        </div>
        <div class="loginpng">
            <img src="imagenes/social.png" alt="sociallogin">
        </div>
    </div>
</body>
</html>