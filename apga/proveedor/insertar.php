<?php
    include("conexion.php");//incluyo la conexion
    $proveedor = $_POST['proveedor'];
    $tel = $_POST['tel'];
   //insertado y guardado de los registros de la base de datos
    $sql = "INSERT INTO proveedor(nombre,telefono) VALUES('$proveedor','$tel')";
    $resultado = $conexion->query($sql);
    if ($resultado) {
    	header("location:index.php");
        
    }
    else{
    	echo "Save Error";
    }

	?>
