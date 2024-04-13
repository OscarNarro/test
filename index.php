<?php
session_start();
// Incluye el archivo de conexión a la base de datos
include("conexion.php");

// Función para obtener el nombre del usuario basado en el correo electrónico
function obtenerNombreUsuario($correo) {
    global $conn; // Necesario para acceder a la conexión dentro de la función

    $sql = "SELECT nombre FROM usuarios WHERE correo='$correo'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        return $row['nombre'];
    } else {
        return "Usuario Desconocido";
    }
}

// Resto del código de tu página
?>

<!DOCTYPE html>
<html lang="en">
<head>



	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="La mejor página para descargar videojuegos de forma gratuita!">
	<meta name="theme-color" content="#FF5733">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
	


	<!-- title -->
	<title>Cartoon Games</title>

	<link rel="manifest" href="/manifest.json">

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="assets/img/favicon2.png">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="assets/css/all.min.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<!-- owl carousel -->
	<link rel="stylesheet" href="assets/css/owl.carousel.css">
	<!-- magnific popup -->
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<!-- animate css -->
	<link rel="stylesheet" href="assets/css/animate.css">
	<!-- mean menu css -->
	<link rel="stylesheet" href="assets/css/meanmenu.min.css">
	<!-- main style -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- responsive -->
	<link rel="stylesheet" href="assets/css/responsive.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/d46ca59595.js" crossorigin="anonymous"></script>


