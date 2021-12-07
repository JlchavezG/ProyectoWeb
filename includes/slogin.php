<?php
session_start();
error_reporting(0);
include 'includes/Conecta.php';
if(isset($_POST['ingresar'])){
$usuario = $Conecta->real_escape_string($_POST['usuario']);
$password =$Conecta->real_escape_string(md5($_POST['password']));
// consulta para extraer los datos de la bd 
$consulta = "SELECT * FROM Usuarios WHERE Usuario = '$usuario' and Password = '$password'";
if($resultado = $Conecta->query($consulta)){
    while($row = $resultado->fetch_array()){
        $userOk = $row['Usuario'];
        $passwordOk = $row['Password'];
        $id = $row['Id_usuarios'];
    }
    $resultado->close();
}
$Conecta->close();
if(isset($usuario) && isset($password)){
    if($usuario == $userOk  && $password == $passwordOk ){
        $_SESSION['login'] = TRUE;
        $_SESSION['Usuario'] = $usuario;
        header("location:dashboard.php");
    }
    else{
        $mensaje.='<div class="alert alert-danger alert-dismissible fade show" role="alert">
                      <strong>Error</strong> El usuario y/o contraseña no son validos.
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                   </div>';
    }
}
}
?>