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
      $('.tooltipped').tooltip({delay: 50});
      $('.slider').slider({full_width: true});
      });
    </script>

</head>

<body background="img/img1.jpg">
<section>
  
<?php include './header.php';?>
<!--                                  Titulo                                  -->
  <div style="background-color: #fff80d; color: #008001; font-style: oblique; font-family: monospace;"><h3 class="center-align">Experiencias</h3></div>
<!--                                  /Titulo                                  -->
<div style="min-height: 100px;">div</div>
  
</div>
<section>
  <div class="section white">
    <h1 class="center-align">Estudiantes Becados</h1>
    <div class="col s12">
      <div class="col-xs-12 col-md-6">
        <ul class="collection with-header center-align">
          <li class="collection-header"><h4>Unipacífico</h4></li>
          <li class="collection-item tooltipped" data-position="right" data-delay="50" data-tooltip="Ingeniería de Sistemas">Carlos Felipe Diaz Lombana</li>
          <li class="collection-item tooltipped" data-position="right" data-delay="50" data-tooltip="Ingeniería de Sistemas"">Carol Estefani Segura Mosquera</li>
          <li class="collection-item tooltipped" data-position="right" data-delay="50" data-tooltip="Ingeniería de Sistemas"">Jenny Paola Ruíz Pulido</li>
          <li class="collection-item tooltipped" data-position="right" data-delay="50" data-tooltip="Sociología"">Claribel Rentería Cuero</li>
        </ul>
      </div>
      <div class="col-xs-12 col-md-6">
        <ul class="collection with-header center-align">
          <li class="collection-header"><h4>Univalle</h4></li>
          <li class="collection-item tooltipped" data-position="left" data-delay="50" data-tooltip="------ ?"">Kiara Julieth Lerma Torrez</li>
          <li class="collection-item tooltipped" data-position="left" data-delay="50" data-tooltip="------ ?"">María Alejandra Banguera Gomez</li>
          <li class="collection-item tooltipped" data-position="left" data-delay="50" data-tooltip="------ ?"">William Steven Fori Guapi</li>
          <li class="collection-item tooltipped" data-position="left" data-delay="50" data-tooltip="------ ?"">Olmer Mina</li>
        </ul>
      </div>
  </div>


      <div class="row">
        <div class="col s12">
          <div class="card">
            <div class="card-image">
              <img src="img/unidos.jpg">
              <span class="card-title center" <style type="text/css" media="screen">
                
              </style>Trabajmos unidos con un propósito</span>
            </div>

            <div class="slider">
              <ul class="slides">
                <li>
                  <img src="img/parallax1.jpg"> <!-- random image -->
                  <div class="caption center-align">
                    <h3>This is our big Tagline!</h3>
                    <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                  </div>
                </li>
                <li>
                  <img src="img/parallax1.jpg"> <!-- random image -->
                  <div class="caption center-align">
                    <h3>Left Aligned Caption</h3>
                    <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                  </div>
                </li>
                <li>
                  <img src="img/parallax1.jpg"> <!-- random image -->
                  <div class="caption center-align">
                    <h3>Right Aligned Caption</h3>
                    <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                  </div>
                </li>
                <li>
                  <img src="img/parallax1.jpg"> <!-- random image -->
                  <div class="caption center-align">
                    <h3>This is our big Tagline!</h3>
                    <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                  </div>
                </li>
              </ul>
            </div>



        </div>
      </div>





</section>
<?php include './footer.php';?>

</section>


</body>
</html>
