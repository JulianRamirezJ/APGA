<?php
session_start();
if (isset($_POST['correo'])&&isset($_POST['contrasena'])) {
  include("apga/conexion.php");

  $correo = mysqli_real_escape_string($conexion,$_POST['correo']);

  $password = mysqli_real_escape_string($conexion,$_POST['contrasena']);

  $sql = 'SELECT * FROM superusuario WHERE correo ="'.$correo.'"';
  $query = $conexion->query($sql);
  if ($query->num_rows>0) { 
    $sql2 = mysqli_query($conexion,'SELECT contrasena FROM superusuario WHERE correo ="'.$correo.' "');

    //$dato = mysqli_fetch_assoc($sql2);  
       while ($row = $sql2 -> fetch_assoc()) {
         $comprobar = password_verify($password,$row['contrasena']);
    if (isset($comprobar)) {
      $_SESSION['correo'] = $correo;
      header("location:apga/indexsuper.php");
    }
}
       }
    else{
      print  '<p>No se han encontrado en el registro usuario registrado <br></p><p>intentalo nuevamente</p>';
    }
   }   
  else{

    header('location: ./');
  }


?>