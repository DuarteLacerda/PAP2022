<!DOCTYPE html>
<html>

<head>
    <title>NABUC</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/all.css">
    <link rel="stylesheet" type="text/css" href="/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="/css/lightbox.css">
    <link rel="stylesheet" type="text/css" href="/css/flexslider.css">
    <link rel="stylesheet" type="text/css" href="/css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="/css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="/css/jquery.rateyo.css" />
    <link rel="stylesheet" type="text/css" href="/css/jquery.mmenu.all.css" />
    <link rel="stylesheet" type="text/css" href="/css/meanmenu.min.css">
    <link rel="stylesheet" type="text/css" href="/css/inner-page-style.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="stylesheet" type="text/css" href="/css/styles.css">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700" rel="stylesheet">
    <link rel="shortcut icon" href="/images/favicon.ico" type="/image/x-icon">
</head>

<body>
    <div id="page" class="site" itemscope itemtype="http://schema.org/LocalBusiness">
        <header class="site-header">
            <div class="top-header">
                <div class="container">
                    <div class="top-header-left">
                        <div class="top-header-block">
                            <a href="mailto:nabuc.geral@gmail.com" itemprop="email"><i
                                    class="fas fa-envelope"></i>nabuc.geral@gmail.com
                            </a>
                        </div>
                    </div>
                    <div class="top-header-right">
                        <div class="top-header-block">
                            <a style="color: white; text-decoration: underline;"><i class="fas fa-map-marker-alt"></i>
                                Praça D. Lourenço Vicente, n.
                                1, 2530-126
                                Lourinhã</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Top header Close -->
            <div class="main-header">
                <div class="nav-nabuc">
                    <div class="nav-wrap">
                        <nav class="nav-desktop">
                            <ul class="menu-list">
                                <img class="logo" src="/images/logo.png" alt="Logo Image">
                                <li><a href="/">Home</a></li>
                                <li><a href="/about">Sobre nós</a></li>
                                <li class="menu-parent">Catalogo
                                    <ul class="sub-menu">
                                        @for ($i = 1; $i < 85; $i++)
                                            <li><a href="#">Gruta {{ $i }}</a></li>
                                        @endfor
                                    </ul>
                                </li>
                                <li class="menu-parent">Eventos
                                    <ul class="sub-menu">
                                        <li><a href="/eventos/pdmlnh">Participação na revisão do PDMLNH</a></li>
                                        <li><a href="/eventos/pel">Participação no PEL</a></li>
                                        <li><a href="/eventos/opl">OPL-2016</a></li>
                                        <li><a href="/eventos/proposta">Proposta "Valorização do Planalto
                                                das Cesaredas"</a></li>
                                        <li><a href="/eventos/congresso">I Congresso sobre o Planalto das Cesaredas</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-parent">Arqueologia
                                    <ul class="sub-menu">
                                        <li><a href="/arqueologia/fornos">Fornos de Cal no Concelho da Lourinhã</a>
                                        </li>
                                        <li><a href="/arqueologia/saoLourenco">A Presença Romana em São Lourenço dos
                                                Francos</a></li>
                                        <li><a href="/arqueologia/aqueduto">Aqueduto da Quinta do Perdigão</a></li>
                                        <li><a href="/arqueologia/esquecidos">Esquecidos na escuridão do tempo...</a>
                                        </li>
                                        <li><a href="/arqueologia/pataco">Um "Pataco" perdido...</a></li>
                                        <li><a href="/arqueologia/monardo">Monardo dos Francos</a></li>
                                    </ul>
                                </li>
                                <li class="menu-parent">Bioespeleologia
                                    <ul class="sub-menu">
                                        <li><a href="/bioespeleologia/insetos">Insectos</a></li>
                                        <li><a href="/bioespeleologia/aracnideos">Aracnídeos</a></li>
                                        <li><a href="/bioespeleologia/anfibios">Anfibios</a></li>
                                        <li><a href="/bioespeleologia/repteis">Repteis</a></li>
                                        <li><a href="/bioespeleologia/quiropteros">Quiropteros</a></li>
                                    </ul>
                                </li>
                                <li><a href="/rescue">Busca e Salvamento</a></li>
                                <li><a href="/espeleologia">Espeleologia</a></li>
                            </ul>
                        </nav>
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
                        <p><strong>"De uma caverna nada se tira, a não ser fotos; nada se deixa, a não ser pegadas; e
                                nada se mata, a não ser o tempo."</strong><br><br>Lema dos exploradores de cavernas</p>
                        <h4><a href="mailto:info@educationpro.com"><i
                                    class="fas fa-envelope"></i>nabuc.geral@gmail.com</a>
                        </h4>
                        <h4><a
                                href="https://www.google.com/maps/place/Pra%C3%A7a+Dom+Louren%C3%A7o+Vicente+1,+2530-126+Lourinh%C3%A3/@39.2422359,-9.3130431,17z/data=!3m1!4b1!4m5!3m4!1s0xd1f37d327e72021:0x282313acc3e1770a!8m2!3d39.2422359!4d-9.3130431"><i
                                    class="fas fa-map-marker-alt"></i>Centro de Estudos Históricos da
                                Lourinha<br>Praça D. Lourenço Vicente, n. 1, 2530-126 Lourinhã</a></h4>
                    </div>
                    <img class="my" src="/images/logoHorisontal.png" style="width: 50%; height: 50%;">
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
                    <i class="fa-regular fa-compass"></i>
                    <hr class="footer-line">
                </div>
            </div>
            <div class="footer-last-section">
                <div class="container">
                    <p>Copyright <?php echo date('Y'); ?> &copy; <strong>nabuc.pt</strong><span> | </span> Paged developed by
                        <a href="https://duartelacerda.github.io">Duarte Lacerda</a>
                    </p>
                </div>
            </div>
        </footer>
    </div>
    <script src="https://kit.fontawesome.com/7ecf1ea985.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="/js/lightbox.js"></script>
    <script type="text/javascript" src="/js/all.js"></script>
    <script type="text/javascript" src="/js/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="/js/owl.carousel.js"></script>
    <script type="text/javascript" src="/js/jquery.flexslider.js"></script>
    <script type="text/javascript" src="/js/jquery.rateyo.js"></script>
    <!-- <script type="text/javascript" src="js/jquery.mmenu.all.js"></script> -->
    <!-- <script type="text/javascript" src="js/jquery.meanmenu.min.js"></script> -->
    <script type="text/javascript" src="/js/custom.js"></script>
</body>

</html>
