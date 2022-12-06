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
  <button class="btn btn-success"><a class="text-light" href=". ./registro/index.php">PRODUCTOS</a></button><br>
  </div>

</div>
</nav>
<br><br><br><br><br><br><br><br><br>
<div class="container-fluid text-center text-success display-3">
 Visualizar productos de
  esta Categoria : 
<?php
include('../conexion.php');
 $id=$_REQUEST['id']; 
 $sql = "SELECT * FROM productos INNER JOIN categoria ON categoria_idcategoria = idcategoria WHERE categoria_idcategoria = '$id'";
 $resultado = $conexion->query($sql);
 $fila = $resultado->fetch_assoc();
 echo $fila['tipo'];
?>
   </div>
   <br><br><br><br><br>
   <div class="container-fluid text-center text-success display-3">
 Productos -  Categoria
</div>
   <table class="table-hover table table-stripe">
     <thead class="table-dark text-center">
     <tr>
      <th>CATEGORIA</th>
      <th>PRODUCTO</th>
     </tr>
</thead>
<tbody>
  <?php
     include("conexion.php");
     $id = $_REQUEST['id'];
    $sql = "SELECT * FROM productos INNER JOIN categoria ON categoria_idcategoria = idcategoria WHERE categoria_idcategoria = '$id'";
     $query = $conexion->query($sql);
     while ($row = $query->fetch_assoc()) {
  ?>
     <tr class="text-center">
         <td class="bg-light"><h3><?php echo $row['nombre_producto'];  ?></h3></td>
         <td><h4><?php echo $row['tipo'];  ?></h4></td>
     </tr>
  <?php
    }
  ?>

    </tbody>
   </table>

</body>
</html>