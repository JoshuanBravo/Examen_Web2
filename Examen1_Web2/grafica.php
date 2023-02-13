<!DOCTYPE html>
<html lang="en">
<head>	
    <?php
        include_once("segmentos/encabe.inc");        
	?>  
<head>

<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Transporte',     2],
          ['Entretenimiento',      3],
          ['Comida',  15],
          ['Cuidado de los Niños', 10],
          ['Utilidades',    7],
          ['Renta', 18],
          ['Otro', 4],
        ]);

        var options = {
          title: 'Presupuesto Mensual'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }

    </script>
  </head>

<body class="container">
	<header class="row">
		<?php
			include_once("segmentos/menu.inc");
		?>
	</header>

        <body>
        <div id="piechart" style="width: 1200px; height: 350px;"></div>
        </body>

	<main class="row">
		<div class="linea_sep">
            <div id="grafica"> </div>
		</div>
	</main>

	<footer class="row pie">
		<?php
			include_once("segmentos/pie.inc");
		?>
	</footer>

	<!-- jQuery necesario para los efectos de bootstrap -->
    <script src="formatos/bootstrap/js/jquery-1.11.3.min.js"></script>
    <script src="formatos/bootstrap/js/bootstrap.js"></script>
</body>
</html>
