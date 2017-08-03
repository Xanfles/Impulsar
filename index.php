<!DOCTYPE html>
<html>

<head>
	<?php
	include('Datos/conexion.php');
	?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Impulsar</title>
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amita">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
	<link rel="stylesheet" href="assets/fonts/ionicons.min.css">
	<link rel="stylesheet" href="assets/css/Footer-Basic.css">
	<link rel="stylesheet" href="assets/css/Google-Style-Login.css">
	<link rel="stylesheet" href="assets/css/Table-with-search.css">
	<link rel="stylesheet" href="assets/css/Navigation-with-Button1.css">
	<link rel="stylesheet" href="assets/css/Navigation-with-Search1.css">
	<link rel="stylesheet" href="assets/css/Footer-Dark.css">
	<link rel="stylesheet" href="assets/css/Responsive-Form1.css">
	<link rel="stylesheet" href="assets/css/Search-Field-With-Icon.css">
	<link rel="stylesheet" href="assets/css/styles.css">
	<link rel="stylesheet" href="assets/css/Table-with-search1.css">
	<link rel="stylesheet" href="assets/css/Responsive-Form.css">
</head>

<body style="background-image:url(&quot;assets/img/Background.jpg&quot;);">
	<div>
		<nav class="navbar navbar-default navbar-fixed-top navigation-clean-search navbar.transparent.navbar-inverse .navbar-inner" style="border-width:0px;-webkit-box-shadow:0px 0px;box-shadow:0px 0px;background-color:rgba(0,0,0,0.15);background-image:-webkit-gradient(linear, 50.00% 0.00%, 50.00% 100.00%, color-stop( 0% , rgba(0,0,0,0.00)),color-stop( 100% , rgba(0,0,0,0.00)));background-image:-webkit-linear-gradient(270deg,rgba(0,0,0,0.00) 0%,rgba(0,0,0,0.00) 100%);background-image:linear-gradient(180deg,rgba(0,0,0,0.00) 0%,rgba(0,0,0,0.00) 100%);">
			<div class="container">
				<div class="navbar-header"><a class="navbar-brand navbar-link" href="#" style="color:#ffffff;">Cluster Impulsar</a>
					<button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="icon-bar"></span></button>
				</div>
				<div class="collapse navbar-collapse" id="navcol-1"><a class="btn btn-default navbar-btn navbar-right action-button" role="button" href="login.php">Ingresar</a></div>
			</div>
		</nav>
	</div>
	<div style="color:white;padding-top:100px;">
		<div class="container">
			<div class="row" style="margin-right:0px;margin-left:0px;">
				<div class="col-md-6" style="padding-right:0px;padding-left:0px;"><img class="img-responsive" src="assets/img/impulsar.jpg"></div>
				<div class="col-md-6" style="padding-left:0px;padding-right:0px;">
					<form action='../Impulsar/Control/TInscripcion.php' method='POST'>
						<div class="form-group">
							<div id="formdiv" style="margin-left:0px;margin-right:0px;padding-bottom:0px;">
								<div class="row" style="margin-right:0px;margin-left:0px;padding-top:19px;">
									<div class="col-md-12" style="padding-right:0px;">
										<p class="lead text-center" style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>Formulario de Inscripción</strong></p>
									</div>
									<div class="col-md-8 col-md-offset-1">
										<p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:20px;"><strong>Empresa </strong></p>
									</div>
									<div class="col-md-10 col-md-offset-1">
										<input class="form-control" type="text" id="emp" name="emp" required="" placeholder="Empresa" style="margin-left:0px;font-family:Roboto, sans-serif;">
									</div>
								</div>
								<div class="row" style="margin-right:0px;margin-left:0px;padding-top:24px;margin-top:-16px;">
									<div class="col-md-8 col-md-offset-1">
										<p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:20px;"><strong>Cargo </strong></p>
									</div>
									<div class="col-md-10 col-md-offset-1">
										<input class="form-control" type="text" id="car" name="car" required="" placeholder="Cargo" style="margin-left:0px;font-family:Roboto, sans-serif;">
									</div>
								</div>
								<div class="row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
									<div class="col-md-8 col-md-offset-1">
										<p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:20px;">Nombre </p>
									</div>
									<div class="col-md-10 col-md-offset-1">
										<input class="form-control" type="text" id="nombre" name="nombre" required="" placeholder="Nombre" style="margin-left:0px;font-family:Roboto, sans-serif;">
									</div>
								</div>
								<div class="row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
									<div class="col-md-8 col-md-offset-1">
										<p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:20px;">Apellidos </p>
									</div>
									<div class="col-md-10 col-md-offset-1">
										<input class="form-control" type="text" id="apellidos" name="apellidos" required="" placeholder="Apellidos" style="margin-left:0px;font-family:Roboto, sans-serif;">
									</div>
								</div>
								<div class="row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
									<div class="col-md-8 col-md-offset-1">
										<p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:20px;"><strong>T</strong>eléfono </p>
									</div>
									<div class="col-md-10 col-md-offset-1" style="font-family:Roboto, sans-serif;">
										<input class="form-control" type="text" id="telefono" name="tel" required="" placeholder="Teléfono" inputmode="tel" style="margin-left:0px;">
									</div>
								</div>
								<div class="row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
									<div class="col-md-8 col-md-offset-1">
										<p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:20px;"><strong>E</strong>mail </p>
									</div>
									<div class="col-md-10 col-md-offset-1">
										<input class="form-control" type="text" name="email" required="" placeholder="Email" inputmode="email" style="margin-left:0px;font-family:Roboto, sans-serif;">
									</div>
								</div>
								<div class="row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
									<div class="col-md-4 col-md-offset-4 col-xs-12 col-xs-offset-0">
										<button class="btn btn-primary action-button" type="submit" name="OK" value="Ingresar" style="font-size:20px;">Inscribirme </button>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-basic" style="margin-top:20px;padding-bottom:20px;padding-top:20px;">
		<footer>
			<div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
			<ul class="list-inline">
				<li><a href="#">Home</a></li>
				<li><a href="#">Services</a></li>
				<li><a href="#">About</a></li>
				<li><a href="#">Terms</a></li>
				<li><a href="#">Privacy Policy</a></li>
			</ul>
			<p class="copyright">Desarrollador por CITT Duoc-UC Viña del Mar © 2017</p>
		</footer>
	</div>
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/js/Table-with-search.js"></script>
</body>

</html>