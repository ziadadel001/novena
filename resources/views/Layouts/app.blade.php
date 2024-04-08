<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en">

<head>

    <!-- Basic Page Needs
  ================================================== -->
    <meta charset="utf-8">
    <title>@yield('title')</title>

    <!-- Mobile Specific Metas
  ================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Health Care Medical Html5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="author" content="Themefisher">
    <meta name="generator" content="Themefisher Novena HTML Template v1.0">

    <!-- theme meta -->
    <meta name="theme-name" content="novena" />

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.png') }}" />

    <!--
  Essential stylesheets
  =====================================-->
    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/icofont/icofont.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/slick-carousel/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/slick-carousel/slick/slick-theme.css') }}">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>

<body id="top">

    <!-- header start -->
    <header>
        <nav class="navbar navbar-expand-lg navigation" id="navbar">
            <div class="container">
                <a class="navbar-brand" href="{{ route('home.index') }}">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="" class="img-fluid">
                </a>
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain"
                    aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icofont-navigation-menu"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarmain">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="{{ route('home.index') }}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('about.index') }}">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('service.index') }}">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('department.index') }}">Department</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('Blogs.index') }}">Blogs</a></li>


                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="{{ route('Doctors.index') }}" id="dropdown03"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Doctors <i
                                    class="icofont-thin-down"></i></a>
                            <ul class="dropdown-menu" aria-labelledby="dropdown03">
                                <li><a class="dropdown-item" href="{{ route('Doctors.index') }}">Doctors</a></li>
                                <li><a class="dropdown-item" href="{{ route('appoinment.create') }}">Appoinment</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('contact.create') }}">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- header end -->

    @yield('content')

    <!-- footer Start -->
    <footer class="footer section gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mr-auto col-sm-6">
                    <div class="widget mb-5 mb-lg-0">
                        <div class="logo mb-4">
                            <img src="{{ asset('assets/images/logo.png') }}" alt="" class="img-fluid">
                        </div>
                        <p>Tempora dolorem voluptatum nam vero assumenda voluptate, facilis ad eos obcaecati tenetur
                            veritatis eveniet distinctio possimus.</p>

                        <ul class="list-inline footer-socials mt-4">
                            <li class="list-inline-item">
                                <a href="https://www.facebook.com/themefisher"><i class="icofont-facebook"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://twitter.com/themefisher"><i class="icofont-twitter"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.pinterest.com/themefisher/"><i class="icofont-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="widget mb-5 mb-lg-0">
                        <h4 class="text-capitalize mb-3">Department</h4>
                        <div class="divider mb-4"></div>

                        <ul class="list-unstyled footer-menu lh-35">
                            <li><a href="#!">Surgery </a></li>
                            <li><a href="#!">Wome's Health</a></li>
                            <li><a href="#!">Radiology</a></li>
                            <li><a href="#!">Cardioc</a></li>
                            <li><a href="#!">Medicine</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="widget mb-5 mb-lg-0">
                        <h4 class="text-capitalize mb-3">Support</h4>
                        <div class="divider mb-4"></div>

                        <ul class="list-unstyled footer-menu lh-35">
                            <li><a href="#!">Terms & Conditions</a></li>
                            <li><a href="#!">Privacy Policy</a></li>
                            <li><a href="#!">Company Support </a></li>
                            <li><a href="#!">FAQuestions</a></li>
                            <li><a href="#!">Company Licence</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="widget widget-contact mb-5 mb-lg-0">
                        <h4 class="text-capitalize mb-3">Get in Touch</h4>
                        <div class="divider mb-4"></div>

                        <div class="footer-contact-block mb-4">
                            <div class="icon d-flex align-items-center">
                                <i class="icofont-email mr-3"></i>
                                <span class="h6 mb-0">Support Available for 24/7</span>
                            </div>
                            <h4 class="mt-2"><a href="#">Support@email.com</a></h4>
                        </div>

                        <div class="footer-contact-block">
                            <div class="icon d-flex align-items-center">
                                <i class="icofont-support mr-3"></i>
                                <span class="h6 mb-0">Mon to Fri : 08:30 - 18:00</span>
                            </div>
                            <h4 class="mt-2"><a href="#">+23-456-6588</a></h4>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </footer>
    <!-- footer end -->



    <!--
    Essential Scripts
    =====================================-->
    <script src="{{ asset('assets/plugins/jquery/jquery.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/slick-carousel/slick/slick.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/shuffle/shuffle.min.js') }}"></script>

    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA"></script>
    <script src="{{ asset('assets/plugins/google-map/gmap.js') }}"></script>

    <script src="{{ asset('assets/js/script.js') }}"></script>

</body>

</html>
