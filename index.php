<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Inicio | Breeze</title>
	<link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="./assets/fonts/ionicons.min.css">
	<link rel="stylesheet" href="./assets/css/Contact-Form-Clean.css">
	<link rel="stylesheet" href="./assets/css/Footer-Basic.css">
	<link rel="stylesheet" href="./assets/css/styles.css">
</head>...

<body>
	<div id="top"></div>
	<!--NAVBAR -->
	<nav class="navbar navbar-light navbar-expand-md sticky-top" style="background-color:rgba(0,0,0,0.5);color:rgba(0,0,0,0.5);">
		<div class="container-fluid"><div class="logo">
			<img class="invert" src="./assets/img/breeze 1.png" width="140" alt="">
		</div>
			<button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
			<div class="collapse navbar-collapse" id="navcol-1">
				<ul class="nav navbar-nav ml-auto">
					<li class="nav-item" role="presentation"><a class="nav-link" href="#about" style="margin:0px;color:rgb(255,255,255);">Nosotros</a></li>
					<li class="nav-item" role="presentation"><a class="nav-link" href="#services" style="color:rgb(255,255,255);">Servicios </a></li>
					<li class="nav-item" role="presentation"><a class="nav-link" href="#contact" style="color:rgb(255,255,255);">Contacto</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!--Carrusel, reemplazar src con enlace de la imagen en cuestion-->
	<div class="carousel slide" data-ride="carousel" id="carousel-1"> 
		<div class="carousel-inner" role="listbox">
			<div class="carousel-item active"><img class="d-block flex-wrap w-100" src="/Breeze/assets/img/1.jpg" alt="Slide Image"></div>
			<div class="carousel-item"><img class="d-block w-100" src="./assets/img/inst2.jpg" alt="Slide Image"></div>
			<div class="carousel-item"><img class="d-block w-100" src="./assets/img/4.jpg" alt="Slide Image"></div>
			<div class="carousel-item"><img class="d-block w-100" src="./assets/img/slide1.jpg" alt="Slide Image"></div>
		</div>

		<div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><span class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span></a>
			<a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next"><span class="carousel-control-next-icon"></span><span class="sr-only">Next</span></a>
		</div>

		<ol class="carousel-indicators">
			<li data-target="#carousel-1" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-1" data-slide-to="1"></li>
			<li data-target="#carousel-1" data-slide-to="2"></li>
			<li data-target="#carousel-1" data-slide-to="3"></li>
		</ol>
	</div>

	<div id="content" class="container mb-6">
		<h1 id="services" class="text-center" style="padding:20px;margin:39px;color:#75b2dd;">Servicios</h1>
		<p class="lead text-center w-50 mx-auto"> Cotización de equipo y presupuesto de servicios sin costo, Instalación y mantenimiento, servicios extras derivado de las necesidades propias de la instalación como: instalación eléctrica y plomería, detalles en tablarroca, albañilería y pintura. </p>

		<h1 class="text-center" style="padding:20px;margin:39px;color:#75b2dd;">Soluciones</h1>
		<p class="lead text-center w-50 mx-auto">en la compra del equipo te regalamos la instalación y a majin-boo!! </p>

		<h1 id="about" class="text-center" style="padding:20px;margin:39px;color:#75b2dd;">Acerca de Nosotros</h1>
		<p class="lead text-center w-50 mx-auto">Somos una empresa de instalación y servicios de aire acondicionado en Puerto Vallarta. Una amplia experiencia en el mercado y un servicio de calidad a todos nuestros clientes nos respaldan. Si desea solicitar un servicio o tiene preguntas, envie un mensaje en la opción de contacto o llame a nuestro número telefónico.</p>
	</div>
