<?php 
	include 'config.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Inicio - SpaceY
	</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">	
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Niconne" rel="stylesheet">
</head>
<body>
<!-- 	<h3 style="text-align: center;color: White">
	SpaceY	
	</h3> -->
<div class="contenedor2" d-flex justify-content-center align-items-center >
 <div class="text-center" style="width:200px">
	<!-- Main Form -->

		<h3 id="titulo1" >
		SpaceY	
		</h3>
	<div>
		<p id="ingus" >
			Ingrese Usuario
		</p>
	</div>
	<div class="login-form-1">
		<form id="formLogin" class="text-left">
			<div class="login-form-main-message"></div>
			<div class="main-login-form">
				<div class="login-group">
					<div class="form-group">
						<label for="lg_username" class="sr-only" >Usuario</label>
						<input autocomplete="off" type="text" class="form-control" id="nickname" name="lg_username" placeholder="Usuario">
						<p></p>
						<label for="lg_username" class="sr-only" >DNI</label>
						<input autocomplete="off" type="text" class="form-control" id="dni" name="lg_username" placeholder="DNI">
					</div>
				</div>
				<div class="text-center">
				<button id="bing" type="submit" class="btn btn-secondary" >
					Ingresa
				</button>
				</div>
				<p></p>
			</div>

		</form>
	</div>
 </div>
</div>
	<script type="text/javascript" src="js/vendor/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/vendor/bootstrap.min.js"></script>
	<script type="text/javascript">
		var urlBase = "<?php echo HOST_API; ?>";
		$("#formLogin").on("submit",function(evt){
			evt.preventDefault();
			var nickname = $("#nickname").val();
			var vdni = $("#dni").val();
			/*
			localStorage.setItem("jugador",nickname);
			window.open("JuegoSpaceY.html","_top");
			console.log("el valor es",nickname);
			*/

			var url = urlBase+"api/guardar-usuario";
			var data = {nombre:nickname,dni:vdni};
			const dni = localStorage.getItem('dni')
			if (!dni) {
				localStorage.setItem( 'dni', vdni )

			}else{
				
			}
			$.ajax({  
					url: url,
					type: 'POST',
					data : data,
					dataType: 'json',
					contentType:'application/x-www-form-urlencoded;charset=UTF-8',
					beforeSend: function() {
						console.log("enviado");

					},
					complete : function(){
						console.log("completo");

					},
					success : function(datos) {
						console.log("todo nos fue bien",datos);
						localStorage.setItem("jugador",nickname);
						window.open("JuegoSpaceY.php","_top");
					},
					error : function(ajax, estado, excepcion) {
						console.log("hay un erorro");
					}
				})
			/*
			var url = urlBase+"api/mi-nena";
			$.ajax({  
					url: url,
					type: 'GET',
					//data : data,
					dataType: 'html',
					contentType:'application/x-www-form-urlencoded;charset=UTF-8',
					beforeSend: function() {
						console.log("enviado");

					},
					complete : function(){
						console.log("completo");

					},
					success : function(datos) {
						console.log("todo nos fue bien",datos);
					},
					error : function(ajax, estado, excepcion) {
						console.log("hay un erorro");
					}
				})
				*/
		});
		
	</script>
</body>
</html>