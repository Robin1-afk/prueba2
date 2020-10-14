<?php

$conexion= new mysqli('localhost' , 'root' , '' , 'prueba') ;
if ($conexion->connect_errno){

    die('Error de conexion' . $conexion->connect_errno);
}else {
    echo "<script> alert('jajajaja no mmes')</script>";
}
echo "<script> alert('jajajaja no mmes')</script>";
?>