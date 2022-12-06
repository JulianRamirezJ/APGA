<!DOCTYPE html>
<html>
<head>
	<title>ver usuarios</title>
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
  <!--  <h1>APGA</h1>-->
    <img src="../img/logo.png" class="img" align="center">
  </div class="container">
 
  
   <div class="container">
   <a  class="text-light" href="../indexsuper.php"><button class="btn btn-success"> SALIR </button></a><br>
  </div>
  

</div>
</nav>



<br><br><br><br><br>
   <table class="table-hover table table-stripe">
     <thead class="table-dark text-center">
     <tr>
      <th>Usuario</th>
      <th>Identificacion</th>
      <th>Telefono</th>
      <th>Correo</th

      <th>ELIMINAR/ACTUALIZAR</th>
     </tr>
</thead>
<tbody>
  <?php
     include("conexion.php");
     $sql2 = "SELECT * FROM usuario ORDER BY tipo ASC";
     if (isset($_POST['asc'])){/////////////////si el usuario selecciona ascendente//////////////
  $sql2 = "SELECT * FROM usuario ORDER BY tipo ASC";/////la variable trae los registros en orden ascendente 
      }

    if (isset($_POST['des'])){/////////////////si el usuario selecciona descendente/////////////////
  $sql2 = "SELECT * FROM categoria ORDER BY tipo DESC";/////////la variale trae los registros en orden descendente 
      }
     $query = $conexion->query($sql2);
     while ($row = $query->fetch_assoc()) {
  ?>
     <tr class="text-center">
         <td><h4><a href="ca_pr.php?id=<?php echo $row['idcategoria']; ?>" class="text-center text-info"><?php echo $row['tipo'];   ?></a></h4></td>
         <td class="bg-light">
          <a class="text-light" href="borrar.php?id=<?php echo $row['idcategoria']; ?>"><button class="btn btn-danger"> <i class="fas fa-trash"></i></button></a>
         <a href="actualizar2.php?id=<?php echo $row['idcategoria']; ?>"><button class="btn btn-primary"><i class="fas fa-edit"></i></button></a>
        </td>
     </tr>
  <?php
    }
  ?>

    </tbody>
   </table>


</body>
</html>