<!DOCTYPE html>
<html>
<head>

<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
<title>Altos de Chamiza</title>


<link rel="stylesheet" type="text/css" href="css/jquery.fancybox-1.3.4.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/style.css" >
<link href="https://fonts.googleapis.com/css?family=Noticia+Text" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" >
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
<script> !window.jQuery && document.write('<script src="jquery-1.4.3.min.js"><\/script>'); </script>
<script type="text/javascript" src="js/jquery.mousewheel-3.0.4.pack.js"></script>
<script type="text/javascript" src="js/jquery.fancybox-1.3.4.pack.js"></script>

<script src="js/bootstrap.min.js"></script>
 
<script src="js/js.js"></script>

<script type="text/javascript">
		$(document).ready(function() {
			
			$("a[rel=example_group]").fancybox({
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'titlePosition' 	: 'over',
				'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
					return '<span id="fancybox-title-over">Imagen ' + (currentIndex + 1) + ' de ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
				}
			});

			
		});
	</script>


<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
        
        <script type="text/javascript">
            // When the window has finished loading create our google map below
            google.maps.event.addDomListener(window, 'load', init);
        
            function init() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: 12,

                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(-41.473185, -72.878395),

                    // How you would like to style the map. 
                    // This is where you would paste any style found on Snazzy Maps.
                    styles: [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#6195a0"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"landscape","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"poi.park","elementType":"geometry.fill","stylers":[{"color":"#e6f3d6"},{"visibility":"on"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45},{"visibility":"simplified"}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#f4d2c5"},{"visibility":"simplified"}]},{"featureType":"road.highway","elementType":"labels.text","stylers":[{"color":"#4e4e4e"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#f4f4f4"}]},{"featureType":"road.arterial","elementType":"labels.text","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.text.fill","stylers":[{"color":"#757575"},{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.text.stroke","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"road.local","elementType":"geometry.fill","stylers":[{"color":"#f4f4f4"},{"visibility":"on"},{"weight":"3.79"}]},{"featureType":"road.local","elementType":"geometry.stroke","stylers":[{"weight":"4.63"},{"visibility":"on"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#eaf6f8"},{"visibility":"on"}]},{"featureType":"water","elementType":"geometry.fill","stylers":[{"color":"#eaf6f8"}]}]
                };

                // Get the HTML DOM element that will contain your map 
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('map');

                // Create the Google Map using our element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);

                // Let's also add a marker while we're at it

                var image = 'img/marker.png';

                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(-41.473185, -72.878395),
                    map: map,
                    icon: image
                });
            }
        </script>

        <?php include('form_process.php'); ?>

</head>

<body>

<video autoplay loop id="video-background" muted plays-inline type='video/mp4'>

<source src="https://player.vimeo.com/external/158148793.hd.mp4?s=8e8741dbee251d5c35a759718d4b0976fbf38b6f&profile_id=119&oauth2_token_id=57447761" type="video/mp4">
</video>

<head>
	<nav>
		<div id="menu" class="container-fluid">
		<div class="row">
		<div class="col-lg-1"></div>
		<div class="col-lg-10">
		<div class="container-fluid">
		<div class="row">
		<div class="col-lg-2 unselected" id="inicio">Inicio</div>
		<div class="col-lg-2 unselected" id="proyecto">Proyecto</div>
		<div class="col-lg-2 unselected" id="ubicacion">Ubicación</div>
		<div class="col-lg-2 unselected" id="entorno">Entorno</div>
		<div class="col-lg-2 unselected" id="galeria">Galería</div>
		<div class="col-lg-2 unselected" id="master">Master Plan</div>
		</div>
		</div>
		</div>
		<div class="col-lg-1"></div>
			</div>
		</div>

		<div class="detalle_nav">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-3"></div>
					<div class="col-lg-8">
						<p><img src="img/icon-dir.png">Dirección: Alto Chamiza Nº 1355, Puerto Montt, Chile<img src="img/icon-tel.png"><a href="56 9 876 8876">+56 9 876 8876</a><img src="img/icon-what.png"><a href="56 9 876 8876">+56 9 876 8874</a><a href="#"><img src="img/icon-ins.png"></a><a href="#"><img src="img/icon-fb.png"></a></p>
					</div>
					<div class="col-lg-1">
				</div>
			</div>
		</div>
	</nav>
