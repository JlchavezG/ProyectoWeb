<?php
  include 'includes/Conecta.php';
  if(isset($_POST['Enviar'])){
    $Nombre = $Conecta->real_escape_string($_POST['nombre']);
    $Email = $Conecta->real_escape_string($_POST['email']);
    $Telefono = $Conecta->real_escape_string($_POST['telefono']);
    $Mensaje = $Conecta->real_escape_string($_POST['mensaje']);
    // insertar los datos en la base de datos
    $insertar = "INSERT INTO Contacto(NombreC, Email, Telefono, Mensaje)VALUES('$Nombre','$Email','$Telefono','$Mensaje')";
    $insertado = $Conecta->query($insertar);
    if($insertado > 0){
      $mensaje.='<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Gracias por contactarnos</strong> Tu mensaje se envio correctaente.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                 </div>';
    }
    else{
      $mensaje.='<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error al Comentar</strong> Tu mensaje no se envio correctaente.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                 </div>';
    }

  }
 ?>