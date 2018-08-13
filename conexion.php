<?php
/**
 * Created by PhpStorm.
 * User: jsanchez
 * Date: 12/08/18
 * Time: 22:16
 */

$host_name = "localhost";
$db_name = "test_fragmental";
$user_name = "root";
$user_pass = "";

$conexion = mysqli_connect($host_name, $user_name, $user_pass, $db_name);

if ($conexion==true) {
    echo "&#10003;<br>";
}else {
//    echo "conexion fallida!";
    die("error al conectar!");
}
