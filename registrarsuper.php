<?php
include("apga/conexion.php");

if (isset($_POST['nombre'])&&(isset($_POST['apellidos']))&&(isset($_POST['correo']))&&($_POST['contrasena'])&&isset($_POST['tel'])&&isset($_POST['identificacion'])) {

$nombre = mysqli_real_escape_string($conexion,$_POST['nombre']);

$apellidos = mysqli_real_escape_string($conexion,$_POST['apellidos']);

$tel = mysqli_real_escape_string($conexion,$_POST['tel']);

$identificacion = mysqli_real_escape_string($conexion,$_POST['identificacion']);

$correo = mysqli_real_escape_string($conexion,$_POST['correo']);

$password = password_hash($_POST['contrasena'],PASSWORD_DEFAULT);

$sql = "INSERT INTO usuario(nombre,apellidos,identificacion,tel,correo,contrasena) VALUES('$nombre','$apellidos','$identificacion','$tel','$correo','$contrasena')";
$query1 = $conexion->query($sql);
if (isset($query1)) {
	header("location:index.php");
}
else{
	echo "error";
}
}
?>