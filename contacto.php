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
          
        <div class="hero-contacto">
        	<div class="hero-title">
               <p>Contacto</p>
             </div>
        </div>
	</section>

	<div class="hero-form">
					<div class="hero-form-content" >
					<div class="contacto"><h2>Nos gustaría saber en qué podemos colaborar.</h2></div>
					  <form action="php/enviodemail.php" method="post" data-netlify="true">
                       <input type="text" name="nombre" id="nombre" class="boxshadow"  placeholder="Nombre y apellido" required>
                       <input type="text" name="email" id="correo" placeholder="Correo electrónico" required>
                       <input type="number" name="telefono" id="telefono" placeholder="Teléfono">
                       <div class="caja">
						  <select name="motivo" id="motivo" placeholder="Motivo de la consulta" required>
						  <option value="" disabled selected >Motivo de la consulta</option>
                         <option value="Obras">Obras</option>
                          <option value="Superficies deportivas">Superficies deportivas</option>
                          <option value="Estructuras Metálicas">Estructuras Metálicas</option>
                          <option value="Movimiento de suelos">Movimiento de suelos</option>
                          <option value="Otras consultas">Otras consultas</option>
						  </select>
						</div>
                       <textarea name="comentarios" class="comentarios" placeholder="Comentarios " id="comentarios"></textarea>
                       <div class="clear"></div>

					      <div class="div-btn"> 
					        <button type="submit" id="submit" class="btn-enviar">ENVIAR </button>
					      </div>

					    <div id="resultado"></div>
						</form>
						
						<div id="popup" class="overlay">
							<div id="popupBody">
								<h2>Politicas de privacidad</h2>
								<a id="cerrar" href="#">&times;</a>
								<div class="popupContent">
									<p>Aqui irian las politicas, SI TUVIERA UNA</p>
								</div>
							</div>
						</div>
						</div>
					</div>

  


	
					<footer>
		<img src="img/logo-oscuro.svg">
		<div><a href="https://www.instagram.com/cialasheras/" target="_blank"><img src="img/instagram.svg" style="width:20px;padding:15px 10px 10px 10px;"></a></div>
		<p>Las Heras 2302. Lomas de Zamora. Buenos Aires – Argentina.</p>
		<p>Tel: +54 11 6346 7731 – info@cialasheras.com</p>
	</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/conecta.js"></script> 
    
      
<script>
   
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