<div class="container-fluid">
		<!--Tarjetas de Servicio-->
		<div class="card-group">
			<div class="card mr-4"><img class="img-fluid card-img-top w-100 d-block opacity-effect" src="./assets/img/inst4.jpg" style="height:246px;">
				<div class="card-body">
					<h4 class="card-title">Instalación </h4>
					<p class="card-text">Ofrecemos un servicio personalizado, desde la elección del equipo de aire acondicionado requerido hasta la instalación final, nos adaptamos a las necesidades de nuestros clientes tratando de satisfacer sus necesidades por completo.</p>
				</div>
			</div>
			<div class="card mr-4"><img class="img-fluid card-img-top w-100 d-block opacity-effect" src="./assets/img/mtto4.jpg" style="height:246px;">
				<div class="card-body">
					<h4 class="card-title">Mantenimiento </h4>
					<p class="card-text">Nuestro servicio de mantenimiento 
					otorga una solución para proteger tus equipos con la finalidad de prolongar su vida útil, para darle un óptimo funcionamiento y prevenir fallas o mal funcionamiento a futuro.</p>
				</div>
			</div>

			<div class="card mr-4"><img class="img-fluid card-img-top w-100 d-block opacity-effect" src="./assets/img/misc.jpg" style="height:246px;">
				<div class="card-body">
					<h4 class="card-title">Misceláneos </h4>.
					<p class="card-text">contamos un una serie de servicios extras a la instalación y mantenimiento de los equipos de aire acondicionado.<br>Detalles en: instalaciones eléctricas, tablaroca, plomería, albañilería y  modificaciones de instalaciones de A/A entre otros.</p>
				</div>
			</div>
		</div>
</div>
<div class="container">
		<h1 id="contact" class="text-center" style="padding:20px;margin:39px;color:#75b2dd;">Contáctanos</h1></div>
		<div class="contact-clean">
			<form method="post" onsubmit="return enter()">
				<h2 class="text-center">Contacto</h2>
				<div class="form-group"> 
					<input class="form-control" id="name" type="text" name="name" maxlength="40" placeholder="&#x1f464; Nombre">
				</div>
				<div class="form-group">
					<input class="form-control" id="email" type="email" name="email" required="" maxlength="40" placeholder="&#x1f584; Email" inputmode="email">
				</div>
				<div class="form-group">
					<input class="form-control" id="tel" type="tel" name="tel" maxlength="10" pattern="[0-9]+" placeholder="&#x1f57f; Telefono" inputmode="tel">
				</div>
				<div class="form-group">
					<textarea class="form-control" id="message" rows="20" name="message" required="" maxlength="100" placeholder="Pregunta"></textarea>
				</div>
				<div class="form-group">
					<button class="btn btn-primary" type="submit">Enviar </button>
				</div>
				<div>
					<p class="card-text" id="txt"></p>
				</div>
			</form>
		</div>
		<div class="footer-basic">
			<footer>
				<div class="social"><a href="https://www.facebook.com/" target="_blank" title="Enlace a Fanpage de Facebook"><i class="icon ion-social-facebook"></i></a></div> <!--Enlazar a pagina de FB de Breeze-->
				<ul class="list-inline"></ul>
				<p class="text-center">Todos los derechos reservados Breeze &copy; 2017</p>
				<p class="text-center"><small>Powered by Washines Co. Ltd</small></p>
			</footer>
		</div>
		<section></section> <!--Seccion pendiente y Scrips abajo-->

		<a href="#top" class="totop"><span class="ion-ios-arrow-up"></span></a>
		<script src="./assets/js/jquery.min.js"></script>
		<script src="./assets/bootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript">
			$('a[href*="#"]')
			.not('[href="#"]')
			.not('[href="#0"]')
			.not('[href="#carousel-1"]')
			.click(function(event) {
				if (
					location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
					&& 
					location.hostname == this.hostname
					) {
					var target = $(this.hash);
					target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
					if (target.length) {
						event.preventDefault();
						$('html, body').animate({
							scrollTop: target.offset().top - 83
						}, 1000, function() {
							var $target = $(target);
							$target.focus();
							if ($target.is(":focus")) {
								return false;
							} else {
								$target.attr('tabindex','-1');
								$target.focus();
							};
						});
					}
				}
			});
			$(window).scroll(function() {
				var targetScroll = $('#content').position().top;
				if($(window).scrollTop() > targetScroll) {
					$(".totop").addClass("active");
				} else {
					$(".totop").removeClass("active");
				}
			});
		</script>
		<script>
			function enter(){
				var name=document.getElementById('name').value;
				var email=document.getElementById('email').value;
				var phone=document.getElementById('tel').value;
				var message=document.getElementById('message').value;

				var x=new XMLHttpRequest();
		        x.onreadystatechange=function() {
		            if (this.readyState==4 && this.status==200){
		                document.getElementById("txt").innerHTML=this.responseText;
		            }
		        };
		        x.open("GET","assets/php/mail.php?n="+name+"&e="+email+"&p="+phone+"&m="+message,true);
		        x.send();
				return false;
			}
		</script>
	</body>
</html>