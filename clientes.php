<!DOCTYPE html>
<html lang="es-AR">
<head>
	<title>Las heras</title>
	<meta charset="utf-8">
    <link rel="stylesheet" href="css/styles-menu.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/styles.css" type="text/css" media="all">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="description" content="Contamos con equipos viales, rodados, herramientas y un grupo de profesionales
		y técnicos que garantizan un excelente servicio. Nuestro personal está en capacitación permanente,
		desde lo técnico, administrativo y de planta, con el fin de dar respuestas eficientes a la problemática
		industrial de la construcción.">
	<meta name="keywords" content="obras, civiles, infrastructura, superficies, deportivas, industriales, metalicas, suelos, edificios, espacios, verdes, nivelacion, terreno, locales">
		<link rel="icon" type="image/png" href="img/favicon.png">
    <script src="/assets/js/navbar.js"></script>
</head>

<body>
	<section class="hero-section" id="hero-form-id">
		<div class="hero-div">
			<div class="header-white-wrap pricing-wrap">
				<?php include("includes/header.php"); ?>
			</div>
        </div>
          
        <div class="hero-clientes">
        	<div class="hero-title">
               <p>Clientes</p>
             </div>
        </div>
	</section>

	<section class="clientes">
		<div class="clientes-grid">
            <div class="clientes-img">
                <img src="img/clientes/1.png" alt="">
            </div>
            <div class="clientes-img">
            <img src="img/clientes/2.png" alt="">
            </div>
            <div class="clientes-img">
            <img src="img/clientes/3.png" alt="">
            </div>
            <div class="clientes-img">
            <img src="img/clientes/4.png" alt="">
            </div>
            <div class="clientes-img">
            <img src="img/clientes/5.png" alt="">
            </div>
            <div class="clientes-img">
            <img src="img/clientes/6.png" alt="">
            </div>
            <div class="clientes-img">
            <img src="img/clientes/7.png" alt="">
            </div>
            <div class="clientes-img">
            <img src="img/clientes/8.png" alt="">
            </div>
            <div class="clientes-img">
            <img src="img/clientes/9.png" alt="">
            </div>
            <div class="clientes-img">
            <img src="img/clientes/10.png" alt="">
            </div>
            <div class="clientes-img">
            <img src="img/clientes/11.png" alt="">
            </div>
        </div>
	</section>

  


	<footer>
		<img src="img/logo-oscuro.svg">
		<div><a href="https://www.instagram.com/cialasheras/" target="_blank"><img src="img/instagram.svg" style="width:20px;padding:15px 10px 10px 10px;"></a></div>
		<p>Las Heras 2302. Lomas de Zamora. Buenos Aires – Argentina.</p>
		<p>Tel: +54 11 6346 7731 – info@cialasheras.com</p>
	</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/conecta.js"></script> 
    
      
<script>
    var dataID = 1;
    var toolSelected = 1;

    $(window).scroll(function() {    
        var scroll = $(window).scrollTop();
        if (scroll >= 300) {
            $(".nav-bar").addClass("sticky-nav-bar");
        } else {
            $(".nav-bar").removeClass("sticky-nav-bar");
        }
    });    

    $(window).scroll(function() {    
        var scroll = $(window).scrollTop();
        if (scroll >= 300) {
            $(".header-grey").addClass("sticky-nav-bar2");
        } else {
            $(".header-grey").removeClass("sticky-nav-bar2");
        }
    });    
  
    function enableResponsive() {
      if ($("#TopNav").hasClass("responsive")) {
        $("#TopNav").removeClass("responsive");
      }
        else {
          $("#TopNav").addClass("responsive");
        }
    };
    
    $(document).ready(function(){
      $("form").submit(function(){
        alert("Tu formulario ha sido enviado con exito!");
      });
    });
    
</script>
</body>
</html>