<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Fundacion Cascajal Buenaventura</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/materialize.js"></script>
</head>

<body>
<section>
  <!--                                     Inicio jumbotron                                     -->
<div class="fullscreen" id="jumbo">
  <h1 id="jumbo1" class="text-center">Fundación Cascajal</h1>
  <h3 id="jumbo1" class="text-center">Buenaventura</h3>
</div>
<!--                                     Fin jumbotron                                     -->

<!--                                     Inicio carousel                                     -->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="img/img1.jpg" alt="banner1">
       <div class="text-uppercase carousel-caption">
          <a class="white-text" href="#"><h5>Reunión con los nuevos integrantes de la Fundacion Cascajal Buenaventura</h5></a>
      </div>
    </div>
    <div class="item">
      <img src="img/img2.jpg" alt="banner2">
      <div class="text-uppercase carousel-caption">
        <a class="white-text" href="#"><h5>Así finaliza la sesión del día.</h5></a>
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!--                                     Fin carousel                                     -->

<!--                     Imagenes en miniatura                     -->
  <section style="padding-top: 10px">
    <div class="container">
    <div class="row">

      <div class="col-xs-12 col-md-4">
        <div class="thumbnail">
          <img src="img/m1.png" class="img-circle" alt="Cinque Terre">
          <div id="imagenes" class="caption">
            <h5 class="text-center">Misión</h5>
            <p>
              Cascajal Foundation está comprometida a inspirar y empoderar el aprendizaje permanente para fortalecer nuestros lideres jovenes conectando los programas de servicios sociales y culturales de la academia.
            </p>
          </div>
        </div>
      </div>

      <div class="col-xs-12 col-md-4">
        <div class="thumbnail">
          <img src="img/m2.png" class="img-circle" alt="Cinque Terre">
          <div id="imagenes" class="caption">
            <h5 class="text-center">Estamos ...</h5>
            <p>
              Motivando a los estudiantes hispanos para que logren educación universitaria, promoviendo así su participación en el desarrollo y progreso del país.
            </p>
          </div>
        </div>
      </div>

      <div class="col-xs-12 col-md-4">
        <div class="thumbnail">
          <img src="img/m3.png" class="img-circle" alt="Cinque Terre">
          <div id="imagenes" class="caption">
            <h5 class="text-center">Nuestros Valores</h5>
            <p>
              Valoramos el liderazgo y la creatividad.
              Valoramos trabajar en equipo para apoyar la juventud durante su academia.
              Valoramos la participación comunitaria e institucional para fomentar el éxito
            </p>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
<!--                       Fin de imagenes en miniatura                       -->
</section>


</body>
</html>

