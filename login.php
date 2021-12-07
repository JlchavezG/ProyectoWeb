<?php include 'includes/slogin.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <title>Login</title>
</head>
<body>
<div class="row justify-content-center py-5 text-center">
      <div class="card shadow">
          <div class="row mt-3">
             <div class="col-sm-6 col-md-6 col-lg-6">
                <img src="img/Logo1.png" alt="logo" width:150px;>
             </div>
            <div class="col-sm-6 col-md-6 col-lg-6">
                 <span> Por favor ingresa tu usuario y password</span>
                 <div class="container">
                     <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="Post" autocomplate="off">
                       <div class="py-2">
                       <input type="text" class="form-control py-2" name="usuario" placeholder="Usuario" required>
                       </div>
                       <div class="py-2">
                       <input type="password" class="form-control py-2" name="password" placeholder="Password" required>
                       </div>
                       <div class="py-2">
                           <input type="submit" name="ingresar" value="Ingresar" class="btn btn-success btn-sm">
                       </div>
                    </form>
                 </div>
            </div>
            <?php  echo $mensaje; ?>
    </div>
</div>
</div>   
<script src="js/bootstrap.min.js"></script>    
</body>
</html>