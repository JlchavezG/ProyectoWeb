<?php
session_start();
// validadr al usuario que pase por el login 
$usuario = $_SESSION['Usuario'];
if(!isset($usuario)){
    header("location:login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <title>Dashboard</title>
</head>
<body>
     <h1>Bienvenido:<?php echo $usuario; ?> </h1>
     <a href="includes/cerrar.php">Cerrar sesion</a>
<script src="js/bootstrap.min.js"></script>    
</body>
</html>