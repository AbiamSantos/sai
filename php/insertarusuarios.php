<?php
  include "conexion_be.php";
  
  //creamos variables con base a la informacion que llega desde el formulario
  $nombreusuario = $_POST['nombre'];
  $correo = $_POST['correo'];
  $contrasenia = $_POST['contrasenia'];
  //Creamos la sentencia de mysql 
  $query = "INSERT INTO usuarios(nombre, correo, contrasenia)
            VALUES('$nombreusuario','$correo','$contrasenia')";

  //Ejecutamos la conexion a la bd y el comando      
  $ejecutar = mysqli_query($conexion, $query);
  
  if($ejecutar){
    header("location:../login.html");
    ?>
    <h2 class = "verificadoB">Se a registrado correctamente<h2>
    <?php
  }else{
    header("location:../login.html");
    ?>
    <h2 class = "verificadoE">Error en los parametros <h2>
    <?php
  }
mysqli_close($conexion);
