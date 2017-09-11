<<<<<<< HEAD
	<!--JQuery,Bootstrap JS's,FackeLoader,App JS-->
	<script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/jquery-1.11.1.min.js"></script><!--solo para el index,remover de los demas footers-->
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/fakeLoader.min.js"></script>
	<script type="text/javascript">
		// //Efecto load para la página de inicio
		// $("#fakeLoader").fakeLoader({
		// 	timeToHide:3000,    //Tiempo en milisegundos para el disparador de fakeLoader
		// 	zIndex:"9999",      //zIndex por defecto
		// 	spinner:"spinner7", //Opciones: 'spinner1', 'spinner2', 'spinner3', 'spinner4', 'spinner5', 'spinner6', 'spinner7'
		// 	bgColor:"#d81e05"   //Colores ya sea en Hex, RGB or RGBA
		// });
		
		// //Efecto hover para cuadriculas del indez
		// $(".beneficios").hover(function(){
		// 	$(".bg-c-hover").css('display', 'block');
		// 	$(".cin").css('visibility', 'hidden');
		// }, function(){
		// 	$(".bg-c-hover").css('display', 'none');
		// 	$(".cin").css('visibility', 'visible');
		// });
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
=======
	<!--JQuery,Bootstrap JS's,FackeLoader,App JS-->
	<script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/jquery-1.11.1.min.js"></script><!--solo para el index,remover de los demas footers-->
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/fakeLoader.min.js"></script>
	<script type="text/javascript">
		// //Efecto load para la página de inicio
		// $("#fakeLoader").fakeLoader({
		// 	timeToHide:3000,    //Tiempo en milisegundos para el disparador de fakeLoader
		// 	zIndex:"9999",      //zIndex por defecto
		// 	spinner:"spinner7", //Opciones: 'spinner1', 'spinner2', 'spinner3', 'spinner4', 'spinner5', 'spinner6', 'spinner7'
		// 	bgColor:"#d81e05"   //Colores ya sea en Hex, RGB or RGBA
		// });
		
		// //Efecto hover para cuadriculas del indez
		// $(".beneficios").hover(function(){
		// 	$(".bg-c-hover").css('display', 'block');
		// 	$(".cin").css('visibility', 'hidden');
		// }, function(){
		// 	$(".bg-c-hover").css('display', 'none');
		// 	$(".cin").css('visibility', 'visible');
		// });
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
>>>>>>> ebb62a5f605927eebbe7518c9024ab42f007c31a
</html>