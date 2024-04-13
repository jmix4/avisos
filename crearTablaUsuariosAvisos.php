<?php
//requerimos el archivo conexion
require_once 'clases/conexion/conexion.php';
//instanciamos la clase conexion
$_conexion = new conexion;
//creamos la consulta SELECT
//$query= "SELECT * FROM pacientes";
$query= "CREATE TABLE usuariosAvisos (
    idusuario BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,    
    usuario VARCHAR(150),
    email VARCHAR(200),
    fechaAlta DATE,
    clave VARCHAR(200),
    telefono VARCHAR(200),
    direccion VARCHAR(200)
    
)";
//enviamos la consulta para ser ejecutada
$datosRecibidos = $_conexion->nonQuery($query);
//imprimimos el resultado
//print_r($datosRecibidos);
?> 