</head>
<body>
	
	<!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->
	
	<!-- header -->
	<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
						<!-- logo -->
						<div class="site-logo">
							<a href="index.php">
								<img src="assets/img/logo2.png" alt="">
							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu">	
							<ul>
								<li ><a href="index.php">Inicio</a>
									
								</li>
								<li><a href="acerca.php">¿Quiénes somos?</a></li>
						
						
								<li><a href="contacto.php">Contacto</a></li>
								<li><a href="catalogo.php"><i class="fa-solid fa-gamepad"></i></i> Catálogo de juegos</a>
									
									
								</li>
                                
								<li>
									<!-- header-icons -->
                                    
                                    <div class="header-icons">
                                    <a class="mobile-hide search-bar-icon" href="#"><i class="fas fa-search"></i></a>
                                    <?php
                                    
                                    if (isset($_SESSION['correo'])) {
                                        // Si el usuario ha iniciado sesión, muestra su nombre, un saludo y el botón de cerrar sesión
                                        $nombreUsuario = obtenerNombreUsuario($_SESSION['correo']);
                                        echo '<span class="nombre-usuario">¡Hola, ' . $nombreUsuario . '!</span>';
                                        echo '<a href="cerrar_sesion.php" class="cerrar-sesion-btn">Cerrar Sesión</a>';
                                    } else {
                                        // Si no ha iniciado sesión, muestra el enlace de inicio de sesión
                                        echo '<a class="shopping-cart" href="login.html"><i class="fa-solid fa-user"></i> Inicia Sesion / Registrate</a>';
                                    }
                                    ?>
                                    
                                </div>



								</li>
							</ul>
						</nav>
						<a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
						<div class="mobile-menu"></div>
						<!-- menu end -->
						
					</div>
				</div>
			</div>
		</div>
	</div>

	
	<!-- end header -->
	
	<!-- search area -->
	<div class="search-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<span class="close-btn"><i class="fas fa-window-close"></i></span>
					<div class="search-bar">
						<div class="search-bar-tablecell">
							<h3>Busqueda:</h3>
							<input type="text" placeholder="Juego">
							<button type="submit">Buscar <i class="fas fa-search"></i></button>
							
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>

	<!-- end search area -->

	<!-- home page slider -->
	<div class="homepage-slider">
		<!-- single home slider -->
		<div class="single-homepage-slider homepage-bg-1">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-lg-7 offset-lg-1 offset-xl-0">
						<div class="hero-text">
							<div class="hero-text-tablecell">
								<p class="subtitle">Nuevo lanzamiento</p>
								<h1>Stick Fighters</h1>
								
								<div class="hero-btns">
                                <a href="descargar.php?archivo=Stick_01.rar" class="boxed-btn"><i class="fa-brands fa-windows"></i> Windows</a>
                                <a href="descargar.php?archivo=Stick_02.apk" class="boxed-btn"><i class="fa-brands fa-android"></i> Android</a>
                                
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- single home slider -->
		<div class="single-homepage-slider homepage-bg-2">
			<div class="container">
				<div class="row">
					<div class="col-lg-10 offset-lg-1 text-center">
						<div class="hero-text">
							<div class="hero-text-tablecell">
								<p class="subtitle">Descubre la diversa variedad de </p>
								<h1>Juegos Unicos</h1>
								<div class="hero-btns">
									<a href="catalogo.php" class="boxed-btn">Explora nuestro catálogo</a>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- single home slider -->
		<div class="single-homepage-slider homepage-bg-3">
			<div class="container">
				<div class="row">
					<div class="col-lg-10 offset-lg-1 text-right">
						<div class="hero-text">
							<div class="hero-text-tablecell">
								<p class="subtitle">Apoya a esta página a seguir subiendo</p>
								<h1>Juegos completemente actualizados</h1>
								<div class="hero-btns">
									<a href="catalogo.php" class="boxed-btn">Catálogo de juegos</a>
									<a href="acerca.php" class="bordered-btn">Nosotros</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end home page slider -->

	<!-- features list section -->
	<div class="list-section pt-80 pb-80">
		<div class="container">

			<div class="row">
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon">
							<i class="fa-solid fa-circle-info"></i>
						</div>
						<div class="content">
							<h3>Nuevos lanzamientos cada semana</h3>
							<p>Descarga completamente gratis</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon">
							<i class="fas fa-phone-volume"></i>
						</div>
						<div class="content">
							<h3>Atencion a cliente</h3>
							<p>Comunicate con nosotros</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="list-box d-flex justify-content-start align-items-center">
						<div class="list-icon">
							<i class="fa-solid fa-bug"></i>
						</div>
						<div class="content">
							<h3>Errores en el juego o descarga?</h3>
							<p>Haznos saber </p>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!-- end features list section -->

	<!-- product section -->
	<div class="product-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">	
						<h3><span class="orange-text">Prueba</span> otros juegos</h3>
						<p>Tambien puedes descargar y probar más juegos en el apartado <a href="catalogo.php"><span>Catálogo de juegos</span></a></p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-4 col-md-6 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="catalogo.php"><img src="assets/img/products/juego7.jpg" alt=""></a>
						</div>
						<h3>Stick Fighters</h3>
						<p class="product-price"><span>Contenido descargable</span></p>
					
                        <a href="descargar.php?archivo=Stick_01.rar" class="boxed-btn"><i class="fa-brands fa-windows"></i> Windows</a>
                                <a href="descargar.php?archivo=Stick_02.apk" class="boxed-btn"><i class="fa-brands fa-android"></i> Android</a>
                                
						
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="catalogo.php"><img src="assets/img/products/juego2.jpg" alt=""></a>
						</div>
						<h3>Jetpack Joyride</h3>
						<p class="product-price"><span>Contenido descargable</span></p>
						<a href="descargar.php?archivo=test.txt" class="boxed-btn"><i class="fa-brands fa-windows"></i> Windows</a>
                                <a href="descargar.php?archivo=test.txt" class="boxed-btn"><i class="fa-brands fa-android"></i> Android</a>
                                
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="catalogo.php"><img src="assets/img/products/juego3.jpg" alt=""></a>
						</div>
						<h3>Fruit Ninja</h3>
						<p class="product-price"><span>Contenido descargable</span></p>
                        <a href="descargar.php?archivo=test.txt" class="boxed-btn"><i class="fa-brands fa-android"></i> Android</a>
                        
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end product section -->

	<!-- cart banner section -->
	<section class="cart-banner pt-100 pb-100">
    	<div class="container">
        	<div class="row clearfix">
            	<!--Image Column-->
            	<div class="image-column col-lg-6">
                	<div class="image">
                    	
                    	<img src="assets/img/b.jpg" alt="">
                    </div>
                </div>
                <!--Content Column-->
                <div class="content-column col-lg-6">
					<h3><span class="orange-text">Por lanzamiento</span> reciente</h3>
                    <h4>Descarga ahora sin registrarse!</h4>
				
                    <div class="text">Los jugadores se sumergen en una experiencia de combate única donde los icónicos personajes stickman cobran vida con una intensidad sin igual.</div>
                    <!--Countdown Timer-->
                    
                	<a download="Stickman-FightersPC.rar" href="Stick_01.rar" class="boxed-btn"><i class="fa-brands fa-windows"></i> Windows</a>
							<a download="Stickman-Fighters.apk" href="Stick_02.apk" class="boxed-btn"><i class="fa-brands fa-android"></i> Android</a>
                </div>
            </div>
        </div>
    </section>
    <!-- end cart banner section -->

	<!-- latest news -->
	<div class="latest-news pt-150 pb-150">
		<div class="container">

			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">	
						
						<h3><span class="orange-text">Apoya con </span> tus donaciones</h3>
						<p>Tu generosidad nos permitirá invertir en la investigación, el desarrollo y la innovación, asegurando que siempre tengamos algo nuevo y emocionante que ofrecerte.</p>
					</div>
					<div id="donate-button-container">
							<div id="donate-button"></div>
							<script src="https://www.paypalobjects.com/donate/sdk/donate-sdk.js" charset="UTF-8"></script>
							<script>
							PayPal.Donation.Button({
							env:'production',
							hosted_button_id:'8YJMGLE58TANC',
							image: {
							src:'https://www.paypalobjects.com/es_XC/MX/i/btn/btn_donateCC_LG.gif',
							alt:'Donar con el botón PayPal',
							title:'PayPal - The safer, easier way to pay online!',
							}
							}).render('#donate-button');
							</script>
							</div>

				</div>
			</div>

			
			
		</div>
	</div>
	<!-- end latest news -->

	<!-- logo carousel -->
	<div class="logo-carousel-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="logo-carousel-inner">
						<div class="single-logo-item">
							<img src="assets/img/company-logos/rockstar.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/rovio.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/voodoo.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/half.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/mobi.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end logo carousel -->

	<!-- footer -->
	<div class="footer-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="footer-box about-widget">
						<h2 class="widget-title">Nosotros</h2>
						<p>Nos apasiona brindarte emocionantes experiencias de juego sin barreras. Creemos en la idea de que el entretenimiento de calidad debe ser accesible para todos, por lo que nos enorgullece presentarte una amplia gama de videojuegos gratuitos que te sumergirán en mundos llenos de aventuras, desafíos y diversión.
							</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box get-in-touch">
						<h2 class="widget-title">Contactate</h2>
						<ul>
							<li>34/8, East Hukupara, Gifirtok, Sadan.</li>
							<li>soporte@cartoongames.com</li>
							<li>+31 728 189 9098</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box pages">
						<h2 class="widget-title">Páginas</h2>
						<ul>
							<li><a href="index.php">Inicio</a></li>
							<li><a href="acerca.php">Nosotros</a></li>
							<li><a href="catalogo.php">Catálogo de Juegos</a></li>
							
							<li><a href="contacto.php">Contacto</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box subscribe">
						<h2 class="widget-title">Subscribete</h2>
						<p>Al suscribirte recibiras nuestros lanzamientos más recientes y ofertas exclusivas.</p>
						<form action="index.php">
							<input type="email" placeholder="Ingresa tu correo">
							<button type="submit"><i class="fas fa-paper-plane"></i></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end footer -->
	
	<!-- copyright -->
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<p>Copyrights &copy; 2023 - <a href="https://behance.net/">Carton Games</a>,  Todos los derechos reservados</p>
				</div>
				<div class="col-lg-6 text-right col-md-12">
					<div class="social-icons">
						<ul>
							<li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-dribbble"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end copyright -->
	
	<!-- sw -->
	<script type="text/javascript">
  		if ("serviceWorker" in navigator) {
    	navigator.serviceWorker.register("sw.js");
  		}
	</script>
	
	<!-- jquery -->
	<script src="assets/js/jquery-1.11.3.min.js"></script>
	<!-- bootstrap -->
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<!-- count down -->
	<script src="assets/js/jquery.countdown.js"></script>
	<!-- isotope -->
	<script src="assets/js/jquery.isotope-3.0.6.min.js"></script>
	<!-- waypoints -->
	<script src="assets/js/waypoints.js"></script>
	<!-- owl carousel -->
	<script src="assets/js/owl.carousel.min.js"></script>
	<!-- magnific popup -->
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<!-- mean menu -->
	<script src="assets/js/jquery.meanmenu.min.js"></script>
	<!-- sticker js -->
	<script src="assets/js/sticker.js"></script>
	<!-- main js -->
	<script src="assets/js/main.js"></script>

</body>
</html>