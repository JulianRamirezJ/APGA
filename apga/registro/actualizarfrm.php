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

	<title>APGA</title>
	<style type="text/css">
  
	</style>
</head>

  <!--Links de font awesome-->
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
.selc{
  text-align: center;
  vertical-align: center;
  height:5%;
    width:12%;
}

.chk{
  /*Estilo de los checkbox*/
  height: 21px ;
  width:21px;
  margin-right:30px;
}
.frm3{
  height: 40px;
  width:250px;
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
<?php
$id = $_REQUEST['id'];
?>
<br><br><br><br><br><br><br><br><br>
<h1 class="text-center text-success">INSERTE SUS PRODUCTOS</h1>

<div class="container text-center py-2">
      <form action="actualizar.php?id=<?php echo $id; ?>" method="post">
        <input autocomplete="off" class="form-control-sm formul text-center" id="producto" type="text" name="producto" placeholder="Nombre Producto" required =""><br><br>
        <input type="submit" class="btn btn-success">
      </form>
    </div>
  </body>
</html>