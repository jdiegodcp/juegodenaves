<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Niconne" rel="stylesheet">

	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title >
	Puntaje de Juego
	</title>
</head>
<body>
	<div class="table-responsive">
	  <table >
		  <p id="titulo3">Felicidades</p>
			<div class="text-center">
				<label id="lblNombre"></label>
			</div>
	  </table>
	</div>

	<div class="table-responsive">
	  <table class="table">
		  <p id="linea1">Tu Puntaje Obtenido es</p>
	  </table>
	</div>

	<div class="table-responsive">
	  <table class="table">
			<div class="text-center">
				<label id="lblTiempo"></label>
			</div>
	  </table>
	</div>

	<div align="center">
		<button class="btn btn-dark b-line" >
			<a id="linea2" href="scores_world" >
			Ver Puntaje en el Mundo</a>
		</button>
	</div >
	<script type="text/javascript" src="js/vendor/jquery-3.6.0.min.js"></script>
	<script type="text/javascript" src="js/vendor/bootstrap.min.js"></script>
	<script type="text/javascript">
		var jugador = localStorage.getItem("jugador");
		var tiempo = localStorage.getItem("tiempo");
		$("#lblNombre").html(jugador);
		$("#lblTiempo").html(tiempo);
		localStorage.removeItem("jugador");
		localStorage.removeItem("tiempo");
	</script>
</body>
</html>
