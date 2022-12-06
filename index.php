<!DOCTYPE html>
<html lang="en">
<head>

	<!--Caracteres especiales y responsive-->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--Conexion con estilos.css-->
	<link rel="stylesheet" href="css/estilos.css">

	<!--Link para el funcionamiento de bootstrap-->
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<!--Conexion con awesome icon-->
	<link rel="stylesheet" href="awesome/css/all.css">

	<!--Icono de la pagina-->
	<link rel="icon" href="img/icono.ico">

	<script src="js/smooth-scroll.min.js"></script>
    <script>
      smoothScroll.init({
      selector: '[data-scroll]', // Selector for links (must be a class, ID, data attribute, or element tag)
      selectorHeader: null, // Selector for fixed headers (must be a valid CSS selector) [optional]
      speed: 2000, // Integer. How fast to complete the scroll in milliseconds
      easing: 'easeInOutCubic', // Easing pattern to use
      offset: 0, // Integer. How far to offset the scrolling anchor location in pixels
      callback: function ( anchor, toggle ) {} // Function to run after scrolling
      });

    </script>
 
	<title>APGA</title>
</head>
<body>
	<div class="header" id="inicio">
		<img src="img/apga.png" class="logo">
	</div>

	<nav class="navbar sticky-top navbar-expand-lg navbar-light" id="mainNav">
    	<div class="container">
      		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      			<ul class="nav navbar-nav navbar-right">
       				<a  data-scroll href="#iniciarsesion" id="sesion">Iniciar sesión</a>
      			</ul>
    		</div>
      		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        		<span class="navbar-toggler-icon"></span>
      		</button>
	      	<div class="collapse navbar-collapse" id="navbarResponsive">
	        	<ul class="navbar-nav ml-auto">
	          		<li class="nav-item">
	            		<a data-scroll class="nav-link" href="#inicio">Inicio</a>
	          		</li>
		          	<li class="nav-item">
		            	<a data-scroll class="nav-link" href="#quienes_somos">Quiénes Somos</a>
		          	</li>
		          	<li class="nav-item">
		            	<a data-scroll class="nav-link" href="#mision">Misión</a>
		          	</li>
		          	<li class="nav-item">
		            	<a data-scroll class="nav-link" href="#vision">Visión</a>
		          	</li>
		           	<li class="nav-item">
		            	<a data-scroll class="nav-link" href="#nuestros_servicios">Nuestros Servicios</a>
		          	</li>
		           	<li class="nav-item">
		            	<a data-scroll class="nav-link" href="#instrucciones">Instrucciones</a>
		          	</li>
	        	</ul>
	      </div>
    	</div>
  	</nav>
	
 	<div class="principal">
 		<div class="banner">
 			<span class="letras-hover">APGA</span>
 			<div id="maquina"></div>
 		</div>
 	</div>

 	<div class="container" id="quienes_somos">
		<div class="row">
			<div class="col-lg-7 text-center">
				<h2 class="py-4">Quienes Somos</h2>
				<div style="width: 100px; height: 5px; background: #AFFFC0; margin: auto; margin-top: -20px;"></div>
				<p class="text-justify py-3">Somos un equipo de jóvenes emprendedores del programa Técnico en programación de software del
				SENA. Nuestro objetivo es brindar soluciones a problemas de la vida cotidiana en nuestra
				comunidad mediante la tecnologia y la innovación, teniendo un especial enfoque en el tema del
				agro para sistematizar la informacion que allí se maneja y logra una optimizacion en sus procesos
				productivos.</p>
			</div>
			<div class="col-lg-5">
				<img src="img/img_aguacate.jpg">
			</div>
		</div>
	</div>
	<div class="container" style="margin-top: 20px;">
			<div class="row justify-content-center">
				<div class="col-lg-6 text-center" id="mision">
						<i class="fas fa-trophy" id="font-tittle"></i>
						<h2 class="py-4">Misión</h2>
					  <div style="width: 100px; height: 5px; background: #AFFFC0; margin: auto; margin-top: -20px;">
						
					  </div>
						<p class="text-justify py-3">Generar soluciones tecnológicos aplicadas al ámbito de la agroindustria para optimizar sus procesos productivos
						y contribuir con el gran potencial explotador que tiene la agroindustria Colombiana.</p>
				</div>
				<div class="col-lg-6 text-center" id="vision">
					<i class="fas fa-location-arrow" id="font-tittle"></i>
					<h2 class="py-4">Visión</h2>
					<div style="width: 100px; height: 5px; background: #AFFFC0; margin: auto; margin-top: -20px;"></div>
					<p class="text-justify py-3">Expandir nuestro portafolio de servicios para así brindarle al usuario una experiencia completa que incluya ademas de un aplicativo web, una aplicacion móvil y un programa de escritorio; donde se tendra disponibilidad de gestionar el inventario de la producción de diversos productos.</p>
				</div>
			</div>
	</div>
	

	<div class="container" style="margin-top: 20px;">
			<div class="row justify-content-center">
				<div class="col-lg-6 text-center" id="nuestros_servicios">
						<i class="fas fa-tools" id="font-tittle"></i>
						<h2 class="py-4">Nuestros Serviciós</h2>
					  <div style="width: 100px; height: 5px; background: #AFFFC0; margin: auto; margin-top: -20px;">
						
					  </div> 
						<p class="text-justify py-3">En nuestro aplicativo, ofrecemos un sistema para la organizacion y recoleccion de datos de un inventario de diferentes implementos utilizados en cualquier productora de aguacate hass, estos podrian ser plaguicidas, insecticidas, herbicidas, equipo, entre otros. </p>

					<p class="text-justify py-3">Con nuestro sistema usted podra organizár tu inventario en categorias, proveedores y productos, asi como tambien hacer movimientos tipo entrada y salida	  </p>
				</div>
				<div class="col-lg-6 text-center" id="instrucciones">
					<i class="fas fa-address-book" id="font-tittle"></i>
					<h2 class="py-4">Instrucciones</h2>
					<div style="width: 100px; height: 5px; background: #AFFFC0; margin: auto; margin-top: -20px;"></div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam hic ducimus voluptatem ea voluptas voluptatibus eius enim aspernatur incidunt nihil ratione assumenda commodi, facilis facere, iusto natus minus totam consectetur.</p>
				</div>
			</div>
	</div>

	<div class="container" id="iniciarsesion" >
		<div class="text-center">
			<div class="row">
				<div class="col-lg-6">

					<h6> <a href="#" data-toggle="modal" data-target=".bs-example-modal-sm-super" class="botonin" id="apli"><button class="botonin">  Administrador  </button></a></h6>
				</div>
				<div class="col-lg-6">
					
					<h5><a href="#" data-toggle="modal" data-target=".bs-example-modal-sm-user" id="apli"><button class="botonin">  Usuario  </button></a></h5>

				</div>
			</div>
		</div>
	</div>

	<!-- modal para super usuario -->
	
	<div class="modal fade bs-example-modal-sm-super" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  		<div class="modal-dialog modal-sm">
    		<div class="modal-content">
        		<div class="modal-header">
         			<h2>Iniciar sesión </h2>
        		</div>
        		<div class="modal-body">
          			<form action="iniciarsuper.php" method="post" enctype="application/x-www-form-urlencoded">
            			<div class="form-group">
              				<label for="control1_nombre">Correo</label>
              				<input type="text" name="correo" class="form-control" id="control1_nombre" placeholder="Correo" required>
            			</div>
            			<div class="form-group">
	             			<label for="control1_contraseña">Contraseña</label>
	              			<input type="password" name="contrasena" class="form-control" id="control1_contraseña" placeholder="Contraseña" required>
            			</div>
            			<button type="submit" class="btn btn-success btn-block">Entrar</button>
          			</form>
        		</div>
    		</div>
  		</div>
	</div>
	
	 <!--fin del modal para super usuario-->

      <!--modal para usuario-->
	<div class="modal fade bs-example-modal-sm-user" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  		<div class="modal-dialog modal-sm">
    		<div class="modal-content">
        		<div class="modal-header">
         			<h2>Iniciar sesión</h2>
        		</div>
        		<div class="modal-body">
          			<form action="iniciaruser.php" method="post" enctype="application/x-www-form-urlencoded">
            			<div class="form-group">
              				<label for="control1_nombre">Correo</label>
              				<input type="text" name="correo" class="form-control" id="control1_nombre" placeholder="Correo" required>
            			</div>
            			<div class="form-group">
	             			<label for="control1_contraseña">Contraseña</label>
	              			<input type="password" name="password" class="form-control" id="control1_contraseña" placeholder="Contraseña" required>
            			</div>
            			<button type="submit" class="btn btn-success btn-block">Entrar</button>
          			</form>
        		</div>
    		</div>
  		</div>
	</div>


	<script src="js/maquina.js"></script><!-- Maquina de escribir del inicio -->

    <script>
        const config = {
            id: "maquina",
            texto: "BIENVENIDO A APGA"
        }
        const iniciar = new MaquinaEscribir(config);
        iniciar.iniciarMaquina();
    </script>
	<!-- Hover de APGA inicio-->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>