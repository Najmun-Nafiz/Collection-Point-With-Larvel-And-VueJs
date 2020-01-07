<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Zmovo - Online Movie Video And TV Show HTML Bootstrap 4 Template">
    <meta name="keywords" content="Zmovo - Online Movie Video And TV Show HTML Bootstrap 4 Template">
    <meta name="author" content="Themepul">
    <title>Zmovo - Online Movie Video And TV Show HTML Bootstrap 4 Template</title>

    <link href="{{asset("front\image\favicon.png")}}" rel="icon">
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
    
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

</head>

<body>
    {{-- <div class="zmovo-main dark-img"> --}}
        <div class="zmovo-main dark-img">
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
                    <div class="col-lg-7 zmovo-menus">
                        <div class="main-menu">
                            <div class="navigation">
                                <div class="menu-container">
                                    <div id="navigation">
                                        <ul>
                                            <li class="active has-sub"><span class="submenu-button"></span><a href="{{ route('back') }}">Home</a>
                                                <ul>
                                                    <li><a href="index.html">Home 1</a></li>
                                                    <li><a href="index-2.html">Home 2</a></li>
                                                    <li><a href="index-3.html">Home 3</a></li>
                                                    <li><a href="index-4.html">Home 4</a></li>
                                                    <li><a href="index-5.html">Home 5</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="trailor.html">Trailor</a></li>
                                            <li><a href="about.html">About</a></li>
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
                                            <li class="has-sub"><span class="submenu-button"></span><a href="index.html">Page</a>
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
                                            <li><a href="contact.html">Contact Us</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 zmovo-t-right">
                        <div class="zmovo-header-right">
                            <div class="zmovo-top-search" style="width: 35%;float: left;">
                                <div class="zmovo-ser-icon" id="clickserch"><span class="fa fa-search"></span></div>
                                <div class="zmovo-hidden-search" id="opensearch">
                                    <input type="search" placeholder="Enter the movie Name">
                                </div>
                            </div>

                            @guest
                            <div class="zmovo-login" style="width: 65%;float: right;">
                                <a href="{{ route('login') }}" class="btn login-btn"><span class="fa fa-user"></span> Login</a>
                            @else

                           
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                               
                                </div>
                            @endguest
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- SLIDER SECTION -->
        <div class="zmovo-slider-with-cat">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="zmovo-slider-with-cat-inner">
                            <div class="row">
                                <!-- Left Category menu -->
                                <div class="col-lg-3">
                                    <h2 id="hidden-cat"><span>top 10 movie</span></h2>
                                    <div class="zmovo-category-menu" id="catmenu">
                                        <ul>
                                            <li class="active"><a href='#'>Home</a></li>
                                            <li class='has-sub'><a href='#'>Romantic Movies</a>
                                                <ul>
                                                    <li class='has-sub'><a href='#'>Tamil</a>
                                                        <ul>
                                                            <li><a href='#'>New Tamil</a></li>
                                                            <li><a href='#'>New English</a></li>
                                                            <li><a href='#'>New Hindi</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class='has-sub'><a href='#'>China</a>
                                                        <ul>
                                                            <li><a href='#'>New Tamil</a></li>
                                                            <li><a href='#'>New English</a></li>
                                                            <li><a href='#'>New Hindi</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class='has-sub'><a href='#'>English</a>
                                                        <ul>
                                                            <li><a href='#'>New Tamil</a></li>
                                                            <li><a href='#'>New English</a></li>
                                                            <li><a href='#'>New Hindi</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class='has-sub'><a href='#'>Top 10 Movies</a>
                                                <ul>
                                                    <li class='has-sub'><a href='#'>Tamil</a>
                                                        <ul>
                                                            <li><a href='#'>New Tamil</a></li>
                                                            <li><a href='#'>New English</a></li>
                                                            <li><a href='#'>New Hindi</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class='has-sub'><a href='#'>China</a>
                                                        <ul>
                                                            <li><a href='#'>New Tamil</a></li>
                                                            <li><a href='#'>New English</a></li>
                                                            <li><a href='#'>New Hindi</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class='has-sub'><a href='#'>English</a>
                                                        <ul>
                                                            <li><a href='#'>New Tamil</a></li>
                                                            <li><a href='#'>New English</a></li>
                                                            <li><a href='#'>New Hindi</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class='has-sub'><a href='#'>Ratting Movies</a>
                                                <ul>
                                                    <li class='has-sub'><a href='#'>Action English</a>
                                                        <ul>
                                                            <li><a href='#'>New Tamil</a></li>
                                                            <li><a href='#'>New English</a></li>
                                                            <li><a href='#'>New Hindi</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class='has-sub'><a href='#'>New Movies</a>
                                                <ul>
                                                    <li class='has-sub'><a href='#'>Tamil</a>
                                                        <ul>
                                                            <li><a href='#'>New Tamil</a></li>
                                                            <li><a href='#'>New English</a></li>
                                                            <li><a href='#'>New Hindi</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class='has-sub'><a href='#'>2019 All Movies</a>
                                                <ul>
                                                    <li class='has-sub'><a href='#'>Hindi</a>
                                                        <ul>
                                                            <li><a href='#'>Action Movie</a></li>
                                                            <li><a href='#'>Hot Movie</a></li>
                                                            <li><a href='#'>Horan Movie</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class='has-sub'><a href='#'>Product 1</a>
                                                        <ul>
                                                            <li><a href='#'>Sub Product</a></li>
                                                            <li><a href='#'>Sub Product</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class='has-sub'><a href='#'>TV Seris</a>
                                                <ul>
                                                    <li class='has-sub'><a href='#'>TV English</a>
                                                        <ul>
                                                            <li><a href='#'>TV English old</a></li>
                                                            <li><a href='#'>TV English</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class='has-sub'><a href='#'>Serials</a>
                                                <ul>
                                                    <li class='has-sub'><a href='#'>Serials English</a>
                                                        <ul>
                                                            <li><a href='#'>Serials Hot</a></li>
                                                            <li><a href='#'>Serials old</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class='has-sub'><a href='#'>China Movies</a>
                                                <ul>
                                                    <li class='has-sub'><a href='#'>China Action</a>
                                                        <ul>
                                                            <li><a href='#'>China Action New</a></li>
                                                            <li><a href='#'>China Hot Action</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End Left Gategory menu -->
                                <div class="col-lg-9">
                                    <!-- SLIDER SECTION -->
                                    <div class="zmovo-slider-area slider3">
                                        <div class="items" id="slider3">
                                            <div class="item">
                                                <div class="zmovo-slider-contents">
                                                    <img src="{{asset('front\image\slider\3\1.jpg')}}" alt="">
                                                    <div class="zmovo-slide-content">
                                                        <div class="container">
                                                            <div class="zmovo-slider-contetn">
                                                                <div class="zmovo-slider-premium-tag">
                                                                    <span class="c2-bg">premium</span>
                                                                    <label>Period Adventure</label>
                                                                </div>
                                                                <a href="">Rebort Action Story 5</a>
                                                                <div class="zmovo-slide-cat">
                                                                    <ul>
                                                                        <li><span>Category : </span>English Movies - 2019</li>
                                                                        <li><span>Genre : </span>Action, Drama </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="zmovo-slide-ply-btn">
                                                                    <a href="" data-video-url="https://www.youtube.com/watch?v=CsVJoCKc9rA" class="video-popup"><img src="{{asset('front\image\play-button.png')}}" alt="">Play Trailer</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="zmovo-slider-contents">
                                                    <img src="{{asset('front\image\slider\3\2.jpg')}}" alt="">
                                                    <div class="zmovo-slide-content">
                                                        <div class="container">
                                                            <div class="zmovo-slider-contetn">
                                                                <div class="zmovo-slider-premium-tag">
                                                                    <span class="c2-bg">premium</span>
                                                                    <label>Period Adventure</label>
                                                                </div>
                                                                <a href="">Rebort Action Story 5</a>
                                                                <div class="zmovo-slide-cat">
                                                                    <ul>
                                                                        <li><span>Category : </span>English Movies - 2019</li>
                                                                        <li><span>Genre : </span>Action, Drama </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="zmovo-slide-ply-btn">
                                                                    <a href="" data-video-url="https://www.youtube.com/watch?v=CsVJoCKc9rA" class="video-popup"><img src="{{asset('front\image\play-button.png')}}" alt="">Play Trailer</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END SLIDER SECTION -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END SLIDER SECTION -->
        

         <div class="zmovo-new-arrivals arow-icon">
            <div class="container">
                <div class="zmovo-arrivals-items">
                    <div class="zmovo-hadidng pt-50 pb-30">
                        <h2><span class="text-uppercase">New arrivals</span></h2>
                    </div>
                    <!-- items -->
                    <div class="items" id="new-arrivle">
                        <!-- ITEM -->
                        <div class="item">
                            <div class="zmovo-video-item-box">
                                <div class="zmovo-video-box-inner">
                                    <div class="zmovo-v-box-img gradient">
                                        <img src="{{asset('front\image\product\200x300\1.jpg')}}" alt="">
                                        <div class="ply-btns">
                                            <a href="" data-video-url="https://www.youtube.com/watch?v=CsVJoCKc9rA" class="ply-btn video-popup"><img src="{{asset('front\image\play-button.png')}}" alt=""></a>
                                        </div>
                                        <div class="zmovo-v-box-content">
                                            <a href="">The Four Realms Happy Nutcracker and the</a>
                                            <div class="zmovo-v-tag c2">
                                                <span>Romance, English, 2019</span>
                                            </div>
                                            <div class="movie-time"><i class="fa fa-clock-o c1"></i><span>2 Hr 3 Min</span></div>
                                            <div class="like-icon">
                                                <a href=""><span class="fa fa-heart-o"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="zmovo-video-item-box pt-30">
                                <div class="zmovo-video-box-inner">
                                    <div class="zmovo-v-box-img gradient">
                                        <img src="{{asset('front\image\product\200x300\2.jpg')}}" alt="">
                                        <div class="ply-btns">
                                            <a href="" data-video-url="https://www.youtube.com/watch?v=CsVJoCKc9rA" class="ply-btn video-popup"><img src="{{asset('front\image\play-button.png')}}" alt=""></a>
                                        </div>
                                        <div class="zmovo-v-box-content">
                                            <a href="">The Edge of A Night’s Dream</a>
                                            <div class="zmovo-v-tag c2">
                                                <span>Romance, English, 2019</span>
                                            </div>
                                            <div class="movie-time"><i class="fa fa-clock-o c1"></i><span>2 Hr 3 Min</span></div>
                                            <div class="like-icon">
                                                <a href=""><span class="fa fa-heart-o"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END ITEM -->
                        <!-- ITEM -->
                        <div class="item">
                            <div class="zmovo-video-item-box">
                                <div class="zmovo-video-box-inner">
                                    <div class="zmovo-v-box-img gradient">
                                        <img src="{{asset('front\image\product\200x300\3.jpg')}}" alt="">
                                        <div class="ply-btns">
                                            <a href="" data-video-url="https://www.youtube.com/watch?v=CsVJoCKc9rA" class="ply-btn video-popup"><img src="{{asset('front\image\play-button.png')}}" alt=""></a>
                                        </div>
                                        <div class="zmovo-v-box-content">
                                            <a href="">The Pharmaceuticals of Heaven</a>
                                            <div class="zmovo-v-tag c2">
                                                <span>Romance, English, 2019</span>
                                            </div>
                                            <div class="movie-time"><i class="fa fa-clock-o c1"></i><span>2 Hr 3 Min</span></div>
                                            <div class="like-icon">
                                                <a href=""><span class="fa fa-heart-o"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="zmovo-video-item-box pt-30">
                                <div class="zmovo-video-box-inner">
                                    <div class="zmovo-v-box-img gradient">
                                        <img src="{{asset('front\image\product\200x300\4.jpg')}}" alt="">
                                        <div class="ply-btns">
                                            <a href="" data-video-url="https://www.youtube.com/watch?v=CsVJoCKc9rA" class="ply-btn video-popup"><img src="{{asset('front\image\play-button.png')}}" alt=""></a>
                                        </div>
                                        <div class="zmovo-v-box-content">
                                            <a href="">Nutcracker The Happy and the Four Realms</a>
                                            <div class="zmovo-v-tag c2">
                                                <span>Romance, English, 2019</span>
                                            </div>
                                            <div class="movie-time"><i class="fa fa-clock-o c1"></i><span>2 Hr 3 Min</span></div>
                                            <div class="like-icon">
                                                <a href=""><span class="fa fa-heart-o"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END ITEM -->
                        <!-- ITEM -->
                        <div class="item">
                            <div class="zmovo-video-item-box">
                                <div class="zmovo-video-box-inner">
                                    <div class="zmovo-v-box-img gradient">
                                        <img src="{{asset('front\image\product\200x300\5.jpg')}}" alt="">
                                        <div class="ply-btns">
                                            <a href="" data-video-url="https://www.youtube.com/watch?v=CsVJoCKc9rA" class="ply-btn video-popup"><img src="{{asset('front\image\play-button.png')}}" alt=""></a>
                                        </div>
                                        <div class="zmovo-v-box-content">
                                            <a href="">The Nutcracker Happy and the Four Realms</a>
                                            <div class="zmovo-v-tag c2">
                                                <span>Romance, English, 2019</span>
                                            </div>
                                            <div class="movie-time"><i class="fa fa-clock-o c1"></i><span>2 Hr 3 Min</span></div>
                                            <div class="like-icon">
                                                <a href=""><span class="fa fa-heart-o"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="zmovo-video-item-box pt-30">
                                <div class="zmovo-video-box-inner">
                                    <div class="zmovo-v-box-img gradient">
                                        <img src="{{asset('front\image\product\200x300\6.jpg')}}" alt="">
                                        <div class="ply-btns">
                                            <a href="" data-video-url="https://www.youtube.com/watch?v=CsVJoCKc9rA" class="ply-btn video-popup"><img src="{{asset('front\image\play-button.png')}}" alt=""></a>
                                        </div>
                                        <div class="zmovo-v-box-content">
                                            <a href="">One Surprisingly Effective Way To </a>
                                            <div class="zmovo-v-tag c2">
                                                <span>Romance, English, 2019</span>
                                            </div>
                                            <div class="movie-time"><i class="fa fa-clock-o c1"></i><span>2 Hr 3 Min</span></div>
                                            <div class="like-icon">
                                                <a href=""><span class="fa fa-heart-o"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END ITEM -->
                        <!-- ITEM -->
                        <div class="item">
                            <div class="zmovo-video-item-box">
                                <div class="zmovo-video-box-inner">
                                    <div class="zmovo-v-box-img gradient">
                                        <img src="{{asset('front\image\product\200x300\7.jpg')}}" alt="">
                                        <div class="ply-btns">
                                            <a href="" data-video-url="https://www.youtube.com/watch?v=CsVJoCKc9rA" class="ply-btn video-popup"><img src="{{asset('front\image\play-button.png')}}" alt=""></a>
                                        </div>
                                        <div class="zmovo-v-box-content">
                                            <a href="">The Most (and Least) Effective Ideas In</a>
                                            <div class="zmovo-v-tag c2">
                                                <span>Romance, English, 2019</span>
                                            </div>
                                            <div class="movie-time"><i class="fa fa-clock-o c1"></i><span>2 Hr 3 Min</span></div>
                                            <div class="like-icon">
                                                <a href=""><span class="fa fa-heart-o"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="zmovo-video-item-box pt-30">
                                <div class="zmovo-video-box-inner">
                                    <div class="zmovo-v-box-img gradient">
                                        <img src="{{asset('front\image\product\200x300\8.jpg')}}" alt="">
                                        <div class="ply-btns">
                                            <a href="" data-video-url="https://www.youtube.com/watch?v=CsVJoCKc9rA" class="ply-btn video-popup"><img src="{{asset('front\image\play-button.png')}}" alt=""></a>
                                        </div>
                                        <div class="zmovo-v-box-content">
                                            <a href="">Minutes A Day To Grow Your Business</a>
                                            <div class="zmovo-v-tag c2">
                                                <span>Romance, English, 2019</span>
                                            </div>
                                            <div class="movie-time"><i class="fa fa-clock-o c1"></i><span>2 Hr 3 Min</span></div>
                                            <div class="like-icon">
                                                <a href=""><span class="fa fa-heart-o"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END ITEM -->
                        <!-- ITEM -->
                        <div class="item">
                            <div class="zmovo-video-item-box">
                                <div class="zmovo-video-box-inner">
                                    <div class="zmovo-v-box-img gradient">
                                        <img src="{{asset('front\image\product\200x300\9.jpg')}}" alt="">
                                        <div class="ply-btns">
                                            <a href="" data-video-url="https://www.youtube.com/watch?v=CsVJoCKc9rA" class="ply-btn video-popup"><img src="{{asset('front\image\play-button.png')}}" alt=""></a>
                                        </div>
                                        <div class="zmovo-v-box-content">
                                            <a href="">The Happy Nutcracker and the Four Realms</a>
                                            <div class="zmovo-v-tag c2">
                                                <span>Romance, English, 2019</span>
                                            </div>
                                            <div class="movie-time"><i class="fa fa-clock-o c1"></i><span>2 Hr 3 Min</span></div>
                                            <div class="like-icon">
                                                <a href=""><span class="fa fa-heart-o"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="zmovo-video-item-box pt-30">
                                <div class="zmovo-video-box-inner">
                                    <div class="zmovo-v-box-img gradient">
                                        <img src="{{asset('front\image\product\200x300\10.jpg')}}" alt="">
                                        <div class="ply-btns">
                                            <a href="" data-video-url="https://www.youtube.com/watch?v=CsVJoCKc9rA" class="ply-btn video-popup"><img src="{{asset('front\image\play-button.png')}}" alt=""></a>
                                        </div>
                                        <div class="zmovo-v-box-content">
                                            <a href="">hat Can One Learn From Other's Mistakes</a>
                                            <div class="zmovo-v-tag c2">
                                                <span>Romance, English, 2019</span>
                                            </div>
                                            <div class="movie-time"><i class="fa fa-clock-o c1"></i><span>2 Hr 3 Min</span></div>
                                            <div class="like-icon">
                                                <a href=""><span class="fa fa-heart-o"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END ITEM -->
                    </div>
                    <!-- end items -->
                    <!-- ALL VIEW -->
                    <div class="button pt-50 text-center">
                        <a href="" class="btn btn-radus">view all <span class="fa fa-angle-right"></span></a>
                    </div>
                    <!-- END ALL VIEW -->
                </div>
            </div>
        </div>
        <!-- END NEW ARRIVALS -->
        </div>

        <!-- VIDEO PLYLIST SECTION -->
        <div class="zmovo-video-plylist-section arow-icon">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="zmovo-video-list-inner">
                            <div class="zmovo-hadidng pt-50">
                                <h2><span>Suggested Movies</span></h2>
                            </div>
                            <div class="zmovo-video-list-items">
                                <div class="zmovo-v-list-items mt-30 miniitem1">
                                    <div class="item">
                                        <div class="zmovo-v-list-item active mb-30">
                                            <div class="zmovo-v-list-i-img">
                                                <img src="{{asset('front\image\video-play\small\1.jpg')}}" alt="">
                                                <div class="ply-btns">
                                                    <a href="" data-video-url="https://www.youtube.com/watch?v=CsVJoCKc9rA" class="ply-btn video-popup"><img src="{{asset('front\image\play-button.png')}}" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="zmovo-v-list-content">
                                                <div class="zmovo-v-tag c2"><span>English,2019</span></div>
                                                <a href="">Kaiserian Sanction and the Four </a>
                                                <div class="movie-time"><i class="fa fa-clock-o c1"></i><span>2 Hr 3 Min</span></div>
                                            </div>
                                        </div>
                                        <div class="zmovo-v-list-item mb-30">
                                            <div class="zmovo-v-list-i-img">
                                                <img src="{{asset('front\image\video-play\small\2.jpg')}}" alt="">
                                                <div class="ply-btns">
                                                    <a href="" data-video-url="https://www.youtube.com/watch?v=CsVJoCKc9rA" class="ply-btn video-popup"><img src="{{asset('front\image\play-button.png')}}" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="zmovo-v-list-content">
                                                <div class="zmovo-v-tag c2"><span>English,2019</span></div>
                                                <a href="">Last Light Nutcracker and the </a>
                                                <div class="movie-time"><i class="fa fa-clock-o c1"></i><span>2 Hr 3 Min</span></div>
                                            </div>
                                        </div>
                                        <div class="zmovo-v-list-item mt-30">
                                            <div class="zmovo-v-list-i-img">
                                                <img src="{{asset('front\image\video-play\small\3.jpg')}}" alt="">
                                                <div class="ply-btns">
                                                    <a href="" data-video-url="https://www.youtube.com/watch?v=CsVJoCKc9rA" class="ply-btn video-popup"><img src="{{asset('front\image\play-button.png')}}" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="zmovo-v-list-content">
                                                <div class="zmovo-v-tag c2"><span>English,2019</span></div>
                                                <a href="">Living Trust and the Four </a>
                                                <div class="movie-time"><i class="fa fa-clock-o c1"></i><span>2 Hr 3 Min</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="zmovo-v-list-item mb-30">
                                            <div class="zmovo-v-list-i-img">
                                                <img src="{{asset('front\image\video-play\small\1.jpg')}}" alt="">
                                                <div class="ply-btns">
                                                    <a href="" data-video-url="https://www.youtube.com/watch?v=CsVJoCKc9rA" class="ply-btn video-popup"><img src="{{asset('front\image\play-button.png')}}" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="zmovo-v-list-content">
                                                <div class="zmovo-v-tag c2"><span>English,2019</span></div>
                                                <a href="">Milky Feeling and the Four </a>
                                                <div class="movie-time"><i class="fa fa-clock-o c1"></i><span>2 Hr 3 Min</span></div>
                                            </div>
                                        </div>
                                        <div class="zmovo-v-list-item mb-30">
                                            <div class="zmovo-v-list-i-img">
                                                <img src="{{asset('front\image\video-play\small\2.jpg')}}" alt="">
                                                <div class="ply-btns">
                                                    <a href="" data-video-url="https://www.youtube.com/watch?v=CsVJoCKc9rA" class="ply-btn video-popup"><img src="{{asset('front\image\play-button.png')}}" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="zmovo-v-list-content">
                                                <div class="zmovo-v-tag c2"><span>English,2019</span></div>
                                                <a href="">Mommy Coke and the Four </a>
                                                <div class="movie-time"><i class="fa fa-clock-o c1"></i><span>2 Hr 3 Min</span></div>
                                            </div>
                                        </div>
                                        <div class="zmovo-v-list-item mt-30">
                                            <div class="zmovo-v-list-i-img">
                                                <img src="{{asset('front\image\video-play\small\3.jpg')}}" alt="">
                                                <div class="ply-btns">
                                                    <a href="" data-video-url="https://www.youtube.com/watch?v=CsVJoCKc9rA" class="ply-btn video-popup"><img src="{{asset('front\image\play-button.png')}}" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="zmovo-v-list-content">
                                                <div class="zmovo-v-tag c2"><span>English,2019</span></div>
                                                <a href="">The Happy the Four Nutcracker </a>
                                                <div class="movie-time"><i class="fa fa-clock-o c1"></i><span>2 Hr 3 Min</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="zmovo-video-list-inner">
                            <div class="zmovo-hadidng pt-50">
                                <h2><span>Recent Clips Movies</span></h2>
                            </div>
                            <div class="zmovo-video-list-items">
                                <div class="zmovo-v-list-items mt-30 miniitem1">
                                    <div class="item">
                                        <div class="zmovo-v-list-item mb-30">
                                            <div class="zmovo-v-list-i-img">
                                                <img src="{{asset('front\image\video-play\small\5.jpg')}}" alt="">
                                                <div class="ply-btns">
                                                    <a href="" data-video-url="https://www.youtube.com/watch?v=CsVJoCKc9rA" class="ply-btn video-popup"><img src="{{asset('front\image\play-button.png')}}" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="zmovo-v-list-content">
                                                <div class="zmovo-v-tag c2"><span>English,2019</span></div>
                                                <a href="">The Mudrick Forest and </a>
                                                <div class="movie-time"><i class="fa fa-clock-o c1"></i><span>2 Hr 3 Min</span></div>
                                            </div>
                                        </div>
                                        <div class="zmovo-v-list-item mb-30">
                                            <div class="zmovo-v-list-i-img">
                                                <img src="{{asset('front\image\video-play\small\6.jpg')}}" alt="">
                                                <div class="ply-btns">
                                                    <a href="" data-video-url="https://www.youtube.com/watch?v=CsVJoCKc9rA" class="ply-btn video-popup"><img src="{{asset('front\image\play-button.png')}}" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="zmovo-v-list-content">
                                                <div class="zmovo-v-tag c2"><span>English,2019</span></div>
                                                <a href="">The One Foot Out the Door </a>
                                                <div class="movie-time"><i class="fa fa-clock-o c1"></i><span>2 Hr 3 Min</span></div>
                                            </div>
                                        </div>
                                        <div class="zmovo-v-list-item mt-30">
                                            <div class="zmovo-v-list-i-img">
                                                <img src="{{asset('front\image\video-play\small\7.jpg')}}" alt="">
                                                <div class="ply-btns">
                                                    <a href="" data-video-url="https://www.youtube.com/watch?v=CsVJoCKc9rA" class="ply-btn video-popup"><img src="{{asset('front\image\play-button.png')}}" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="zmovo-v-list-content">
                                                <div class="zmovo-v-tag c2"><span>English,2019</span></div>
                                                <a href="">Paloma the Ruffian and the </a>
                                                <div class="movie-time"><i class="fa fa-clock-o c1"></i><span>2 Hr 3 Min</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="zmovo-v-list-item mb-30">
                                            <div class="zmovo-v-list-i-img">
                                                <img src="{{asset('front\image\video-play\small\5.jpg')}}" alt="">
                                                <div class="ply-btns">
                                                    <a href="" data-video-url="https://www.youtube.com/watch?v=CsVJoCKc9rA" class="ply-btn video-popup"><img src="{{asset('front\image\play-button.png')}}" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="zmovo-v-list-content">
                                                <div class="zmovo-v-tag c2"><span>English,2019</span></div>
                                                <a href="">Pike’s Puke and the Four </a>
                                                <div class="movie-time"><i class="fa fa-clock-o c1"></i><span>2 Hr 3 Min</span></div>
                                            </div>
                                        </div>
                                        <div class="zmovo-v-list-item mb-30">
                                            <div class="zmovo-v-list-i-img">
                                                <img src="{{asset('front\image\video-play\small\6.jpg')}}" alt="">
                                                <div class="ply-btns">
                                                    <a href="" data-video-url="https://www.youtube.com/watch?v=CsVJoCKc9rA" class="ply-btn video-popup"><img src="{{asset('front\image\play-button.png')}}" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="zmovo-v-list-content">
                                                <div class="zmovo-v-tag c2"><span>English,2019</span></div>
                                                <a href="">The Happy Nutcracker and the Four </a>
                                                <div class="movie-time"><i class="fa fa-clock-o c1"></i><span>2 Hr 3 Min</span></div>
                                            </div>
                                        </div>
                                        <div class="zmovo-v-list-item mt-30">
                                            <div class="zmovo-v-list-i-img">
                                                <img src="{{asset('front\image\video-play\small\7.jpg')}}" alt="">
                                                <div class="ply-btns">
                                                    <a href="" data-video-url="https://www.youtube.com/watch?v=CsVJoCKc9rA" class="ply-btn video-popup"><img src="{{asset('front\image\play-button.png')}}" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="zmovo-v-list-content">
                                                <div class="zmovo-v-tag c2"><span>English,2019</span></div>
                                                <a href="">Queen Martyr and the Four </a>
                                                <div class="movie-time"><i class="fa fa-clock-o c1"></i><span>2 Hr 3 Min</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="zmovo-video-list-inner">
                            <div class="zmovo-hadidng pt-50">
                                <h2><span>Trend Movies</span></h2>
                            </div>
                            <div class="zmovo-video-list-items">
                                <div class="zmovo-v-list-items mt-30 miniitem1">
                                    <div class="item">
                                        <div class="zmovo-v-list-item mb-30">
                                            <div class="zmovo-v-list-i-img">
                                                <img src="{{asset('front\image\video-play\small\8.jpg')}}" alt="">
                                                <div class="ply-btns">
                                                    <a href="" data-video-url="https://www.youtube.com/watch?v=CsVJoCKc9rA" class="ply-btn video-popup"><img src="{{asset('front\image\play-button.png')}}" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="zmovo-v-list-content">
                                                <div class="zmovo-v-tag c2"><span>English,2019</span></div>
                                                <a href="">The Happy Nutcracker and the Four </a>
                                                <div class="movie-time"><i class="fa fa-clock-o c1"></i><span>2 Hr 3 Min</span></div>
                                            </div>
                                        </div>
                                        <div class="zmovo-v-list-item mb-30">
                                            <div class="zmovo-v-list-i-img">
                                                <img src="{{asset('front\image\video-play\small\9.jpg')}}" alt="">
                                                <div class="ply-btns">
                                                    <a href="" data-video-url="https://www.youtube.com/watch?v=CsVJoCKc9rA" class="ply-btn video-popup"><img src="{{asset('front\image\play-button.png')}}" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="zmovo-v-list-content">
                                                <div class="zmovo-v-tag c2"><span>English,2019</span></div>
                                                <a href="">Rodeo Stories and the Four </a>
                                                <div class="movie-time"><i class="fa fa-clock-o c1"></i><span>2 Hr 3 Min</span></div>
                                            </div>
                                        </div>
                                        <div class="zmovo-v-list-item mt-30">
                                            <div class="zmovo-v-list-i-img">
                                                <img src="{{asset('front\image\video-play\small\10.jpg')}}" alt="">
                                                <div class="ply-btns">
                                                    <a href="" data-video-url="https://www.youtube.com/watch?v=CsVJoCKc9rA" class="ply-btn video-popup"><img src="{{asset('front\image\play-button.png')}}" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="zmovo-v-list-content">
                                                <div class="zmovo-v-tag c2"><span>English,2019</span></div>
                                                <a href="">Rude, A Walking Ham Stories</a>
                                                <div class="movie-time"><i class="fa fa-clock-o c1"></i><span>2 Hr 3 Min</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="zmovo-v-list-item mb-30">
                                            <div class="zmovo-v-list-i-img">
                                                <img src="{{asset('front\image\video-play\small\8.jpg')}}" alt="">
                                                <div class="ply-btns">
                                                    <a href="" data-video-url="https://www.youtube.com/watch?v=CsVJoCKc9rA" class="ply-btn video-popup"><img src="{{asset('front\image\play-button.png')}}" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="zmovo-v-list-content">
                                                <div class="zmovo-v-tag c2"><span>English,2019</span></div>
                                                <a href="">San Onofre Fallout and the Four </a>
                                                <div class="movie-time"><i class="fa fa-clock-o c1"></i><span>2 Hr 3 Min</span></div>
                                            </div>
                                        </div>
                                        <div class="zmovo-v-list-item mb-30">
                                            <div class="zmovo-v-list-i-img">
                                                <img src="{{asset('front\image\video-play\small\9.jpg')}}" alt="">
                                                <div class="ply-btns">
                                                    <a href="" data-video-url="https://www.youtube.com/watch?v=CsVJoCKc9rA" class="ply-btn video-popup"><img src="{{asset('front\image\play-button.png')}}" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="zmovo-v-list-content">
                                                <div class="zmovo-v-tag c2"><span>English,2019</span></div>
                                                <a href="">Sent to Finland and the Four </a>
                                                <div class="movie-time"><i class="fa fa-clock-o c1"></i><span>2 Hr 3 Min</span></div>
                                            </div>
                                        </div>
                                        <div class="zmovo-v-list-item mt-30">
                                            <div class="zmovo-v-list-i-img">
                                                <img src="{{asset('front\image\video-play\small\10.jpg')}}" alt="">
                                                <div class="ply-btns">
                                                    <a href="" data-video-url="https://www.youtube.com/watch?v=CsVJoCKc9rA" class="ply-btn video-popup"><img src="{{asset('front\image\play-button.png')}}" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="zmovo-v-list-content">
                                                <div class="zmovo-v-tag c2"><span>English,2019</span></div>
                                                <a href="">The Happy Nutcracker and the Four </a>
                                                <div class="movie-time"><i class="fa fa-clock-o c1"></i><span>2 Hr 3 Min</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="zmovo-video-list-inner">
                            <div class="zmovo-hadidng pt-50">
                                <h2><span>CinePlay Movies</span></h2>
                            </div>
                            <div class="zmovo-video-list-items">
                                <div class="zmovo-v-list-items mt-30 miniitem1">
                                    <div class="item">
                                        <div class="zmovo-v-list-item mb-30">
                                            <div class="zmovo-v-list-i-img">
                                                <img src="{{asset('front\image\video-play\small\11.jp')}}g" alt="">
                                                <div class="ply-btns">
                                                    <a href="" data-video-url="https://www.youtube.com/watch?v=CsVJoCKc9rA" class="ply-btn video-popup"><img src="{{asset('front\image\play-button.png')}}" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="zmovo-v-list-content">
                                                <div class="zmovo-v-tag c2"><span>English,2019</span></div>
                                                <a href="">Swap Keats Happy and the Four </a>
                                                <div class="movie-time"><i class="fa fa-clock-o c1"></i><span>2 Hr 3 Min</span></div>
                                            </div>
                                        </div>
                                        <div class="zmovo-v-list-item mb-30">
                                            <div class="zmovo-v-list-i-img">
                                                <img src="{{asset('front\image\video-play\small\12.jpg')}}" alt="">
                                                <div class="ply-btns">
                                                    <a href="" data-video-url="https://www.youtube.com/watch?v=CsVJoCKc9rA" class="ply-btn video-popup"><img src="{{asset('front\image\play-button.png')}}" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="zmovo-v-list-content">
                                                <div class="zmovo-v-tag c2"><span>English,2019</span></div>
                                                <a href="">The Happy Tender Ties the Four </a>
                                                <div class="movie-time"><i class="fa fa-clock-o c1"></i><span>2 Hr 3 Min</span></div>
                                            </div>
                                        </div>
                                        <div class="zmovo-v-list-item mt-30">
                                            <div class="zmovo-v-list-i-img">
                                                <img src="{{asset('front\image\video-play\small\13.jpg')}}" alt="">
                                                <div class="ply-btns">
                                                    <a href="" data-video-url="https://www.youtube.com/watch?v=CsVJoCKc9rA" class="ply-btn video-popup"><img src="{{asset('front\image\play-button.png')}}" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="zmovo-v-list-content">
                                                <div class="zmovo-v-tag c2"><span>English,2019</span></div>
                                                <a href="">The Centre of the World the Four </a>
                                                <div class="movie-time"><i class="fa fa-clock-o c1"></i><span>2 Hr 3 Min</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="zmovo-v-list-item mb-30">
                                            <div class="zmovo-v-list-i-img">
                                                <img src="{{asset('front\image\video-play\small\11.jpg')}}" alt="">
                                                <div class="ply-btns">
                                                    <a href="" data-video-url="https://www.youtube.com/watch?v=CsVJoCKc9rA" class="ply-btn video-popup"><img src="{{asset('front\image\play-button.png')}}" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="zmovo-v-list-content">
                                                <div class="zmovo-v-tag c2"><span>English,2019</span></div>
                                                <a href="">The Great Bovine Picnic and Four </a>
                                                <div class="movie-time"><i class="fa fa-clock-o c1"></i><span>2 Hr 3 Min</span></div>
                                            </div>
                                        </div>
                                        <div class="zmovo-v-list-item mb-30">
                                            <div class="zmovo-v-list-i-img">
                                                <img src="{{asset('front\image\video-play\small\12.jpg')}}" alt="">
                                                <div class="ply-btns">
                                                    <a href="" data-video-url="https://www.youtube.com/watch?v=CsVJoCKc9rA" class="ply-btn video-popup"><img src="{{asset('front\image\play-button.png')}}" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="zmovo-v-list-content">
                                                <div class="zmovo-v-tag c2"><span>English,2019</span></div>
                                                <a href="">Wednesday Morning Picnic the Four </a>
                                                <div class="movie-time"><i class="fa fa-clock-o c1"></i><span>2 Hr 3 Min</span></div>
                                            </div>
                                        </div>
                                        <div class="zmovo-v-list-item mt-30">
                                            <div class="zmovo-v-list-i-img">
                                                <img src="{{asset('front\image\video-play\small\13.jpg')}}" alt="">
                                                <div class="ply-btns">
                                                    <a href="" data-video-url="https://www.youtube.com/watch?v=CsVJoCKc9rA" class="ply-btn video-popup"><img src="{{asset('front\image\play-button.png')}}" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="zmovo-v-list-content">
                                                <div class="zmovo-v-tag c2"><span>English,2019</span></div>
                                                <a href="">The Happy Nutcracker and the Four </a>
                                                <div class="movie-time"><i class="fa fa-clock-o c1"></i><span>2 Hr 3 Min</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END VIDEO PLYLIST SECTION -->
        <!-- POPOLER SHOWS -->
        <div class="zmovo-Popular-item arow-icon">
            <div class="container">
                <div class="zmovo-Popular-items">
                    <div class="zmovo-hadidng pt-50 pb-30">
                        <h2><span class="text-uppercase">TV Serise</span></h2>
                    </div>
                    <!-- items -->
                    <div class="items" id="popular-shows">
                        <!-- ITEM -->
                        <div class="item">
                            <div class="zmovo-video-item-box">
                                <div class="zmovo-video-box-inner">
                                    <div class="zmovo-v-box-img gradient">
                                        <img src="{{asset('front\image\product\popular\1.jpg')}}" alt="">
                                        <div class="ply-btns">
                                            <a href="" data-video-url="https://www.youtube.com/watch?v=CsVJoCKc9rA" class="ply-btn video-popup"><img src="image\play-button.png" alt=""></a>
                                        </div>
                                        <div class="zmovo-v-box-content">
                                            <a href="">Clue of the Invisible Hand action movie</a>
                                            <div class="zmovo-v-tag c2">
                                                <span>Romance, English, 2019</span>
                                            </div>
                                            <div class="movie-time"><i class="fa fa-clock-o c1"></i><span>2 Hr 3 Min</span></div>
                                            <div class="like-icon">
                                                <a href=""><span class="fa fa-heart-o"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END ITEM -->
                        <!-- ITEM -->
                        <div class="item">
                            <div class="zmovo-video-item-box">
                                <div class="zmovo-video-box-inner">
                                    <div class="zmovo-v-box-img gradient">
                                        <img src="{{asset('front\image\product\popular\2.jpg')}}" alt="">
                                        <div class="ply-btns">
                                            <a href="" data-video-url="https://www.youtube.com/watch?v=CsVJoCKc9rA" class="ply-btn video-popup"><img src="image\play-button.png" alt=""></a>
                                        </div>
                                        <div class="zmovo-v-box-content">
                                            <a href="">A Millipede Dreams of mas Four Realms</a>
                                            <div class="zmovo-v-tag c2">
                                                <span>Romance, English, 2019</span>
                                            </div>
                                            <div class="movie-time"><i class="fa fa-clock-o c1"></i><span>2 Hr 3 Min</span></div>
                                            <div class="like-icon">
                                                <a href=""><span class="fa fa-heart-o"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END ITEM -->
                        <!-- ITEM -->
                        <div class="item">
                            <div class="zmovo-video-item-box">
                                <div class="zmovo-video-box-inner">
                                    <div class="zmovo-v-box-img gradient">
                                        <img src="{{asset('front\image\product\popular\3.jpg')}}" alt="">
                                        <div class="ply-btns">
                                            <a href="" data-video-url="https://www.youtube.com/watch?v=CsVJoCKc9rA" class="ply-btn video-popup"><img src="image\play-button.png" alt=""></a>
                                        </div>
                                        <div class="zmovo-v-box-content">
                                            <a href="">Alice B. Toklas in Wonder land Happy </a>
                                            <div class="zmovo-v-tag c2">
                                                <span>Romance, English, 2019</span>
                                            </div>
                                            <div class="movie-time"><i class="fa fa-clock-o c1"></i><span>2 Hr 3 Min</span></div>
                                            <div class="like-icon">
                                                <a href=""><span class="fa fa-heart-o"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END ITEM -->
                        <!-- ITEM -->
                        <div class="item">
                            <div class="zmovo-video-item-box">
                                <div class="zmovo-video-box-inner">
                                    <div class="zmovo-v-box-img gradient">
                                        <img src="{{asset('front\image\product\popular\4.jpg')}}" alt="">
                                        <div class="ply-btns">
                                            <a href="" data-video-url="https://www.youtube.com/watch?v=CsVJoCKc9rA" class="ply-btn video-popup"><img src="image\play-button.png" alt=""></a>
                                        </div>
                                        <div class="zmovo-v-box-content">
                                            <a href="">the Four Realms Conned, Some Are Concact</a>
                                            <div class="zmovo-v-tag c2">
                                                <span>Romance, English, 2019</span>
                                            </div>
                                            <div class="movie-time"><i class="fa fa-clock-o c1"></i><span>2 Hr 3 Min</span></div>
                                            <div class="like-icon">
                                                <a href=""><span class="fa fa-heart-o"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END ITEM -->
                        <!-- ITEM -->
                        <div class="item">
                            <div class="zmovo-video-item-box">
                                <div class="zmovo-video-box-inner">
                                    <div class="zmovo-v-box-img gradient">
                                        <img src="{{asset('front\image\product\popular\5.jpg')}}" alt="">
                                        <div class="ply-btns">
                                            <a href="" data-video-url="https://www.youtube.com/watch?v=CsVJoCKc9rA" class="ply-btn video-popup"><img src="{{asset('front\image\play-button.png')}}" alt=""></a>
                                        </div>
                                        <div class="zmovo-v-box-content">
                                            <a href="">The Days of Promise, Days of Hope</a>
                                            <div class="zmovo-v-tag c2">
                                                <span>Romance, English, 2019</span>
                                            </div>
                                            <div class="movie-time"><i class="fa fa-clock-o c1"></i><span>2 Hr 3 Min</span></div>
                                            <div class="like-icon">
                                                <a href=""><span class="fa fa-heart-o"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END ITEM -->
                    </div>
                    <!-- end items -->
                    <!-- ALL VIEW -->
                    <div class="button pt-50 text-center">
                        <a href="" class="btn btn-radus">view all <span class="fa fa-angle-right"></span></a>
                    </div>
                    <!-- END ALL VIEW -->
                </div>
            </div>
        </div>
        <!-- END POPOLER SHOWS -->

            
        <!-- FOOTER -->
        <footer class="zmovo-footer-area pt-50">
            <div class="zmovo-footer">
                <div class="container">
                    
                    <div class="zmovo-footer-center pt-50">
                        <div class="zmovo-ft-widgets">
                            <div class="row">
                                <div class="col-sm-6 col-lg-3">
                                    <div class="zmovo-ft-widget">
                                        <div class="zmovo-ft-widget-titles">
                                            <h2 class="zmovo-ft-widget-title">Movies Category</h2>
                                        </div>
                                        <div class="zmoto-ft-widget-contetn">
                                            <ul>
                                                <li><a href="">Movies</a></li>
                                                <li><a href="">Videos</a></li>
                                                <li><a href="">English Movies</a></li>
                                                <li><a href="">China Movies</a></li>
                                                <li><a href="">Tailor</a></li>
                                                <li><a href="">Upcoming Movies</a></li>
                                                <li><a href="">Contact Us</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-3">
                                    <div class="zmovo-ft-widget">
                                        <div class="zmovo-ft-widget-titles no-text">
                                            <h2 class="zmovo-ft-widget-title">information</h2>
                                        </div>
                                        <div class="zmoto-ft-widget-contetn">
                                            <ul>
                                                <li><a href="">About Us</a></li>
                                                <li><a href="">Song</a></li>
                                                <li><a href="">Forums</a></li>
                                                <li><a href="">Place</a></li>
                                                <li><a href="">Hot Collection</a></li>
                                                <li><a href="">Upcoming Events</a></li>
                                                <li><a href="">All Movies</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-3">
                                    <div class="zmovo-ft-widget">
                                        <div class="zmovo-ft-widget-titles no-text">
                                            <h2 class="zmovo-ft-widget-title">Locations</h2>
                                        </div>
                                        <div class="zmoto-ft-widget-contetn">
                                            <ul>
                                                <li><a href="">South Korea</a></li>
                                                <li><a href="">Germany</a></li>
                                                <li><a href="">United States</a></li>
                                                <li><a href="">France</a></li>
                                                <li><a href="">India</a></li>
                                                <li><a href="">New Movies</a></li>
                                                <li><a href="">United Kingdom</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-3">
                                    <div class="zmovo-ft-widget">
                                        <div class="zmovo-ft-widget-titles">
                                            <h2 class="zmovo-ft-widget-title">Newsletter</h2>
                                        </div>
                                        <div class="zmoto-ft-widget-contetn">
                                            <div class="zmovo-ft-newsletter">
                                                <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anytg embarrassing hidden.</p>
                                                <div class="zmovo-ft-newsletter-area pt-30">
                                                    <div class="zmovo-ft-newsletter">
                                                        <input type="text" class="form-control" placeholder="Enter Address">
                                                        <button type="submit"><span class="fa fa-paper-plane"></span></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="zmovo-ft-social-widget pt-50">
                                                <ul>
                                                    <li><a href=""><span class="fa fa-facebook"></span></a></li>
                                                    <li><a href=""><span class="fa fa-twitter"></span></a></li>
                                                    <li><a href=""><span class="fa fa-linkedin"></span></a></li>
                                                    <li><a href=""><span class="fa fa-youtube"></span></a></li>
                                                    <li><a href=""><span class="fa fa-instagram"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="zmovo-footer-buttom">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-5 col-lg-6">
                            <div class="zmovo-ft-menu">
                                <ul>
                                    <li><a href="">Terms</a></li>
                                    <li><a href="">Privacy</a></li>
                                    <li><a href="">About</a></li>
                                    <li><a href="">Our Ads</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-7 col-lg-6">
                            <div class="zmovo-ft-copyright">
                                <p>CopyRight 2019 Develop by <a href="" class="c1">Themepul</a> . All Rights Reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- END FOOTER -->
        <div class="to-top" id="back-top">
            <i class="fa fa-angle-up"></i>
        </div>


        
    {{-- </div> --}}


    <script src="{{asset("front\assets\vendor\modernizr-3.5.0.js")}}"></script>
    <script src="{{asset("front\assets\js\jquery-3.3.1.min.js")}}"></script>
    <script src="{{asset("front\assets\js\popper.min.js")}}"></script>
    <script src="{{asset("front\assets\video\video.popup.js")}}"></script>
    <script src="{{asset("front\assets\bootstrap-4.2.1\bootstrap.min.js")}}"></script>
    <script src="{{asset("front\assets\owlcarousel\owl.carousel.min.js")}}"></script>
    <script src="{{asset("front\assets\menu\menumaker.js")}}"></script>
    <script src="{{asset("front\assets\slick\swiper.min.js")}}"></script>
    <script src="{{asset("front\assets\js\jquery-ui.min.js")}}"></script>
    <script src="{{asset("front\assets\js\main.js")}}"></script>
</body>

</html>

    

