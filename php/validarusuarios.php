<?php
/*Conexion a la base de datos*/
  include "conexion_be.php";
  
  //creamos variables con base a la informacion que llega desde el formulario

  $correo = $_POST['correo'];
  $contrasenia = $_POST['contrasenia'];
  session_start();
  $_SESSION['correo']=$correo;

  $consulta = "SELECT * FROM usuarios WHERE correo ='$correo' AND contrasenia = '$contrasenia'";

  $ejecutar = mysqli_query($conexion, $consulta);

  $filas=mysqli_num_rows($ejecutar);
  if($filas){
    header("location:../index.html");
  }else{
    ?>
    <?php
    include('../login.html');
    ?>
    <h2 class = "verificadoE">Error en los parametros <h2>
    <?php
  }
mysqli_free_result($ejecutar);
mysqli_close($conexion);