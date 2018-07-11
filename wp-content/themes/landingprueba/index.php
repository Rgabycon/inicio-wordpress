<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <title>Landing Latam</title>
  </head>
  <body>

  <nav class="navbar fixed-top navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="#">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/latam_logo.png" height="40" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarNavDropdown">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="#Equipo">Equipo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#Blog">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#Contacto">Contacto</a>
        </li>
      </ul>
    </div>
  </nav>

<!-- Carousel -->
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <!-- Item 1 -->
      <div class="carousel-item active">
        <img class="w-100 d-block d-sm-none" src="<?php echo get_stylesheet_directory_uri(); ?>/images/carousel-small.png" alt="First slide">
        <img class="w-100 d-none d-sm-block d-md-none" src="<?php echo get_stylesheet_directory_uri(); ?>/images/carousel-medium.png" alt="First slide">
        <img class="w-100 d-none d-sm-none d-md-block" src="<?php echo get_stylesheet_directory_uri(); ?>/images/carousel-large.png" alt="First slide">
          <div class="carousel-caption mb-5">
            <h1>COMIENZA UNA NUEVA VIDA Y ÚNETE AL MUNDO TECNOLÓGICO</h1>
            <div class="my-4">
                <button type="button" class="btn btn-primary">Comienza acá!</button>
                <button type="button" class="btn btn-success">Más info</button>
            </div>
            <p>Hay una escasez gigante de desarrolladores en el mundo y más aún en Latinoamérica, se necesitan más desarrolladores y Tú puedes ser uno!</p>
          </div>
        </div>
      <!-- Item 2 -->
      <div class="carousel-item">
        <img class="w-100 d-block d-sm-none " src="<?php echo get_stylesheet_directory_uri(); ?>/images/carousel-small.png" alt="First slide">
        <img class="w-100 d-none d-sm-block d-md-none" src="<?php echo get_stylesheet_directory_uri(); ?>/images/carousel-medium.png" alt="First slide">
        <img class="w-100 d-none d-sm-none d-md-block" src="<?php echo get_stylesheet_directory_uri(); ?>/images/carousel-large.png" alt="First slide">
        <div class="carousel-caption mb-5">
            <h1>COMIENZA UNA NUEVA VIDA Y ÚNETE AL MUNDO TECNOLÓGICO</h1>
            <div class="my-4">
                <button type="button" class="btn btn-primary">Comienza acá!</button>
                <button type="button" class="btn btn-success">Más info</button>
            </div>
            <p>Hay una escasez gigante de desarrolladores en el mundo y más aún en Latinoamérica, se necesitan más desarrolladores y Tú puedes ser uno!</p>
        </div>
      </div>
      <!-- Item 3 -->
      <div class="carousel-item">
        <img class="w-100 d-block d-sm-none " src="<?php echo get_stylesheet_directory_uri(); ?>/images/carousel-small.png" alt="First slide">
        <img class="w-100 d-none d-sm-block d-md-none" src="<?php echo get_stylesheet_directory_uri(); ?>/images/carousel-medium.png" alt="First slide">
        <img class="w-100 d-none d-sm-none d-md-block" src="<?php echo get_stylesheet_directory_uri(); ?>/images/carousel-large.png" alt="First slide">
        <div class="carousel-caption mb-5">
            <h1>COMIENZA UNA NUEVA VIDA Y ÚNETE AL MUNDO TECNOLÓGICO</h1>
            <div class="my-4">
                <button type="button" class="btn btn-primary">Comienza acá!</button>
                <button type="button" class="btn btn-success">Más info</button>
            </div>
            <p>Hay una escasez gigante de desarrolladores en el mundo y más aún en Latinoamérica, se necesitan más desarrolladores y Tú puedes ser uno!</p>
        </div>
      </div>
    </div>
  </div>

  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Siguiente</span>
  </a>
<!-- /Carousel -->
<!-- Contenedor 1 -->
<div class="row" id="Equipo">
  <div class="col-lg-8 mx-auto text-center px-5 pt-5">
    <h4>EL BOOTCAMP DE PROGRAMACIÓN MÁS GRANDE DE LATINOAMÉRICA</h4>
    <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</P>
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/viewing-gallery-for-happy-people.png" width="400">
  </div>
</div>

<!-- Contenedor 2 -->
<div class="jumbotron" id="Blog">
  <div class="col-lg-8 mx-auto text-center">
    <h4>EL BOOTCAMP DE PROGRAMACIÓN MÁS GRANDE DE LATINOAMÉRICA</h4>
    <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</P>
     <div class="my-4">
         <button type="button" class="btn btn-primary">Inscribete!</button>
      </div>
      <p>Vive la experiencia Desafio Latam!</p>
  </div>
</div>

<!-- Contacto -->
<div class="row" id="Blog">
  <div class="col-md-8 mx-auto">
    <div class="row">
      <div class="col-md-5">
        <h5>Contacto</h5>
        <strong>Desafío Latam</strong>
        <p>Ezequias Allende 2361</p>
        <p><abbr title="P">P</abbr>+56 9 5117 7975</p>
        <a href="#">inscripciones@desafiolatam.com</a>
      </div>
      <div class="col-md-7">
        <h5>Suscribete</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        <input type="text" name="" placeholder="Ingresa tu email...">
        <button type="button" class="btn btn-light">Enviar</button>
      </div>
    </div>
  </div>
</div>

<!-- Footer -->
  <div class="container-fluid bg-dark py-3 mt-5">
    <div class="row">
      <div class="col-lg-9 mx-auto">
         <p class="text-white">DESAFIOLATAM 2018 - CURSO FRONTEND</p>
      </div>
    </div>
  </div>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://rawgit.com/degt/c180acd8fdf791e297b7b21544a4888f/raw/f318cdd5fff54679fcb7016ef31fb9d6ef469d74/spyscroll.js"></script>
  </body>
</html>