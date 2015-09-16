<?php
    $usuario = $_POST['usuario'];
    $pass = $_POST['password'];
     
     $conexion =mysql_connect("localhost","sergy444") or die ("Problemas al conectar el servidor");
     mysql_select_db("c9", $conexion) or die ("Errorsito al seleccionar la base de datos");
     
    $sql = "SELECT * FROM login" ;
    $resul = mysql_query($sql);
    
    
    while ($row = mysql_fetch_assoc($resul)) {
     if ($row[usuario] == $usuario) {
       $contrasena = $row[pass];
       //$tipo = $row[erab_mota];
     };
};

if (isset($contrasena)) {
 if ($pass == $contrasena) {
  session_start();
  $_SESSION["usuario"]=$usuario;
  //session_start();
  //$_SESSION["tipo"]=$tipo;
  header("location:index.php");
  
 } 
};

mysql_close($conexion);
echo $usuario+' Ha logrado entrar';
?>