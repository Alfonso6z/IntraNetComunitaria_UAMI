<?php include 'assets/colors.php';

$colorEncabezado =$colorP2."F0";

?>
<!DOCTYPE html>
<html lang="es">
<head>
      <meta charset="utf-8" name="viewport" content=" width = device-width, initial-scale=1,shrink-to-fit=no">
      <link rel="stylesheet" href="<?php echo base_url()?>/assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="<?php echo base_url()?>/assets/css/styles_home.css">
      <title>IntraNet</title>
</head>
<body>
<div class="container container-fluid" style="height: 3vh;"></div>
<div class="rounded bordes" style="color: white; background:<?php echo $colorEncabezado?>">
  <div class="row container-fluid justify-content-center rounded m-0 mt-2 mb-2" style="background:transparent">
    <img class=" mt-2 m-0 ml-2"src="img/fotos/FotoGrupo.png" alt="foto grupo" style="height: 16vh">
    <img class=" mt-2 m-0 ml-2"src="https://upload.wikimedia.org/wikipedia/commons/7/7c/UAMI_CBI_NITE.JPG" alt="foto grupo" style="height: 16vh">
      <div class="row ml-3">
        <img class="d-block mt-2" src="img/logo.png" alt="" style="height: 5rem;">
        <img class="d-block mt-4" src="img/letrasIntra.png" alt="" style="height: 3rem">
      </div>
      <div class="row ml-5">
        <div class="col">
          <img class="d-block ml-3 mt-4" src="img/UAM.png" alt="uam" style="height: 9vh">
          <h6>Casa abierta al tiempo</h6>   
        </div>  
        <h6 class="mt-4 ml-2">Universida Autonoma Metropolitana Iztapalapa<br>Departamento de Ingeniería Eléctrica
        <br>Área de redes y Telecomunicaciones
        </h6>
      </div>
    </div>
</div> 
<div class="container container-fluid" style="height: 3vh;"></div>
      <div class="row row-cols-2 ml-0 mb-2">
        <div class="textIntro container rounded border" style="background: #373A3BD8;"  >
          <div class="container border rounded mt-3" style="background: <?php echo $colorP2?>D8">
            <p class="h3 blockquote text-center">¿Que es una Intranet Comunitaria UAM-I?</p>
          </div>
          <p class="text-justify lead textIntro font-italic font-weight-normal">
          La Intranet Comunitaria UAMI, es una idea que surge a partir de las necesidades que se tienen de conectividad no solo en la universidad y sus alrededores, sino en todo México; en este caso, la falta de conexión adecuada en zonas marginadas y comunidades indígenas provoca que existan muchas personas que no cuentan con el recurso de Internet por falta de conexión y que hay falta de interés o pocos recursos por parte de las autoridades y empresas para conectar estas zonas. 
            <div class="container">
                <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#demo">Leer mas</button>
                <div id="demo" class="collapse">
                Basado en esta temática se propone la idea de la IntraNet como unas solución para mitigar estas necesidades. Su principal objetivo es llevar contenido digital para la comunidad UAM y a los alumnos que se encuentran viviendo alrededor de la unidad universitaria, ya que muchos ellos no cuentan con los recursos suficientes para tener acceso a Internet, proporcionando también otras formas de conexión desahogando el ancho de banda que existe de forma limitada.
                <ul>
                  <li type="disc">Red inalámbrica de contenido libre</li>
                  <li type="disc">Apoya a las comunidades o regiones sin acceso a Internet</li>
                  <li type="disc">Permite el acceso a la información y servicios similares a los de Internet de manera gratuita</li>
                </ul>
                  Al gunas de las motivaciones de este proyecto son las siguientes:
                <ul>
                  <li>Compartir contenido en zonas donde no hay Internet</li>
                  <li>Creación de aplicaciones propias, así como de hardware y software libre</li>
                  <li>Hacer investigación</li>
                  <li>Capacitación de Recursos Humanos</li>                  
                </ul>
                </div>
            </div>
          </p>
        </div>
        <div class="container rounded m-0">
          <div class="embed-responsive embed-responsive-16by9 rounded">
          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zdikOS9Er7s" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>  
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>




  </body>
</html>
  