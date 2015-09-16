<?php
$usuario = $_POST['usuario'];
$pass = $_POST['password'];
 
 $conexion =mysql_connect("localhost","sergy444") or die ("Problemas al conectar el servidor");
 mysql_select_db("c9", $conexion) or die ("Errorsito al seleccionar la base de datos");
 
mysql_query("INSERT INTO login VALUES('$usuario' , '$pass')");

echo"Usuario creado";
?>