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
    <img src="../img/logo.png" class="img" align="center">
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
<br>
<?php 
include("../conexion.php");
$id= $_REQUEST['id'];
$sql1 = "SELECT * FROM productos WHERE idproductos = '$id'";
$query1 = $conexion->query($sql1);
while ($row1 = $query1->fetch_assoc()) {

?>
<h2 class="text-center alert alert-success text-dark">Reporte de <?php echo $row1['nombre_producto']; } ?></h2>

<div class="container-fluid"><div class="row">
  <div class="col-sm-4">
<canvas id="densityChart">
  <?php   //////codigo para traer la cantidad de movimientos de entrada y salida
  include("../conexion.php");
  $id = $_REQUEST['id'];
  $i = 0;/*Variables contadoras inicializadas*/
  $f = 0;
  $centrada = 0;
  $csalida = 0;
  $saldo = 0;
  $sql ="SELECT * FROM productos INNER JOIN movimientos ON productos_idproductos = idproductos WHERE productos_idproductos = '$id'";
  $query = $conexion->query($sql);
  $unidad="";
  while ($row = $query->fetch_assoc()) {
    $saldo = $row['saldo'];
    $unidad = $row['unidad'];
    $mov = $row['tipo_mov'];
    if ($mov == "ENTRADA") {
      $i=$i+1;
      $centrada = $centrada + $row['cantidad'];
       
    }
    elseif ($mov == "SALIDA") {
      $f = $f+1;
      $csalida = $csalida + $row['cantidad'];
    }


  }

  ?>
   <script>
   var densityCanvas = document.getElementById("densityChart");

Chart.defaults.global.defaultFontFamily = "Lato";
Chart.defaults.global.defaultFontSize = 18;

var densityData = {
  label: 'Cantidad de movimientos',
  data: [<?php echo $i; ?>,<?php echo $f ?>,0],
  backgroundColor: [
    'rgba(0, 99, 132, 0.5)',
    'rgba(200, 99, 0, 0.5)'
  ]

};

var barChart = new Chart(densityCanvas, {
  type: 'horizontalBar',
  data: {
    labels: ["ENTRADA", "SALIDA"],
    datasets: [densityData]
  },
   options:{//le pasamos como opcion adicional que sea responsivo
          responsive: true,
        }
});

 </script>
</canvas>
 <!----------------------             ----------------------------->
 <canvas id="oilChart">
   <script>
      var oilCanvas = document.getElementById("oilChart");

Chart.defaults.global.defaultFontFamily = "Lato";
Chart.defaults.global.defaultFontSize = 18;

var oilData = {
    labels: [
        "ENTRADA",
        "SALIDA"
    ],
    datasets: [
        {
            data: [<?php echo $i; ?>,<?php echo $f ?>],
            backgroundColor: [
                "#049DD3",
                "#FFA221"
            ]
        }]
};

var pieChart = new Chart(oilCanvas, {
  type: 'pie',
  data: oilData
});
      </script>

 <!--------------------------              --------------->

</canvas>
</div>
<div class="col-sm-1"><h3 class="text-center text-success ">Balance:<?php echo $saldo ." ". $unidad;   ?></h3></div>
<div class="col-sm-7">
  <canvas id="bar2" height="85%">
    <script>
    var densityCanvas = document.getElementById("bar2");

Chart.defaults.global.defaultFontFamily = "Lato";
Chart.defaults.global.defaultFontSize = 18;

var densityData = {
  label: 'Total(<?php echo $unidad;   ?>)',
  data: [<?php echo $centrada; ?>,<?php echo $csalida; ?>,0],
  backgroundColor: 'rgba(0, 99, 132, 0.6)',
  borderWidth: 0,
  yAxisID: "y-axis-density"
};

var gravityData = {
  label: 'Movimientos realizados',
  data: [<?php echo $i; ?>,<?php echo $f ?>,0],
  backgroundColor: 'rgba(99, 132, 0, 0.6)',
  borderWidth: 0,
  yAxisID: "y-axis-gravity"
};

var planetData = {
  labels: ["ENTRADA", "SALIDA"],
  datasets: [densityData, gravityData]
};

