
<?php
include('../conexion.php');

            $producto   = $_POST['idproductos'];
            $fecha = $_POST['fecha'];
            $tipo = $_POST['tipo_mov'];
            $detalle = $_POST['detalle_mov'];
            $saldo = $_POST['saldo'];
            //  comandos SQL a ejecutar

            $sql = "INSERT INTO movimientos(fecha_mov, tipo_mov, detalle,
            cantidad, productos_idproductos) VALUES ('$fecha', '$tipo', '$detalle', '$saldo', '$producto')";//insert tabla movimientos
             $resultado = $conexion->query($sql);
             $sql1 = "SELECT * FROM productos WHERE idproductos = '$producto'";//union entre las tablas productos,inventario
              $resultado1 = $conexion->query($sql1);
              $fila = $resultado1->fetch_assoc();

            if ((isset($resultado)&&(isset($resultado1)))) {
              # code...
            
            if ($tipo == 'ENTRADA') {
             $nuevosaldo = $fila['saldo'] + $saldo;
              $sqlin = "UPDATE productos SET saldo = '$nuevosaldo' WHERE idproductos = '$producto'";
              $resultado3 = $conexion->query($sqlin);
              if (isset($resultado3)) {
               header("location:index.php"); }
            }
            elseif ($tipo == 'SALIDA') {
	        $nuevosaldo = $fila['saldo'] - $saldo;
              $sqlin = "UPDATE productos SET saldo = '$nuevosaldo' WHERE idproductos = '$producto'";
              $resultado4 = $conexion->query($sqlin);
              if (isset($resultado4)) {
              
               header("location:index.php");}
            }
            else{
            	echo "Source error";
            }
          }
          else{
            echo "Source error";
          }

?>