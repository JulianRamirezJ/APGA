<?php
    include("../conexion.php");//incluyo la conexion

   $id = $_REQUEST['id'];
    $sql = "DELETE  FROM productos WHERE idproductos = '$id'";
    $resultado = $conexion->query($sql);
   if ($resultado) {
          header('location:index.php');
    } 
    else {
          echo "Error";
    }
	?>
