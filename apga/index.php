<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

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
  .img{
    height:75px; 
    width:75px;
    margin-left: 100px;

  }
  .img2{
    height:175px; 
    width:175px;
    margin-left: 46%;
  }
	</style>
</head>
<body>
 <nav class="navbar navbar-expand-sm navbar-dark fixed-top">
<div class="container-fluid bg-success py-4 text-left text-light">
 <div class="container">
	<!--	<h1>APGA</h1>-->
    <img src="img/logo.png" class="img" align="center">
	</div>
   <div class="container">
    <button class="btn btn-success"><a class="text-light" href="categoria/index.php">CATEGORIAS</a></button><br>
  </div>
  <div class="container">
   <button class="btn btn-success"><a class="text-light" href="proveedor/index.php">PROVEEDORES</a></button><br>
  </div>
   <div class="container">
  <button class="btn btn-success"><a class="text-light" href="registro/index.php">PRODUCTOS</a></button><br>
  </div>
   <div class="container">
  <button class="btn btn-success"><a class="text-light" href="movimientos/index.php">MOVIMIENTOS</a></button><br>
  </div>

</div>
</nav>

<br><br><br><br><br><br><br><br><br>
<?php
session_start();
if (empty($_SESSION['correo'])) {
  header("location:../");
}
else{
  echo "Correo :". $_SESSION['correo'];
}


?>
  <img src="img/logo.png" align="center" class="img2">
<div class="container container-fluid" align="left">
  <div class="box">
<button class="btn btn-success"><a class="text-light" href="categoria/index.php">CATEGORIAS</a></button><br>
<button class="btn btn-success"><a class="text-light" href="proveedor/index.php">PROVEEDORES</a></button><br>
<button class="btn btn-success"><a class="text-light" href="registro/index.php">PRODUCTOS</a></button><br>
</div>
</body>
</html>