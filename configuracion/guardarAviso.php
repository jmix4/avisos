 <?php 
    $email=$_GET["email"];
    $textoinformativo= "Aviso enviado correctamente";
    require_once '../clases/conexion/conexion.php';
    $ahora= date("Y-m-d");
    $_conexion = new conexion;
    $querymodificar= "INSERT INTO avisosUsuarios (email, fechaAviso) 
                VALUES ('$email','$ahora')";
     $actualizarUsuario = $_conexion->nonQuery($querymodificar); 
     mail("juanmi@ysede.com, ysede.com@gmail.com","AVISO DE ALARMA","Se ha generado una alarma, por favor revise la aplicacion"); 
 	$envia= 'info@ysede.com';
	$direccioncita = 'juanmi@ysede.com'; 
	$cabeceras = "From: $envia "; 
	mail($direccioncita,"Aviso de Alarma","e ha activado una alarma de un vecino",$cabeceras); 
?>

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
		<link rel="stylesheet" href="../assets/css/main.css" />
	</head>
	<body class="homepage is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<section id="header" class="wrapper">
					<div id="logo">
						<h1><a href="../index.html">Aviso-Vecinos</a></h1>
						<?php
                        echo "<p>$textoInformativo</p>";
                        echo "Generado el aviso y enviado"
                        ?>
					</div>
					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li class="current"><a href="../aviso.php">Inicio</a></li>								
								<li><a href="../verAvisos.html">Ver Alarmas</a></li>
								<li><a href="../configuracion.php">Configuración</a></li>								
							</ul>
						</nav>
				</section>	
		</div>

		<!-- Scripts -->
			<script src="../assets/js/jquery.min.js"></script>
			<script src="../assets/js/jquery.dropotron.min.js"></script>
			<script src="../assets/js/browser.min.js"></script>
			<script src="../assets/js/breakpoints.min.js"></script>
			<script src="../assets/js/util.js"></script>
			<script src="../assets/js/main.js"></script>

	</body>
</html>