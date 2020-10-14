<?php

$conexion= new mysqli('localhost' , 'root' , '' , 'prueba') ;
if ($conexion->connect_errno){

    die('Error de conexion' . $conexion->connect_errno);
}else {
    die('Exito');
}

?>