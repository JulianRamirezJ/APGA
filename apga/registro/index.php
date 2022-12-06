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
<h1 class="text-center text-success" style="margin-top: 100px;">INSERTE SUS PRODUCTOS</h1>

<div class="container text-center py-2">
      <form action="insertar.php" method="post">
        <input autocomplete="off" class="form-control-sm formul text-center" id="producto" type="text" name="producto" placeholder="Nombre Producto" required =""><br><br>

    <!--    <input autocomplete="off" class="form-control-sm formul text-center" id="cantidad" type="text" name="cantidad" placeholder="Cantidad" required oninvalid="this.setCustomValidity('Ingresa el saldo')"><br><br>-->
    <p><select name="categoria">
      <option value="">--Seleccione la categoria de producto--</option>
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

    // Consulta de todas las categorias
    $sql = "SELECT * FROM categoria";

    if (mysqli_query($conexion, $sql)) {

      $resultado = $conexion->query($sql);

      while($fila = $resultado->fetch_assoc()) {
      ?>
        <option value="<?php echo $fila['idcategoria']; ?>"><?php echo $fila['tipo']; ?></option>
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
<select name="unidad">
  <option value="">--Unidad de medida--</option> 
  <option value="kg">Kg(masa)</option>
  <option value="L">L(volumen)</option>
  <option value="unidades">Unidades</option>
</select>
<br><br>

    <!--    <p>Proveedor :<select class="selc" name="proveedor">-->
      <?php
      /*  $sql2 = "SELECT * FROM proveedor";

    if (mysqli_query($conexion, $sql2)) {

      $resultado1 = $conexion->query($sql2);

      while($fila1 = $resultado1->fetch_assoc()) {
      ?>
        <option value="<?php echo $fila1['idproveedor']; ?>"><?php echo $fila1['nombre']; ?></option>
    <?php
      }
    }
      mysqli_close($conexion); */
        ?>
   <!--     </select></p> -->


         <input class="btn btn-sucess btn-hover" type="submit" value="Guardar">
       </form>
   </div>
   <br><br><br><br><br>
   <div class="container-fluid text-center text-success display-3">
 MIS PRODUCTOS
</div>
<div class="alert alert-secondary">
  <!----------Formulario para organizar en orden alfabetico-->
<form method="post" action="index.php">
  <label><h5>Orden alfabetico:
  Ascendente        <input type="checkbox" name="asc" class="chk">
  Descendente      <input type="checkbox" name="des" class="chk">
 <input type="submit" name="ordenar" value="Ordenar" class="btn btn-secondary"></h5>
</label>
</form>
</div>
<!--Formulario para filtrar por categoria-->
<div class="alert alert-secondary">
<form method="post" action="index.php">
 <h5>Filtar por :
  <select name="categoria" class="frm3">
<option value="">--Seleccione Categoria--</option><!--Traigo los registros de categoria desde la bd-->
<?php
  $sql3 = "SELECT * FROM categoria";
    if (mysqli_query($conexion, $sql3)) {
      $resultado3 = $conexion->query($sql3);
      while($fila3 = $resultado3->fetch_assoc()) {
      ?>
        <option value="<?php echo $fila3['idcategoria']; ?>"><?php echo $fila3['tipo'];?></option>
    <?php
      }
    }
      ?>
 </select>
<input type="submit" name="buscar" class="btn btn-secondary b1" value="Buscar"> 
<input type="submit" name="reiniciar" class="btn btn-secondary b1" value="Reiniciar registros">
 </h5>
</form>
</div>
   <table class="table-hover table table-stripe">
     <thead class="table-light text-center">
     <tr>
    <!--  <th> ID </th>-->
      <th> NOMBRE PRODUCTO</th>
      <th>CANTIDAD</th>
      <th> CATEGORIA </th>
       <th><a href="reportegral.php" class="btn btn-secondary"> REPORTE GENERAL</a> </th>
      <th> ACTUALIZAR </th>
     </tr>
</thead>
<tbody>
  <?php
     include("../conexion.php");
     $sql2 = "SELECT * FROM productos INNER JOIN categoria WHERE categoria_idcategoria = idcategoria ORDER BY nombre_producto ASC";

     if (isset($_POST['asc'])){/////////////////si el usuario selecciona ascendente//////////////
  $sql2 = "SELECT * FROM productos INNER JOIN categoria WHERE categoria_idcategoria = idcategoria ORDER BY nombre_producto ASC";/////la variable trae los registros en orden ascendente de fecha
      }

    if (isset($_POST['des'])){/////////////////si el usuario selecciona descendente/////////////////
  $sql2 = "SELECT * FROM productos INNER JOIN categoria WHERE categoria_idcategoria = idcategoria ORDER BY nombre_producto DESC";/////////la variale trae los registros en orden descendente de fecha
      }

      if (isset($_POST['buscar'])) { ////si el usuario quiere filtrar producto,fecha y movimiento
      $where = "";
      $categoria = $_POST['categoria'];
      /////////////////////////////valido cual de los filtros de busqueda se lleno y pongo la sentencia para filtar/////////////////////////

    if (!empty($_POST['categoria'])) {
      $where = "WHERE categoria_idcategoria ='". $categoria . "%'";
    }
  
     if (isset($_POST['reiniciar'])) {
    $sql2 = "SELECT * FROM productos INNER JOIN categoria WHERE categoria_idcategoria = idcategoria $where ORDER BY nombre_producto ASC";//////////si no se selecciona un orden especifico
      }
      $sql2 = "SELECT * FROM productos INNER JOIN categoria ON categoria_idcategoria = idcategoria $where ORDER BY nombre_producto ASC";
    }


     $query2 = $conexion->query($sql2);
     while ($row2 = $query2->fetch_assoc()) {
  ?>
     <tr class="text-center">
     <!--    <td class="bg-light"><h3><?php// echo $row2['idproductos'];  ?></h3></td>-->
         <td class="bg-light"><h3><?php echo $row2['nombre_producto'];  ?></h3></td>
         <td><h3><?php echo $row2['saldo']." ".$row2['unidad']; ?></h3></td>
         <td class="bg-light"><h3><?php echo $row2['tipo'];  ?></h3></td>
         <td class="bg-light">
          <!--<a class="text-light" href="borrar.php?id=<?php// echo $row2['idproductos']; ?>"><button class="btn btn-danger"> <i class="fas fa-trash"></i></button></a>-->
         <a href="reporte.php?id=<?php echo $row2['idproductos']; ?>"  class="btn btn-success">Ver reporte</a>
       </td>
       <td><a href="actualizarfrm.php?id=<?php echo $row2['idproductos']; ?>" class="btn btn-info"><i class="fas fa-edit"></i></a></td>
     </tr>

  <?php
   }
  ?>

    </tbody>
   </table>

</body>
</html>
