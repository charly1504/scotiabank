	<footer class="bg-c-blanco">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					<h5 class="color-rojo"><b>NUESTRAS ÁREAS</b></h5>
					<ul>
					    <li>Banca Persona</li>
					    <li>Banca Corporativa</li>
					    <li>Banca para Pymes</li>
					    <li>Banca Premium</li>
					</ul>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					<h5 class="color-rojo"><b>ACERCA DE SCOTIABANK</b></h5>
					<ul>
					    <li>Sobre Scotiabank</li>
					    <li>Sucursales</li>
					    <li>Servicios Bancarios</li>
					    <li>Scotia en Linea</li>
					    <li>Cajeros Automáticos</li>
					    <li>Kioscos</li>
					</ul>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					<h5 class="color-rojo"><b>CONTÁCTANOS</b></h5>
					<a href="tel:50322501111" class="phone" style="color: #666; display: block;">
						<i class="fa fa-phone" aria-hidden="true"></i> (503) 2250-1111
					</a>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					<h5 class="color-rojo"><b>REDES SOCIALES</b></h5>
					<a href="https://www.facebook.com/ScotiabankSV" title="Siguenos en Facebook">
						<i class="fa fa-facebook-official icons" aria-hidden="true"></i>
					</a>

					<a class="color-rojo" href="https://www.youtube.com/channel/UCStqVoI9TTZLJ5BmfXJTJpw" title="Comparte y disfruta nuestros videos">
						<i class="fa fa-youtube-play icons" aria-hidden="true"></i>
					</a>
				</div>
			</div>
		</div>
	</footer>
	<div class="footer-s-negro text-center">
		Scotiabank © 2017
	</div>


	<!--JQuery,Bootstrap JS's,FackeLoader,App JS-->
	<script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/jquery-1.11.1.min.js"></script><!--solo para el index,remover de los demas footers-->
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/fakeLoader.min.js"></script>
	<script src="assets/js/scrollreveal.min.js"></script>
	<script src="https://use.fontawesome.com/3ce930e26c.js"></script>
	<script type="text/javascript">
		//Efecto load para la página de inicio
		$("#fakeLoader").fakeLoader({
			timeToHide:3000,    //Tiempo en milisegundos para el disparador de fakeLoader
			zIndex:"9999",      //zIndex por defecto
			spinner:"spinner7", //Opciones: 'spinner1', 'spinner2', 'spinner3', 'spinner4', 'spinner5', 'spinner6', 'spinner7'
			bgColor:"#d81e05"   //Colores ya sea en Hex, RGB or RGBA
		});
		
		//Efecto hover para cuadriculas del indez
		$(".beneficio1").hover(function(){ hoverEfect(".beneficio1"); }, function(){ outEfect(".beneficio1"); });
		$(".beneficio2").hover(function(){ hoverEfect(".beneficio2"); }, function(){ outEfect(".beneficio2"); });
		$(".beneficio3").hover(function(){ hoverEfect(".beneficio3"); }, function(){ outEfect(".beneficio3"); });
		$(".beneficio4").hover(function(){ hoverEfect(".beneficio4"); }, function(){ outEfect(".beneficio4"); });
		$(".beneficio5").hover(function(){ hoverEfect(".beneficio5"); }, function(){ outEfect(".beneficio5"); });
		function hoverEfect(id){
			$(""+id+" .bg-c-hover").css('display', 'block');
			$(""+id+" .cin").css('visibility', 'hidden');
		}
		function outEfect(id){
			$(""+id+" .bg-c-hover").css('display', 'none');
			$(""+id+" .cin").css('visibility', 'visible');
		}

		//script para efecto de scroll
		window.sr = ScrollReveal({ reset: false });
		sr.reveal('.container');
	</script>
	<!--Script para mapa-->
	<script type="text/javascript">
		function initMap() {
			var uluru = {lat: 13.712907, lng: -89.20343};
			var map = new google.maps.Map(document.getElementById('map'), {
				zoom: 18,
				center: uluru
			});

			var marker = new google.maps.Marker({
				position: uluru,
				map: map
			});
		}
	</script>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD-tziciCa-SMPmTGybODAFEdy7S9LnkFo&callback=initMap"></script>
</body>
</html>