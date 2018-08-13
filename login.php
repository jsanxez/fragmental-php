<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
<!--    <link href="https://fonts.googleapis.com/css?family=Cantarell:400,400i,700,700i" rel="stylesheet">-->
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/account_style.css">
    <title>FRAGMENTAL</title>
</head>

<body>
<header>

    <div id="logo-wrap">
        <a href="index.php"><img src="images/logo.png" id="logo"></a>
        <h1><a href="index.php">Frag~Mental</a></h1>
        <small>Breve introduccion al caos!</small>
    </div>

</header>


<div id="content-wrapper">

    <div id="account-wrapper">

        <ul id="nav-links">
            <a href="">
                <li>Sign in</li>
            </a>
            <a href="">
                <li style="border-bottom: 1px solid; border-left: 1px solid;background-color: #3992b2">Register</li>
            </a>
        </ul>

        <form id="sign-in" action="mostrar.php">
            <input type="text" placeholder="Usuario"><br>
            <input type="password" placeholder="Contraseña"><br><br>
            <input type="checkbox" id="recuerdame">
            <label for="recuerdame">Recuerdame</label>
            <a href="">Olvidaste tu contraseña?</a><br><br>
            <input type="submit" value="Ingresar"><br><br>
        </form>
        <!--

        <form action="#">
            <h3>Crear cuenta:</h3>
            <input type="text" placeholder="Nombre de usuario" t><br>
            <input type="text" placeholder="Contraseña"><br>
            <input type="text" placeholder="Confirmar Contraseña"><br>
            <input type="text" placeholder="Correo electronico"><br><br>
            <input type="submit" value="Registrarse">
        </form>
-->
    </div>


    <div style="clear: both;"></div>
</div>


</div>
<footer>
    <div id="text-left-footer">
        <h4>Frag~Mental</h4>
        <span>Todos los derechos reservados © 2018 Fragmental,Inc</span>
    </div>

    <div id="text-right-footer">
        <ul>
            <li><a href="#">Condiciones</a></li>
            <li><a href="#">Politicas de privacidad</a></li>
            <li><a href="#">Propiedad intelectual</a></li>
        </ul>
    </div>

    <div style="clear: both"></div>

</footer>
</body>

</html>