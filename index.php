<?php
  include 'includes/Conecta.php';
 ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <title>Navbar | Menu web</title>
  </head>
  <body>
    <!-- inicia navbar -->
    <?php include 'includes/nabvar.php'; ?>
    <!-- termina navbar -->
    <!-- inicia el slider -->
    <div id="Slider" class="carousel slide" data-bs-ride="carousel">
       <div class="carousel-indicators">
          <button type="button" data-bs-target="#Slider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#Slider" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#Slider" data-bs-slide-to="2" aria-label="Slide 3"></button>
       </div>
       <div class="carousel-inner">
           <div class="carousel-item active">
              <img src="img/banner4.png" class="d-block w-100" alt="Slider1">
              <div class="carousel-caption d-none d-md-block">
                 <h5>Primera Imagen</h5>
                 <p>Some representative placeholder content for the first slide.</p>
              </div>
           </div>
           <div class="carousel-item">
             <img src="img/banner2.png" class="d-block w-100" alt="Slider2">
             <div class="carousel-caption d-none d-md-block">
               <h5>Segunda imagen</h5>
               <p>Some representative placeholder content for the second slide.</p>
             </div>
           </div>
           <div class="carousel-item">
              <img src="img/banner3.png" class="d-block w-100" alt="Slider3">
             <div class="carousel-caption d-none d-md-block">
                <h5>Tercera Imagen</h5>
                <p>Some representative placeholder content for the third slide.</p>
             </div>
           </div>
       </div>
       <button class="carousel-control-prev" type="button" data-bs-target="#Slider" data-bs-slide="prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="visually-hidden">Previous</span>
       </button>
       <button class="carousel-control-next" type="button" data-bs-target="#Slider" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
       </button>
</div>
<!-- termina el slider -->
<!-- inicia tarjetas de servicios -->
<section id="Servicios">
<div class="container">
   <div class="row py-4 text-center">
        <div class="col-sm-12 col-md-4 col-lg-4">
           <div class="card shadow">
              <img src="img/Card4.png" alt="Servicio1" class="card-img-top">
              <div class="card-body">
                 <h5 class="card-title">Servicio 1</h5>
                 <a href="#" class="btn btn-sm btn-primary">Más Información</a>
              </div>
           </div>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4">
          <div class="card shadow">
             <img src="img/Card2.png" alt="Servicio1" class="card-img-top">
             <div class="card-body">
                <h5 class="card-title">Servicio 2</h5>
                <a href="#" class="btn btn-sm btn-primary">Más Información</a>
             </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4">
          <div class="card shadow">
             <img src="img/Card3.png" alt="Servicio1" class="card-img-top">
             <div class="card-body">
                <h5 class="card-title">Servicio 3</h5>
                <a href="#" class="btn btn-sm btn-primary">Más Información</a>
             </div>
          </div>
        </div>
   </div>
</div>
</section>
<!-- terminan tarjetas de servicio -->
<!-- inicia seción somos -->
<section id="Somos">
    <div class="container">
         <div class="row">
              <div class="col-sm-10 col-md-6 col-lg-6">
                 <h2 class="diplay-6">Somos</h2>
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              </div>
              <div class="col-sm-10 col-md-6 col-lg-6">
                <!-- inicia carrusel somos -->
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                   <div class="carousel-inner">
                       <div class="carousel-item active">
                            <img src="img/banner1.png" class="d-block w-100" alt="...">
                       </div>
                       <div class="carousel-item">
                          <img src="img/banner2.png" class="d-block w-100" alt="...">
                       </div>
                       <div class="carousel-item">
                          <img src="img/banner3.png" class="d-block w-100" alt="...">
                       </div>
                   </div>
                   <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                   </button>
                   <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                   </button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- termina somos -->
  <script src="js/bootstrap.min.js"></script>
  </body>
</html>
