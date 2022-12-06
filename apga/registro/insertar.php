<?php
if (isset($_POST['unidad'])&&isset($_POST['categoria'])) {
  
    include("../conexion.php");//incluyo la conexion
            $producto   = $_POST['producto'];
         //   $saldo = $_POST['cantidad'];
            $categoria = $_POST['categoria'];
            $und = $_POST['unidad'];
         //   $proveedor   = $_POST['proveedor'];
           
   //insertado y guardado de los registros de la base de datos
    $sql = "INSERT INTO productos(nombre_producto,saldo,unidad,categoria_idcategoria
            ) VALUES ('$producto','0','$und','$categoria')";//insert tabla productos
            $resultado = $conexion->query($sql);

  /*   $sql2 = "SELECT * FROM productos WHERE nombre_producto = '$producto'";

        $resultado2 = $conexion->query($sql2);
        $fila2 = $resultado2->fetch_assoc();
        $qid = $fila2['idproductos'];

    $proprov = $qid . $proveedor;

    $sql3 ="INSERT INTO productos_proveedor(idproductos_proveedor, proveedor_idproveedor, productos_idproductos) VALUES ('$proprov','$proveedor','$qid')";//inserto las llaves a la tabla puente productos_proveedor

    $resultado3 = $conexion->query($sql3);*/
    if (isset($resultado)) {
    	header("location:index.php"); 
    }
    else{
        header("location:index.php"); 
    	echo "Save Error";
    }
}
else{
        header("location:index.php"); 
        echo "Save Error";
    }

	?>
