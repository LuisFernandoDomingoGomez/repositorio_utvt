<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Inicio | UTVT</title>
    <!-- Stylesheets -->
    <link href="dist/css/bootstrap.css" rel="stylesheet">
    <link href="dist/css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link href="dist/css/responsive.css" rel="stylesheet">
</head>
<body class="home-two">
    <div class="page-wrapper">
        <!-- Preloader -->
        <!-- Main Header-->
        <header class="main-header header-two">
            <!-- Header Upper -->
            <div class="header-upper">
                <div class="auto-container">
                    <!-- Main Box -->
                    <div class="main-box clearfix">
                        <!--Logo-->
                        <div class="logo-box clearfix">
                            <div class="logo" align="right"><a title="Logo UTVT"><img src="dist/images/utvt_logo2.png" alt="no existe"
                                width="280" height="50px" ></a>
                            </div>
                        </div>
                        <div class="nav-box clearfix">
                            <!--Nav Outer-->
                            <div class="nav-outer clearfix">
                                <nav class="main-menu">
                                    <ul class="navigation clearfix" id="scroll-nav">
                                        <li><a href="#intro-section">Que somos</a></li>
                                        <li><a href="#why-token">Cursos</a></li>
                                        <li><a href="#roadmap">Inscripciones</a></li>
                                        <li><a href="#partners">Partners</a></li>
                                        <li><a href="#contact-section">Contact</a></li>
                                    </ul>
                                </nav>
                                <!-- Main Menu End-->
                            </div>
                            <!--Nav Outer End-->
                            <div class="links-box clearfix">
                                @if (Route::has('login'))
                                    <div class="link">
                                        @auth
                                        <a href="{{url('/dashboard')}}" class="theme-btn btn-style-four">panel</a>
                                        @else
                                        <a href="{{ route('login') }}" class="theme-btn btn-style-four">
                                            <span class="txt">Ingresar</span>
                                        </a>
                                        @endauth
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <section class="banner-section banner-two">
            <div class="curve-layer" style="background-image: url('images/background/banner-bg-2.png');"></div>
            <div class="banner-container">
                <div class="auto-container">
                    <div class="content-box">
                        <div class="row clearfix">
                            <!--Text Column-->
                            <div class="text-col col-lg-6 col-md-12 col-sm-12">
                                <div class="inner">
                                    <h1>Universidad Tecnologica del Valle de Toluca</h1>
                                    <div class="text">Departamento de Tecnologias de la Informacion</div>
                                    <div class="links-box clearfix">
                                        <div class="link"><a href="#" class="theme-btn btn-style-three"><span
                                            class="txt">Descargar</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Counter Column-->
                            <div class="counter-col col-lg-6 col-md-12 col-sm-12">
                                <div class="inner clearfix">
                                    <div class="inner-box">
                                        <h5>Proximos cursos disponibles en</h5>
                                        <div class="time-counter">
                                            <!-- Time Countdown -->
                                            <div class="time-countdown-two clearfix" data-countdown="2023/10/27">
                                            </div>
                                        </div>
                                        <div class="progress-box">
                                            <div class="bar-legend">fecha de curso</div>
                                            <div class="bar-outer">
                                                <div class="bar-inner">
                                                    <div class="bar" style="width: 50%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="link-box"><a href="#"
                                            class="theme-btn btn-style-three"><span class="txt">Informacion</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Banner Section -->

        <!--Intro Section-->
        <section class="intro-two" id="intro-section">
            <div class="auto-container">
                <div class="title-box-two centered">
                    <h3>¿Cual es el proposito del repositorio de aprendizaje?</h3>
                </div>
                <div class="row clearfix">
                    <!--Text Column-->
                    <div class="text-col col-lg-5 col-md-12 col-sm-12">
                        <div class="inner">
                            <div class="about">
                                <div class="info-block">
                                    <div class="inner-box">
                                        <div class="icon-box"><span class="icon fa fa-users"></span></div>
                                        <h5>Decentralized Platform</h5>
                                        <div class="text">Decentralized platforms are aiming to deal with the issue
                                            of data ownership</div>
                                    </div>
                                </div>
                                <div class="info-block">
                                    <div class="inner-box">
                                        <div class="icon-box"><span class="icon fa fa-globe"></span></div>
                                        <h5>Crowd Wisdom</h5>
                                        <div class="text">The process of taking into account the collective opinion
                                            of a group</div>
                                    </div>
                                </div>
                                <div class="info-block">
                                    <div class="inner-box">
                                        <div class="icon-box"><span class="icon fa fa-star"></span></div>
                                        <h5>Rewards MeAchanism</h5>
                                        <div class="text">The system pay a bonus for excellent individuals</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Image Column-->
                    <div class="image-col col-lg-7 col-md-12 col-sm-12">
                        <div class="inner">
                            <div class="image">
                                <img src="images/resource/f-image-3.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Why Section-->
        <section class="why-section-two" id="why-token">
            <div class="auto-container">
                <div class="title-box-two centered">
                    <h2>Vista de Cursos</h2>
                </div>
                <div class="row clearfix">
                    <!--Why Block-->
                    <div class="why-block-two col-lg-6 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="inner">
                                <div class="icon-box"><span class="icon"><img src="images/resource/icon-5.svg"
                                            alt=""></span></div>
                                <h4>Mobile payment made easy</h4>
                                <div class="text">There's no need to sign up, you can use a mobile device to pay with
                                    the most simple stepsThere's no need to sign up, you can use a mobile device to pay with
                                    the most simple stepsThere's no need to sign up, you can use a mobile device to pay with
                                    the most simple stepsThere's no need to sign up, you can use a mobile device to pay with
                                    the most simple stepsThere's no need to sign up, you can use a mobile device to pay with
                                    the most simple stepsThere's no need to sign up, you can use a mobile device to pay with
                                    the most simple stepsThere's no need to sign up, you can use a mobile device to pay with
                                    the most simple steps</div>
                            </div>
                        </div>
                    </div>
                    <!--Why Block-->
                    <div class="why-block-two col-lg-6 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="inner">
                                <div class="icon-box"><span class="icon"><img src="images/resource/icon-6.svg"
                                            alt=""></span></div>
                                <h4>No transaction fee</h4>
                                <div class="text">You can buy tokens how much you want without paying any transaction
                                    fee for our system</div>
                            </div>
                        </div>
                    </div>
                    <!--Why Block-->
                    <div class="why-block-two col-lg-6 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="inner">
                                <div class="icon-box"><span class="icon"><img src="images/resource/icon-7.svg"
                                            alt=""></span></div>
                                <h4>Protect the identity</h4>
                                <div class="text">If we detect a potential threat to your identity, we will alert you
                                    by text, email, phone or app</div>
                            </div>
                        </div>
                    </div>
                    <!--Why Block-->
                    <div class="why-block-two col-lg-6 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="inner">
                                <div class="icon-box"><span class="icon"><img src="images/resource/icon-8.svg"
                                            alt=""></span></div>
                                <h4>Security and control over money</h4>
                                <div class="text">We can provide high levels of security that allows the user to keep
                                    control over their money </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--How It Works-->
        <section class="how-it-works-two">
            <div class="auto-container">
                <div class="upper-row clearfix">
                    <div class="title">
                        <h3>Our technology</h3>
                        <div class="text">We use the most popular technology to securely buy, store & trade crypto.
                        </div>
                    </div>
                    <div class="more-link">
                        <a href="#" class="theme-btn"><span class="txt">See more</span><i
                                class="icon"><img src="images/icons/arrow-right-1.svg" alt=""></i></a>
                    </div>
                </div>
                <div class="row clearfix">
                    <!--Text Column-->
                    <div class="text-col col-lg-6 col-md-12 col-sm-12">
                        <div class="inner">
                            <div class="row clearfix">
                                <div class="info-block-two col-md-6 col-sm-12">
                                    <div class="inner-box">
                                        <div class="icon-box"><span class="icon"><img
                                                    src="images/resource/icon-9.svg" alt=""></span></div>
                                        <h5>Timestamp server</h5>
                                        <div class="text">The timestamp server is top notch </div>
                                    </div>
                                </div>
                                <div class="info-block-two col-md-6 col-sm-12">
                                    <div class="inner-box">
                                        <div class="icon-box"><span class="icon"><img
                                                    src="images/resource/icon-10.svg" alt=""></span></div>
                                        <h5>Reclaiming disk space</h5>
                                        <div class="text">Remove old transactions</div>
                                    </div>
                                </div>
                                <div class="info-block-two col-md-6 col-sm-12">
                                    <div class="inner-box">
                                        <div class="icon-box"><span class="icon"><img
                                                    src="images/resource/icon-11.svg" alt=""></span></div>
                                        <h5>Simplified payment verification</h5>
                                        <div class="text">verify payment without running a full node</div>
                                    </div>
                                </div>
                                <div class="info-block-two col-md-6 col-sm-12">
                                    <div class="inner-box">
                                        <div class="icon-box"><span class="icon"><img
                                                    src="images/resource/icon-12.svg" alt=""></span></div>
                                        <h5>Combining and splitting value</h5>
                                        <div class="text">Make a separate transaction</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Image Column-->
                    <div class="image-col col-lg-6 col-md-12 col-sm-12">
                        <div class="inner">
                            <div class="image">
                                <img src="images/resource/f-image-4.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Roadmap Section-->
        <section class="roadmap-two" id="roadmap">
            <div class="bg-layer" style="background-image: url('images/background/curved-layer-3.png');"></div>
            <div class="auto-container">
                <div class="title-box-two centered">
                    <h2>Roadmap</h2>
                </div>

                <div class="roadmap-box">

                    <div class="road-map-item clearfix">
                        <!--Roadmap Block-->
                        <div class="roadmap-block-two">
                            <div class="inner-box checked">
                                <div class="check-icon"><i class="fa-solid fa-check"></i></div>
                                <div class="date"><span>March 2021</span></div>
                                <div class="text">In this time period, our Intelligent and talent founders had a
                                    concept of creating our ICO to call for investment</div>
                            </div>
                        </div>
                    </div>

                    <div class="road-map-item clearfix">
                        <!--Roadmap Block-->
                        <div class="roadmap-block-two">
                            <div class="inner-box checked">
                                <div class="check-icon"><i class="fa-solid fa-check"></i></div>
                                <div class="date"><span>May 2021</span></div>
                                <div class="text">This is the period of time we spent most of time to research, made
                                    a strategy and completed our whitepaper</div>
                            </div>
                        </div>
                    </div>

                    <div class="road-map-item clearfix">
                        <!--Roadmap Block-->
                        <div class="roadmap-block-two">
                            <div class="inner-box">
                                <div class="check-icon"><i class="fa-solid fa-check"></i></div>
                                <div class="date"><span>July 2021</span></div>
                                <div class="text">After finishing researching and making a plan, right away we
                                    designed platform and demonstrated technik</div>
                            </div>
                        </div>
                    </div>

                    <div class="road-map-item clearfix">
                        <!--Roadmap Block-->
                        <div class="roadmap-block-two">
                            <div class="inner-box">
                                <div class="check-icon"><i class="fa-solid fa-check"></i></div>
                                <div class="date"><span>September 2021</span></div>
                                <div class="text">We published financing & Seed funding raised, so investors could
                                    track and know funding raising process</div>
                            </div>
                        </div>
                    </div>

                    <div class="road-map-item clearfix">
                        <!--Roadmap Block-->
                        <div class="roadmap-block-two">
                            <div class="inner-box">
                                <div class="check-icon"><i class="fa-solid fa-check"></i></div>
                                <div class="date"><span>November 2021</span></div>
                                <div class="text">We open global sales of ICOblock token, so all investors on the
                                    globe can purchase and sell our ICO easily</div>
                            </div>
                        </div>
                    </div>

                    <div class="road-map-item clearfix">
                        <!--Roadmap Block-->
                        <div class="roadmap-block-two">
                            <div class="inner-box">
                                <div class="check-icon"><i class="fa-solid fa-check"></i></div>
                                <div class="date"><span>January 2022</span></div>
                                <div class="text">Our founders are going to publish our prototype and link it to
                                    Ethereum blockchain with real-time scanning</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <section class="team-two" id="team-members">
            <div class="auto-container">
                <div class="title-box-two centered">
                    <h2>catalogo de cursos</h2>
                    <div class="text-content">Inscripciones de cursos disponibles </div>
                </div>
                <div class="tabs-box">
                    <div class="tabs-content">
                        <!--Tab-->
                        <div class="tab active-tab" id="team-tab-1">
                            <div class="row clearfix">
                                <!--Team Block-->    {{-- Inicio de la tarjetas en laravel --}}
                                
                                <div class="team-block-two col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                    <div class="inner-box">
                                        <div class="image-box"><a href="#"><img src="https://img.freepik.com/vector-premium/desarrollo-juegos-linea-proceso-creativo-diseno-videojuegos-computadora-programacion-tecnologia-digital-programadores-que-codifican-juegos-digitales-ui-desarrolladores-ux-que-trabajan-proyectos-entretenimiento_458444-1919.jpg?w=2000" alt=""></a></div>
                                        <div class="lower-box">
                                            <h5>Creacion de Videojuegos</h5>
                                            <div class="designation">Ruben Dario Hernandez Mendo</div>
                                            <br>
                                            <div class="tab-buttons">
                                                <ul class="clearfix">
                                                    <div class="link"><a href="#" class="theme-btn btn-style-three"><span
                                                        class="txt">Inscribirse</span></a>
                                                    </div>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- fin de la tarjeta --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Contact Section-->
        <section class="contact-two" id="contact-section">
            <div class="curve-image"><img src="images/background/curved-layer-4.png" alt=""></div>
            <div class="auto-container">
                <div class="title-box-two">
                    <h2>Registrar laboratorio</h2>
                </div>
                <div class="row clearfix">
                    <div class="info-col col-xl-4 col-lg-5 col-md-12">
                        <div class="inner">
                            <div class="info-box">
                                <ul class="info clearfix">
                                    <li class="email"><i class="icon fa-solid fa-envelope"></i><a
                                            href="mailto:Offer@cryptal.com">Offer@cryptal.com</a></li>
                                    <li class="phone"><i class="icon fa-solid fa-phone"></i><a
                                            href="tel:+17021234567">+1 702 123 4567</a></li>
                                    <li class="address"><i class="icon fa-solid fa-home"></i>Cuidad de Mexico
                                        <br>Direecion</li>
                                    <li class="map-link"><a href="#"><i class="fa fa-map-marker-alt"></i>View
                                            map</a></li>
                                </ul>
                            </div>
                            <div class="social-links">
                                <h6><span>Sigenos en </span></h6>
                                <ul class="clearfix">
                                    <li><a href="#"><span class="icon"><img src="images/icons/twitter-1.svg"
                                                    alt=""></span></a></li>
                                    <li><a href="#"><span class="icon"><img src="images/icons/facebook-1.svg"
                                                    alt=""></span></a></li>
                                    <li><a href="#"><span class="icon"><img src="images/icons/linkedin-1.svg"
                                                    alt=""></span></a></li>
                                    <li><a href="#"><span class="icon"><img
                                                    src="images/icons/instagram-1.svg" alt=""></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="form-col col-xl-8 col-lg-7 col-md-12">
                        <div class="form-box contact-form default-form">
                            <h4>Nombre de la Empresa o del Representante </h4>
                            <form method="post" action="index.html">
                                <div class="row clearfix">
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <div class="field-inner">
                                            <input type="text" name="username" value=""
                                                placeholder="First Name" required="">
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <div class="field-inner">
                                            <input type="text" name="lastname" value=""
                                                placeholder="Last Name" required="">
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <div class="field-inner">
                                            <input type="email" name="email" value=""
                                                placeholder="Email Address" required="">
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <div class="field-inner">
                                            <input type="text" name="phone" value=""
                                                placeholder="Phone Number" required="">
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <div class="field-inner">
                                            <textarea name="message" placeholder="Your Message ..." required=""></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <div class="text-center">
                                            <button class="theme-btn btn-style-three">
                                                <span class="btn-title">Mandar mensaje</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!--Partners Section-->
        <section class="partners-section" id="partners">
            <div class="auto-container">
                <div class="carousel-box">
                    <div class="partners-carousel owl-theme owl-carousel">
                        <div class="item">
                            <div class="image"><a href="#"><img src="images/resource/partner-1.png"
                                        alt=""></a></div>
                        </div>
                        <div class="item">
                            <div class="image"><a href="#"><img src="images/resource/partner-2.png"
                                        alt=""></a></div>
                        </div>
                        <div class="item">
                            <div class="image"><a href="#"><img src="images/resource/partner-3.png"
                                        alt=""></a></div>
                        </div>
                        <div class="item">
                            <div class="image"><a href="#"><img src="images/resource/partner-4.png"
                                        alt=""></a></div>
                        </div>
                        <div class="item">
                            <div class="image"><a href="#"><img src="images/resource/partner-5.png"
                                        alt=""></a></div>
                        </div>
                        <div class="item">
                            <div class="image"><a href="#"><img src="images/resource/partner-1.png"
                                        alt=""></a></div>
                        </div>
                        <div class="item">
                            <div class="image"><a href="#"><img src="images/resource/partner-2.png"
                                        alt=""></a></div>
                        </div>
                        <div class="item">
                            <div class="image"><a href="#"><img src="images/resource/partner-3.png"
                                        alt=""></a></div>
                        </div>
                        <div class="item">
                            <div class="image"><a href="#"><img src="images/resource/partner-4.png"
                                        alt=""></a></div>
                        </div>
                        <div class="item">
                            <div class="image"><a href="#"><img src="images/resource/partner-5.png"
                                        alt=""></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Newsletter Section-->
        <section class="newsletter-section">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="row clearfix">
                        <div class="title-col col-xl-4 col-lg-12 col-md-12">
                            <h3>suscribirse para recibir informacion</h3>
                            {{-- <div class="text">Sign up for ICO campaign updates.</div> --}}
                        </div>

                        <div class="form-col col-xl-8 col-lg-12 col-md-12">
                            <div class="form-box">
                                <form method="post" action="index.html">
                                    <div class="row clearfix">
                                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                            <div class="field-inner">
                                                <input type="text" name="username" value=""
                                                    placeholder="Full Name" required="">
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                            <div class="field-inner">
                                                <input type="email" name="email" value=""
                                                    placeholder="Email Address" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <button class="theme-btn btn-style-three">
                                        <span class="btn-title">Subscribe</span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Main Footer-->
        <footer class="footer-two">
            <div class="upper-section">

                <div class="auto-container">
                    <div class="row clearfix">

                        <div class="footer-column col-xl-4 col-lg-12 col-md-12 col-sm-12">
                            <div class="footer-widget about">
                                <div class="footer-logo"><a href="index.html" title="CryptLight"><img
                                            src="images/logo-3.svg" alt="" title="CryptLight"></a></div>
                                <div class="widget-content">
                                    <div class="text">Universidad Tecnologia del Valle de Toluca </div>
                                    <div class="link-box"><a href="#" class="theme-btn btn-style-three"><span
                                                class="txt">Acerca de Nosotros</span></a></div>
                                </div>
                            </div>
                        </div>

                        <div class="big-column col-xl-4 col-lg-6 col-md-6 col-sm-12">
                            <div class="row clearfix">
                                <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                    <div class="footer-widget">
                                        <div class="widget-title">
                                            <h5>Company</h5>
                                        </div>
                                        <div class="widget-content">
                                            <div class="links">
                                                <ul class="clearfix">
                                                    <li><a href="#">About</a></li>
                                                    <li><a href="#">Team</a></li>
                                                    <li><a href="#">Blog</a></li>
                                                    <li><a href="#">Contact</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                    <div class="footer-widget">
                                        <div class="widget-title">
                                            <h5>ICO FUNDING</h5>
                                        </div>
                                        <div class="widget-content">
                                            <div class="links">
                                                <ul class="clearfix">
                                                    <li><a href="#">Features</a></li>
                                                    <li><a href="#">Product</a></li>
                                                    <li><a href="#">Roadmap</a></li>
                                                    <li><a href="#">Token</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="footer-column col-xl-4 col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget">
                                <div class="widget-title">
                                    <h5>WE ACCEPT CREDIT CARDS</h5>
                                </div>
                                <div class="widget-content">
                                    <div class="cards"><img src="images/resource/cards.png" alt=""
                                            title="CryptLight"></div>
                                    <div class="social-links">
                                        <div class="s-title">Flow us :</div>
                                        <ul class="clearfix">
                                            <li><a href="#"><span class="icon"><img
                                                            src="images/icons/twitter-2.svg"
                                                            alt=""></span></a></li>
                                            <li><a href="#"><span class="icon"><img
                                                            src="images/icons/facebook-2.svg"
                                                            alt=""></span></a></li>
                                            <li><a href="#"><span class="icon"><img
                                                            src="images/icons/linkedin-2.svg"
                                                            alt=""></span></a></li>
                                            <li><a href="#"><span class="icon"><img
                                                            src="images/icons/instagram-2.svg"
                                                            alt=""></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="lower">
                <div class="auto-container">
                    <div class="inner">
                        <div class="copyright"> Copyright &copy; 2023. All rights reserved by Your Company.</div>
                    </div>
                </div>
            </div>

        </footer>

    </div>
    <!--End pagewrapper-->

    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target="html">
        <span class="icon"><img src="dist/images/icons/arrow-up.svg" alt="" title="Go To Top"></span>
    </div>

    <script src="dist/js/popper.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="dist/js/PageScroll.js"></script>
    <script src="dist/js/jquery.js"></script>
    <script src="dist/js/owl.js"></script>
    <script src="dist/js/bxslider.js"></script>
    <script src="dist/js/countdown.js"></script>
    <script src="dist/js/jquery.fancybox.js"></script>
    <script src="dist/js/jquery-ui.js"></script>
    <script src="dist/js/appear.js"></script>
    <script src="dist/js/wow.js"></script>
    <script src="dist/js/custom-script.js"></script>
</body>

</html>