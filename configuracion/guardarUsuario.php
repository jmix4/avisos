<?php
		$testoInformativo = "";
        if($_POST["idUsuario"] <> "" AND $_POST["idPassword"] <> "" AND $_POST["email"] <> ""){           
            require_once '../clases/conexion/conexion.php';
            $email = $_POST["email"];
            $usuario = $_POST["idUsuario"];
            $password = $_POST["idPassword"];
            $telefono = $_POST["telefono"];
            $direccion = $_POST["direccion"];

            $_conexion = new conexion;
            //creamos la consulta SELECT
            $query= "SELECT * FROM usuariosAvisos where email='$email'";
            $datosRecibidos = $_conexion->obtenerDatos($query);
            
            $dimensionDatos = count($datosRecibidos);
            if ($dimensionDatos == 0){
                $ahora= date("Y-m-d");
                $querymodificar= "INSERT INTO `usuariosAvisos` (`usuario`, `email`, `fechaAlta`, `clave`, `telefono`, `direccion`) 
                VALUES ('$usuario', '$email', '$ahora', '$password', '$telefono', '$direccion')";
                $testoInformativo = "Por favor revise su email para terminar de activar la cuenta";

            }else{
                $querymodificar = "UPDATE usuariosAvisos 
                                   SET telefono = '$telefono',
                                   direccion = '$direccion',
                                   WHERE email = '$email' 
                                   AND   usuario = '$usuario'
                                   clave = '$password'";
                $testoInformativo = "Los datos se han modificado correctamente";                   
            }
            $actualizarUsuario = $_conexion->nonQuery($querymodificar);                        
         }else{
             echo "no puedo ingresar datos por falta de datos";
         }
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
                        echo "<p>$testoInformativo</p>";
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