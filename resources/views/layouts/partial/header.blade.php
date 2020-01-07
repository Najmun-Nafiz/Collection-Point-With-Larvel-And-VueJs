<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Zmovo - Online Movie Video And TV Show HTML Bootstrap 4 Template">
    <meta name="keywords" content="Zmovo - Online Movie Video And TV Show HTML Bootstrap 4 Template">
    <meta name="author" content="Themepul">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>Zmovo - Online Movie Video And TV Show HTML Bootstrap 4 Template</title>

    



    <link href="{{asset("front\image\avicon.png")}}" rel="icon">
    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset("front\assets\bootstrap-4.2.1\bootstrap.min.css")}}">
    <!-- END BOOTSTRAP CSS -->

    <!-- OWL CAROUSEL -->
    <link rel="stylesheet" type="text/css" href="{{asset('front\assets\owlcarousel\owl.carousel.css')}}">
    <!-- END OWL CAROUSEL -->

    <!-- FONT CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('front\assets\css\font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front\assets\css\icofont.min.css')}}">


    <link rel="stylesheet" type="text/css" href="{{asset("front\assets\owlcarousel\animated.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("front\assets\video\video.popup.css")}}">

    <!-- STYLE CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset("front\assets\css\style.css")}}">
    <!-- END STYLE CSS -->

    <!-- RESPONSIVE CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset("front\assets\css\responsive.css")}}">
    <!-- END RESPONSIVE CSS -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CPoppins:200,300,400,500,600,700,800,900" rel="stylesheet">
    
    {{-- Toaster Message show link... --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <!-- STYLE CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset("css\style.css")}}">

     

</head>

<body>
 
    <div class="zmovo-main dark-img" id="app">
        <!-- Preloader -->
        <div class="zmovo-preloader">
            <div class="boxes">
                <div class="box">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <div class="box">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <div class="box">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <div class="box">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
        <!-- End Preloader -->
        <header class="zmovo-header zmovo-header3">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-2 zmovo-logos">
                        <div class="zmovo-logo">
                            <a href="{{ route('back') }}"><img src="{{asset('front\image\logo.png')}}" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-8 zmovo-menus">
                        <div class="main-menu">
                            <div class="navigation">
                                <div class="menu-container">
                                    <div id="navigation">
                                        <ul>
                                            <li class="active has-sub"><span class="submenu-button"></span><a href="{{ route('back') }}">Home</a>
                                            </li>
                                            <li><a href="trailor.html">Trailor</a></li>
                                            
                                            <li class="has-sub"><span class="submenu-button"></span><a href="index.html">Product</a>
                                                <ul>
                                                    <li class="has-sub"><span class="submenu-button"></span><a href="#">Grid view</a>
                                                        <ul>
                                                            <li><a href="grid.html">4 column</a></li>
                                                            <li><a href="grid-left.html">Left Side</a></li>
                                                            <li><a href="grid-right.html">Right Side</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="has-sub"><span class="submenu-button"></span><a href="#">List view</a>
                                                        <ul>
                                                            <li><a href="list.html">one column</a></li>
                                                            <li><a href="list-left.html">Left Side</a></li>
                                                            <li><a href="list-right.html">Right Side</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="product-single.html">Single Product</a></li>
                                                </ul>
                                            </li>
                                            <li class="has-sub"><span class="submenu-button"></span><a href="index.html">Service</a>
                                                <ul>
                                                    
                                                    <li class="has-sub"><span class="submenu-button"></span><a href="#">Login</a>
                                                        <ul>
                                                            <li><a href="login.html">Login</a></li>
                                                            <li><a href="ragister.html">Register</a></li>
                                                        </ul>
                                                    </li>
                                                    
                                                    
                                                </ul>
                                            </li>
                                            <li class="has-sub"><span class="submenu-button"></span><a href="#">blog</a>
                                                <ul>
                                                    <li class="has-sub"><span class="submenu-button"></span><a href="#">Blog Page</a>
                                                        <ul>
                                                            <li><a href="blog.html">Blog Left</a></li>
                                                            <li><a href="blog-2.html">Blog Right</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="has-sub"><span class="submenu-button"></span><a href="#">Blog Single</a>
                                                        <ul>
                                                            <li><a href="blog-details.html">Blog Single 1</a></li>
                                                            <li><a href="blog-details-2.html">Blog Single 2</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="about.html">About</a></li>
                                            <li><a href="contact.html">Contact Us</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 zmovo-t-right">
                        <div class="zmovo-header-right">
                            <div class="zmovo-top-search">
                                <div class="zmovo-ser-icon" id="clickserch"><span class="fa fa-search"></span></div>
                                <div class="zmovo-hidden-search" id="opensearch">
                                    <input type="search" placeholder="Enter the movie Name">
                                </div>
                            </div>

                            @guest
                            <div class="zmovo-login" >
                                <a href="{{ route('login') }}" class="btn login-btn"><span class="fa fa-user"></span> Login</a>
                            </div>
                            @else

                            
                                    
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">
                                         <img src="{{URL('uploads/users/'.Auth::user()->image)}}" id="profileImage" alt="">
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                        <a class="dropdown-item profle_drop" href="#">{{ Auth::user()->name }}</a>

                                        <a class="dropdown-item profle_drop" href="{{ route('profile.change', Auth::user()->id ) }}">Profile-Change</a>

                                        <a class="dropdown-item profle_drop" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>

                                

                            @endguest
                        </div>
                    </div>
                </div>
            </div>
        </header>