</head>


<div class="wrap-cabeza">

<div class="container-fluid">

<div class="row">
<div class="col-lg-1 margen"></div>
<div class="col-lg-5" style="height:180px; width:100px; background-color:white;"></div>
<div class="col-lg-4" style="height:120px; width:100px; "></div>
<div class="col-lg-2"></div>
</div>

<div class="row">
<div class="col-lg-1"></div>
<div class="col-lg-10" style="height:120px; width:100px; background-color:white;">
	<section>
	<div class="titulo">
	<h1>Altos de Chamiza, un estilo de vida, proyecto exclusivo</h1>
	</div>
	<div class="bajada_titulo">
		
		<h2>Entorno Único, ubicación privilegiada.</h2>
	</div>
	<div class="texto_titulo">
		<div class="container">
		<div class="row">
				<div class="col-lg-12">Altos de Chamiza es un condominio privado de 34 maravillosas parcelas de 5.000 mt2 en un entorno natural con vista al Volcán Calbuco y rodeado de naturaleza y bosque nativo, ubicado a sólo minutos de Puerto Montt, lo que hace un lugar ideal para vivir cerca de todo y disfrutando de la naturaleza.</div>
			</div>
		</div>
	</div>

	</section>
</div>
<div class="col-lg-1"></div>
</div>




</div>

</div>

<div class="wrap-medio">
<section>
<div class="parte2">
<div class="container-fluid">
	<div class="row">
	<div class="col-lg-2"></div>
	<div class="col-lg-8">
		<div class="encabezado"><h3>Proyecto</h3></div>
	</div>
	<div class="col-lg-2s"></div>
</div>
</div>
<div class="container-fluid">
<div class="row">
<div class="col-lg-2"></div>
<div class="col-lg-6">
<div class="descripcion"><h4>Descripción</h4>
</div>

</div>
<div class="col-lg-4"><div class="precios">LISTA DE PRECIOS</div></div>
</div>
</div>

<div class="container-fluid">
<div class="row">
<div class="col-lg-2"></div>
<div class="col-lg-3">
<div class="descripcion">
	<ul>
		<li> Sólo 34 exclusivas parecelas por lo que su limitado número logra el equilibrio exacto entre tranquilidad y exclusividad, con su hermoso entorno natural encontrarás parcelas de variadas características</li>
		<li>Cuenta con acceso único y controlado por camino principal Ruta XX</li>
		<li>Urbanización suvterránea amigable con el entorno, Parcelas urbanizadas (Luz y Agua disponible a partir de enero 2019)</li>
	</ul>
</div>

</div>
<div class="col-lg-3">
<div class="descripcion">
	<ul>
		<li>Roles individuales por parcela</li>
		<li>El proyecto es exclusivamente residencial y cuenta con Reglamento interno de copropiedad que velara por el desarrollo inmobilario del entorno próximo para la tranquilidad de los compradores</li>
		
	</ul>
	</div>
</div>
<div class="col-lg-3">
	<div class="descargar"><a href="#">DESCARGAR PDF</a></div>
	<div class="img_descarga"><img src="img/1.png"></div>
</div>
</div>
</div>

