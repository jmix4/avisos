<!DOCTYPE HTML>
<!--
	Escape Velocity by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Avisos-Vecinos</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="homepage is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<section id="header" class="wrapper">
                    <div id="logo">
						<h1><a href="index.html">Aviso-Vecinos</a></h1>
						<p>Alerta un incidente y avisa a tus contactos</p>
					</div>
					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li class="current"><a href="index.html">Inicio</a></li>								
								<li><a href="verAvisos.html">Ver Alarmas</a></li>
								<li><a href="configuracion.html">Configuración</a></li>								
							</ul>
						</nav>

				</section>			

			

			<!-- Highlights -->
				<section id="highlights" class="wrapper style3">
					<div class="title">Configuración de Usuario</div>
					<div class="container">						
							<div class="col-4 col-12-medium">
								<section class="wrapper style2">
									<form method="post" action="configuracion/guardarUsuario.php">
										<div class="row gtr-50">
											<div class="col-6 col-12-small">
												<input type="text" name="idUsuario" id="idUsuario" placeholder="Usuario" />
											</div>
											<div class="col-6 col-12-small">
												<input type="text" name="idPassword" id="idPassword" placeholder="Password" />
											</div>
											<div class="col-6 col-12-small">
												<input type="text" name="email" id="email" placeholder="Email" />
											</div>
                                            <div class="col-6 col-12-small">
												<input type="text" name="telefono" id="telefono" placeholder="Teléfono" />
											</div>
                                            <div class="col-6 col-12-small">
												<input type="text" name="direccion" id="direccion" placeholder="Dirección" />
											</div>
											
											<div class="col-12">
												<ul class="actions">
													<li><input type="submit" class="style1" value="Crear" /></li>
													<li><input type="reset" class="style2" value="Borrar" /></li>
												</ul>
											</div>
										</div>
									</form>
								</section>
							</div>							
						</div>
					</div>
				</section>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>