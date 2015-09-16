<html>
    <head>
        <title>Hello World</title>
    </head>
    <body>
        
    </body>
    <form action="Login.php" method="post">
    Usuario: <input type="text" name="usuario"><br>
    Password: <input type="password" name="password"><br>
  
    <input type="submit" value="crear"> 

  </form>
 <?php
session_start();
include_once "conexion.php";
?>
</body>
</html>