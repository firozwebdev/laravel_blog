<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Ruze | List</title>

    <!-- Stylesheets
    =============================================================== -->
    <!-- Bootstrap CSS -->

    <link href="{{ asset('front-end/css/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Fonts CSS -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,800,700,600,800,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>

    <!-- Font Awesome CSS -->

    <link href="{{ asset('front-end/css/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front-end/js/owl.carousel/assets/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('front-end/js/owl.carousel/assets/owl.theme.default.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front-end/css/animate.min.csss') }}" rel="stylesheet">
    <link href="{{ asset('front-end/css/slimmenu/slimmenu.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front-end/css/app.min.css') }}" rel="stylesheet">

    <!-- owlcarousel CSS -->






    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<!-- Header Style 1
=============================================================== -->
<header id="header-style-1" class="home_header">

    <!-- Tap Navigation -->
    <div class="top-menu-wrap">
        <div class="container">

            <ul id="top-menu" class="slimmenu">
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="about.html">Policy</a></li>
                <li><a href="about.html">Advertisement</a></li>
                <li><a href="{{ route('user.register') }}">Register</a></li>
            </ul>

            <ul class="social-media">
                <li>
                    <a href="index_list.html#"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                    <a href="index_list.html#"><i class="fa fa-facebook"></i></a>
                </li>
                <li>
                    <a href="index_list.html#"><i class="fa fa-google-plus"></i></a>
                </li>
                <li>
                    <a href="index_list.html#"><i class="fa fa-pinterest"></i></a>
                </li>
                <li>
                    <a href="contact.html"><i class="fa fa-linkedin"></i></a>
                </li>
            </ul>

        </div>
    </div>

    <!-- Main Navigation -->
    <div class="main-menu-wrap"  style="z-index: 5000;">
        <div class="container">
            <div class="row">

                <div class="site-logo-wrap col-sm-3">
                    <a href="index_list.html#" class="site-logo"><img src="{{ asset('front-end/imgs/logo.png') }}" alt="Ruze Logo"></a>
                </div>

                <div class="main-menu-inner-wrap col-sm-9">
                    <ul id="main-menu" class="slimmenu">
                        <li><a href="index.html">Home</a>
                            <ul>
                                <li><a href="index.html">Home Default</a></li>
                                <li><a href="index_classic.html">Home Classic</a></li>
                                <li><a href="index_grid.html">Home Grid</a></li>
                                <li><a href="index_list.html">Home List</a></li>
                            </ul>
                        </li>
                        <li><a href="index_list.html#">Features</a>
                            <ul>
                                <li><a href="left-sidebar.html">Left Sidebar</a></li>
                                <li><a href="author.html">Author Page</a></li>
                                <li><a href="full_width.html">Full Width</a></li>
                                <li><a href="archive.html">Archive Page</a></li>
                                <li><a href="typography.html">Typography</a></li>
                                <li><a href="single.html">Single Post</a></li>
                                <li><a href="about.html">About Page</a></li>
                            </ul>
                        </li>
                        <li><a href="archive.html">Lifestyle</a></li>
                        <li><a href="archive.html">Travel</a></li>
                        <li><a href="about.html">About Me</a></li>
                        <li><a href="{{ route('contact.me') }}">Contact Me</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

</header>