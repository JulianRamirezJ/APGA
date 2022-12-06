	<?php
    include("conexion.php");//incluyo la conexion
   $id = $_REQUEST['id'];
    $sql = "DELETE FROM proveedor WHERE idproveedor = '$id'";
    $resultado = $conexion->query($sql);
   if ($resultado) {
          header('location:index.php');
    } 
    else {
          echo "Error";
    }
	?>
