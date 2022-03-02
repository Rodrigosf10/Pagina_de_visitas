<?php
    $servidor = "localhost";
    $usuario = "root"; 
    $password = "";
    $bd = "visitas";
    $conexion = new mysqli($servidor, $usuario, $password, $bd);
    if($conexion->connect_errno){
        echo "Fallo la conexion";
    }else{
        echo "Conexion a la BD";
    }
?>