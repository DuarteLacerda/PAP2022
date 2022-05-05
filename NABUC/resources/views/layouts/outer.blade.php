<!DOCTYPE html>
<html>
<head>
	<title>NABUC</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/all.css">
	<link rel="stylesheet" type="text/css" href="css/all.min.css">
	<link rel="stylesheet" type="text/css" href="css/lightbox.css">
	<link rel="stylesheet" type="text/css" href="css/flexslider.css">
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="css/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="css/jquery.rateyo.css"/>
	<link rel="stylesheet" type="text/css" href="css/jquery.mmenu.all.css" />
	<link rel="stylesheet" type="text/css" href="css/meanmenu.min.css">
	<link rel="stylesheet" type="text/css" href="css/inner-page-style.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700" rel="stylesheet">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
</head>
<body>
	<div id="page" class="site" itemscope itemtype="http://schema.org/LocalBusiness">
		<header class="site-header">
			<div class="top-header">
				<div class="container">
					<div class="top-header-left">
						<div class="top-header-block">
							<a href="mailto:info@educationpro.com" itemprop="email"><i class="fas fa-envelope"></i>nabuc.geral@gmail.com</a>
						</div>
						{{-- <div class="top-header-block">
							<a href="tel:+9779813639131" itemprop="telephone"><i class="fas fa-phone"></i> </a>
						</div> --}}
					</div>
					<div class="top-header-right">
						{{-- <div class="social-block">
							<ul class="social-list">
								<li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
								<li><a href=""><i class="fab fa-facebook-square"></i></a></li>
								<li><a href=""><i class="fab fa-facebook-messenger"></i></a></li>
								<li><a href=""><i class="fab fa-twitter"></i></a></li>
								<li><a href=""><i class="fab fa-skype"></i></a></li>
							</ul>
						</div> --}}
						<div class="login-block">
							<a href="/login">Login</a>
                            <a> | </a>
							<a href="/register">Register</a>
						</div>
					</div>
				</div>
			</div>
			<!-- Top header Close -->
			<div class="main-header">
				<div class="container">
					<div class="logo-wrap" itemprop="logo">
						<img class="logo" src="images/logo.png" alt="Logo Image">
						<!-- <h1>Education</h1> -->
					</div>
					<div class="nav-wrap">
						<nav class="nav-desktop">
							<ul class="menu-list">
								<li><a href="#">Home</a></li>
                                <li><a href="">Sobre nós</a></li>
								{{-- <li class="menu-parent">Courses
									<ul class="sub-menu">
										<li><a href="#">Child</a></li>
										<li><a href="#">Child</a></li>
										<li class="menu-parent">Child
											<ul class="sub-menu">
												<li><a href="">Grand-child</a></li>
												<li><a href="">Grand-child</a></li>
											</ul>
										</li>
									</ul>
								</li> --}}
								<li class="menu-parent">Catalogo
									<ul class="sub-menu">
										<li><a href="#">Gruta #1</a></li>
										<li><a href="#">Gruta #2</a></li>
									</ul>
								</li>
								<li><a href="#gallery">Galeria</a></li>
								<li><a href="">Contactos</a></li>
							</ul>
						</nav>
						<div id="bar">
							<i class="fas fa-bars"></i>
						</div>
						<div id="close">
							<i class="fas fa-times"></i>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- Header Close -->
		@yield('content')
		<footer class="page-footer" itemprop="footer" itemscope itemtype="http://schema.org/WPFooter">
			<div class="footer-first-section">
				<div class="container">
					<div class="box-wrap" itemprop="about">
						<header>
							<h1>NABUC</h1>
						</header>
						<p><strong>"De uma caverna nada se tira, a não ser fotos; nada se deixa, a não ser pegadas; e nada se mata, a não ser o tempo."</strong><br><br>Lema dos exploradores de cavernas</p>
						{{-- <h4><a href="tel:+9779813639131"><i class="fas fa-phone"></i> +977 9813639131</a></h4> --}}
						<h4><a href="mailto:info@educationpro.com"><i class="fas fa-envelope"></i>nabuc.geral@gmail.com</a></h4>
						<h4><a href=""><i class="fas fa-map-marker-alt"></i>Centro de Estudos Históricos da Lourinha<br>Praça D. Lourenço Vicente, n. 1, 2530-126 Lourinhã</a></h4>
					</div>

                    <img class="my" src="images/logoHorisontal.png" style="width: 50%; height: 50%;">

					{{-- <div class="box-wrap">
						<header>
							<h1>links</h1>
						</header>
						<ul>
							<li><a href="#">Teacher</a></li>
							<li><a href="#">Courses</a></li>
							<li><a href="#">Courses</a></li>
							<li><a href="#">Courses</a></li>
							<li><a href="#">Courses</a></li>
							<li><a href="#">Courses</a></li>
						</ul>
					</div>

					<div class="box-wrap">
						<header>
							<h1>recent courses</h1>
						</header>
						<div class="recent-course-wrap">
							<img src="images/ui-ux.jpg" alt="Ui/Ux Designing">
							<a href=""><div class="course-name">
								<h3>UI/UX Designer courses</h3>
								<p><span>$50</span> $40</p>
							</div></a>
						</div>
						<div class="recent-course-wrap">
							<img src="images/ui-ux.jpg" alt="Ui/Ux Designing">
							<a href=""><div class="course-name">
								<h3>UI/UX Designer courses</h3>
								<p><span>$50</span> $40</p>
							</div></a>
						</div>
					</div> --}}

					<div class="box-wrap">
						<header>
							<h1>Queres contactar-nos?</h1>
						</header>
						<section class="quick-contact">
							<input type="email" name="email" placeholder="Email*">
							<textarea placeholder="Mensagem*"></textarea>
							<button>Enviar</button>
						</section>
					</div>

				</div>
			</div>
			<!-- End of box-Wrap -->
			<div class="footer-second-section">
				<div class="container">
					<hr class="footer-line">
					{{-- <ul class="social-list">
						<li><a href=""><i class="fab fa-facebook-square"></i></a></li>
						<li><a href=""><i class="fab fa-twitter"></i></a></li>
						<li><a href=""><i class="fab fa-skype"></i></a></li>
						<li><a href=""><i class="fab fa-youtube"></i></a></li>
						<li><a href=""><i class="fab fa-instagram"></i></a></li>
					</ul> --}}
                    <i class="fa-regular fa-compass"></i>
					<hr class="footer-line">
				</div>
			</div>
			<div class="footer-last-section">
				<div class="container">
					<p>Copyright 2022 &copy; <strong>nabuc.pt</strong><span> | </span> Paged developed by <a href="https://duartelacerda.github.io">Duarte Lacerda</a></p>
				</div>
			</div>
		</footer>
	</div>
    <script src="https://kit.fontawesome.com/7ecf1ea985.js" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/lightbox.js"></script>
	<script type="text/javascript" src="js/all.js"></script>
	<script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.js"></script>
	<script type="text/javascript" src="js/jquery.flexslider.js"></script>
	<script type="text/javascript" src="js/jquery.rateyo.js"></script>
	<!-- <script type="text/javascript" src="js/jquery.mmenu.all.js"></script> -->
	<!-- <script type="text/javascript" src="js/jquery.meanmenu.min.js"></script> -->
	<script type="text/javascript" src="js/custom.js"></script>
</body>
</html>
