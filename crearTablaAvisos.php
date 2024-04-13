<?php
//requerimos el archivo conexion
require_once 'clases/conexion/conexion.php';
//instanciamos la clase conexion
$_conexion = new conexion;
//creamos la consulta SELECT
//$query= "SELECT * FROM pacientes";
$query= "CREATE TABLE avisosUsuarios (
    idaviso BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,    
    idusuario BIGINT UNSIGNED,
    fechaAviso DATE,
    email VARCHAR(256)    
    
)";
//enviamos la consulta para ser ejecutada
$datosRecibidos = $_conexion->nonQuery($query);
//imprimimos el resultado
//print_r($datosRecibidos);
?> 