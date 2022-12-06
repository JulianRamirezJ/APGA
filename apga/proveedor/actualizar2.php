<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <script src="../js/jquery.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>

  <linkrel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
  <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
  <!--Links de font awesome-->
    <title></title>


    <style type="text/css">
        .formul{
            height: 50px;
            width: 400px;
        }
    </style>
</head>
<body>
 <nav class="navbar navbar-expand-sm navbar-dark fixed-top">
<div class="container-fluid bg-success py-4 text-left text-light">
 <div class="container">
        <h1>APGA</h1>
    </div>
</div>
</nav>
<br><br><br><br><br><br><br><br>
<?php
include('conexion.php');
$id=$_REQUEST['id'];
?>
<h1 class="text-center text-success"> Actualizar los registros  </h1>

<div class="container text-center py-2">
      <form action="actualizar.php?id=<?php echo $id; ?>" method="post">

        <input autocomplete="off" class="form-control-sm formul text-center" type="text" name="proveedor" placeholder="Proveedor"><br><br>

        <input autocomplete="off" class="form-control-sm formul text-center" type="text" name="telefono" placeholder="Telefono"><br><br>

         <input class="btn btn-secondary " type="submit" value="Guardar">

       </form>
   </div>

</body>
</html>



