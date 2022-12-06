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
  .b1{
  /*botones del formulario para filtrar*/
  margin-left: 35px;
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
                <li class="nav-item">
                  <a class="nav-link" href="../movimientos/index.php">MOVIMIENTOS</a>
                </li>
            </ul>
        </div>
      </div>
    </nav>
<!-------------------------------Inicia el formulario con los convertidores de unidades------------>

   <div class="container-fluid">       

    <div class="row"> 

     <div class="col-sm-2"></div>
     <div class="col-sm-2"></div>
     <div class="col-sm-4">
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
    
       
       <h1 class="text-center text-success">INSERTE MOVIMIENTOS</h1>
<div class="container text-center py-2">
      <form action="insertar.php" method="post">
        <p><select name="idproductos">
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
        <option value="<?php echo $fila['idproductos']; ?>"><?php echo $fila['nombre_producto']; echo "- Saldo:". $fila['saldo']." ".$fila['unidad'];?></option>
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
  <p><select name="tipo_mov" required="">
    <option>--Seleccione tipo de movimiento--</option>
     <option value="ENTRADA">Entrada</option>
     <option value="SALIDA">Salida</option>
   </select></p>
  <input autocomplete="off" class="form-control-sm formul text-center" type="date" name="fecha" required oninvalid="this.setCustomValidity('Ingresa la fecha')"><br><br>

        <input autocomplete="off" class="form-control-sm formul text-center" type="text" name="saldo" placeholder="Cantidad a mover" required oninvalid="this.setCustomValidity('Ingresa la cantidad a mover')">
        <select name="und">
           <option>--Unidad--</option>
           <option>Kg</option>
           <option>L</option>
           <option>Unidades</option>
        </select>
        <br><br>

        <input autocomplete="off" class="form-control-sm formul text-center" type="text" name="detalle_mov" placeholder="Detalle" required oninvalid="this.setCustomValidity('Ingresa la cantidad a mover')"><br><br>

         <input class="btn btn-sucess btn-hover" type="submit" value="Guardar">
       </form>
   </div>
     </div>
     
  <div class="col-sm-2">
     <br>
      <br>
      <br>
      <br>
      <br>
      <br>
       
    <table class="table-hover table table-stripe table-light">
     <thead class="table-success text-center">
     <tr>
      <th> <h6 class="text-dark">Conversor de unidades de Masa</h6></th>
    </tr>
  </thead> 

  <tbody>
    <tr>
      <td>
      <form action='index.php' method='post'>

       <label class="text-dark">Convertir:<input type='text' name='masa1' placeholder="Cantidad" required="" class="text-center">
         <select name='masaunidad1' id='masaunidad11'>
            
              <option value=''>--Seleccione la unidad--</option>
              <option value='tonelada'>Tonelada(Ton)</option>
              <option value='kg'>Kilogramos(Kg)</option>
              <option value='g'>Gramos(g)</option>
              <option value='mg'>Miligramos(mg)</option>
        </select></label>
         <br>
         <br>
       <label class="text-right text-dark">A:  </label>  <select name='masaunidad2' id='volumenun2'>

                <option value=''>--  --</option>
              <option value='tonelada'>Tonelada</option>
              <option value='kg'>Kilogramos(Kg)</option>
              <option value='g'>Gramos(g)</option>
              <option value='mg'>Miligramos(mg)</option>
        </select>

        <input type='submit' value='Convertir' class="text-center btn btn-success">

      </form>

    <?php
     
      if (isset($_POST['masaunidad1'])&&isset($_POST['masaunidad2'])&&isset($_POST['masa1'])) {
        
      
        $unidad1 = $_POST['masaunidad1'];
        $cantidadm = $_POST['masa1'];
        $unidad2 = $_POST['masaunidad2'];

        $valor2 = 0;//inicializo la variable en 0

        if ($unidad1 =="tonelada") {

          if ($unidad2 =="kg") {

            $valor2 = $cantidadm*1000;
            $unidad21 = "Kg";
            
          }
          elseif ($unidad2 =="g") {
            
            $valor2 = $cantidadm*1e+6;
            $undidad21 = "g";
          }
          elseif ($unidad2 =="mg") {

            $valor2 = $cantidadm*1e+9;
            $unidad21 = "mg";
            
          }
          else{
            echo "No seleccione el mismo tipo de unidad";
          }
          
        }

        elseif ($unidad1 =="kg") {

          if ($unidad2 =="tonelada") {

            $valor2 = $cantidadm/1000;
            $unidad21 = "Ton";
            
          }
          elseif ($unidad2 =="g") {

            $valor2 = $cantidadm*1000;
            $unidad21 = "g";
            
          }
          elseif ($unidad2 =="mg") {

            $valor2 = $cantidadm*1e+6;
            $unidad21 = "mg";
          }
          else{
            echo "No seleccione el mismo tipo de unidad";
          }
          
        }

        elseif ($unidad1 =="g") {

          if ($unidad2 =="tonelada") {
            
            $valor2 = $cantidadm/1e+6;
            $unidad21 = "Ton";
          }
          elseif ($unidad2 =="kg") {
            
            $valor2 = $cantidadm/1000;
            $unidad21 = "Kg";
          }
          elseif ($unidad2 =="mg") {

            $valor2 = $cantidadm*1000;
            $unidad21 = "mg";
            
          }
          else{
            echo "No seleccione el mismo tipo de unidad";
          }
          
        }

        elseif ($unidad1 =="mg") {

          if ($unidad2 =="tonelada") {

            $valor2 = $cantidadm/1e+9;
            $unidad21 = "tonelada";
            
          }
          elseif ($unidad2 =="kg") {

            $valor2 = $cantidadm*1e+6;
            $unidad21 = "Kg";
            
          }
          elseif ($unidad2 =="g") {

            $valor2 = $cantidadm/1000;
            $unidad21 = "g";
            
          }
          else{
            echo "No seleccione el mismo tipo de unidad";
          }
          
        }

        else{
          echo "Seleccione una unidad";
        }

       
       //$valor2 = round($valor2 * 100) / 100;

        echo "Equivale a :<h5 class='text-dark'>".$valor2." $unidad21</h5>";

    }


    ?>
       </td>
     </tr>
   </tbody>
 </table>
</div>


<div class="col-sm-2" align="left">

      <br>
      <br>
      <br>
      <br>
      <br>
      <br>

  <table class="table-hover table table-stripe table-light">
     <thead class="table-success text-center">
     <tr>
      <th><h6 class="text-center text-dark">Conversor de unidades de volumen</h6></th>
    </tr>
  </thead> 

  <tbody>
    <tr>
      <td>
        
      <form action='index.php' method='post'>
        <label class="text-left text-dark">Convertir: <input type='text' name='unidad1' placeholder="Cantidad" required="" class="text-center">
        <select name='volumenun1' id='volumenun1' class="text-center text-dark">
         <option value=''>-Seleccione la unidad-</option>
         <option value='litros'>Litros</option>
         <option value='metrosc'>Metros cubicos</option>
         <option value='centimetrosc'>Mililitros</option>
         <option value='galon'>Galones</option></select></label>
         <br>
         <br>
         <label class="text-left text-dark">A: </label><select name='volumenun2' id='volumenun2'>
          <option value=''>-- --</option>
          <option value='litros'>Litros</option><option value='metrosc'>Metros cubicos</option>
          <option value='centimetrosc'>Mililitros</option><option value='galon'>Galones</option>
        </select>
        <input type='submit' class="btn btn-success" value='Convertir'>
      </form>
     <?php
     if (isset($_POST['volumenun1'])&&isset($_POST['volumenun2'])&&isset($_POST['unidad1'])) {
        
      
        $unidad = $_POST['volumenun1'];
        $cantidad = $_POST['unidad1'];
        $undconv = $_POST['volumenun2'];

        $valor = 0;//inicializo la variable en 0

        if ($unidad =="litros") {

          if ($undconv =="metrosc") {

            $valor = $cantidad/1000;
            $undconv2 = "Metros cubicos";
            
          }
          elseif ($undconv =="centimetrosc") {
            
            $valor = $cantidad*1000;
            $undconv2 = "Mililitros";
          }
          elseif ($undconv =="galon") {

            $valor = $cantidad/3.785;
            $undconv2 = "Galones";
            
          }
          else{
            echo "No seleccione el mismo tipo de unidad";
          }
          
        }

        elseif ($unidad =="metrosc") {

          if ($undconv =="litros") {

            $valor = $cantidad*1000;
            $undconv2 = "Litros";
            
          }
          elseif ($undconv =="centimetrosc") {

            $valor = $cantidad*1e+6;
            $undconv2 = "Mililitros";
            
          }
          elseif ($undconv =="galon") {

            $valor = $cantidad*264.172;
            $undconv2 = "Galones";
          }
          else{
            echo "No seleccione el mismo tipo de unidad";
          }
          
        }

        elseif ($unidad =="centimetrosc") {

          if ($undconv =="metrosc") {
            
            $valor = $cantidad/1e+6;
            $undconv2 = "Metros cubicos";
          }
          elseif ($undconv =="litros") {
            
            $valor = $cantidad/1000;
            $undconv2 = "Litros";
          }
          elseif ($undconv =="galon") {

            $valor = $cantidad/3785.412;
            $undconv2 = "Galones";
            
          }
          else{
            echo "No seleccione el mismo tipo de unidad";
          }
          
        }

        elseif ($unidad =="galon") {

          if ($undconv =="metrosc") {

            $valor = $cantidad/264.172;
            $undconv2 = "Metros cubicos";
            
          }
          elseif ($undconv =="centimetrosc") {

            $valor = $cantidad*3785.412;
            $undconv2 = "Mililitros";
            
          }
          elseif ($undconv =="litros") {

            $valor = $cantidad*3.785;
            $undconv2 = "Litros";
            
          }
          else{
            echo "No seleccione el mismo tipo de unidad";
          }
          
        }

        else{
          echo "Seleccione una unidad";
        }

       // $valor = round($valor * 100) / 100;

        echo "Equivalen a : <h5 class='text-dark'>".$valor." $undconv2</h5>";

    }

        ?>  
        </td>
      </tr>
     </tbody>
    </table>      
    
  </div>
</div>

<!------finaliza formulario y convertidores------------------------------>

   <br><br><br><br><br>
   <div class="container-fluid text-center text-success display-3">
 MIS MOVIMENTOS
</div>

<!--Formulario para filtrar por organizacion fecha-->
<div class="alert alert-secondary">
<form method="post" action="index.php">
  <label><h5>Ordenar por fecha :
  Ascendente <input type="checkbox" name="asc" class="chk">
  Descendente <input type="checkbox" name="des" class="chk">
 <input type="submit" name="ordenar" value="Ordenar" class="btn btn-secondary"></h5>
</label>
</form>
</div>
<!--Termina formulario-->

<!--formulario para filtrar por producto,fecha y tipo de movimiento-->
<div class="alert alert-secondary">
<form method="post" action="index.php">
 <h5>Filtar por :
  Producto : <select name="producto" class="frm3">
<option value="">Seleccione producto</option><!--Traigo los registros de producto desde la bd-->
<?php
  $sql3 = "SELECT * FROM productos";
    if (mysqli_query($conexion, $sql3)) {
      $resultado3 = $conexion->query($sql3);
      while($fila3 = $resultado3->fetch_assoc()) {
      ?>
        <option value="<?php echo $fila3['nombre_producto']; ?>"><?php echo $fila3['nombre_producto'];?></option>
    <?php
      }
    }
      ?>
 </select>
 Fecha : <input type="date" name="fecha" class="frm3">
  Tipo de movimiento : <select name="movimiento" class="frm3"> <!--seleccionar tipo de movimiento-->
  <option value=""> Seleccione tipo de movimiento </option>
  <option value="ENTRADA">ENTRADA</option>
  <option value="SALIDA">SALIDA</option>
</select><input type="submit" name="buscar" class="btn btn-secondary b1" value="Buscar"> 
<input type="submit" name="reiniciar" class="btn btn-secondary b1" value="Reiniciar registros">
 </h5>
</form>
</div>
<!--termina formulario-->

   <table class="table-hover table table-stripe">
     <thead class="table-secondary text-center">
     <tr>
      <th>PRODUCTO</th>
      <th>FECHA</th>
      <th>TIPO DE MOVIMIENTO</th>
      <th> CANTIDAD</th>
      <th> DETALLE </th>
     </tr>
</thead>
<tbody>
  <?php 
 
  $sql2 = "SELECT tipo_mov,cantidad,detalle,fecha_mov,nombre_producto,unidad FROM movimientos  INNER JOIN productos ON  productos_idproductos = idproductos ORDER BY fecha_mov DESC";//////////si no se selecciona un orden especifico

  if (isset($_POST['asc'])){/////////////////si el usuario selecciona ascendente//////////////
  $sql2 = "SELECT tipo_mov,cantidad,detalle,fecha_mov,nombre_producto,unidad FROM movimientos  INNER JOIN productos ON  productos_idproductos = idproductos ORDER BY fecha_mov ASC";/////la variable trae los registros en orden ascendente de fecha
      }

    if (isset($_POST['des'])){/////////////////si el usuario selecciona descendente/////////////////
  $sql2 = "SELECT tipo_mov,cantidad,detalle,fecha_mov,nombre_producto,unidad FROM movimientos  INNER JOIN productos ON  productos_idproductos = idproductos ORDER BY fecha_mov DESC";/////////la variale trae los registros en orden descendente de fecha
      }
  if (isset($_POST['buscar'])) { ////si el usuario quiere filtrar producto,fecha y movimiento
      $where = "";
      $producto = $_POST['producto'];
      $movimiento = $_POST['movimiento'];
      $fecha = $_POST['fecha'];

      /////////////////////////////valido cual de los filtros de busqueda se lleno y pongo la sentencia para filtar/////////////////////////
    if ((!empty($_POST['producto']))&&(!empty($_POST['fecha']))) {
      $where = "WHERE nombre_producto = '". $producto . "%'"."AND fecha_mov = '". $fecha . "%'"; 
    }
    elseif ((!empty($_POST['producto']))&&(!empty($_POST['movimiento']))) {
      $where = "WHERE nombre_producto = '". $producto . "%'"."AND tipo_mov LIKE '". $movimiento . "%'";
    }
    elseif ((!empty($_POST['fecha']))&&(!empty($_POST['movimiento']))) {
      $where = "WHERE fecha_mov = '". $fecha . "%'"."AND tipo_mov LIKE '". $movimiento . "%'"; 
    }
    if ((!empty($_POST['producto']))) {
      $where = "WHERE nombre_producto like '". $producto . "%'";
    }
    elseif (!empty($_POST['fecha'])) {
       $where = "WHERE fecha_mov LIKE  '". $fecha . "%'";
    }
    elseif (!empty($_POST['movimiento'])) {
      $where = "WHERE tipo_mov LIKE'". $movimiento . "%'";
    }
    else{
      $where = "WHERE nombre_producto = '". $producto . "%'"."AND fecha_mov = '". $fecha . "%'". "AND tipo_mov LIKE '". $movimiento . "%'" ;
    }
    ///////////////////////////termino validacion//////////////////////////////

    $sql2 = "SELECT tipo_mov,cantidad,detalle,fecha_mov,nombre_producto,unidad FROM movimientos  INNER JOIN productos ON  productos_idproductos = idproductos $where ORDER BY fecha_mov DESC";//////////si no se selecciona un orden especifico
    $rest = $conexion->query($sql2);
    if (!isset($rest)) {
      echo "<div class='alert alert-danger text-center>'";
      echo "<h2 class='text-alert'>NO se encontraron resultados para su busqueda</h2></div>";
    }
    }
    ////termina validacion de filtros aplicados
    if (isset($_POST['reiniciar'])) {
    $sql2 = "SELECT tipo_mov,cantidad,detalle,fecha_mov,nombre_producto,unidad FROM movimientos  INNER JOIN productos ON  productos_idproductos = idproductos ORDER BY fecha_mov DESC";//////////si no se selecciona un orden especifico

      }
     include("../conexion.php");
    
     $query2 = $conexion->query($sql2);
     while ($row2 = $query2->fetch_assoc()) {
  ?>
     <tr class="text-center">
      <td><h3><?php echo $row2['nombre_producto'];?></h3></td>
         <td class="bg-light"><h3><?php echo $row2['fecha_mov'];  ?></h3></td>
         <td class="bg-light"><h3><?php echo $row2['tipo_mov'];  ?></h3></td>
         <td class="bg-light"><h3><?php echo $row2['cantidad']." ".$row2['unidad'];  ?></h3></td>
         <td class="bg-light"><h3><span><?php echo $row2['detalle'];  ?></span></h3></td>
     </tr>
  <?php
   } 
    
  ?>

    </tbody>
   </table>

</body>
</html>
