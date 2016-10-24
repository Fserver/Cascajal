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
          $('.collapsible').collapsible({
            accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
          });
        });
    </script>
</head>

<body>

<?php include './header.php';?>

<section>
  <div>
    <div>
        <img id="imglaborsocial" src="img/laborsocial.jpg" class="img-responsive" alt="Cinque Terre" style="width: 100%;height: 600px;">
    </div>
  </div>
</section>

<section class="container">
  <ul class="collapsible" data-collapsible="accordion">
    <li>
      <div class="collapsible-header active"><i class="material-icons">SOMOS CASCAJAL FOUNDATION...</i></div>
      <div class="collapsible-body"><p>
        una organización sin animo de lucro 501c(3) dedicada a la adquisición, financiación y promoción de oportunidades educativas para jóvenes hispanos desde secundaria hasta postgrado. Cascajal Foundation organiza una amplia variedad de actividades sociales para recaudar fondos con el objetivo de proporcionar apoyo financiero en forma becas para estudiantes hispanos de bajos ingresos. Desde 2009, Cascajal Foundation ha otorgado becas a estudiantes para cubrir los costos parciales de sus matrículas en diferentes universidades de los Estados Unidos
      </p></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">TRABAJAMOS CON LA COMUNIDAD... </i></div>
      <div class="collapsible-body">
      <pre>COMPROMETIDOS CON LA FORMACIÓN DE NUESTROS LÍDERES</pre>
      <p>
        En Cascajal Foundation, nuestro objetivo es motivar a los estudiantes hispanos para lograr una educación universitaria y promover su participación en el desarrollo y progreso del país. Cada año, Cascajal Foundation ofrece varias becas de hasta $ 1,000.00 USD a los estudiantes hispanos más destacados de las escuelas de Houston, Texas. También promovemos la educación de postgrado para estudiantes nacionales e internacionales deseosos de continuar su educación.</p>
      <p>
        Ofrecemos entrenamientos, tutorías, apoyo financiero y moral a los estudiantes jóvenes hispanos de escuelas secundarias para motivarlos a alcanzar la educación superior en varias universidades de los Estados Unidos.</p>
      <p>
        Cascajal Foundation ayuda a los estudiantes en el proceso de admisión a la universidad, aplicación de ayuda financiera, como tambien orientación profesional para escoger sus carreras universitarias. Nuestros servicios son gratuitos y disponibles para todos los estudiantes. Los estudiantes a quienes servimos les orientamos para que tengan una mejor perspectiva de sus carreras, amplien sus horizontes de aprendizaje, y sirvan como modelos a otros.        
      </p></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">HAGA UNA DONACIÓN AHORA Y APOYENOS EN ESTA CAUSA</i></div>
      <div class="collapsible-body"><p>
      Nos dedicamos a hacer la diferencia y ayudar a muchos estudiantes a alcanzar sus metas, con su ayuda, vamos a ser capaces de ofrecer más becas y beneficiar a más estudiantes. 

      Haga una donación hoy y ayudenos a ampliar y mejorar nuestro programa. 

      Cascajal Foundation cuenta con el apoyo de donantes generosos como USTED.
      </p>
      <!--                    Button                    -->
        <section>
          <button type="button" class="btn btn-default btn-sm">
            <span class="glyphicon glyphicon-thumbs-up center-align"></span> Haga su donación »
          </button>
        </section>
      <!--                  ./Button                    -->
      </div>
    </li>
  </ul>
</section>

<section>
  <div>
    <div>
        <img id="imglaborsocial" src="img/buenaventura.jpg" class="img-responsive" alt="Cinque Terre" style="width: 100%;height: 600px;">
    </div>
  </div>
</section>

<?php include './footer.php';?>

 </body>
</html>
