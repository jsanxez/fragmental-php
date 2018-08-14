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
                <li style="border-bottom: 1px solid; border-left: 1px solid; border-radius: 5px 0px 15px 0px;background-color: #3992b2">Sign in</li>
            </a>
            <a href="register.php">
                <li>Register</li>
            </a>
        </ul>

        <form id="sign-in" action="register.php" method="POST">
            <input type="text" name="user" placeholder="Nombre de usuario"><br>
            <input type="password" name="pass" placeholder="Contraseña"><br>
            <input type="password" name="pass2" placeholder="Confirmar Contraseña"><br>
            <input type="email" name="email" placeholder="Correo electronico"><br><br>

            <input type="submit" name="register" value="Registrarse">

            <?php

            if (isset($_POST["register"])) {

                require "conexion.php";

                $user = $_POST["user"];
                $pass = $_POST["pass"];
                $pass2 = $_POST["pass2"];
                $email = $_POST["email"];

                if (empty($user)==false && strpos($user,' ')==false &&
                    empty($pass)==false && strpos($pass,' ')==false){

                    $check_query = "select user_name from users where user_name='$user'";
                    $result = mysqli_query($conexion, $check_query);

                    if (mysqli_affected_rows($conexion)==0) {

                        if ($pass==$pass2){
                            /*---- Datos correctos:*/

                            $ok_query = "insert into users (user_name, user_pass, user_email)values ('$user', '$pass', '$email')";
                            $ok_result = mysqli_query($conexion, $ok_query);
                            header("Location:profile.php");

                        }else {
                            echo "<small style='color: red;'>Las contraseñas no coinciden.</small><br>";
                        }

                    }else{
                        echo "<small style='color: red;'>Nombre de usuario existente.</small><br>";
                    }

                }else {
                    echo "Datos incorrectos o vacios<br>";
                }
            }
            ?>
        </form>

    </div>


    <div style="clear: both;"></div>
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