var chartOptions = {
  scales: {
    xAxes: [{
      barPercentage: 1,
      categoryPercentage: 0.6
    }],
    yAxes: [{
      id: "y-axis-density"
    }, {
      id: "y-axis-gravity"
    }]
  }
};

var barChart = new Chart(densityCanvas, {
  type: 'bar',
  data: planetData,
  options: chartOptions
});
</script>
     
   </canvas>
    <!--------------------------------------------- Grafica variacion del saldo-------------->
     <?php

include("../conexion.php");
$id = $_REQUEST['id'];

$sql2 = "SELECT * FROM productos INNER JOIN movimientos ON productos_idproductos = idproductos WHERE  productos_idproductos = '$id' ORDER BY fecha_mov DESC";
$query2 = $conexion->query($sql2);
$a = 0;
$datos = array();
$fechas = array();
$unidad = "";
while ($row2 = $query2->fetch_assoc()) {
  /*$datos = array();
  $fechas = array();*/
  $unidad = $row2['unidad'];

    
  if ($a == 0) {///////entra la primera vez tomando el saldo inicial
    
       // echo $row2['saldo'] ." ". $row2['unidad']." ".date("Y-m-d")."<br>";
   
         $saldoac = $row2['saldo'];

           array_push ( $datos , $saldoac );
           array_push ( $fechas , date("Y-m-d") );
            
      if ($row2['tipo_mov']=="ENTRADA") {
    
       $ns = $saldoac-$row2['cantidad'];/////nuevo saldo o saldo anterior
         }

         elseif ($row2['tipo_mov']=="SALIDA") {

        $ns =  $saldoac+$row2['cantidad'];////////nuevo saldo o saldo anterior

         }

         $a = 1;
     }

     elseif($a == 1){///////sigue entrando tomando los ns(nuevos saldos)

      
       // echo $ns." ".$row2['unidad']." ".$row2['fecha_mov']."<br>";
            array_push ( $datos , $ns );
            array_push ( $fechas , $row2['fecha_mov'] );

       if ($row2['tipo_mov']=="ENTRADA") {
    
       $ns = $ns-$row2['cantidad'];/////nuevo saldo o saldo anterior
         }

         elseif ($row2['tipo_mov']=="SALIDA") {

        $ns =  $ns+$row2['cantidad'];////////nuevo saldo o saldo anterior
         }
     }
   }
   $longitud = count($datos);
  $longitudf = count($fechas);
 
?>

<!------------------------------------------------------------------------------------------------------------------->

<canvas id="speedChart" height="125%">
 <script>
var speedCanvas = document.getElementById("speedChart");

Chart.defaults.global.defaultFontFamily = "Lato";
Chart.defaults.global.defaultFontSize = 18;

var speedData = {
  labels:[<?php for($f=0; $f<$longitudf; $f++)
      {
    ?>  
    "<?php echo $fechas[$f] ?>",
    <?php
     }
    ?>
  ],
  datasets: [{
    label: "Variacion del saldo(<?php echo $unidad;  ?>)",
    data:[<?php for($i=0; $i<$longitud; $i++) {?>  <?php echo $datos[$i]; ?>,
     <?php } ?>],
    lineTension: 0,
    fill: false,
    borderColor: 'rgba(50,50,190,0.5)',
    backgroundColor: 'transparent',
    borderDash: [5, 5],
    pointBorderColor: 'blue',
    pointBackgroundColor: 'rgba(25,150,189,0.5)',
    pointRadius: 5,
    pointHoverRadius: 10,
    pointHitRadius: 30,
    pointBorderWidth: 2,
    pointStyle: 'rectRounded'
  },]
};

var chartOptions = {
  legend: {
    display: true,
    position: 'top',
    labels: {
      boxWidth: 80,
      fontColor: 'blue'
    }
  },
   options:{//le pasamos como opcion adicional que sea responsivo
          responsive: true,
        }
};

var lineChart = new Chart(speedCanvas, {
  type: 'line',
  data: speedData,
  options: chartOptions
},);
</script>
</canvas>

   
     <!-----------------------------------------------------  ------------>

 </div>
<!----------------------------------------------               ------------------->
</div>
<br>
<div class="row">
   
    </canvas>

</div>

</div>

</body>
</html>