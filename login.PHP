<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="icon" type="image/png" href="imagenes/logo.png" sizes="64x64">
    <link rel="stylesheet" href="css/Style.css">
</head>
<body>
    <div class="login_box">
        <img class="img_log" src="imagenes/logo.png" alt="logo">
        <h1>inicia sesion</h1>
        <form action="login.php" method="POST">
            <!--nombre de usuario-->
            <label for="username">Nombre de usuario</label>
            <input type="text" placeholder="ingresar nombre de usuario"> 
            <!--contraseña -->
            <label for="password">Contraseña</label>
            <input type="password" placeholder="ingresar la contraseña"> 

            <input type="submit" value="ingresar">
        <!--
            <a href="#">¿olvidaste tu contraseña?</a>                     
            -->
        </form>
    </div>
</body>

</html>
