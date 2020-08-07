<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>REMAQ de los Altos</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <link rel="stylesheet" >
  <!-- Favicons -->
  <link href="{{ asset('img/favicon.png') }}" rel="icon">
  <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{ asset('lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{ asset('lib/nivo-slider/css/nivo-slider.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/owlcarousel/owl.carousel.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/owlcarousel/owl.transitions.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/venobox/venobox.css') }}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{ asset('lib/slick/slick.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('lib/slick/slick-theme.css') }}">

  <!-- Nivo Slider Theme -->
  <link href="{{ asset('css/nivo-slider-theme.css') }}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">

  <!-- Responsive Stylesheet File -->
  <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">

  <style type="text/css">

    * {
      box-sizing: border-box;
    }

    .slider {
        width: 80%;
        margin: 20px auto;
    }

    .slick-slide {
      margin: 0px 20px;
    }

    .slick-slide img {
      width: 100%;
    }

    .slick-prev:before,
    .slick-next:before {
      color: black;
    }


    .slick-slide {
      transition: all ease-in-out .3s;
      opacity: .2;
    }

    .slick-active {
      opacity: .5;
    }

    .slick-current {
      opacity: 1;
    }
  </style>

  <!-- =======================================================
    Theme Name: eBusiness
    Theme URL: https://bootstrapmade.com/ebusiness-bootstrap-corporate-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body data-spy="scroll" data-target="#navbar-example">

  <div id="preloader"></div>

  <header>
    <!-- header-area start -->
    <div id="sticker" class="header-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">

            <!-- Navigation -->
            <nav class="navbar navbar-default">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Brand -->
                <a class="navbar-brand page-scroll sticky-logo" href="index.html">
                  <!-- <h1><span>REMAQ</span> de los Altos</h1> -->
                  <!-- Uncomment below if you prefer to use an image logo -->
                  <img src="{{asset('img/logo5.png') }}"  alt="" title="">
                </a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                <ul class="nav navbar-nav navbar-right">
                  <li>
                    <div class="input-group page-scroll" style="padding-top: 17px; width: 300px;">
                      <input type="text" class="form-control"  placeholder="Producto">
                      <span class="input-group-btn">
                        <button class="btn btn-default" type="button">Buscar</button>
                      </span>
                    </div>
                  </li>
                  <li class="active">
                    <a class="page-scroll" href="#home">inicio</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#about">Nosotros</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#portfolio">Equipos y productos</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#contact">Contactanos</a>
                  </li>
                </ul>
              </div>
              <!-- navbar-collapse -->
            </nav>
            <!-- END: Navigation -->
          </div>
        </div>
      </div>
    </div>
    <!-- header-area end -->
  </header>
  <!-- header end -->

  <!-- Start Slider Area -->
  <div id="home" class="slider-area">
    <div class="bend niceties preview-2">
      <div id="ensign-nivoslider" class="slides">
        <img src="img/slider/1862021.jpeg" alt="" title="#slider-direction-1" />
        <img src="img/slider/rastreo-maquinaria-small.jpg" alt="" title="#slider-direction-2" />
        <img src="img/slider/maquinaria.jpg" alt="" title="#slider-direction-3" />
      </div>

      <!-- direction 1 -->
      <div id="slider-direction-1" class="slider-direction slider-one">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow slideInDown" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1">Información de tu Empresa 1 </h2>
                </div>
                <!-- layer 2 -->
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2">Descripcion publicacion 1</h1>
                </div>
                <!-- layer 3 -->
                <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <a class="ready-btn right-btn page-scroll" href="#services">Ver productos</a>
                  <a class="ready-btn page-scroll" href="#about">Conocenos</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- direction 2 -->
      <div id="slider-direction-2" class="slider-direction slider-two">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content text-center">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1">Información de tu Empresa 2 </h2>
                </div>
                <!-- layer 2 -->
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2">Descripcion publicacion 2</h1>
                </div>
                <!-- layer 3 -->
                <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <a class="ready-btn right-btn page-scroll" href="#services">Ver productos</a>
                  <a class="ready-btn page-scroll" href="#about">Conocenos</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- direction 3 -->
      <div id="slider-direction-3" class="slider-direction slider-two">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1">Información de tu Empresa 3</h2>
                </div>
                <!-- layer 2 -->
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2">Descripcion publicacion 3</h1>
                </div>
                <!-- layer 3 -->
                <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <a class="ready-btn right-btn page-scroll" href="#services">Ver productos</a>
                  <a class="ready-btn page-scroll" href="#about">Conocenos</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Slider Area -->

  <!-- Start About area -->
  <div id="about" class="about-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Nosotros</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- single-well start-->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="well-left">
            <div class="single-well">
              <a href="#">
								  <img src="img/about/1.jpeg" alt="">
								</a>
            </div>
          </div>
        </div>
        <!-- single-well end-->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="well-middle">
            <div class="single-well">
              <a href="#">
                <h4 class="sec-head">Nuestra Misión</h4>
              </a>
              <p>
                Aqui va nuestra mision.... Redug Lagre dolor sit amet, consectetur adipisicing elit. Itaque quas officiis iure aspernatur sit adipisci quaerat unde at nequeRedug Lagre dolor sit amet, consectetur adipisicing elit. Itaque quas officiis iure
              </p>
              <ul>
                <li>
                  <i class="fa fa-check"></i> Interior design Package
                </li>
                <li>
                  <i class="fa fa-check"></i> Building House
                </li>
                <li>
                  <i class="fa fa-check"></i> Reparing of Residentail Roof
                </li>
                <li>
                  <i class="fa fa-check"></i> Renovaion of Commercial Office
                </li>
                <li>
                  <i class="fa fa-check"></i> Make Quality Products
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- End col-->
      </div>
      <hr>
      <div class="row">
        <!-- single-well end-->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="well-middle">
            <div class="single-well">
              <a href="#">
                <h4 class="sec-head">Nuestra Vision</h4>
              </a>
              <p>
                Aqui va nuestra Vision.... Redug Lagre dolor sit amet, consectetur adipisicing elit. Itaque quas officiis iure aspernatur sit adipisci quaerat unde at nequeRedug Lagre dolor sit amet, consectetur adipisicing elit. Itaque quas officiis iure
              </p>
              <ul>
                <li>
                  <i class="fa fa-check"></i> Interior design Package
                </li>
                <li>
                  <i class="fa fa-check"></i> Building House
                </li>
                <li>
                  <i class="fa fa-check"></i> Reparing of Residentail Roof
                </li>
                <li>
                  <i class="fa fa-check"></i> Renovaion of Commercial Office
                </li>
                <li>
                  <i class="fa fa-check"></i> Make Quality Products
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- single-well start-->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="well-left">
            <div class="single-well">
              <a href="#">
								  <img src="img/about/2.jpg" alt="">
								</a>
            </div>
          </div>
        </div>
        <!-- End col-->
      </div>
      <!-- single-well start-->
      <hr>
      <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="well-left">
            <div class="single-well">
              <a href="#">
                  <img src="img/about/3.jpg" alt="">
                </a>
            </div>
          </div>
        </div>
        <!-- single-well end-->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="well-middle">
            <div class="single-well">
              <a href="#">
                <h4 class="sec-head">Valores</h4>
              </a>
              <p>
                Aqui van los valores.... Redug Lagre dolor sit amet, consectetur adipisicing elit. Itaque quas officiis iure aspernatur sit adipisci quaerat unde at nequeRedug Lagre dolor sit amet, consectetur adipisicing elit. Itaque quas officiis iure
              </p>
              <ul>
                <li>
                  <i class="fa fa-check"></i> Interior design Package
                </li>
                <li>
                  <i class="fa fa-check"></i> Building House
                </li>
                <li>
                  <i class="fa fa-check"></i> Reparing of Residentail Roof
                </li>
                <li>
                  <i class="fa fa-check"></i> Renovaion of Commercial Office
                </li>
                <li>
                  <i class="fa fa-check"></i> Make Quality Products
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- End col-->
      </div>
    </div>
  </div>
  <!-- End About area -->
  <!-- Start portfolio Area -->
  <div id="portfolio" class="portfolio-area area-padding fix">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Catalogos de productos</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- Start Portfolio -page -->
        <div class="awesome-project-1 fix">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="awesome-menu ">
              <ul class="project-menu">
                <li>
                  <a href="#" class="active" data-filter="*">Todo</a>
                </li>
                <li>
                  <a href="#" data-filter=".maquinaria">Maquinaria</a>
                </li>
                <li>
                  <a href="#" data-filter=".refacciones">Refacciones</a>
                </li>
                <li>
                  <a href="#" data-filter=".renta">Renta Equipo</a>
                </li>
                <li>
                  <a href="#" data-filter=".tecnologias">Tecnologias</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="awesome-project-content">
          <!-- single-awesome-project start -->
          <div class="col-md-4 col-sm-4 col-xs-12 maquinaria">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="img/portfolio/1.jpg" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a href="#contactanos" data-toggle="modal" data-target="#contactanos">
                    <!--<a class="venobox" data-gall="myGallery" href="img/portfolio/1.jpg">-->
                      <h4>Maquinaria Nueva</h4>
                      <span>Realiza tu cotización</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- single-awesome-project end -->
          <!-- single-awesome-project start -->
          <div class="col-md-4 col-sm-4 col-xs-12 renta maquinaria">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="img/portfolio/2.jpg" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a href="#contactanos" data-toggle="modal" data-target="#contactanos">
                    <!--<a class="venobox" data-gall="myGallery" href="img/portfolio/2.jpg">-->
                      <h4>Maquinaria Usada</h4>
                      <span>Realiza tu cotización</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- single-awesome-project end -->
          <!-- single-awesome-project start -->
          <div class="col-md-4 col-sm-4 col-xs-12 renta">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="img/portfolio/3.jpg" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a href="#contactanos" data-toggle="modal" data-target="#contactanos">
                    <!--<a class="venobox" data-gall="myGallery" href="img/portfolio/3.jpg">-->
                      <h4>Renta de equipo</h4>
                      <span>Realiza tu cotización</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- single-awesome-project end -->
          <!-- single-awesome-project start -->
          <div class="col-md-4 col-sm-4 col-xs-12 refacciones">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="img/portfolio/4.jpg" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a href="#contactanos" data-toggle="modal" data-target="#contactanos">
                      <h4>Refacciones</h4>
                      <span>Realiza tu cotización</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- single-awesome-project end -->
          <!-- single-awesome-project start -->
          <div class="col-md-4 col-sm-4 col-xs-12 refacciones">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="img/portfolio/5.jpg" alt="" /></a>
                <div class="add-actions text-center text-center">
                  <div class="project-dec">
                    <a href="#contactanos" data-toggle="modal" data-target="#contactanos">
                    <!--<a class="venobox" data-gall="myGallery" href="img/portfolio/5.jpg">-->
                      <h4>Llantas</h4>
                      <span>Realiza tu cotización</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- single-awesome-project end -->
          <!-- single-awesome-project start -->
            <div class="col-md-4 col-sm-4 col-xs-12 tecnologias">
                <div class="single-awesome-project">
                    <div class="awesome-img">
                        <a href="#"><img src="img/portfolio/6.jpeg" alt="" /></a>
                        <div class="add-actions text-center">
                            <div class="project-dec">
                                <a href="#contactanos" data-toggle="modal" data-target="#contactanos">
                                <!--<a class="venobox" data-gall="myGallery" href="img/portfolio/6.jpeg">-->
                                <h4>Nuevas tecnologias</h4>
                                <span>Realiza tu cotización</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          <!-- single-awesome-project end -->
        </div>
      </div>
    </div>
  </div>
  <!-- awesome-portfolio end -->
  <section class="autoplay slider">
    <div class="single-awesome-project">
        <div class="awesome-img">
            <a href="#"><img src="img/portfolio/6.jpeg" alt="" /></a>
            <div class="add-actions text-center">
                <div class="project-dec">
                    <a href="#contactanos" data-toggle="modal" data-target="#contactanos">
                    <!--<a class="venobox" data-gall="myGallery" href="img/portfolio/6.jpeg">-->
                    <h4>Nuevas tecnologias</h4>
                    <span>Realiza tu cotización</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="single-awesome-project">
        <div class="awesome-img">
          <a href="#"><img src="img/portfolio/5.jpg" alt="" /></a>
          <div class="add-actions text-center text-center">
            <div class="project-dec">
              <a href="#contactanos" data-toggle="modal" data-target="#contactanos">
              <!--<a class="venobox" data-gall="myGallery" href="img/portfolio/5.jpg">-->
                <h4>Llantas</h4>
                <span>Realiza tu cotización</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    <div>
        <div class="single-awesome-project">
        <div class="awesome-img">
            <a href="#"><img src="img/portfolio/4.jpg" alt="" /></a>
            <div class="add-actions text-center">
            <div class="project-dec">
                <a href="#contactanos" data-toggle="modal" data-target="#contactanos">
                <h4>Refacciones</h4>
                <span>Realiza tu cotización</span>
                </a>
            </div>
            </div>
        </div>
        </div>
    </div>
    <div>
        <div class="single-awesome-project">
        <div class="awesome-img">
            <a href="#"><img src="img/portfolio/3.jpg" alt="" /></a>
            <div class="add-actions text-center">
            <div class="project-dec">
                <a href="#contactanos" data-toggle="modal" data-target="#contactanos">
                <!--<a class="venobox" data-gall="myGallery" href="img/portfolio/3.jpg">-->
                <h4>Renta de equipo</h4>
                <span>Realiza tu cotización</span>
                </a>
            </div>
            </div>
        </div>
        </div>
    </div>
    <div>
        <div class="single-awesome-project">
        <div class="awesome-img">
            <a href="#"><img src="img/portfolio/2.jpg" alt="" /></a>
            <div class="add-actions text-center">
            <div class="project-dec">
                <a href="#contactanos" data-toggle="modal" data-target="#contactanos">
                <!--<a class="venobox" data-gall="myGallery" href="img/portfolio/2.jpg">-->
                <h4>Maquinaria Usada</h4>
                <span>Realiza tu cotización</span>
                </a>
            </div>
            </div>
        </div>
        </div>
    </div>
    <div>
        <div class="single-awesome-project">
        <div class="awesome-img">
            <a href="#"><img src="img/portfolio/1.jpg" alt="" /></a>
            <div class="add-actions text-center">
            <div class="project-dec">
                <a href="#contactanos" data-toggle="modal" data-target="#contactanos">
                <!--<a class="venobox" data-gall="myGallery" href="img/portfolio/1.jpg">-->
                <h4>Maquinaria Nueva</h4>
                <span>Realiza tu cotización</span>
                </a>
            </div>
            </div>
        </div>
        </div>
    </div>
    <div>
      <img src="http://placehold.it/500x500?text=7">
    </div>
    <div>
      <img src="http://placehold.it/500x500?text=8">
    </div>
    <div>
      <img src="http://placehold.it/500x500?text=9">
    </div>
  </section>
  <!-- Start contact Area -->
  <div id="contact" class="contact-area">
    <div class="contact-inner area-padding">
      <div class="contact-overly"></div>
      <div class="container ">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Contactanos</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- Start contact icon column -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="fa fa-mobile"></i>
                <p>
                  Telefono: {{ $informacion['telefono']}}<br>
                  <span>{{ $informacion['horario']}}</span>
                </p>
              </div>
            </div>
          </div>
          <!-- Start contact icon column -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="fa fa-envelope-o"></i>
                <p>
                    Email: {{ $informacion['email']}}<br>
                  <span>Web: www.remaqdelosaltos.com</span>
                </p>
              </div>
            </div>
          </div>
          <!-- Start contact icon column -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="fa fa-map-marker"></i>
                <p>
                  Dirección: {{ $informacion['direccion']}}<br>
                  <span>{{ $informacion['municipio']}}, {{ $informacion['estado']}}</span>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row text-center">
          <h4>Si prefieres envianos mensaje directo a nuestras redes sociales.</h4>
        </div>
        <div class="row">
          <div class="col-md-1 col-md-offset-4 col-xs-4 text-center">
            <a href="https://api.whatsapp.com/send?phone=+521{{ $informacion['no_whatsapp']}}">
              <img src="img/whatsapp.png" alt="Envianos un WhatsApp" width="50" height="50">
            </a>
          </div>
          <div class="col-md-1 col-xs-4 text-center">
            <a href="{{ $informacion['facebook']}}">
              <img src="img/facebook.png" alt="Envianos un mensaje por Facebook" width="50" height="50">
            </a>
          </div>
          <div class="col-md-1 col-xs-4 text-center">
            <a href="{{ $informacion['instagram']}}">
              <img src="img/instagram.png" alt="Envianos un mensaje por instagram" width="50" height="50">
            </a>
          </div>
        </div>
        <br>
        <div class="row text-center">
          <h4>Tambien puedes llenar el siguiente formulario.</h4>
        </div>
        <div class="row">
          <!-- Start Google Map -->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <!-- Start Map -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d659.2827716508166!2d-102.75248852068736!3d20.81285858769398!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8429262eed4a1019%3A0x28e204d415a8203!2sBlvd.%20Anacleto%20Glez%20Flores%20Nte.%20180%2C%20San%20Miguel%2C%2047660%20Tepatitl%C3%A1n%20de%20Morelos%2C%20Jal.!5e0!3m2!1ses-419!2smx!4v1596769075867!5m2!1ses-419!2smx" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
            <!-- End Map -->
          </div>
          <!-- End Google Map -->
          <!-- Start  contact -->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="form contact-form">
              <div id="sendmessage">Tu mensaje se ha enviado, ¡Gracias!</div>
              <div id="errormessage"></div>
              <form action="" method="post" role="form" class="contactForm">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Tu nombre" data-rule="minlen:4" data-msg="Por favor, escribe tu nombre completo." />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Correo electronico" data-rule="email" data-msg="Por favor, ingresa un correo valido." />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="no_serie" id="no_serie" placeholder="Numero de Serie de la maquina" data-rule="minlen:4" data-msg="Por favor, ingresa un numero de serie valido." />
                    <div class="validation"></div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="mod_maquina" id="mod_maquina" placeholder="Modelo de la maquina" data-rule="minlen:4" data-msg="Por favor ingresa el modelo de tu maquina." />
                    <div class="validation"></div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="no_pieza" id="no_pieza" placeholder="Numero de pieza (Opcional)" />
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Telefono" data-rule="minlen:4" data-msg="Por favor ingresa tu numero de telefono." />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Describe tu mensaje, ¡Estamos para ayudarte!" placeholder="Describe tu mensaje"></textarea>
                  <div class="validation"></div>
                </div>
                <div class="text-center"><button type="submit">Enviar solicitud</button></div>
              </form>
            </div>
          </div>
          <!-- End Left contact -->
        </div>
      </div>
    </div>
  </div>
  <!-- End Contact Area -->
  <!-- Start Footer bottom Area -->
  <footer>
    <div class="footer-area">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <div class="footer-logo">
                  <h2><span>REMAQ</span> de los Altos</h2>
                </div>

                <p>{{ $informacion['descripcion_empresa']}}</p>
                <div class="footer-icons">
                  <ul>
                    <li>
                      <a href="{{ $informacion['facebook']}}"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                      <a href="{{ $informacion['instagram']}}"><i class="fa fa-instagram"></i></a>
                    </li>
                    <li>
                      <a href="https://api.whatsapp.com/send?phone=+521{{ $informacion['no_whatsapp']}}"><i class="fa fa-whatsapp"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <h4>Información</h4>
                <p>{{ $informacion['informacion_footer']}}</p>
                <div class="footer-contacts">
                  <p><span>Tel:</span> {{ $informacion['telefono']}}</p>
                  <p><span>Email:</span> {{ $informacion['email']}}</p>
                  <p><span>Horarios:</span> {{ $informacion['horario']}}</p>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <h4>Catalogos</h4>
                <div class="flicker-img">
                  <a href="#"><img src="img/portfolio/1.jpg" alt=""></a>
                  <a href="#"><img src="img/portfolio/2.jpg" alt=""></a>
                  <a href="#"><img src="img/portfolio/3.jpg" alt=""></a>
                  <a href="#"><img src="img/portfolio/4.jpg" alt=""></a>
                  <a href="#"><img src="img/portfolio/5.jpg" alt=""></a>
                  <a href="#"><img src="img/portfolio/6.jpeg" alt=""></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- Modal 1 -->
  <div class="modal fade contactanos" tabindex="-1" aria-labelledby="contactanos" aria-hidden="true" id="contactanos" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h5 class="modal-title">¡Contactanos! Cuanto antes tendremos tu cotización</h5>
        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <div class="col-xs-12 text-center">Pregunta desde nuestras redes sociales.</div>
            <div class="row">
              <div class="col-md-4 col-md-offset-2 col-xs-6">
                <a href="https://api.whatsapp.com/send?phone=+521{{ $informacion['no_whatsapp']}}"
                  class="btn btn-success btn-xs" target=”_blank”>Contactanos por WhatsApp</a>
              </div>
              <div class="col-md-4 col-xs-6">
                <a href="{{ $informacion['facebook']}}" target=”_blank”
                  class="btn btn-primary btn-xs">Contactanos por Facebook</a>
              </div>
            </div>
            <div class="col-xs-12 text-center">Si lo prefieres llena el siguiente formulario</div>

            <!-- Formulario de contacto -->
            <div class="form contact-form">
              <div id="sendmessage">Tu mensaje se ha enviado, ¡Gracias!</div>
              <div id="errormessage"></div>
              <form action="" method="post" role="form" class="contactForm">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Tu nombre" data-rule="minlen:4" data-msg="Por favor, escribe tu nombre completo." />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Correo electronico" data-rule="email" data-msg="Por favor, ingresa un correo valido." />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="no_serie" id="no_serie" placeholder="Numero de Serie de la maquina" data-rule="minlen:4" data-msg="Por favor, ingresa un numero de serie valido." />
                    <div class="validation"></div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="mod_maquina" id="mod_maquina" placeholder="Modelo de la maquina" data-rule="minlen:4" data-msg="Por favor ingresa el modelo de tu maquina." />
                    <div class="validation"></div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="no_pieza" id="no_pieza" placeholder="Numero de pieza (Opcional)" />
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Telefono" data-rule="minlen:4" data-msg="Por favor ingresa tu numero de telefono." />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Describe tu mensaje, ¡Estamos para ayudarte!" placeholder="Describe tu mensaje"></textarea>
                  <div class="validation"></div>
                </div>
              </form>
            </div>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Enviar</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="{{ asset('lib/jquery/jquery.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('lib/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('lib/venobox/venobox.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('lib/knob/jquery.knob.js') }}" type="text/javascript"></script>
  <script src="{{ asset('lib/wow/wow.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('lib/parallax/parallax.js') }}" type="text/javascript"></script>
  <script src="{{ asset('lib/easing/easing.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('lib/nivo-slider/js/jquery.nivo.slider.js') }}" type="text/javascript"></script>
  <script src="{{ asset('lib/appear/jquery.appear.js') }}" type="text/javascript"></script>
  <script src="{{ asset('lib/isotope/isotope.pkgd.min.js') }}" type="text/javascript"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <script src="{{ asset('js/main.js') }}" type="text/javascript"></script>


  <script src="{{ asset('lib/slick/slick.js') }}" type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript">
    $(document).on('ready', function() {
        $(".center").slick({
            dots: true,
            infinite: true,
            centerMode: true,
            slidesToShow: 3,
            slidesToScroll: 3
        });
        $('.autoplay').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
        });
    });
</script>
</body>
</html>
