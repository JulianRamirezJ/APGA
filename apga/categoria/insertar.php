<?php
    include("conexion.php");//incluyo la conexion
    $categoria = $_POST['categoria'];
   //insertado y guardado de los registros de la base de datos
    $sql = "INSERT INTO categoria(tipo) VALUES('$categoria')";
    $resultado = $conexion->query($sql);
    if ($resultado) {
    	header("location:index.php");
        
    }
    else{
    	echo "Save Error";
    }

	?>
