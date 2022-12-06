<?php
if (isset($_REQUEST['id'])) {
include('conexion.php');
$id=$_REQUEST['id'];
////////////////valido si llegan los dos registros///////////////777777
if (!empty($_POST['proveedor'])&&!empty($_POST['telefono'])) {
$proveedor = $_POST['proveedor'];
$telefono = $_POST['telefono'];
$sql = "UPDATE proveedor SET nombre = '$proveedor' , telefono = '$telefono' WHERE idproveedor = '$id'";
$resultado = $conexion->query($sql);
if ($resultado) {
    header("location:index.php");
    } 
else{
    echo "Update error" .  $sql;
}
}

///////////////////////////valido si llega proveedor/////////////////////
elseif(!empty($_POST['proveedor'])) {
$proveedor = $_POST['proveedor'];
$sql = "UPDATE proveedor SET nombre = '$proveedor' WHERE idproveedor = '$id'";
$resultado = $conexion->query($sql);
if ($resultado) {
    header("location:index.php");
    } 
else{
    echo "Update error" .  $sql;
}
}

/////////////////////////valido si llega telefono///////////////77
elseif(!empty($_POST['telefono'])) {
	$telefono = $_POST['telefono'];
	$sql = "UPDATE proveedor SET telefono = '$telefono' WHERE idproveedor = '$id'";
$resultado = $conexion->query($sql);
if ($resultado) {
    header("location:index.php");
    } 
else{
    echo "Update error" .  $sql;
}
}
}
?>