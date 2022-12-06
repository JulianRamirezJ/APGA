
<?php
 include("../conexion.php");
 
      $id = $_REQUEST['id'];//llave primaria del producto
      $producto = $_POST['producto'];


            //update saldo
		$sql = "UPDATE productos SET nombre_producto = '$producto' WHERE idproductos = '$id'";

	    $query = $conexion->query($sql);
        
        if (isset($query)) {
          	header("location:index.php");
          }  
          else{
          	echo "ERROR";
          }
?>