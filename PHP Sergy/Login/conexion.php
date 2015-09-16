<?php
// datos para la conexion a mysql
define('DB_SERVER','localhost');
define('DB_NAME','c9');
define('DB_USER','sergy444');
$con = mysql_connect(DB_SERVER,DB_USER);
mysql_select_db(DB_NAME,$con);
?>