<?php
    //Conexcion a la base de datos
    $servidor ="localhost";
    $nombreusuario = "root";
    $password = "";
    $bd = "SAI";
    $conexion = new mysqli($servidor, $nombreusuario, $password, $bd);
      /*
    //verificamos conexion a la Base
    if ($conexion-> connect_error) {
        die("Conexcion fallida: " . $conexion-> connect_error);
    }else{
        echo "Conexion Exitosa";
    }*/
?>