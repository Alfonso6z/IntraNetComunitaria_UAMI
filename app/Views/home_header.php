<?php
$home          = base_url();
$fotos         = base_url()."/fotos";
$redsocial     = base_url()."//redsocial";
$documentos      = base_url()."/documentos";
$uamistream    = base_url()."/uamistream";
$videos        = base_url()."/videos";
$github        = "https://github.com/IntranetComunitariaUAMI";
$rE            = base_url()."/recursosEducativos";
$colaboradores = base_url()."/colaboradores";
include 'assets/colors.php';/* Paleta de colores */
$colorNav = $colorP2."D0";
?>
<!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8" name="viewport" content=" width = device-width, initial-scale=1,shrink-to-fit=no">
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="<?php echo base_url()?>/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>/assets/css/styles_home.css">
</head>

<body class=" m-2 imagenBack">


  <!-- Barra de Navegación -->
  <nav class="row navbar navbar-expand-lg navbar-dark  ml-0 mr-0 rounded-lg sticky-top position-sticky.alert"
    style="background:<?php echo $colorNav?>; left:500px; height: 10vh;">
    <!-- Logo para la ruta de home -->
    <a class="navbar-brand" href="<?php echo $home?>">
      <img class=" d-block" src="img/logo.png" alt="home logo.png" style="height:5vh;">
    </a>
    <!-- Icono de hamburgesa -->
    <button class="navbar-toggler mb-4" type="button" style="height: 7vh" data-toggle="collapse"
      data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
      aria-label="Toggle navigation">
      <span class="navbar-toggler-icon iconC " style="height: 4vh"></span>
    </button>
    <!-- nombre de rutas de la barra de navegación -->
    <div class="collapse navbar-collapse align-content-between" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto row justify-content-between">
        <li class="nav-item ml-2">
          <a class="nav-link linkpage text-white" href=<?php echo $fotos?>>Fotos<span
              class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link linkpage text-white ml-2" href=<?php echo $videos?>>Videos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link linkpage text-white ml-2" href=<?php echo $uamistream?>>UAMIStream<span
              class="badge badge-secondary" style="background: <?php echo $colors1?>">Nuevo</span></a>
        </li>
        <li class="nav-item ml-2">
          <a class="nav-link linkpage text-white" href=<?php echo $documentos?>>Documentos</a>
        </li>
        <li class="nav-item dropdown ml-2">
          <a class="nav-link linkpage text-white dropdown-toggle" href="#" id="navbarDropdown" role="button"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Aplicaciones
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item menu" href=<?php echo $redsocial?>>Red Social</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item menu" href="#">Apps</a>
          </div>
        </li>

        <li class="nav-item dropdown ml-2">
          <a class="nav-link linkpage text-white dropdown-toggle" href="#" id="navbarDropdown" role="button"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Más
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item menu" href=<?php echo $github?>>GitHub</a>
            <a class="dropdown-item menu" href=<?php echo $colaboradores?>>Colaboradores</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item menu" href="<?php echo $rE ?>">Recursos Educativos</a>
          </div>
        </li>
      </ul>
      <!-- Iconos de las redes sociales  -->
      <div class="row mr-3">
        <a class="iconS" href="https://www.facebook.com/intranet.comunitaria.uami">
          <i class="fab fa-facebook fa-lg hijo justify-content-end face iconC"></i>
        </a>
        <a class="iconS" href="https://twitter.com/IntranetU">
          <i class="fab fa-twitter-square fa-lg hijo tw iconC"></i>
        </a>
        <a class="iconS" href="https://www.instagram.com/instauam/?hl=es-la">
          <i class="fab fa-instagram fa-lg hijo insta iconC"></i>
        </a>
        <a class="iconS" href="https://www.youtube.com/channel/UCxZfHniUFV_Orgmeiy365eQ">
          <i class="fab fa-youtube fa-lg hijo you iconC"></i>
        </a>
      </div>
      <!-- Buscador -->
      <form class="form-inline my-2 my-lg-0">
        <div class="input-group md-form form-sm form-2 pl-0 btn-outline-light">
          <input class="form-control my-0 py-1 lime-border btn-outline-light text-black"
            style="background-color:#F0F4EF" type="text " placeholder="Buscar" aria-label="Search">
          <div class="input-group-append">
            <span class="input-group-text lime lighten-2" id="basic-text1"
              style="background-color:<?php echo $colorP?>"><i class="fas fa-search text-white"
                aria-hidden="true"></i></span>
          </div>
        </div>
      </form>
    </div>
  </nav>
  <script src="<?php echo base_url()?>/assets/js/jquery.min.js"></script>
  <script src="<?php echo base_url()?>/assets/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url()?>/assets/js/popper.min.js"></script>
  <script src="https://kit.fontawesome.com/28662fa33e.js" crossorigin="anonymous"></script>
</body>

</html>