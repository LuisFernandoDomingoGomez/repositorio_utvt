<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Inicio | UTVT</title>
    <!-- Stylesheets -->
    <link href="dist/css/bootstrap.css" rel="stylesheet">
    <link href="dist/css/style.css" rel="stylesheet">
    <link href="utvt/css/video.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link href="dist/css/responsive.css" rel="stylesheet">
</head>
<body class="home-two">
    <div class="page-wrapper">
        <!-- Main Header-->
        <header class="main-header header-two" style="position: relative; z-index: 2; background-color: white;">
            <!-- Header Upper -->
            <div class="header-upper">
                <div class="auto-container">
                    <div class="main-box clearfix">
                        <!--Logo-->
                        <div class="logo-box clearfix">
                            <div class="logo" align="right" style="margin-right: 190px;">
                                <a title="Logo UTVT"><img src="dist/images/utvt_logo.png" alt="no existe" width="85"></a>
                            </div>
                        </div>

                        <div class="nav-box clearfix">
                            <div class="links-box clearfix">
                                <div class="link">
                                    <a href="{{url('/dashboard')}}" class="theme-btn btn-style-four rounded-pill">Regresar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <section class="banner-section banner-two">
            <div class="auto-container">
                <div class="container">
                    <div class="main-video-container">
                        <video src="" loop controls class="main-video"></video>
                        <h3 class="main-vid-title">Reproduccion de Video</h3>
                    </div>
                    <div class="video-list-container">
                    @foreach ($recursos as $recurso)
                        <div class="list">
                            <video src="{{ asset($recurso->archivo) }}" class="list-video"></video>
                            <h3 class="list-title">{{$recurso->titulo}} - {{$recurso->autor}}</h3>
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </section>

        <!--Main Footer-->
        <footer class="footer-two">
            <div class="lower">
                <div class="auto-container">
                    <div class="inner">
                        <div class="copyright"> Copyright &copy; 2023. All rights reserved by Your Company.</div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

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

    <script src="utvt/js/video.js"></script>
</body>

</html>