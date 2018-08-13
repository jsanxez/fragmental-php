<?php
/**
 * Created by PhpStorm.
 * User: jsanchez
 * Date: 12/08/18
 * Time: 22:22
 */

require "conexion.php";

$query = "select * from users";

$resultado = mysqli_query($conexion, $query);

while ($fila=mysqli_fetch_row($resultado)) {

    echo $fila[0];
    echo $fila[1];
    echo $fila[2];
    echo $fila[3];
    echo $fila[4];
}