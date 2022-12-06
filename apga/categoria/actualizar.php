<?php
if (isset($_REQUEST['id'])) {
include('conexion.php');
$id=$_REQUEST['id'];
$categoria = $_POST['categoria'];
$sql = "UPDATE categoria SET tipo='$categoria' WHERE idcategoria='$id'";
$resultado = $conexion->query($sql);
if ($resultado) {
    header("location:index.php");
    } 
else{
    echo "Update error" .  $sql;
}
}
?>