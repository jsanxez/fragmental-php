<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Cantarell:400,400i,700,700i" rel="stylesheet">
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
            <a href="login.php">
                <li>Sign in</li>
            </a>
            <a href="register.php">
                <li style="border-bottom: 1px solid; border-left: 1px solid; border-radius: 0px 5px 0px 15px;background-color: #3992b2">Register</li>
            </a>
        </ul>

        <form id="sign-in" action="login.php" method="POST">

            <input type="text" name="user" placeholder="Usuario"><br>
            <input type="password" name="pass" placeholder="Contraseña"><br><br>
            <input type="checkbox" id="recuerdame">
            <label for="recuerdame">Recuerdame</label>
            <a href="">Olvidaste tu contraseña?</a><br><br>

            <input type="submit" name="login" value="Ingresar"><br>

            <?php
            if (isset($_POST["login"])) {

                require "conexion.php";

                $user = $_POST["user"];
                $pass = $_POST["pass"];

                $query = "select user_name, user_pass from users where user_name='$user' and user_pass='$pass'";
                $resultado = mysqli_query($conexion, $query);

                $afectadas = mysqli_affected_rows($conexion);

                /*while ($fila=mysqli_fetch_row($resultado)) {
                    echo $fila[0] . " ";
                    echo $fila[1] . " ";
                }*/

                if ($afectadas==1)
                    header("Location:admin.php");
                else
                    echo "<span style='color: red;'>Usuario o contraseña inválidos!</span>";

            }
            ?>

        </form>

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