<div class="container-fluid">
	<div class="row">
		<div class="col-lg-1"></div>
		<div class="col-lg-4"><div class="img_descarga_2"><img src="img/2.png"></div></div>
		<div class="col-lg-6">
			<div class="descripcion_margen">
	<ul>
		<li>Entorno de alta plusvalía, cercano a la ciudad, al mat y cordillera.</li>
		<li>Urbanización primer nivel.</li>
		<li>Cercanía a colegios, supermercados, bancos y playas.</li>
		<li>Condominio enfocado como primera vivienda.</li>
		<li>Urbanización subterránea, amigable con el entorno: Parcelas urbanizadas (Luz y Agua disponible a partir de enero 2019).</li>
		<li>El proyecto es exclusivamente residencial y cuenta con Reglamento interno de copropiedad que velará por el desarrollo inmobiliario del entorno próximo para la tranquilidad de los compradores.</li>
		
	</ul>
	</div>
		<div class="container-fluid">
		<div class="row">
		<div class="col-lg-7">
		<div class="descripcion"><h4>Financiamiento</h4>
			<div class="descripcion_financiamiento">
				<ul>
					<li>Crédito Hipotecario (todos los bancos)</li>
					<li>Contado (aplica descuento)</li>
					</ul>

					<div class="contacto_btn"><a href="#">Contacto</a></div>
					</div>
		</div>
		</div>
		<div class="col-lg-5">
		<div class="descripcion"><h4>Documentos legales</h4></div>
		<div class="documentos"><a href="#">Escritura</a></div>
		<div class="documentos"><a href="#">Preroles</a></div>
		<div class="documentos"><a href="#">Reglamentos</a></div>
		</div>
		</div>
		</div>
		</div>
		<div class="col-lg-1"></div>
	</div>
</div>
</section>
</div>

<div class="wrap_ubicacion">
	<div class="container-fluid">
		<div class="row">
		<div class="col-lg-1"></div>
		<div class="col-lg-10">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-6">
						<div class="encabezado" style="text-align:left;"><h3>Contacto</h3></div>

						
 <form name="contactform" method="post" action="form_process.php">

  

  <input  type="text" name="first_name" maxlength="50" size="30">



  <input  type="text" name="last_name" maxlength="50" size="30">



  <input  type="text" name="email" maxlength="80" size="30">




  <input  type="text" name="telephone" maxlength="30" size="30">

 
  <textarea  name="message" maxlength="1000" cols="25" rows="6"></textarea>
 

  <input type="submit" value="Enviar">  


</form>


					</div>
					<div class="col-lg-6">
						<div class="encabezado" style="text-align:left;"><h3>Ubicación</h3></div>
						<div class="direccion_lugar">Dirección del lugar - <b><a href="#">VER EN WAZE</a></b></div>
						<div id="map"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-1"></div>
		</div>
	</div>
	
</div>

