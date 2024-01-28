
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="envalab">
    <link rel="shortcut icon" type="image/png" href="{{asset('update/assets/images/favicon.png')}}">
    <title>>@yield('title') | {{ env('APP_NAME') }}</title>
    <!--**************** Icon Css ****************-->
    <link href="{{asset('update/assets/css/icomoon.css')}}" rel="stylesheet">
    <!--**************** bootstrap Css ****************-->
    <link href="{{asset('update/assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <!--**************** animate Css ****************-->
    <link href="{{asset('update/assets/css/animate.css')}}" rel="stylesheet">
    <!--**************** All Slider Css ****************-->
    <link href="{{asset('update/assets/css/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('update/assets/css/owl.theme.css')}}" rel="stylesheet">
    <link href="{{asset('update/assets/css/slick.css')}}" rel="stylesheet">
    <link href="{{asset('update/assets/css/slick-theme.css')}}" rel="stylesheet">
    <link href="{{asset('update/assets/css/swiper.min.css')}}" rel="stylesheet">
    <!--**************** Others Plugin Css ****************-->
    <link href="{{asset('update/assets/css/meanmenu.css')}}" rel="stylesheet">
    <link href="{{asset('update/assets/css/owl.transitions.css')}}" rel="stylesheet">
    <link href="{{asset('update/assets/css/magnific-popup.css')}}" rel="stylesheet">
    <link href="{{asset('update/assets/css/jquery.fancybox.css')}}" rel="stylesheet">
    <link href="{{asset('update/assets/css/odometer-theme-default.css')}}" rel="stylesheet">
    <link href="{{asset('update/assets/sass/style.css')}}" rel="stylesheet">
</head>

<body>

    <!-- start page-wrap -->
    <div class="page-wrap">
        <!-- start preloader -->
        <div class="preloader">
            <div class="loader"></div>
        </div>
        <!-- end preloader -->
        <header class="header-area header-style-2">
            <!-- start-header-topbar -->
            <section class="topbar">
                <h2 class="hidden">some</h2>
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col col-lg-2 col-md-12 col-12">
                            <div class="contact-info social">
                                <ul>
                                    <li><a href="#"><i class="icon-35"></i></a></li>
                                    <li><a href="#"><i class="icon-34"></i></a></li>
                                    <li><a href="#"><i class="icon-33"></i></a></li>
                                    <li><a href="#"><i class="icon-32"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col col-lg-5 col-md-12 col-12">
                            <div class="contact-intro">
                                <ul>
                                    <li><i class="icon-31"></i> Get quick appointment and technical support: <a
                                            href="#">+(123) 456-7890</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col col-lg-5 col-md-12 col-12">
                            <div class="contact-intro">
                                <ul>
                                    <li><i class="icon-29"></i> 684 West College St. Sun City, USA</li>
                                    <li><i class="icon-30"></i> lawson@example.com</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end-header-topbar -->
            <div id="header-sticky" class="menu-area">
                <div class="container-fluid">
                    <div class="second-menu">
                        <div class="row align-items-center">
                            <div class="col-xl-2 col-lg-3 col-md-7 col-5">
                                <div class="logo">
                                    <a href="/"><h3 class="bg-light leadcml-5">SEA EMPOWERED</h3></a>
                                </div>
                            </div>
                            <div class="col-xl-7 col-lg-6 col-md-1 col-1 text-right text-xl-right">
                                <div class="main-menu">
                                    <nav id="mobile-menu">
                                        <ul class="nav">
                                            <li class="has-submenu">
                                                <a href="/">Home</a>
                                                {{-- <ul class="sub-menu">
                                                    <li><a href="/">Home Page 01</a></li>
                                                    <li><a href="index-2.html">Home Page 02</a></li>
                                                    <li><a href="index-3.html">Home Page 03</a></li>
                                                </ul> --}}
                                            </li>
                                            <li><a href="about.html">About</a></li>
                                            {{-- <li class="has-submenu"><a href="about.html">Pages</a>
                                                <ul class="sub-menu">
                                                    <li><a href="about.html">About</a></li>
                                                    <li><a href="team.html">Team Page</a></li>
                                                    <li><a href="team-single.html">Team Single</a></li>
                                                    <li><a href="pricing.html">Pricing</a></li>
                                                    <li><a href="faq.html">Faq</a></li>
                                                    <li><a href="404.html">404</a></li>
                                                </ul>
                                            </li> --}}
                                            {{-- <li class="has-submenu"><a href="service.html">Services</a>
                                                <ul class="sub-menu">
                                                    <li><a href="service.html">Services Style 1</a></li>
                                                    <li><a href="service-s2.html">Services Style 2</a></li>
                                                    <li><a href="service-s3.html">Services Style 3</a></li>
                                                    <li><a href="service-single.html">Service Single</a></li>
                                                </ul>
                                            </li> --}}
                                            <li class="has-submenu"><a class="" href="projects.html">Projects</a>
                                                {{-- <ul class="sub-menu">
                                                    <li><a class="active" href="projects.html">Projects Style 1</a></li>
                                                    <li><a href="projects-s2.html">Projects Style 2</a></li>
                                                    <li><a href="projects-s3.html">Projects Style 3</a></li>
                                                    <li><a href="projects-s4.html">Projects Style 4</a></li>
                                                    <li><a href="project-single.html">Project Single</a></li>
                                                </ul> --}}
                                            </li>
                                            <li class="has-submenu">
                                                <a href="/">Blog</a>
                                                {{-- <ul class="sub-menu">
                                                    <li><a href="blog.html">Blog Grid</a></li>
                                                    <li><a href="blog-style-2.html">Blog Grid Style 2</a></li>
                                                    <li><a href="blog-right-sidebar.html">Blog right sidebar</a></li>
                                                    <li><a href="blog-left-sidebar.html">Blog left sidebar</a></li>
                                                    <li><a href="blog-fullwidth.html">Blog fullwidth</a></li>
                                                    <li class="third-lavel-menu"><a href="blog-single.html">Blog Single</a>
                                                        <ul class="sub-menu">
                                                            <li><a href="blog-single.html">Blog single right sidebar</a></li>
                                                            <li><a href="blog-single-left-sidebar.html">Blog single left sidebar</a></li>
                                                            <li><a href="blog-single-fullwidth.html">Blog single fullwidth</a></li>
                                                        </ul>
                                                    </li>
                                                </ul> --}}
                                            </li>
                                            <li><a href="contact.html">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-4 col-6 text-left">
                                <div class="header-area-right">
                                    <ul>
                                        <li><a href="#" class="search-toggle-btn"><i class="icon-23"></i></a>
                                        </li>
                                        <li class="header-right-btn">
                                            <a href="contact.html" class="btn-style-1">Get A Quote</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mobile-menu"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
