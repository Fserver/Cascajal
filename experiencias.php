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
    <script type="text/javascript">
      $(document).ready(function(){
        $('.carousel').carousel();
        $('.tooltipped').tooltip({delay: 50});

    });

</script>

</head>

<body>
<?php include './header.php';?>

<section>
  <div class="col s12" style="border-bottom: 45px solid #008001"><h1 class="center-align flow-text">Cascajal Foundation</h1></div>
	
  <div class="row">
  <div class="col s12">
    <div class="col s12">
      <div class="col-xs-12 col-md-4 center-align">
      	<div>
          <img src="img/escudo_unipacifico.png">
        </div>
          <div class="carousel">
            <a class="carousel-item" href="#one!"><img src="http://lorempixel.com/250/250/nature/1"></a>
            <a class="carousel-item" href="#two!"><img src="http://lorempixel.com/250/250/nature/2"></a>
            <a class="carousel-item" href="#three!"><img src="http://lorempixel.com/250/250/nature/3"></a>
            <a class="carousel-item" href="#four!"><img src="http://lorempixel.com/250/250/nature/4"></a>
            <a class="carousel-item" href="#five!"><img src="http://lorempixel.com/250/250/nature/5"></a>
          </div>
      </div>

      <div class="col-xs-12 col-md-4">
        <div>
          <h5 class="center-align" style=" margin-top: 50%;">Hazañas</h5>
        </div>
      </div>

      <div class="col-xs-12 col-md-4 center-align">
      	<div>
          <img src="img/escudo_univalle.PNG">
        </div>
          <div class="carousel">
            <a class="carousel-item" href="#one!"><img src="http://lorempixel.com/250/250/nature/1"></a>
            <a class="carousel-item" href="#two!"><img src="http://lorempixel.com/250/250/nature/2"></a>
            <a class="carousel-item" href="#three!"><img src="http://lorempixel.com/250/250/nature/3"></a>
            <a class="carousel-item" href="#four!"><img src="http://lorempixel.com/250/250/nature/4"></a>
            <a class="carousel-item" href="#five!"><img src="http://lorempixel.com/250/250/nature/5"></a>
          </div>
      </div>
  </div>
      <div class="col-xs-12 col-md-6">
        <ul class="collection with-header center-align">
          <li class="collection-header"><h4>Unipacífico</h4></li>
          <li class="collection-item tooltipped" data-position="right" data-delay="50" data-tooltip="Ingeniería de Sistemas">Carlos Felipe Diaz Lombana</li>
          <li class="collection-item tooltipped" data-position="right" data-delay="50" data-tooltip="Ingeniería de Sistemas"">Carol Estefani Segura Mosquera</li>
          <li class="collection-item tooltipped" data-position="right" data-delay="50" data-tooltip="Ingeniería de Sistemas"">Jenny Paola Ruíz Pulido</li>
          <li class="collection-item tooltipped" data-position="right" data-delay="50" data-tooltip="Sociología"">Alvin</li>
        </ul>
      </div>
      <div class="col-xs-12 col-md-6">
        <ul class="collection with-header center-align">
          <li class="collection-header"><h4>Univalle</h4></li>
          <li class="collection-item tooltipped" data-position="left" data-delay="50" data-tooltip="------ ?"">Kiara Yulieth Torrez</li>
          <li class="collection-item">Alvin</li>
          <li class="collection-item">Alvin</li>
          <li class="collection-item">Alvin</li>
        </ul>
      </div>
  </div>
  </div>
</section>


  <a class="btn tooltipped" data-position="top" data-delay="50" data-tooltip="I am tooltip">Hover me!</a>



</body>
</html>
