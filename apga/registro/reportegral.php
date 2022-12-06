<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<script src="../js/jquery.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src=".../js/bootstrap.min.js"></script>

  <!--Links de font awesome-->
 <!-- <linkrel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
  <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>-->
	<title>APGA</title>

  <!--link de chart js,libreria de graficas-->
   <script src="Chart.min.js"></script>
</head>
<body>
	 <nav class="navbar navbar-expand-sm navbar-dark fixed-top">
<div class="container-fluid bg-success py-4 text-left text-light">
 <div class="container">
	<!--	<h1>APGA</h1>-->
    <h1>APGA</h1>
	</div>

   <div class="container">
  <button class="btn btn-success"><a class="text-light" href="index.php">REGRESAR</a></button><br>
  </div>

</div>
</nav>
<br>
<br>
<br>
<br>
<br>

<?php
include("../conexion.php");
 //unidades   
   $sql = "SELECT * FROM productos WHERE unidad = 'unidades' ORDER BY nombre_producto ASC";

   $query = $conexion->query($sql);

   $nombres = array();
   $saldos = array();

   while ($row = $query->fetch_assoc()) {

   	  array_push($nombres, $row['nombre_producto']);
   	  array_push($saldos, $row['saldo']);

   	 // echo $row['nombre_producto'].$row['saldo']."<br>";
   }

   $cntnom = count($nombres);
   $cntsld = count($saldos);


//kg
   $sql2 = "SELECT * FROM productos WHERE unidad = 'kg' ORDER BY nombre_producto ASC";

   $query2 = $conexion->query($sql2);

   $nombres2 = array();
   $saldos2 = array();

   while ($row2 = $query2->fetch_assoc()) {

   	  array_push($nombres2, $row2['nombre_producto']);
   	  array_push($saldos2, $row2['saldo']);

   	 // echo $row['nombre_producto'].$row['saldo']."<br>";
   }

   $cntnom2 = count($nombres2);
   $cntsld2 = count($saldos2);

//L
   $sql3 = "SELECT * FROM productos WHERE unidad = 'L' ORDER BY nombre_producto ASC";

   $query3 = $conexion->query($sql3);

   $nombres3 = array();
   $saldos3 = array();

   while ($row3 = $query3->fetch_assoc()) {

   	  array_push($nombres3, $row3['nombre_producto']);
   	  array_push($saldos3, $row3['saldo']);

   	 // echo $row['nombre_producto'].$row['saldo']."<br>";
   }

   $cntnom3 = count($nombres3);
   $cntsld3 = count($saldos3);


   /*generador de colores aleatorio*/

?>
<div class="container-fluid">
	<div class="row">
