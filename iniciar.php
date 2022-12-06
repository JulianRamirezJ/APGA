<?php
session_start();
if (isset($_POST['correo'])&&isset($_POST['password'])) {
  include("apga/conexion.php");

  $correo = mysqli_real_escape_string($conexion,$_POST['correo']);

  $password = mysqli_real_escape_string($conexion,$_POST['password']);

  $sql = 'SELECT * FROM usuario WHERE correo ="'.$correo.'"';
  $query = $conexion->query($sql);
  if ($query->num_rows>0) { 
  	$sql2 = mysqli_query($conexion,'SELECT password FROM usuario WHERE correo ="'.$correo.' "');

  	//$dato = mysqli_fetch_assoc($sql2);  
       while ($row = $sql2 -> fetch_assoc()) {
  	   	 $comprobar = password_verify($password,$row['password']);
    if (isset($comprobar)) {
    	$_SESSION['correo'] = $correo;
    	header("location:apga/index.php");
    }
}
  	   }
    else{
    	print  'No se han encontrado en el registro<br><a href="./">Volver</a>';
    }
   }   
  else{

  	header('location: ./');
  }


?>