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
  <!--  <h1>APGA</h1>-->
    <img src="img/logo.png" class="img" align="center">
  </div class="container">
  <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a data-scroll class="nav-link" href="superusuario/ver.php">Ver usuarios</a>
                </li>
             </ul> 
   </div>              
 
</nav>

<br><br><br><br><br><br><br><br><br>
<?php
session_start();
if (empty($_SESSION['correo'])) {
  header("location:../");
}
else{

}


?>
 
<div class="container container-fluid" align="left">
  <div class="form-group">

        <div class="form-group">
          <h2 class="text-center"> REGISTRE USUARIO  </h2>
        </div>
      <form action="../registraruser.php" class="text-center" method="post">
          
  <div class="form-group">
  <label > nombre  </label><input type="text" name="nombre" class="form-control" id="control2_nombre" placeholder="Nombre" required>
  </div>

    <div class="form-group">
      <label > apellido </label><input type="text" name="apellidos" class="form-control" id="control2_nombre" placeholder="Apellidos" required>
    </div>
    <div class="form-group">
      <label > telefono </label>  <input type="text" name="tel" class="form-control" id="control2_nombre" placeholder="Telefono" required>
    </div>
    <div class="form-group">
      <label > identificacion </label>  <input type="text" name="identificacion" class="form-control" id="control2_nombre" placeholder="Identificacion" required>
    </div>
    <div class="form-group">
      <label > correo  </label> <input type="text" name="correo" class="form-control" id="control2_nombre" placeholder="Correo" required>
    </div>
    <div class="form-group">
      <label > contraseña </label> <input type="password" name="password" class="form-control" id="control2_contraseña" placeholder="Contraseña" required>
    </div>
      <div class="form-group">
          <input type="submit" class="form-group btn btn-success btn-block" value="Registrar">
      </div>
        <div class="form-group">
          <a class="text-light" href="cerrar_sesion.php"> <input  class="form-group btn btn-success btn-block" value="salir"></a> 
      </div>

      </form>

  </div>
</div>

<!-- modal de registro -->

<!-- modal viejo -->  <!--
<div class="modal fade bs-example-modal-sm-registrar"  role="dialog" aria-labelledby="mySmallModalLabel">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
              <h2>Regístrate</h2>
            </div>
            <div class="modal-body">
                <form action="../registraruser.php" method="post" enctype="application/x-www-form-urlencoded">
                  <div class="form-group">
                      <label for="control2_nombre">Nombre</label>
                      <input type="text" name="nombre" class="form-control" id="control2_nombre" placeholder="Nombre" required>
                  </div>
                  <div class="form-group">
                    <label for="control2_nombre">Apellidos</label>
                    <input type="text" name="apellidos" class="form-control" id="control2_nombre" placeholder="Apellidos" required>
                  </div>
                  <div class="form-group">
                    <label for="control2_nombre">Telefono</label>
                    <input type="text" name="tel" class="form-control" id="control2_nombre" placeholder="Telefono" required>
                  </div>
                  <div class="form-group">
                    <label for="control2_nombre">Identificacion</label>
                    <input type="text" name="identificacion" class="form-control" id="control2_nombre" placeholder="Identificacion" required>
                  </div>
                  <div class="form-group">
                    <label for="control2_nombre">Correo</label>
                    <input type="text" name="correo" class="form-control" id="control2_nombre" placeholder="Correo" required>
                  </div>
                  <div class="form-group">
                    <label for="control2_contraseña">Contraseña</label>
                    <input type="password" name="password" class="form-control" id="control2_contraseña" placeholder="Contraseña" required>
                  </div>
                 <div class="form-group">
                    <input type="submit" class="btn btn-success btn-block" value="Registrar">
                 </div>
                </form>
            </div>
        </div>
      </div>
  </div> -->
</body>
</html>