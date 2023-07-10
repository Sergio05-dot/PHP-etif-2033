<?php

$conexion = new mysqli('localhost', 'root', '', 'ejercicio_consola');
if ($conexion->connect_errno){
	die('Lo siento hubo un problema con el servidor');
} else {
	$sql = "ALTER TABLE usuarios DROP edad;";
	$conexion->query($sql);
	
}