@yield('content')
        
        <!-- start of footer-section -->
        <footer class="footer-section">
            <div class="upper-footer">
                <div class="container">
                    <div class="row">
                        <div class="col col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="widget subscribe">
                                <h3>Let's Get Started</h3>
                                <form action="#">
                                    <div class="form-field">
                                        <input type="email" placeholder="Get News & Update" id="semail" required>
                                        <button type="submit"><i class="icon-22"></i></button>
                                    </div>
                                </form>
                                <div class="radio-buttons">
                                    <p>
                                        <input type="radio" id="attend" name="radio-group">
                                        <label for="attend">I agree to all your terms & policies</label>
                                    </p>
                                </div>
                                <div class="social">
                                    <ul>
                                        <li><a href="#"><i class="icon-35"></i></a></li>
                                        <li><a href="#"><i class="icon-32"></i></a></li>
                                        <li><a href="#"><i class="icon-34"></i></a></li>
                                        <li><a href="#"><i class="icon-33"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col col-xl-2 offset-xl-2 col-lg-2 col-md-6 col-sm-12 col-12">
                            <div class="widget link-widget">
                                <div class="widget-title">
                                    <h3>Quick Link</h3>
                                </div>
                                <ul>
                                    <li><a href="projects.html">Portfolio</a></li>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                    <li><a href="blog.html">Blog</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col col-xl-2 col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="widget link-widget">
                                <div class="widget-title">
                                    <h3>Contact Info</h3>
                                </div>
                                <div class="contact-ft">
                                    <ul>
                                        <li>Company -</li>
                                        <li>2972 Westheimer Rd. Santa Ana, Illinois 85486</li>
                                        <li>4(406) 555-0120</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col col-xl-2  offset-xl-1 col-lg-2 col-md-6 col-sm-12 col-12">
                            <div class="widget link-widget">
                                <div class="widget-title">
                                    <h3>Services</h3>
                                </div>
                                <ul>
                                    <li><a href="service-single.html">Business Services</a></li>
                                    <li><a href="service-single.html">Investment Planning</a></li>
                                    <li><a href="service-single.html">Consulting Service</a></li>
                                    <li><a href="service-single.html">Professional Advisory</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> <!-- end container -->
            </div>
            <div class="lower-footer">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col col-lg-8 col-12">
                            <ul class="lower-footer-link">
                                <li><a href="/">Home</a></li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="service.html">Service</a></li>
                                <li><a href="projects.html">Projects</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="contact.html">Contact Us</a></li>
                            </ul>
                        </div>
                        <div class="col col-lg-4 col-12">
                            <div class="copy-right">
                                <p class="copyright"> Copyright &copy; 2023 <a href="/">Consl.</a> All rights
                                    reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end of site-footer-section -->

        <!-- Search Popup -->
        <div class="header-search-form">
            <button class="close-header-search"><i class="icon-02"></i></button>
            <form method="post" action="#">
                <div class="form-group">
                    <input type="text" name="search" value="" placeholder="Search Here" required="">
                    <button type="submit" class="search-btn"><i class="icon-23"></i></button>
                </div>
            </form>
        </div>
        <!-- End Header Search -->
    </div>
    <!-- end of page-wrap -->

    <!-- All JavaScript files Here
    ********************************************* -->
    <!-- jquery Plugins -->
    <script src="{{asset('update/js/jquery.min.js')}}"></script>
    <!--**************** Bootstrap Plugins ****************-->
    <script src="{{asset('update/js/bootstrap.bundle.min.js')}}"></script>
    <!--**************** modernizr Plugins ****************-->
    <script src="{{asset('update/js/modernizr.custom.js')}}"></script>
    <!--**************** all-plugin-bundle ****************-->
    <script src="{{asset('update/js/all-plugin-bundle.js')}}"></script>
    <!--**************** mobail meanmenu ****************-->
    <script src="{{asset('update/js/jquery.meanmenu.min.js')}}"></script>
    <!--**************** all script file this template ****************-->
    <script src="{{asset('update/js/script.js')}}"></script>
</body>

</html>