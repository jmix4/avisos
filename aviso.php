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
	<?php
		if($_POST["idPassword"] <> "" AND $_POST["email"] <> ""){           
            require_once 'clases/conexion/conexion.php';
            $email = $_POST["email"];
            $password = $_POST["idPassword"];
           
            $_conexion = new conexion;
            //creamos la consulta SELECT
            $query= "SELECT * FROM usuariosAvisos WHERE email='$email' AND clave='$password'";
            $datosRecibidos = $_conexion->obtenerDatos($query);
            
            $dimensionDatos = count($datosRecibidos);
            if ($dimensionDatos == 0){
              header("location: index.html");

            }else{
                              
            }
                                  
         }else{
            header("location: index.html");
         }
	?>

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
								<li class="current"><a href="aviso.php">Inicio</a></li>								
								<li><a href="verAvisos.html">Ver Alarmas</a></li>
								<li><a href="right-sidebar.html">Configuración</a></li>								
							</ul>
						</nav>

				</section>			

			<!-- Main -->
				<section id="main" class="wrapper style2">
					<div class="title">Avisos</div>
					<div class="container">
					<!-- Features -->
						<section id="features">							
							<ul class="actions special">
							<?php 
							echo $email;
							?>
								<li><a href="configuracion/guardarAviso.php?email=<?php echo $email ?>"
								 class="button style1 large">CREAR ALARMA!!!!				
								</a></li>
								<li><a href="verAvisos.php" class="button style2 large">VER AVISOS</a></li>
							
							</ul>
						</section>
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