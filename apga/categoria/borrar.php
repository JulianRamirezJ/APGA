	<?php
    include("conexion.php");//incluyo la conexion
   $id = $_REQUEST['id'];
    $sql = "DELETE FROM categoria WHERE idcategoria = '$id'";
    $resultado = $conexion->query($sql);
   if ($resultado) {
          header('location:index.php');
    } 
    else {
          echo "Error";
    }
	?>
