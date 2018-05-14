<?php

$nombre=$_POST['nombre'];
$plataforma=$_POST['plataforma'];
$genero=$_POST['genero'];

	$conexion=mysqli_connect("localhost","phpmyadmin","1234cont","db-juegos");
	$insertar="insert into juegos (nombre,plataforma,genero) values ($nombre,$plataforma,$genero)";

	mysqli_query($conexion,$insertar);
?>