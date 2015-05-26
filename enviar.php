<?php
if(isset($_POST['nombre']) && !empty($_POST['nombre']) && isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['mensaje']) && !empty($_POST['mensaje']) ){ 
	//comprabamos que los campos no esten vacios
	$destino="marcos_2kb_08@hotmail.com"; //a donde va a a parar el msj
	$desde="From: ". "Crystal Indigo Software";
	$asunto="Crystal Indigo Software:Consulta de parte de";
	$nombre=$_POST['nombre'];
	$email = $_POST['email'];
	$mensaje=$_POST['mensaje'];

	try {
		mail($destino,$asunto."".$nombre."".$email,$mensaje,$desde);

	} catch (Exception $e) {
		echo $e."</br>";
		echo "Hubo un error al enviar"."</br>";
		echo "<a href=\"Contacto.html\"> << volver atras </a>";
	}
}else{
	echo "Complete los campos por favor"."</br>";
	echo "<a href=\"Contacto.html\"> << volver atras </a>";
}
?>
<html>
<head>
	<title>Crystal Indigo Software</title>
	   <meta charset="utf-8">
	     <meta name="description" content ="Crystal Indigo Software ofrece las mejores soluciones profesionales de hardaware y software" />
       <meta name="keywords" content="Crystal Indigo, Software, Argentina, Jesus Maria, Cordoba, Córdoba, Sistemas Informaticos, Gestión, Negocios, Windows, Linux, .Net, Java, Soluciones,Empresas, Soluciones Empresariales, Internet, Pymes, Negocios, Informatica, Computacion, Hardware, Computadoras, Comunicaciones, Tecnologia, Analista, Analistas, Sistemas, Programas, Analista en Sistemas de Computacion, Internet, Jesús María, America, America Latina,Visual Basic,Visual, Basic, PHP, SQL, Bases de datos, Facturación" />
       <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
       <!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

		<link rel="stylesheet" type="text/css" href="estilos.css">
		<link href="estilos.css" rel="stylesheet" type="text/css" >

		<!--Aca van los css y javascripts que necesite el proyecto-->
     <script src="Js/jquery-latest.min.js"></script> <!-- Script fundamental-->
     <!-- Generalmente va http://code.jquery.com/jquery-latest.min.js" pero el script de arriba es una copia identica-->
     <script src="Js/slides.min.jquery.js"></script>

     	<!-- Importamos la libreria jQuery -->
        <script src="http://code.jquery.com/jquery-latest.min.js"></script>
</head>
<body>
	<header class="container-fluid">
		<br>
		<nav>
		    <ul>
				<li><a href="Index.html">Inicio</a></li>
				<li><a href="Productos.html">Productos</a></li>
				<li><a href="Servicios.html">Servicios</a></li>
				<li><a href="Acerca.html">Acerca de</a></li>
				<li><a href="Contacto.html">Contacto</a></li>
				<li><a href="Portfolio.html">Portfolio</a></li>
		    </ul>
		</nav>
		<br>
		<br>
		<br>
		&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <a href="Index.html" class="logotipo">Crystal indigo Software</a>
	</header>
   <div class="container">
   	<section class="main row">
		<article class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
			<br>
			<br>
			<br>
			<form role="form " method="POST" action="enviar.php">
				<h1 class="text-center mensaje_enviado">Su mensaje fue enviado correctamente, estaré comunicandome con usted en breve</h1>
              </form>
		</article>

		<aside class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
			<p class="titulos">Redes Sociales</p>
			<!--Widget Twitter-->
	<a class="twitter-timeline" href="https://twitter.com/Cisft" data-widget-id="567471552686739456">Tweets por el @Cisft.</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
		<br>
		<br>
		<!--boton me gusta de facebook, nos conectamos a su api-->
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
  		var js, fjs = d.getElementsByTagName(s)[0];
  		if (d.getElementById(id)) return;
  		js = d.createElement(s); js.id = id;
  		js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.0";
  			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
		<!--cargamos contenido-->
		<div class="fb-like-box" data-href="https://www.facebook.com/CrystalIndigoSoftware" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>
		<br>
		</aside>
	</setion>
   </div>
   <br>
<footer class="container-fluid">
			<ul>
				<li><a href="Index.html">Inicio</a></li>
				<li><a href="Productos.html">Productos</a></li>
				<li><a href="Servicios.html">Servicios</a></li>
				<li><a href="Acerca.html">Acerca de</a></li>
				<li><a href="Contacto.html">Contacto</a></li>
				<li><a href="Portfolio.html">Portfolio</a></li>
				<li><a href="#" class="idioma">© 2015 Todos los derechos reservados</a></li>
		    </ul>
</footer>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
		<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
		<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
</body>
</html>