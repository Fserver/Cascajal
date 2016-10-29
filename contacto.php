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

<body background="img/background.jpg">

<?php include './header.php';?>

<section style="margin-top: 30px; margin-bottom: 33px;">
  <div class="container">
    <h3 class="text-center">Contacto</h3>
    <div class="row test">
      <div class="col-md-4">
        <p>Dudas? Consulte aquí.</p>
        <p><span class="glyphicon glyphicon-map-marker"></span>Buenaventura, CO</p>
  <!--       <p><span class="glyphicon glyphicon-phone"></span>Phone: +00 1515151515</p>
   -->      <p><span class="glyphicon glyphicon-envelope"></span>Email: info@cascajal.org</p> 
      </div>
      <div class="col-md-8">
        <div class="row">
          <div class="col-sm-6 form-group">
            <input class="form-control" id="name" name="name" placeholder="Nombre" type="text" required>
          </div>
          <div class="col-sm-6 form-group">
            <input class="form-control" id="email" name="email" placeholder="Correo" type="email" required>
          </div>
        </div>
        <textarea class="form-control" id="comments" name="comments" placeholder="Comentario" rows="5"></textarea>
        <div class="row">
          <div class="col-md-12 form-group">
            <button class="btn pull-right" type="submit">Send</button>
          </div>
        </div> 
      </div>
    </div>
  </div>
</section>

<?php include './footer.php';?>

 </body>
</html>