<canvas id="densityChart" class="col-sm-4" height="180%">
 <script>
 	 function getRandomColor() { var letters = '0123456789ABCDEF'.split(''); var color = '#'; for (var i = 0; i < 6; i++ ) { color += letters[Math.floor(Math.random() * 16)]; } return color; }
      


     var densityCanvas = document.getElementById("densityChart");

     Chart.defaults.global.defaultFontFamily = "Lato";
     Chart.defaults.global.defaultFontSize = 18;

     var densityData = {
          label: 'Saldo(unidades): ',
         data: [<?php for($f=0; $f<$cntnom; $f++) {?>  <?php echo $saldos[$f]; ?>,
          <?php } ?>],
         backgroundColor: [<?php for($c=0;$c<$cntnom;$c++){?>  getRandomColor(), <?php } ?>]
        };

        var barChart = new Chart(densityCanvas, {
             type: 'horizontalBar',
        data: {
          labels: [<?php for($i=0; $i<$cntnom; $i++)
           {
          ?>  
             "<?php echo $nombres[$i] ?>",
         <?php
           }
          ?>
         ],
         datasets: [densityData]
         },
         options:{//le pasamos como opcion adicional que sea responsivo
          responsive: true
         }
        });

          </script>
       </canvas>
       <canvas id="densityChart2" class="col-sm-4" height="180%">
 <script>
     var densityCanvas = document.getElementById("densityChart2");

     Chart.defaults.global.defaultFontFamily = "Lato";
     Chart.defaults.global.defaultFontSize = 18;

     var densityData = {
          label: 'Saldo(kg): ',
         data: [<?php for($t=0; $t<$cntnom2; $t++) {?>  <?php echo $saldos2[$t]; ?>,
          <?php } ?>],
         backgroundColor: [<?php for($c=0;$c<$cntnom;$c++){?>  getRandomColor(), <?php } ?>]
        };

        var barChart = new Chart(densityCanvas, {
             type: 'horizontalBar',
        data: {
          labels: [<?php for($y=0; $y<$cntnom2; $y++)
           {
          ?>  
             "<?php echo $nombres2[$y] ?>",
         <?php
           }
          ?>
         ],
         datasets: [densityData]
         },
         options:{//le pasamos como opcion adicional que sea responsivo
          responsive: true
         }
        });

          </script>
       </canvas>

       <canvas id="densityChart3" class="col-sm-4">
 <script>
     var densityCanvas = document.getElementById("densityChart3");

     Chart.defaults.global.defaultFontFamily = "Lato";
     Chart.defaults.global.defaultFontSize = 18;

     var densityData = {
          label: 'Saldo(Litros): ',
         data: [<?php for($o=0; $o<$cntnom3; $o++) {?>  <?php echo $saldos3[$o]; ?>,
          <?php } ?>],
         backgroundColor: [<?php for($c=0;$c<$cntnom;$c++){?>  getRandomColor(), <?php } ?>]
        };

        var barChart = new Chart(densityCanvas, {
             type: 'horizontalBar',
        data: {
          labels: [<?php for($s=0; $s<$cntnom3; $s++)
           {
          ?>  
             "<?php echo $nombres3[$s] ?>",
         <?php
           }
          ?>
         ],
         datasets: [densityData]
         },
         options:{//le pasamos como opcion adicional que sea responsivo
          responsive: true
         }
        });

          </script>
       </canvas>

	</div>
	<br>
	<br>

	<div class="row">

		   <canvas id="oilChart" class="col-sm-4">
               <script>
                  var oilCanvas = document.getElementById("oilChart");

                  Chart.defaults.global.defaultFontFamily = "Lato";
                  Chart.defaults.global.defaultFontSize = 18;

                  var oilData = {
                    labels: [
                     <?php for($i=0; $i<$cntnom; $i++)
                        { ?>  
                         "<?php echo $nombres[$i] ?>",
                    <?php
                        }
                    ?>
                    ],
                     datasets: [
                     {
                     data: [<?php for($f=0; $f<$cntnom; $f++) {?>  <?php echo $saldos[$f]; ?>,
          <?php } ?>],
                     backgroundColor: [<?php for($c=0;$c<$cntnom;$c++){?>  getRandomColor(), <?php } ?>]
                    }]
                };

                var pieChart = new Chart(oilCanvas, {
                    type: 'pie',
                  data: oilData,
                  responsive: true
                });

           </script>
       </canvas>
		
			<canvas id="oilChart2" class="col-sm-4">
                <script>
                  var oilCanvas = document.getElementById("oilChart2");

                  Chart.defaults.global.defaultFontFamily = "Lato";
                  Chart.defaults.global.defaultFontSize = 18;

                  var oilData = {
                    labels: [<?php for($y=0; $y<$cntnom2; $y++)
                   {
                  ?>  
                  "<?php echo $nombres2[$y] ?>",
                  <?php
                    }
                   ?>],
                     datasets: [
                     {
                     data: [<?php for($t=0; $t<$cntnom2; $t++) {?>  <?php echo $saldos2[$t]; ?>,
                     <?php } ?>],
                     backgroundColor: [<?php for($c=0;$c<$cntnom;$c++){?>  getRandomColor(), <?php } ?>]
                    }]
                };

                var pieChart = new Chart(oilCanvas, {
                    type: 'pie',
                  data: oilData,
                  responsive: true
                });

           </script>
       </canvas>

       		<canvas id="oilChart3" class="col-sm-4">
                <script>
                  var oilCanvas = document.getElementById("oilChart3");

                  Chart.defaults.global.defaultFontFamily = "Lato";
                  Chart.defaults.global.defaultFontSize = 18;

                  var oilData = {
                    labels: [<?php for($s=0; $s<$cntnom3; $s++)
                    {
                   ?>  
                     "<?php echo $nombres3[$s] ?>",
                 <?php
                    }
                   ?>],
                     datasets: [
                     {
                     data: [<?php for($o=0; $o<$cntnom3; $o++) {?>  <?php echo $saldos3[$o]; ?>,
                     <?php } ?>],
                     backgroundColor: [<?php for($c=0;$c<$cntnom;$c++){?>  getRandomColor(), <?php } ?>]
                    }]
                };

                var pieChart = new Chart(oilCanvas, {
                    type: 'pie',
                  data: oilData,
                  responsive:true
                });

           </script>
       </canvas>


	</div>

</div>




</body>
</html>