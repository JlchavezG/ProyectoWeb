<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <title>Navbar | Menu web</title>
  </head>
  <body>
    <!-- inicia navbar -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark" style="background-color:rgb(48,45,49)" id="Menu">
      <div class="container-fluid">
          <div class="d-flex flex-grow-1">
                <span class="w-100 d-lg-none d-block"></span>
                <a href="#" class="navbar-brand">Logotipo</a>
                <div class="w-100 text-right">
                    <button type="button" name="responsive" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#MyMenu">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
          </div>
          <div class="collapse navbar-collapse flex-grow-1 text-right" id="MyMenu">
            <ul class="navbar-nav ms-auto flex-nowrap">
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <svg class="bi" width="17" height="17" fill="currentColor">
                     <use xlink:href="library/icons/bootstrap-icons.svg#house-door"/>
                  </svg> Inicio</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <svg class="bi" width="17" height="17" fill="currentColor">
                     <use xlink:href="library/icons/bootstrap-icons.svg#award-fill"/>
                  </svg> ¿Quienes somos?</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link"><svg class="bi" width="17" height="17" fill="currentColor">
                   <use xlink:href="library/icons/bootstrap-icons.svg#briefcase-fill"/>
                </svg> Equipo</a>
              </li>
              <li class="nav-item dropdown">
                  <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Servicios</a>
                  <ul class="dropdown-menu menus" aria-labelledby="navbarDropdown">
                     <li>
                       <a href="#" class="dropdown-item">Soporte Tecnico</a>
                     </li>
                     <li>
                       <a href="#" class="dropdown-item">Diseño Web</a>
                     </li>
                     <li>
                       <a href="#" class="dropdown-item">Intalación de redes</a>
                     </li>
                  </ul>
              </li>
              <li class="nav-item">
                  <a href="#" class="nav-link">Documentos</a>
              </li>
              <li class="nav-item">
                  <a href="#" class="nav-link">Contacto</a>
              </li>
            </ul>
          </div>
      </div>
    </nav>
    <!-- termina nabvar -->
    <div class="container py-5">
      hola
    </div>
  <script src="js/bootstrap.min.js"></script>
  </body>
</html>
