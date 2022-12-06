<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">

	<script src="../js/jquery.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>

  <!--Links de font awesome-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
  <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

	<title>APGA</title>

  <style type="text/css">
    #mainNav {
      background: #6FB662;
    }
    
    #mainNav a {
    color: #FFFFFF;
    border-radius: 5px;
    padding: 5px 16px;
    }
    
    #mainNav a:hover {
      background: #FFFFFF;
      color: #000000;
    }
    
    #mainNav #apga {
      text-decoration: none;
      font-size: 30px;
    }

    .box{
     font-color:rgb(12,45,56);
     vertical-align: center;
     align-self:left;
    }

    .chk{
    /*Estilo de los checkbox*/
    height: 21px ;
    width:21px;
    margin-right:30px;
    }
  </style>
</head>
<body>
  <nav class="navbar sticky-top navbar-expand-lg navbar-light" id="mainNav">
    <div class="container">
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <a  data-scroll href="#" id="apga">APGA</a>
          </ul>
      </div>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="../indexuser.php">HOME</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../categoria/index.php">CATEGORIAS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../proveedor/index.php">PROVEEDORES</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../registro/index.php">PRODUCTOS</a>
              </li>
          </ul>
      </div>
    </div>
  </nav>
<h1 class="text-center text-success" style="margin-top: 100px;">INSERTE SUS CATEGORIAS </h1>

<div class="container text-center py-2">
      <form action="insertar.php" method="post">
        <input autocomplete="off" class="form-control-sm formul text-center" id="nombre" type="text" name="categoria" placeholder="nombre" required oninvalid="this.setCustomValidity('Ingresa la categoria')"><br><br>
         <input class="btn btn-sucess btn-hover" type="submit" value="Guardar">
       </form>
   </div>
   <br><br><br><br><br>
   <div class="container-fluid text-center text-success display-3">
 MIS CATEGORIAS
</div>
<!--Formulario para filtrar por organizacion orden alfabetico--->
<div class="alert alert-secondary">
<form method="post" action="index.php">
  <label><h5>Orden alfabetico :
  Ascendente <input type="checkbox" name="asc" class="chk">
  Descendente <input type="checkbox" name="des" class="chk">
 <input type="submit" name="ordenar" value="Ordenar" class="btn btn-secondary"></h5>
</label>
</form>
</div>
<!--termina formulario-->
   <table class="table-hover table table-stripe">
     <thead class="table-dark text-center">
     <tr>
      <th>CATEGORIA</th>
      <th>ELIMINAR/ACTUALIZAR</th>
     </tr>
</thead>
<tbody>
  <?php
     include("conexion.php");
     $sql2 = "SELECT * FROM categoria ORDER BY tipo ASC";
     if (isset($_POST['asc'])){/////////////////si el usuario selecciona ascendente//////////////
  $sql2 = "SELECT * FROM categoria ORDER BY tipo ASC";/////la variable trae los registros en orden ascendente 
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

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>