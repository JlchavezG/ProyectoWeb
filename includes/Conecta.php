<?php
$Servidor = "localhost";
$Usuario = "root";
$Password = "";
$Bd = "Proyecto";
$Conecta = mysqli_connect($Servidor, $Usuario, $Password, $Bd);
if($Conecta->connect_error){
  die('Error al conectar la Base de Datos'.$Conecta->connect_error);
}
 ?>
