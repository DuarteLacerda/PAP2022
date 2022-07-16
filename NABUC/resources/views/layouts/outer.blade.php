<!DOCTYPE html>
<html lang="pt">

<head>
    <title>NABUC</title>
    <meta charset="UTF-8" http-equiv="accept-language" content="pt, en">
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
    <header>
        <div class="row" style="background-color: #404040; height: 56px; align-items: center;">
            <div class="col">
                <h4><a href="mailto:nabuc.geral@gmail.com"><i class="fas fa-envelope"></i>&nbspnabuc.geral@gmail.com</a>
                </h4>
            </div>
            <div class="col">
                <h4><a
                        href="https://www.google.com/maps/place/Pra%C3%A7a+Dom+Louren%C3%A7o+Vicente+1,+2530-126+Lourinh%C3%A3/@39.2422359,-9.3130431,17z/data=!3m1!4b1!4m5!3m4!1s0xd1f37d327e72021:0x282313acc3e1770a!8m2!3d39.2422359!4d-9.3130431"><i
                            class="fas fa-map-marker-alt"></i>&nbspCentro de Estudos Históricos da
                        Lourinha Praça D. Lourenço Vicente, n. 1, 2530-126 Lourinhã</a>
                </h4>
            </div>
        </div>
        <!-- the menu starts here -->
        <div class="navbar">

            <label for="togglericon" class="toggler" checked></label>
            <input type="checkbox" id="togglericon" class="toggler" />

            <div class="brand">
                <img class="logo" src="/images/logo.png" alt="Logo Image">
            </div>

            <div class="nav at-right">
                <!-- reposition the menu with: -->
                <!-- div class="nav at-center" -->
                <!-- div class="nav at-right"  -->

                <a href="/">Home</a>
                <a href="/about">Sobre nós</a>
                <a href="/catalogo">Catalogo</a>

                <div class="dropdown">
                    <label for="toggle-1">Eventos</label>
                    <input type="checkbox" id="toggle-1" />
                    <ul>
                        <li><a href="/eventos/pdmlnh">Participação na revisão do PDMLNH</a></li>
                        <li><a href="/eventos/pel">Participação no PEL</a></li>
                        <li><a href="/eventos/opl">OPL-2016</a></li>
                        <li><a href="/eventos/proposta">Proposta "Valorização do Planalto das Cesaredas</a></li>
                        <li><a href="/eventos/congresso">I Congresso sobre o Planalto das Cesaredas</a></li>
                    </ul>
                </div>

                <div class="dropdown">
                    <label for="toggle-2">Arqueologia</label>
                    <input type="checkbox" id="toggle-2" />
                    <ul>
                        <li><a href="/arqueologia/fornos">Fornos de Cal no Concelho da Lourinhã</a></li>
                        <li><a href="/arqueologia/saoLourenco">A Presença Romana em São Lourenço dos Francos</a>
                        </li>
                        <li><a href="/arqueologia/aqueduto">Aqueduto da Quinta do Perdigão</a></li>
                        <li><a href="/arqueologia/esquecidos">Esquecidos na escuridão do tempo...</a></li>
                        <li><a href="/arqueologia/pataco">Um "Pataco" perdido..</a></li>
                        <li><a href="/arqueologia/monardo">Monardo dos Francos</a></li>
                    </ul>
                </div>

                <div class="dropdown">
                    <label for="toggle-3">BioEspeleologia</label>
                    <input type="checkbox" id="toggle-3" />
                    <ul>
                        <li><a href="/bioespeleologia/insetos">Insectos</a></li>
                        <li><a href="/bioespeleologia/aracnideos">Aracnídeos</a></li>
                        <li><a href="/bioespeleologia/anfibios">Anfibios</a></li>
                        <li><a href="/bioespeleologia/repteis">Repteis</a></li>
                        <li><a href="/bioespeleologia/quiropteros">Quiropteros</a></li>
                    </ul>
                </div>

                <a href="/rescue">Busca e Salvamento</a>
                <a href="/espeleologia">Espeleologia</a>
            </div>
        </div>
        <!-- the menu ends here -->
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
                    <h4><a href="mailto:nabuc.geral@gmail.com"><i
                                class="fas fa-envelope"></i>nabuc.geral@gmail.com</a>
                    </h4>
                    <h4><a
                            href="https://www.google.com/maps/place/Pra%C3%A7a+Dom+Louren%C3%A7o+Vicente+1,+2530-126+Lourinh%C3%A3/@39.2422359,-9.3130431,17z/data=!3m1!4b1!4m5!3m4!1s0xd1f37d327e72021:0x282313acc3e1770a!8m2!3d39.2422359!4d-9.3130431"><i
                                class="fas fa-map-marker-alt"></i>Centro de Estudos Históricos da
                            Lourinha Praça D. Lourenço Vicente, n. 1, 2530-126 Lourinhã</a></h4>
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
                <p>Copyright <?php echo date('Y'); ?> &copy; <strong> <a
                            href="https://www.nabuc.pt">nabuc.pt</a></strong><span> | </span> Paged developed by
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
