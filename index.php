<?php include 'includes/coment.php'; ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <title>Pagina Principal | Proyecto web UHAB</title>
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
        <div class="col-sm-12 col-md-4 col-lg-4 py-3">
           <div class="card shadow">
              <img src="img/Card4.png" alt="Servicio1" class="card-img-top">
              <div class="card-body">
                 <h5 class="card-title">Servicio 1</h5>
                 <a href="#" class="btn btn-sm btn-primary">M??s Informaci??n</a>
              </div>
           </div>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4 py-3">
          <div class="card shadow">
             <img src="img/Card2.png" alt="Servicio1" class="card-img-top">
             <div class="card-body">
                <h5 class="card-title">Servicio 2</h5>
                <a href="#" class="btn btn-sm btn-primary">M??s Informaci??n</a>
             </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4 py-3">
          <div class="card shadow">
             <img src="img/Card2.png" alt="Servicio1" class="card-img-top">
             <div class="card-body">
                <h5 class="card-title">Servicio 3</h5>
                <a href="#" class="btn btn-sm btn-primary">M??s Informaci??n</a>
             </div>
          </div>
        </div>
   </div>
</div>
</section>
<!-- terminan tarjetas de servicio -->
<!-- inicia seci??n somos -->
<section id="Somos">
    <div class="container mt-4">
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
<!-- equipo-->
<section id="Equipo">
     <div class="container">
       <div class="row py-4 mt-5">
            <h2 class="text-center display-6 mt-3">Equipo de trabajo</h2>
             <div class="col">
                <div class="card shadow mt-3">
                     <div class="container mt-4">
                        <img src="img/user_Mujer.png" alt="Imagen de perfil" style="width:200px;">
                     </div>
                     <h4 class="text-center text-primary mt-2">Samantha</h4>
                     <div class="row mt-2">
                          <div class="container text-center">
                              <span class="">Ing. Sistemas</span>
                          </div>
                     </div>
                     <div class="row mt-2">
                          <div class="container text-center py-3">
                            <a href="#"><svg class="bi" width="17" height="17" fill="currentColor">
                               <use xlink:href="library/icons/bootstrap-icons.svg#facebook"/></a>
                            </svg>
                            <a href="#"><svg class="bi" width="17" height="17" fill="currentColor">
                               <use xlink:href="library/icons/bootstrap-icons.svg#twitter"/>
                            </svg></a>
                            <a href="#"><svg class="bi" width="17" height="17" fill="currentColor">
                               <use xlink:href="library/icons/bootstrap-icons.svg#instagram"/>
                            </svg></a>
                          </div>
                     </div>
                </div>
             </div>
             <div class="col">
               <div class="card shadow mt-3">
                 <div class="container mt-4">
                    <img src="img/user_Mujer.png" alt="Imagen de perfil" style="width:200px;">
                 </div>
                 <h4 class="text-center text-primary mt-2">Samantha</h4>
                 <div class="row mt-2">
                      <div class="container text-center">
                          <span class="">Ing. Sistemas</span>
                      </div>
                 </div>
                 <div class="row mt-2">
                      <div class="container text-center py-3">
                        <a href="#"><svg class="bi" width="17" height="17" fill="currentColor">
                           <use xlink:href="library/icons/bootstrap-icons.svg#facebook"/></a>
                        </svg>
                        <a href="#"><svg class="bi" width="17" height="17" fill="currentColor">
                           <use xlink:href="library/icons/bootstrap-icons.svg#twitter"/>
                        </svg></a>
                        <a href="#"><svg class="bi" width="17" height="17" fill="currentColor">
                           <use xlink:href="library/icons/bootstrap-icons.svg#instagram"/>
                        </svg></a>
                      </div>
                 </div>
               </div>
             </div>
             <div class="col">
               <div class="card shadow mt-3">
                 <div class="container mt-4">
                    <img src="img/user_Mujer.png" alt="Imagen de perfil" style="width:200px;">
                 </div>
                 <h4 class="text-center text-primary mt-2">Samantha</h4>
                 <div class="row mt-2">
                      <div class="container text-center">
                          <span class="">Ing. Sistemas</span>
                      </div>
                 </div>
                 <div class="row mt-2">
                      <div class="container text-center py-3">
                        <a href="#"><svg class="bi" width="17" height="17" fill="currentColor">
                           <use xlink:href="library/icons/bootstrap-icons.svg#facebook"/></a>
                        </svg>
                        <a href="#"><svg class="bi" width="17" height="17" fill="currentColor">
                           <use xlink:href="library/icons/bootstrap-icons.svg#twitter"/>
                        </svg></a>
                        <a href="#"><svg class="bi" width="17" height="17" fill="currentColor">
                           <use xlink:href="library/icons/bootstrap-icons.svg#instagram"/>
                        </svg></a>
                      </div>
                 </div>
               </div>
             </div>
             <div class="col">
               <div class="card shadow mt-3">
                 <div class="container mt-4">
                    <img src="img/user_Mujer.png" alt="Imagen de perfil" style="width:200px;">
                 </div>
                 <h4 class="text-center text-primary mt-2">Samantha</h4>
                 <div class="row mt-2">
                      <div class="container text-center">
                          <span class="">Ing. Sistemas</span>
                      </div>
                 </div>
                 <div class="row mt-2">
                      <div class="container text-center py-3">
                        <a href="#"><svg class="bi" width="17" height="17" fill="currentColor">
                           <use xlink:href="library/icons/bootstrap-icons.svg#facebook"/></a>
                        </svg>
                        <a href="#"><svg class="bi" width="17" height="17" fill="currentColor">
                           <use xlink:href="library/icons/bootstrap-icons.svg#twitter"/>
                        </svg></a>
                        <a href="#"><svg class="bi" width="17" height="17" fill="currentColor">
                           <use xlink:href="library/icons/bootstrap-icons.svg#instagram"/>
                        </svg></a>
                      </div>
                 </div>
               </div>
             </div>
       </div>
     </div>
