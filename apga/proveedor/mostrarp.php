<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <script src="../js/jquery.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>

  <!--Links de font awesome-->

  <linkrel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
  <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

  <title></title>
  <style type="text/css">
  
  </style>
</head>
  <style type="text/css">
   button{
    height:5%;
    width:12%;
    margin-top: 3%;
    margin-left: 45%;
   }
.box{
 font-color:rgb(12,45,56);
 vertical-align: center;
 align-self:left;
}
  
  </style>
</head>
<body>
 <nav class="navbar navbar-expand-sm navbar-dark fixed-top">
<div class="container-fluid bg-success py-4 text-left text-light">
 <div class="container">
    <h1>APGA</h1>
  </div>
  <div class="container">
    <button class="btn btn-success"><a class="text-light" href="../index.php">HOME</a></button><br>
  </div>
   <div class="container">
    <button class="btn btn-success"><a class="text-light" href="../categoria/index.php">CATEGORIAS</a></button><br>
  </div>
  <div class="container">
   <button class="btn btn-success"><a class="text-light" href="../proveedor/index.php">PROVEEDORES</a></button><br>
  </div>
   <div class="container">
  <button class="btn btn-success"><a class="text-light" href="../registro/index.php">PRODUCTOS</a></button><br>
  </div>

</div>
</nav>

<br><br><br><br><br><br>
<div class="container-fluid text-center text-success display-4">
 Productos de
  Proveedor : 
<?php
include('../conexion.php');
 $id=$_REQUEST['id']; 
 $sql = "SELECT * FROM proveedor WHERE idproveedor='$id'";
 $resultado = $conexion->query($sql);
 $fila = $resultado->fetch_assoc();
 echo $fila['nombre'];
?>
   </div>
   <br>
   <br>
   <br>
   <br>
   <br>
   <div class="container text-center py-2">
      <form action="mostrarp.php?id=<?php echo $id; ?>" method="post">
        <p> Agregar Producto de este proveedor: <select name="idproductos">
          <option>--Seleccione producto--</option>
            <?php
  $server="localhost";
  $user="root";
  $pass="";
  $db="apgabd12";
  
  // Realiza la conexión a la base de datos MySQL
  $conexion=new mysqli($server, $user, $pass, $db);

  if (mysqli_connect_errno()){
  //  Hubo error en la conexión y muestra el error
    echo "<br>";
    echo 'Conexion fallida. '; 
    } 
  else {

    // Consulta de todas las 
    $sql = "SELECT * FROM productos";

    if (mysqli_query($conexion, $sql)) {

      $resultado = $conexion->query($sql);

      while($fila = $resultado->fetch_assoc()) {
      ?>
        <option value="<?php echo $fila['idproductos']; ?>"><?php echo $fila['nombre_producto'];?></option>
    <?php
      }
    } 
    else {
          echo "<br>";
          echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
    }

  }
?>
  </select></p> 

   <input class="btn btn-sucess" type="submit" value="Guardar">

</form>
   <br><br><br><br><br>
   <div class="container-fluid text-center text-success display-3">
 Productos -  Proveedor
</div>

   <table class="table-hover table table-stripe">
     <thead class="table-light text-center">
     <tr>
      <th>Proveedor</th>
      <th>Producto</th>
      <th>Telefono proveedor</th>
     </tr>
</thead>
<tbody>
  <?php
     include("conexion.php");
     $sql2="SELECT * FROM (productos INNER JOIN productos_proveedor ON productos.idproductos = productos_proveedor.productos_idproductos) INNER JOIN proveedor ON proveedor.idproveedor = productos_proveedor.proveedor_idproveedor WHERE idproveedor = '$id'";//union entre las tablas productos,productos_provedor,proveedor
     $query2 = $conexion->query($sql2);
     while ($row2 = $query2->fetch_assoc()) {
  ?>
     <tr class="text-center">
         <td class="bg-light"><h3><?php echo $row2['nombre'];  ?></h3></td>
         <td><h3><?php echo $row2['nombre_producto'];   ?></h3></td>
         <td><h3><?php echo $row2['telefono']; ?></h3></td>
     </tr>
  <?php
    }
  ?>

    </tbody>
   </table>

</body>
</html>
<?php
if (isset($_POST['idproductos'])) {

include("../conexion.php");

$producto = $_POST['idproductos'];
$id = $_REQUEST['id'];
$idpr = $producto.$id;

$sql3 = "INSERT INTO productos_proveedor (idproductos_proveedor,proveedor_idproveedor,productos_idproductos) VALUES('$idpr','$id','$producto')";

$resultado = $conexion->query($sql3);
if (isset($resultado)) {
}

}

?>