<div class="wrap_entorno">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">

				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-2"></div>
						<div class="col-lg-2">
							<div class="encabezado" style="text-align:left;"><h3>Entorno</h3></div>
						</div>
						<div class="col-lg-8"></div>

					</div>
				</div>

				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-1"></div>
						<div class="col-lg-10">
							<div class="container-fluid">
								<div class="row">
									<div class="col-lg-6">
										<div class="recuadro_entorno" style="border: 1px solid #98d1a3">
											<div class="titulo_recuadro" style="background-color:#98d1a3">
												<h5>Mall Puerto Montt</h5>
												<h5>(15 minutos)</h5>
											</div>
											<img src="img/3.png">
										</div>
										<div class="recuadro_entorno" style="border: 1px solid #466851">
											<div class="titulo_recuadro" style="background-color:#466851">
												<h5>Supermercados</h5>
												<h5>(15 minutos)</h5>
											</div>
											<img src="img/4.png">
										</div>
									</div>
									<div class="col-lg-6">
									<div class="recuadro_entorno" style="border: 1px solid #74a27f">
											<div class="titulo_recuadro" style="background-color:#74a27f">
												<h5>Colegios</h5>
												<h5>(15 minutos)</h5>
											</div>
											<img src="img/5.png">
										</div>
									<div class="recuadro_entorno" style="border: 1px solid #3cd1a3">
											<div class="titulo_recuadro" style="background-color:#3cd1a3">
												<h5>Playa Pelluco</h5>
												<h5>(10 minutos)</h5>
											</div>
											<img src="img/6.png">
										</div>
									</div>
								</div>
							</div>

						</div>
						<div class="col-lg-1"></div>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="wrap_galeria">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">

				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-2"></div>
						<div class="col-lg-2"><div class="encabezado" style="text-align:left;"><h3>Galería</h3></div></div>
						<div class="col-lg-8"></div>
					</div>
				</div>
				
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-1"></div>

						<div class="col-lg-10">
							<div class="container-fluid">
								<div class="row">
								
									<div class="col-lg-3" style="margin-top:20px;"><a rel="example_group" href="img/7.png" ><img width="100%" alt="" src="img/7.png" /></a></div>
									<div class="col-lg-3" style="margin-top:20px;"><a rel="example_group" href="img/8.png" ><img width="100%" alt="" src="img/8.png" /></a></div>
									<div class="col-lg-3" style="margin-top:20px;"><a rel="example_group" href="img/9.png" ><img width="100%" alt="" src="img/9.png" /></a></div>
									<div class="col-lg-3" style="margin-top:20px;"><a rel="example_group" href="img/10.png" ><img width="100%" alt="" src="img/10.png" /></a></div>
								</div>
								</div>
							
						</div>
						<div class="col-lg-1"></div>
					</div>
				</div>


				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-1"></div>
						<div class="col-lg-10">
							<div class="container-fluid">
								<div class="row">
								
									<div class="col-lg-3" style="margin-top:20px;"><a rel="example_group" href="img/11.png" ><img width="100%" alt="" src="img/11.png" /></a></div>
									<div class="col-lg-3" style="margin-top:20px;"><a rel="example_group" href="img/12.png" ><img width="100%" alt="" src="img/12.png" /></a></div>
									<div class="col-lg-3" style="margin-top:20px;"><a rel="example_group" href="img/13.png" ><img width="100%" alt="" src="img/13.png" /></a></div>
									<div class="col-lg-3" style="margin-top:20px;"><a rel="example_group" href="img/14.png" ><img width="100%" alt="" src="img/14.png" /></a></div>

								</div>
							</div>
						</div>
						<div class="col-lg-1"></div>
					</div>
				</div>

				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-1"></div>
						<div class="col-lg-10">
							<div class="container-fluid">
								<div class="row">
								
									<div class="col-lg-3" style="margin-top:20px;"><a rel="example_group" href="img/15.png" ><img width="100%" alt="" src="img/15.png" /></a></div>
									<div class="col-lg-3" style="margin-top:20px;"><a rel="example_group" href="img/16.png" ><img width="100%" alt="" src="img/16.png" /></a></div>
									<div class="col-lg-3" style="margin-top:20px;"><a rel="example_group" href="img/17.png" ><img width="100%" alt="" src="img/17.png" /></a></div>
									<div class="col-lg-3" style="margin-top:20px;"><a rel="example_group" href="img/18.png" ><img width="100%" class="last" alt="" src="img/18.png" /></a></div>

								</div>
							</div>
						</div>
						<div class="col-lg-1"></div>
					</div>
				</div>

			</div>
		</div>
	</div>

</div>


<div class="wrap_master">
	<div class="container-fluid">
		<div class="row">
		<div class="col-lg-1"></div>
		<div class="col-lg-7"><img src="img/mapa.png" style="width:100%"></div>
		<div class="col-lg-3">
			<div class="encabezado" style="text-align:left;"><h3>Master Plan</h3></div>
			<div class="titulo_master"><h6>Parcela 24</h6></div>
			<div class="texto_master"><p>Superficie: 5000 hectáreas.</p>

<p>Breve descripción parcerla Totation cusam dit dit, quae quia dem quam quame dolorem perspic iendit, que vendi voluptatia sequae lam simporp ostrum labo.</p>

<p><b>PRECIO: 4500 UF.</b></p></div>

<div class="contacto_btn"><a href="#">Contacto</a></div>
		</div>
		<div class="col-lg-1"></div>
	</div>

</div>
</div>

<div class="wrap_footer">

	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-1"></div>
			<div class="col-lg-5" style="background-color:white; height:50px;"></div>
			<div class="col-lg-3" style="background-color:white; height:25px;"></div>
			<div class="col-lg-4"></div>

		</div>		
	</div>
	
</div>
<div class="derechos">Altos de Chamiza™, Todos los derechos reservados Junio 2018</div>
<script>
	
	var h = ($("#video-background").height())/2;

	$(".wrap-cabeza").css("margin-top", h)
	$("#inicio").addClass("selected");



</script>

	<script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAxrA-4ZR06Ktonhb3vxsiTnxWojxSvoz8&callback=initMap">

    </script>

</body>

</html>