</section>
<!-- termina el team-->
<!-- acordeon de servicios -->
<section id="masservicios">
    <div class="container text-center">
        <h2 class="display-6"> + Servicios</h2>
    </div>
        <div class="container">
          <div class="row py-3">
             <!-- inicia mi acordeon -->
             <div class="accordion accordion-flush" id="accordionServicios">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                         <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                              Soporte Tecnico
                         </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                       <div class="accordion-body"> texto de servicio de soporte tecnico.
                         <div class="row mt-2">
                            <div class="col-sm-12 col-md-6 col-lg-6">
                               <img src="img/Card4.png" alt="" class="img-fluid">
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6">
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                         </div>
                       </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwo">
                       <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                          Dise??o de p??ginas web
                       </button>
                    </h2>
                      <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body"> Texto para servico web.</div>
                      </div>
                </div>
                <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingThree">
                         <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            Posicionamiento SEO
                         </button>
                       </h2>
                       <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                       </div>
                 </div>
              </div>
             <!-- termina mi acoedeon -->
        </div>
    </div>
</section>
<section id="Contacto">
    <div class="row mt-5">
       <div class="col-sm-12 col-md-7 col-lg-7 py-2 bg-dark">
           <h2 class="text-center display-6 text-light">Formulario de contacto</h2>
           <div class="container justify-content-md-center py-2">
             <form class="" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <div class="row py-2">
                   <div class="col">
                      <input type="text" name="nombre" placeholder="Nombre" required class="form-control">
                   </div>
                </div>
                <div class="row py-2">
                   <div class="col">
                      <input type="email" name="email" placeholder="Correo Electronico" required class="form-control">
                   </div>
                </div>
                <div class="row py-2">
                   <div class="col">
                      <input type="tel" name="telefono" placeholder="Telefono" required class="form-control">
                   </div>
                </div>
                <div class="row py-2">
                   <div class="col">
                     <textarea name="mensaje" placeholder="Tu mensaje" class="form-control"></textarea>
                   </div>
                </div>
                <div class="row py-2">
                   <div class="col">
                     <input type="submit" name="Enviar" value="Enviar" class="btn btn-sm btn-primary">
                   </div>
                   <?php echo $mensaje; ?>
                </div>
             </form>
           </div>
       </div>
       <div class="col-sm-12 col-md-5 col-lg-5">
           <div id="map"></div>
       </div>
    </div>
</section>
<style>
#map{
  margin: auto;
  margin-right: 0px;
  padding: 40px;
  height: 450px;
  width: 100%;
}
</style>
<script>
var map;
var cord = {lat: 19.3290293, lng: -99.1272892} ;
 function initMap() {
   map = new google.maps.Map(document.getElementById('map'), {
     center: {lat: 19.3290293, lng: -99.1272892},
     zoom: 14
   });
var marker = new google.maps.Marker({
   position:cord,
   map:map,
   title: 'Universidad'
});
}
</script>
  <script src="js/bootstrap.min.js"></script>
  <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCYMPGtM7VUn1aq61tkGbu99qD95c-w5zc&callback=initMap"></script>
  </body>
</html>
