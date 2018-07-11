
<?php get_header();?>
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
<?php get_footer();?>
