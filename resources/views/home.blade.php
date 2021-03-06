<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Giro Fantasy- Home</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <!-- bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- fontawesome icon  -->
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <!-- flaticon css -->
    <link rel="stylesheet" href="assets/fonts/flaticon.css">
    <!-- animate.css -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <!-- <link rel="stylesheet" href="assets/css/owl.carousel.min.css"> -->
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <!-- magnific popup -->
    <link rel="stylesheet" href="assets/css/modal-video.min.css">
    <!-- stylesheet -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- responsive -->
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body data-spy="scroll" data-target="#navbar" data-offset="0">

    <!-- preloader begin -->
    <div class="preloader">
        <img src="assets/img/preloader.gif" alt="">
    </div>
    <!-- preloader end -->

    <!-- header section begin -->
    <div class="header">
        <div class="row">
            <div class="overflow-hidden col-xl-3 col-lg-3 d-xl-flex d-lg-flex d-block align-items-center">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-7 d-xl-block d-lg-block">
                        <div class="logo">
                            <a href="{{ route('home')}}"><img src="assets/img/logo.png" alt="LOGO"></a>
                        </div>
                    </div>
                    <div class="d-xl-none d-lg-none col-5 d-flex align-items-center justify-content-end">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fas fa-bars"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-9">
                <div class="top-header">
                        <div class="row justify-content-end">
                            <div class="col-xl-8 col-lg-8">
                                <div class="top-right">
                                    <div class="buttons">
                                        <!-- <a href="#">support</a> -->
                                        <a href="register.html"><i class="fas fa-sign-in-alt"></i> signup</a>
                                    </div>
                                    <form class="part-searchBar">
                                        <input type="text" placeholder="Search">
                                        <button>
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="bottom-header">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12">
                            <nav class="navbar navbar-expand-lg navbar-light" id="navbar">
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="{{ route('home')}}">home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('aboutus')}}">about</a>
                                        </li>
                                        <!-- <li class="nav-item"> -->
                                            <!-- <a class="nav-link" href="games.html">Games</a> -->
                                        <!-- </li> -->
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('contest')}}">Contest</a>
                                        </li>
										<li class="nav-item">
                                            <a class="nav-link" href="{{ route('blog')}}">Blogs</a>
                                        </li>
                                        <!-- <li class="nav-item dropdown"> -->
                                            <!-- <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> -->
                                                <!-- Blog -->
                                            <!-- </a> -->
                                             <!-- <div class="dropdown-menu" aria-labelledby="navbarDropdown">  -->
                                                 <!-- <a class="dropdown-item" href="blog.html">Blog Post</a> --> 
                                                 <!-- <a class="dropdown-item" href="blog-details.html">Blog Details</a>  -->
                                            <!-- </div>  -->
                                        <!-- </li> -->
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Profile
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                                                <!-- <a class="dropdown-item" href="promotion.html">Promotion</a> -->
                                                <!-- <a class="dropdown-item" href="affiliate-programming.html">Affilite Program</a> -->
                                                <!-- <a class="dropdown-item" href="game-details.html">Games Details</a> -->
                                                <!-- <a class="dropdown-item" href="faq.html">Faq</a> -->
                                                <a class="dropdown-item" href="{{ route('account')}}">My Account</a>
                                                <a class="dropdown-item" href="{{ route('register')}}">Register</a>
                                                <a class="dropdown-item" href="{{ route('login')}}">Login</a>
                                            </div>
                                        </li>
										<li class="nav-item">
                                            <a class="nav-link" href="{{ route('how-to-play')}}">How to Play?</a>
                                        </li>
										<li class="nav-item">
                                            <a class="nav-link" href="{{ route('faq')}}">FAQ</a>
                                        </li>
                                        
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('contactus')}}">Contact</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header section end -->

    <!-- banner section begin -->
    <div class="banner" id="home">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8 col-sm-8">
                    <div class="banner-txt">
                        <h4>Giro Fantasy Sports</h4>
                        <h1>Build your dream team now</h1>
                        <a href="#0" class="def-btn">Play now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner section end -->

    <!-- about section begin -->
    <div class="about" id="about">
        
        <div class="container">
            <div class="feature">
                <div class="row">
                    <div class="col-xl-3 col-lg-3">
                        <div class="single-feature">
                            <div class="part-icon">
                                <img src="assets/img/games/cricket.png" alt="">
                            </div>
                            <h4 class="feature-title">
                                Cricket
                            </h4>
                            <a href="#0" class="def-btn def-small">
                                Play Now <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="long-arrow-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-long-arrow-right fa-w-14 fa-fw fa-2x"><path fill="currentColor" d="M311.03 131.515l-7.071 7.07c-4.686 4.686-4.686 12.284 0 16.971L387.887 239H12c-6.627 0-12 5.373-12 12v10c0 6.627 5.373 12 12 12h375.887l-83.928 83.444c-4.686 4.686-4.686 12.284 0 16.971l7.071 7.07c4.686 4.686 12.284 4.686 16.97 0l116.485-116c4.686-4.686 4.686-12.284 0-16.971L328 131.515c-4.686-4.687-12.284-4.687-16.97 0z" class=""></path></svg>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3">
                        <div class="single-feature">
                            <div class="part-icon">
                                <img src="assets/img/games/football.png" alt="">
                            </div>
                            <h4 class="feature-title">
                                Football
                            </h4>
                            <a href="#0" class="def-btn def-small">
                                Play Now <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="long-arrow-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-long-arrow-right fa-w-14 fa-fw fa-2x"><path fill="currentColor" d="M311.03 131.515l-7.071 7.07c-4.686 4.686-4.686 12.284 0 16.971L387.887 239H12c-6.627 0-12 5.373-12 12v10c0 6.627 5.373 12 12 12h375.887l-83.928 83.444c-4.686 4.686-4.686 12.284 0 16.971l7.071 7.07c4.686 4.686 12.284 4.686 16.97 0l116.485-116c4.686-4.686 4.686-12.284 0-16.971L328 131.515c-4.686-4.687-12.284-4.687-16.97 0z" class=""></path></svg>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3">
                        <div class="single-feature">
                            <div class="part-icon">
                                <img src="assets/img/games/Tennis.png" alt="">
                            </div>
                            <h4 class="feature-title">
                                Tennis
                            </h4>
                            <a href="#0" class="def-btn def-small">
                                Play Now <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="long-arrow-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-long-arrow-right fa-w-14 fa-fw fa-2x"><path fill="currentColor" d="M311.03 131.515l-7.071 7.07c-4.686 4.686-4.686 12.284 0 16.971L387.887 239H12c-6.627 0-12 5.373-12 12v10c0 6.627 5.373 12 12 12h375.887l-83.928 83.444c-4.686 4.686-4.686 12.284 0 16.971l7.071 7.07c4.686 4.686 12.284 4.686 16.97 0l116.485-116c4.686-4.686 4.686-12.284 0-16.971L328 131.515c-4.686-4.687-12.284-4.687-16.97 0z" class=""></path></svg>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3">
                        <div class="single-feature">
                            <div class="part-icon">
                                <img src="assets/img/games/Baseball.png" alt="">
                            </div>
                            <h4 class="feature-title">
                                Basketball
                            </h4>
                            <a href="#0" class="def-btn def-small">
                                Play Now <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="long-arrow-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-long-arrow-right fa-w-14 fa-fw fa-2x"><path fill="currentColor" d="M311.03 131.515l-7.071 7.07c-4.686 4.686-4.686 12.284 0 16.971L387.887 239H12c-6.627 0-12 5.373-12 12v10c0 6.627 5.373 12 12 12h375.887l-83.928 83.444c-4.686 4.686-4.686 12.284 0 16.971l7.071 7.07c4.686 4.686 12.284 4.686 16.97 0l116.485-116c4.686-4.686 4.686-12.284 0-16.971L328 131.515c-4.686-4.687-12.284-4.687-16.97 0z" class=""></path></svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-xl-between justify-content-lg-between justify-content-sm-center">
                <div class="col-xl-4 col-lg-4 col-sm-10 col-md-6">
                    <div class="part-txt">
                        <h2>Games are fun with Giro</h2>
                        <p>Giro Fantasy is a fantasy sports platform that lets you build your dream team in multiple sports. We are a part of the Giro Fintech family that is involved in providing the best FinTech solutions. <span>???There???s no overnight success. Whatever you can do each minute of today to make your dream that much closer to being reality, that???s what it takes to be successful.???</span></p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 d-xl-block d-lg-block d-md-none">
                    <div class="part-img">
                        <div class="single-img">
                            <img src="assets/img/about-img.png" alt="img">
                            <a href="#" data-video-id="5hhlW_SYJBA" class="js-video-button play-button">
                                <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="play" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-play fa-w-14 fa-fw fa-2x"><path fill="currentColor" d="M424.4 214.7L72.4 6.6C43.8-10.3 0 6.1 0 47.9V464c0 37.5 40.7 60.1 72.4 41.3l352-208c31.4-18.5 31.5-64.1 0-82.6zm-16.2 55.1l-352 208C45.6 483.9 32 476.6 32 464V47.9c0-16.3 16.4-18.4 24.1-13.8l352 208.1c10.5 6.2 10.5 21.4.1 27.6z" class=""></path></svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-sm-10 col-md-6">
                    <div class="part-txt right">
                        <h3>So, You should choose it </h3>
                        <p>We provide the best of best games for our users to let them play their favourite sport at the comfort of their home. You could find all the ongoing and upcoming tournaments in our contest page.</p>
                        <a href="#0" class="def-btn">learn more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about section end -->

   
     <div class="iq-feature" id="feature">
        <div class="container">
            <div class="row justify-content-xl-end justify-content-lg-end justify-content-sm-center">
                <div class="col-xl-5 col-lg-6 col-sm-10 col-md-7 d-xl-flex d-lg-flex d-block align-items-center">
                    <div class="part-text">
                        <h2>Check How it Works!</h2>
                        <p>On Giro Fantasy Sports, you create your fantasy team based on a real-life match to score maximum points and win exciting prizes!</p>
                        
                        <a href="#0" class="def-btn">play now</a> 
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 col-sm-10 col-md-5 offset-xl-1 offset-lg-1 offset-0">
                    <div class="part-img">
                        <img src="assets/img/iq-img.png" alt="">
                        <div class="part-video">
                           <!-- <a href="#" data-video-id="5hhlW_SYJBA" class="js-video-button play-button">
                                <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="play" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-play fa-w-14 fa-fw fa-2x"><path fill="currentColor" d="M424.4 214.7L72.4 6.6C43.8-10.3 0 6.1 0 47.9V464c0 37.5 40.7 60.1 72.4 41.3l352-208c31.4-18.5 31.5-64.1 0-82.6zm-16.2 55.1l-352 208C45.6 483.9 32 476.6 32 464V47.9c0-16.3 16.4-18.4 24.1-13.8l352 208.1c10.5 6.2 10.5 21.4.1 27.6z" class=""></path></svg>
                            </a>-->
                        </div>
                    </div>
                </div>
            </div> 
           <div class="part-features">
                <div class="row justify-content-sm-center justify-content-md-start">
                    <div class="col-xl-4 col-lg-4 col-sm-10 col-md-6">
                        <div class="single-feature">
                            <img class="icon" src="assets/img/svg/ms.png" alt="">
                            <h3 class="title">Multiple Sports</h3>
                            <p>Play our wide range of Fantasy Sports</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-sm-10 col-md-6">
                        <div class="single-feature">
                            <img class="icon" src="assets/img/svg/sb.png" alt="">
                            <h3 class="title">Secure Wallets</h3>
                            <p>Make Secure Payments for playing</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-sm-10 col-md-6">
                        <div class="single-feature">
                            <img class="icon" src="assets/img/svg/scoreboard.png" alt="">
                            <h3 class="title">Scoreboard</h3>
                            <p>Play now to top the Scoreboard!</p>
                        </div>
                    </div>
                </div>
            </div> 
        </div> 
    </div>
    <!-- iq feature end -->
    
    <!-- game begin -->
    <div class="games" id="games">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-7 col-sm-10">
                    <div class="section-title style-2">
                        <h2>Hundreds of online games</h2>
                        <p>Giro has hundreds of online games for all generation. Play cricket, football, baseball, and other fantasy games at Giro Fantasy sports.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-4">
                    <div class="game-menu">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link active" href="#0">
                                    <span class="icon icon-1">s</span>
                                    <span class="text">All Genres</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#0">
                                    <span class="icon icon-2"><img src="assets/img/svg/casino.svg" alt=""></span>
                                    <span class="text">Slots</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#0">
                                    <span class="icon icon-3"></span>
                                    <span class="text">Cricket</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#0">
                                    <span class="icon icon-4"></span>
                                    <span class="text">Football</span>
                                </a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" href="#0">
                                    <span class="icon icon-5">
                                        <img src="assets/img/svg/power-ball.svg" alt="">
                                    </span>
                                    <span class="text">Tennis</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#0">
                                    <span class="icon icon-6">
                                        <img src="assets/img/svg/jackpot.svg" alt="">
                                    </span>
                                    <span class="text">Basketball</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#0">
                                    <span class="icon icon-7"></span>
                                    <span class="text">Trending Now</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#0">
                                    <span class="icon icon-8"></span>
                                    <span class="text">New Release</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#0">
                                    <span class="icon icon-9"></span>
                                    <span class="text">Most Popular</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-8">
                    <div class="all-games anim-change">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-sm-6">
                                <div class="single-game">
                                    <div class="part-img">
                                        <img src="assets/img/games/assets1.png" alt="">
                                        <img class="icon-img" src="assets/img/games/icon-1.png" alt="">
                                    </div>
                                    <div class="part-text">
                                        <h4 class="game-title">
                                            MI vs CSK
                                        </h4>
                                        <a href="#0" class="def-btn def-small">Play Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-sm-6">
                                <div class="single-game">
                                    <div class="part-img">
                                        <img src="assets/img/games/assets1.png" alt="">
                                        <img class="icon-img" src="assets/img/games/icon-2.png" alt="">
                                    </div>
                                    <div class="part-text">
                                        <h4 class="game-title">
                                            RCB vs DC
                                        </h4>
                                        <a href="#0" class="def-btn def-small">Play Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-sm-6">
                                <div class="single-game">
                                    <div class="part-img">
                                        <img src="assets/img/games/assets1.png" alt="">
                                        <img class="icon-img" src="assets/img/games/icon-5.png" alt="">
                                    </div>
                                    <div class="part-text">
                                        <h4 class="game-title">
                                            KKR vs RR
                                        </h4>
                                        <a href="#0" class="def-btn def-small">Play Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-sm-6">
                                <div class="single-game">
                                    <div class="part-img">
                                        <img src="assets/img/games/assets1.png" alt="">
                                        <img class="icon-img" src="assets/img/games/icon-3.png" alt="">
                                    </div>
                                    <div class="part-text">
                                        <h4 class="game-title">
                                            PBKS vs SRH
                                        </h4>
                                        <a href="#0" class="def-btn def-small">Play Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-sm-6">
                                <div class="single-game">
                                    <div class="part-img">
                                        <img src="assets/img/games/assets1.png" alt="">
                                        <img class="icon-img" src="assets/img/games/icon-4.png" alt="">
                                    </div>
                                    <div class="part-text">
                                        <h4 class="game-title">
                                            India vs England
                                        </h4>
                                        <a href="#0" class="def-btn def-small">Play Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-sm-6">
                                <div class="single-game">
                                    <div class="part-img">
                                        <img src="assets/img/games/assets1.png" alt="">
                                        <img class="icon-img" src="assets/img/games/icon-6.png" alt="">
                                    </div>
                                    <div class="part-text">
                                        <h4 class="game-title">
                                            India vs Srilanka
                                        </h4>
                                        <a href="#0" class="def-btn def-small">Play Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-sm-6">
                                <div class="single-game">
                                    <div class="part-img">
                                        <img src="assets/img/games/assets1.png" alt="">
                                        <img class="icon-img" src="assets/img/games/icon-2.png" alt="">
                                    </div>
                                    <div class="part-text">
                                        <h4 class="game-title">
                                            CSK vs RCB
                                        </h4>
                                        <a href="#0" class="def-btn def-small">Play Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-sm-6">
                                <div class="single-game">
                                    <div class="part-img">
                                        <img src="assets/img/games/assets1.png" alt="">
                                        <img class="icon-img" src="assets/img/games/icon-5.png" alt="">
                                    </div>
                                    <div class="part-text">
                                        <h4 class="game-title">
                                            MI vs DC
                                        </h4>
                                        <a href="#0" class="def-btn def-small">Play Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-sm-6">
                                <div class="single-game">
                                    <div class="part-img">
                                        <img src="assets/img/games/assets1.png" alt="">
                                        <img class="icon-img" src="assets/img/games/icon-1.png" alt="">
                                    </div>
                                    <div class="part-text">
                                        <h4 class="game-title">
                                            RR vs KKR
                                        </h4>
                                        <a href="#0" class="def-btn def-small">Play Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- game end -->

    <!-- recent activity begin -->
    <div class="recent-activity">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-7 col-sm-10">
                    <div class="section-title">
                        <h2>Our recent mobility</h2>
                        <p>Giro has hundreds of online games for all generation. Play cricket, football, baseball, and other fantasy games at Giro Fantasy sports.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4">
                    <div class="single-col">
                        <h3 class="title">
                            Our latest winners
                        </h3>
                        <div class="activity-list">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-6">
                                    <div class="single-activity">
                                        <div class="part-img">
                                            <img src="assets/img/games/prof.png" alt="">
                                        </div>
                                        <div class="part-text">
                                            <p><span class="player-name">Mukta</span> won 2 minutes ago<br/> on game of <a href="#0" class="game-name">Cricket</a></p>
                                            <span class="winning-amount">4200 coins</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-6">
                                    <div class="single-activity">
                                        <div class="part-img">
                                            <img src="assets/img/games/prof.png" alt="">
                                        </div>
                                        <div class="part-text">
                                            <p><span class="player-name">Shehwar</span> won 2 minutes ago<br/> on game of <a href="#0" class="game-name">Cricket</a></p>
                                            <span class="winning-amount">3500 coins</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-6">
                                    <div class="single-activity">
                                        <div class="part-img">
                                            <img src="assets/img/games/prof.png" alt="">
                                        </div>
                                        <div class="part-text">
                                            <p><span class="player-name">Maria</span> won 2 minutes ago<br/> on game of <a href="#0" class="game-name">Football</a></p>
                                            <span class="winning-amount">2000 coins</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-6">
                                    <div class="single-activity">
                                        <div class="part-img">
                                            <img src="assets/img/games/prof.png" alt="">
                                        </div>
                                        <div class="part-text">
                                            <p><span class="player-name">Drubo</span> won 2 minutes ago<br/> on game of <a href="#0" class="game-name">Tennis</a></p>
                                            <span class="winning-amount">1500 coins</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="single-col">
                        <h3 class="title">
                            Jackpot trigger wins
                        </h3>
                        <div class="activity-list jackpot-triggers-win">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-6">
                                    <div class="single-activity">
                                        <div class="part-img">
                                            <img src="assets/img/games/prof.png" alt="">
                                        </div>
                                        <div class="part-text">
                                            <span class="winning-amount">4,500 Coins</span>
                                            <p>Player ID: <span class="player-name">Mukta</span> <br/> Game: <a href="#0" class="game-name">Cricket</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-6">
                                    <div class="single-activity">
                                        <div class="part-img">
                                            <img src="assets/img/games/prof.png" alt="">
                                        </div>
                                        <div class="part-text">
                                            <span class="winning-amount">3,505 Coins</span>
                                            <p>Player ID: <span class="player-name">Sraddha</span> <br/> Game: <a href="#0" class="game-name">Cricket</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-6">
                                    <div class="single-activity">
                                        <div class="part-img">
                                            <img src="assets/img/games/prof.png" alt="">
                                        </div>
                                        <div class="part-text">
                                            <span class="winning-amount">2,100 Coins</span>
                                            <p>Player ID: <span class="player-name">Anushka</span> <br/> Game: <a href="#0" class="game-name">Cricket</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-6">
                                    <div class="single-activity">
                                        <div class="part-img">
                                            <img src="assets/img/games/prof.png" alt="">
                                        </div>
                                        <div class="part-text">
                                            <span class="winning-amount">1,002 Coins</span>
                                            <p>Player ID: <span class="player-name">Genelia</span> <br/> Game: <a href="#0" class="game-name">Cricket</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="single-col">
                        <h3 class="title">
                            All Time Top Winners
                        </h3>
                        <div class="activity-list top-winner">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-6">
                                    <div class="single-activity">
                                        <div class="part-img">
                                            <img src="assets/img/user-icon/up.png" alt="">
                                        </div>
                                        <div class="part-text">
                                            <p>Name: <span class="player-name">Mukta Martin</span> <br/> Game: <a href="#0" class="game-name">Cricket</a></p>
                                            <span class="winning-amount">4,200 Coins</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-6">
                                    <div class="single-activity">
                                        <div class="part-img">
                                            <img src="assets/img/user-icon/up.png" alt="">
                                        </div>
                                        <div class="part-text">
                                            <p><span class="player-name">Mukta</span> won 2 minutes ago<br/> on game of <a href="#0" class="game-name">Tennis</a></p>
                                            <span class="winning-amount">3,500 Coins</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-6">
                                    <div class="single-activity">
                                        <div class="part-img">
                                            <img src="assets/img/user-icon/up.png" alt="">
                                        </div>
                                        <div class="part-text">
                                            <p><span class="player-name">Mukta</span> won 2 minutes ago<br/> on game of <a href="#0" class="game-name">Tennis</a></p>
                                            <span class="winning-amount">2,100 Coins</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-6">
                                    <div class="single-activity">
                                        <div class="part-img">
                                            <img src="assets/img/user-icon/up.png" alt="">
                                        </div>
                                        <div class="part-text">
                                            <p><span class="player-name">Mukta</span> won 2 minutes ago<br/> on game of <a href="#0" class="game-name">Cricket</a></p>
                                            <span class="winning-amount">1,000 Coins</span>
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
    <!-- recent activity end -->

    <!-- cta begin -->
    <div class="cta">
        <div class="container">
            <div class="row justify-content-xl-between justify-content-lg-between justify-content-sm-center">
                <div class="col-xl-7 col-lg-7 col-md-8 col-sm-10">
                    <h2>Giro Fantasy Sports <br/> </h2>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-10">
                    <a href="#0" class="def-btn play-now-btn">Play Now</a>
                </div>
            </div>
        </div>
    </div>
    <!-- cta end -->

    <!-- latest summary begin -->
    <div class="latest-summury">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-7 col-sm-10">
                    <div class="section-title style-2">
                        <h2>Latest Bets summary</h2>
                        
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-3">
                    <div class="game-menu">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link active" href="#0">
                                    <span class="icon icon-1">s</span>
                                    <span class="text">All Bets</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#0">
                                    <span class="icon icon-2"><img src="assets/img/svg/casino.svg" alt=""></span>
                                    <span class="text">High Rolls</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#0">
                                    <span class="icon icon-3"></span>
                                    <span class="text">Statistics</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#0">
                                    <span class="icon icon-4"></span>
                                    <span class="text">Top Players</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9">
                    <div class="all-bets">
                        <!-- <div class="row">
                            <div class="col-xl-4 col-lg-4 col-sm-6">
                                <div class="single-result">
                                    <div class="part-top">
                                        <div class="user-img">
                                            <img src="assets/img/games/assets-7.jpg" alt="">
                                        </div>
                                        <div class="part-info">
                                            <span class="name">Nilidiano Junior</span>
                                            <span class="bet-id">Bet ID : 32,156,52</span>
                                            <span class="game">Mega Matrix</span>
                                        </div>
                                    </div>
                                    <div class="part-bottom">
                                        <ul>
                                            <li>
                                                <span class="title">Coin:</span>
                                                <span class="descr">BTC</span>
                                            </li>
                                            <li>
                                                <span class="title">Bet:</span>
                                                <span class="descr">0.1500</span>
                                            </li>
                                            <li>
                                                <span class="title">Win:</span>
                                                <span class="descr">0.1750</span>
                                            </li>
                                            <li>
                                                <span class="title">Profit</span>
                                                <span class="descr">0.0250</span>
                                            </li>
                                            <li>
                                                <span class="title">Payout</span>
                                                <span class="descr">2.0x</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-sm-6">
                                <div class="single-result">
                                    <div class="part-top">
                                        <div class="user-img">
                                            <img src="assets/img/games/assets-2.jpg" alt="">
                                        </div>
                                        <div class="part-info">
                                            <span class="name">Mukta Marten</span>
                                            <span class="bet-id">Bet ID : 32,156,52</span>
                                            <span class="game">Royal Casino</span>
                                        </div>
                                    </div>
                                    <div class="part-bottom">
                                        <ul>
                                            <li>
                                                <span class="title">Coin:</span>
                                                <span class="descr">BTC</span>
                                            </li>
                                            <li>
                                                <span class="title">Bet:</span>
                                                <span class="descr">0.1500</span>
                                            </li>
                                            <li>
                                                <span class="title">Win:</span>
                                                <span class="descr">0.1750</span>
                                            </li>
                                            <li>
                                                <span class="title">Profit</span>
                                                <span class="descr">0.0250</span>
                                            </li>
                                            <li>
                                                <span class="title">Payout</span>
                                                <span class="descr">2.0x</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-sm-6">
                                <div class="single-result">
                                    <div class="part-top">
                                        <div class="user-img">
                                            <img src="assets/img/games/assets-3.jpg" alt="">
                                        </div>
                                        <div class="part-info">
                                            <span class="name">Saif Al huda</span>
                                            <span class="bet-id">Bet ID : 32,156,52</span>
                                            <span class="game">Poker Club</span>
                                        </div>
                                    </div>
                                    <div class="part-bottom">
                                        <ul>
                                            <li>
                                                <span class="title">Coin:</span>
                                                <span class="descr">BTC</span>
                                            </li>
                                            <li>
                                                <span class="title">Bet:</span>
                                                <span class="descr">0.1500</span>
                                            </li>
                                            <li>
                                                <span class="title">Win:</span>
                                                <span class="descr">0.1750</span>
                                            </li>
                                            <li>
                                                <span class="title">Profit</span>
                                                <span class="descr">0.0250</span>
                                            </li>
                                            <li>
                                                <span class="title">Payout</span>
                                                <span class="descr">2.0x</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-sm-6">
                                <div class="single-result">
                                    <div class="part-top">
                                        <div class="user-img">
                                            <img src="assets/img/games/assets-4.jpg" alt="">
                                        </div>
                                        <div class="part-info">
                                            <span class="name">Jordan Smell</span>
                                            <span class="bet-id">Bet ID : 32,156,52</span>
                                            <span class="game">Slots 375</span>
                                        </div>
                                    </div>
                                    <div class="part-bottom">
                                        <ul>
                                            <li>
                                                <span class="title">Coin:</span>
                                                <span class="descr">BTC</span>
                                            </li>
                                            <li>
                                                <span class="title">Bet:</span>
                                                <span class="descr">0.1500</span>
                                            </li>
                                            <li>
                                                <span class="title">Win:</span>
                                                <span class="descr">0.1750</span>
                                            </li>
                                            <li>
                                                <span class="title">Profit</span>
                                                <span class="descr">0.0250</span>
                                            </li>
                                            <li>
                                                <span class="title">Payout</span>
                                                <span class="descr">2.0x</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-sm-6">
                                <div class="single-result">
                                    <div class="part-top">
                                        <div class="user-img">
                                            <img src="assets/img/games/assets-5.jpg" alt="">
                                        </div>
                                        <div class="part-info">
                                            <span class="name">Jonathan Djerby</span>
                                            <span class="bet-id">Bet ID : 32,156,52</span>
                                            <span class="game">Poker Club</span>
                                        </div>
                                    </div>
                                    <div class="part-bottom">
                                        <ul>
                                            <li>
                                                <span class="title">Coin:</span>
                                                <span class="descr">BTC</span>
                                            </li>
                                            <li>
                                                <span class="title">Bet:</span>
                                                <span class="descr">0.1500</span>
                                            </li>
                                            <li>
                                                <span class="title">Win:</span>
                                                <span class="descr">0.1750</span>
                                            </li>
                                            <li>
                                                <span class="title">Profit</span>
                                                <span class="descr">0.0250</span>
                                            </li>
                                            <li>
                                                <span class="title">Payout</span>
                                                <span class="descr">2.0x</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-sm-6">
                                <div class="single-result">
                                    <div class="part-top">
                                        <div class="user-img">
                                            <img src="assets/img/games/assets-6.jpg" alt="">
                                        </div>
                                        <div class="part-info">
                                            <span class="name">Nilidiano Junior</span>
                                            <span class="bet-id">Bet ID : 32,156,52</span>
                                            <span class="game">Poker Club</span>
                                        </div>
                                    </div>
                                    <div class="part-bottom">
                                        <ul>
                                            <li>
                                                <span class="title">Coin:</span>
                                                <span class="descr">BTC</span>
                                            </li>
                                            <li>
                                                <span class="title">Bet:</span>
                                                <span class="descr">0.1500</span>
                                            </li>
                                            <li>
                                                <span class="title">Win:</span>
                                                <span class="descr">0.1750</span>
                                            </li>
                                            <li>
                                                <span class="title">Profit</span>
                                                <span class="descr">0.0250</span>
                                            </li>
                                            <li>
                                                <span class="title">Payout</span>
                                                <span class="descr">2.0x</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        
                        <div class="table-cover">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Coin</th>
                                        <th scope="col">User Name</th>
                                        <th scope="col">Predict</th>
                                        <th scope="col">Payout</th>
                                        <th scope="col">Profit</th>
                                        <th scope="col">Reward</th>
                                        <th scope="col">Account ID</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">
                                            <img src="assets/img/coin/coin-1.png" alt="">
                                        </th>
                                        <td>Tanun07</td>
                                        <td>12.245.0</td>
                                        <td>252.5</td>
                                        <td class="profit">5112.5</td>
                                        <td>001.52.80</td>
                                        <td>ID250001</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <img src="assets/img/coin/coin-2.png" alt="">
                                        </th>
                                        <td>Tanun07</td>
                                        <td>12.245.0</td>
                                        <td>252.5</td>
                                        <td class="profit">5112.5</td>
                                        <td>001.52.80</td>
                                        <td>ID250001</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <img src="assets/img/coin/coin-3.png" alt="">
                                        </th>
                                        <td>Tanun07</td>
                                        <td>12.245.0</td>
                                        <td>252.5</td>
                                        <td class="profit">5112.5</td>
                                        <td>001.52.80</td>
                                        <td>ID250001</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <img src="assets/img/coin/coin-4.png" alt="">
                                        </th>
                                        <td>Tanun07</td>
                                        <td>12.245.0</td>
                                        <td>252.5</td>
                                        <td class="profit">5112.5</td>
                                        <td>001.52.80</td>
                                        <td>ID250001</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <img src="assets/img/coin/coin-5.png" alt="">
                                        </th>
                                        <td>Tanun07</td>
                                        <td>12.245.0</td>
                                        <td>252.5</td>
                                        <td class="profit">5112.5</td>
                                        <td>001.52.80</td>
                                        <td>ID250001</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <img src="assets/img/coin/coin-1.png" alt="">
                                        </th>
                                        <td>Tanun07</td>
                                        <td>12.245.0</td>
                                        <td>252.5</td>
                                        <td class="profit">5112.5</td>
                                        <td>001.52.80</td>
                                        <td>ID250001</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <img src="assets/img/coin/coin-2.png" alt="">
                                        </th>
                                        <td>Tanun07</td>
                                        <td>12.245.0</td>
                                        <td>252.5</td>
                                        <td class="profit">5112.5</td>
                                        <td>001.52.80</td>
                                        <td>ID250001</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="view-more-btn text-center">
                            <a href="#0" class="def-btn">Refresh Data<span class="icon-10"></span></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- latest summery end -->

    <!-- partner begin -->
    <div class="partner">
        <div class="container">
            <div class="row justify-content-xl-between justify-content-lg-between justify-content-sm-center justify-content-md-start">
                <div class="col-xl-5 col-lg-6 col-md-9 col-sm-10 d-xl-flex d-lg-flex d-block align-items-center">
                    <div class="part-text">
                        <h2 class="title">Top Tournaments</h2>
                        <p>IPL resumes in the month of September 2021, so book your slot now to build your dream team and play.</p>
                        <p></p>
                        <a href="#0" class="def-btn">Join Us</a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-10">
                    <div class="part-partner-logo">
                        <div class="row no-gutters">
                            <div class="col-xl-4 col-lg-4 col-sm-6 col-md-4">
                                <div class="single-logo">
                                    <a href="#0">
                                        <img src="assets/img/partner/fifa-world-cup.png" alt="">
                                    </a>
                                </div>
                            </div>
                            
                            <div class="col-xl-4 col-lg-4 col-sm-6 col-md-4">
                                <div class="single-logo">
                                    <a href="#0">
                                        <img src="assets/img/partner/home-22.png" alt="">
                                    </a>
                                </div>
                            </div>
                            
                            <div class="col-xl-4 col-lg-4 col-sm-6 col-md-4">
                                <div class="single-logo">
                                    <a href="#0">
                                        <img src="assets/img/partner/home-23.png" alt="">
                                    </a>
                                </div>
                            </div>
                            
                            <div class="col-xl-4 col-lg-4 col-sm-6 col-md-4">
                                <div class="single-logo">
                                    <a href="#0">
                                        <img src="assets/img/partner/sponsor-5.png" alt="">
                                    </a>
                                </div>
                            </div>
                            
                            <div class="col-xl-4 col-lg-4 col-sm-6 col-md-4">
                                <div class="single-logo">
                                    <a href="#0">
                                        <img src="assets/img/partner/sponsor-4.png" alt="">
                                    </a>
                                </div>
                            </div>
                            
                            <div class="col-xl-4 col-lg-4 col-sm-6 col-md-4">
                                <div class="single-logo">
                                    <a href="#0">
                                        <img src="assets/img/partner/sponsor-6.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- partner end -->

    <!-- blog begin -->
    <div class="news" id="blog">
        <div class="container news-container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-7 col-sm-10">
                <div class="section-title style-2">
                    <h2>Latest News</h2>
                    <!--<p>Misco has thousands of free online games for all generation. Play action, racing, sports, and other fun games for free at Misco</p>
                    -->      </div>
            </div>
        </div>
            <div class="row justify-content-sm-center justify-content-md-start">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
                    <div class="single-news">
                        <div class="part-img">
                            <img src="assets/img/news/news-1.png" alt="">
                        </div>
                        <div class="part-text">
                            <h3 class="title">IPL 2021: Season to resume on Sep 19, final on Oct 15</h3>
                            <p>
                                The Board of Control for Cricket in India (BCCI) has zeroed in on the date for the resumption of the 14th edition of the Indian Premier League to be held in UAE.

The first game on resumption will be played on September 19 while the final will be hosted on October 15.
                            </p>
                            <a href="#0" class="def-btn def-small">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
                    <div class="single-news">
                        <div class="part-img">
                            <img src="assets/img/news/news-3.png" alt="">
                        </div>
                        <div class="part-text">
                            <h3 class="title">ICC Men's T20 World Cup groups announced</h3>
                            <p>
                                The International Cricket Council (ICC) today announced the groups for the ICC Men???s T20 World Cup 2021 to be hosted by the BCCI in Oman and the United Arab Emirates from 17 October to 14 November.

                                <br>
                                <br>
                                <br>
                            </p>
                            <a href="#0" class="def-btn def-small">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
                    <div class="single-news">
                        <div class="part-img">
                            <img src="assets/img/news/news-2.png" alt="">
                        </div>
                        <div class="part-text">
                            <h3 class="title">Priya Malik Clinches Gold For India at World Cadet Wrestling Championship in Hungary </h3>
                            <p>
                                Malik has consistently performed in the recent past and this win would give her a shot in the arm. She also won gold in the 2019 edition of Khelo India in Pune and then went on to win another gold.
                            </p>
                            <a href="#0" class="def-btn def-small">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog end -->

    <!-- payment gateways begin 
    <div class="payment-gateway" id="payment">
        <div class="container">
            <div class="row justify-content-xl-between justify-content-lg-around justify-content-sm-center">
                <div class="col-xl-4 col-lg-4 col-sm-10 col-md-4 offset-xl-1 offset-lg-0 order-xl-0 order-lg-0 order-1">
                    <div class="all-gateways">
                        <img src="assets/img/crypto-currency.png" alt="">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7 col-sm-10 col-md-7 d-xl-flex d-lg-flex d-sm-block d-md-block d-block align-items-center order-xl-2 order-lg-2 order-0">
                    <div class="part-text">
                        <h2 class="title">Wanna pay with Crytocurrency</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem placeat, iure possimus provident dicta dolorum? Rem velit eius ipsam eligendi recusandae! Tempore magnam exercitationem recusandae alias consectetur ipsa quibusdam veniam?</p>
                        <a href="#0" class="def-btn">Pay Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    -->
    <!-- payment gateways end -->

    <!-- testimonial begin 
    <div class="testimonial" id="testimonial">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-7 col-sm-10">
                    <div class="section-title style-2">
                        <h2>Feedback to Misco</h2>
                        <p>Misco has thousands of free online games for all generation. Play action, racing, sports, and other fun games for free at Misco</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8 col-sm-10">
                    <div class="testimonial-slider owl-carousel owl-theme">
                        <div class="single-testimonial">
                            <div class="part-img">
                                <img src="assets/img/testimonial/comment-user-1.jpg" alt="">
                            </div>
                            <div class="part-text">
                                <i class="icon-for-quot fas fa-quote-left"></i>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint nesciunt dignissimos laborum praesentium illo dolorem, fuga commodi? Laudantium totam porro quod nihil eius!</p>
                                <span class="position">
                                    Player
                                </span>
                                <span class="user-name">
                                    Illustino Calibia
                                </span>
                            </div>
                        </div>
                        <div class="single-testimonial">
                            <div class="part-img">
                                <img src="assets/img/testimonial/comment-user-2.jpg" alt="">
                            </div>
                            <div class="part-text">
                                <i class="icon-for-quot fas fa-quote-left"></i>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint nesciunt dignissimos laborum praesentium illo dolorem, fuga commodi? Laudantium totam porro quod nihil eius!</p>
                                <span class="position">
                                    Player
                                </span>
                                <span class="user-name">
                                    Illustino Calibia
                                </span>
                            </div>
                        </div>
                        <div class="single-testimonial">
                            <div class="part-img">
                                <img src="assets/img/testimonial/comment-user-3.jpg" alt="">
                            </div>
                            <div class="part-text">
                                <i class="icon-for-quot fas fa-quote-left"></i>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint nesciunt dignissimos laborum praesentium illo dolorem, fuga commodi? Laudantium totam porro quod nihil eius!</p>
                                <span class="position">
                                    Player
                                </span>
                                <span class="user-name">
                                    Illustino Calibia
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- testimonial end -->

    <!-- contact begin -->
    <div class="contact" id="contact">
        <div class="container container-contact">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-7 col-sm-10">
                    <div class="section-title">
                        <h2>Get in touch with us</h2>
                        
                    <!--<p>Misco has thousands of free online games for all generation. Play action, racing, sports, and other fun games for free at Misco</p>
                    --></div>
                </div>
            </div>
            <div class="bg-tamim">
                <div class="row justify-content-around">
                    <div class="col-xl-6 col-lg-6 col-sm-10 col-md-6">
                        <div class="part-form">
                            <form>
                                <input type="text" placeholder="Players Name">
                                <input type="text" placeholder="Players Email">
                                <textarea placeholder="Write to Us..."></textarea>
                                <button class="submit-btn def-btn" type="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-sm-10 col-md-6">
                        <div class="part-address">
                            <div class="addressing">
                                <div class="single-address">
                                    <h4>Our Office</h4>
                                    <p>Gate Avenue at DIFC, Zone - D Level 1, Office 208 - 215 SZR, <br/>Dubai, UAE</p>
                                </div>
                                <div class="single-address">
                                    <h4>Email</h4>
                                    <p>contact@girofintech.com<br/>
                                        </p>
                                </div>
                                <!--<div class="single-address">
                                    <h4>Phone</h4>
                                    <p>+1 318-342-7639<br/>
                                        +1 530-259-4087</p>
                                </div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact end -->

    <!-- footer begin -->
   <div class="footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-4 col-lg-4 col-sm-10">
                            <div class="about-widget">
                                <a href="index.html" class="logo">
                                    <img src="assets/img/logo.png" alt="">
                                </a>
                                <p>Best Fantasy Sports Experience</p>
                                <div class="social-links">
                                    <ul>
                                        <li>
                                            <a href="#0" class="single-link">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#0" class="single-link">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#0" class="single-link">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#0" class="single-link">
                                                <i class="fab fa-pinterest-p"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-sm-10">
                            <div class="link-widget">
                                <h4 class="title">
                                    Other
                                </h4>
                                <ul>
                                    <li>
                                        <a href="#0" class="single-link">
                                            FAQ?
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#0" class="single-link">
                                            Blogs
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#0" class="single-link">
                                             About Us
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#0" class="single-link">
                                             Contact Us
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-sm-10">
                            <div class="newsletter-widget">
                                <h4 class="title">
                                    Subscribe To Our Newsletter
                                </h4>
                                <form class="newsletter-form">
                                    <input type="text" placeholder="Enter Your Mail Address">
                                    <button class="def-btn def-small">
                                        Subscribe
                                    </button>
                                </form>
                                <p>Be the first to get the latest updates straight to your inbox.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-area">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-8">
                            <p>Copyright ?? <a href="index.html">Giro Fantasy</a> - 2021. All Rights Reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- footer end -->

    <!-- jquery -->
    <script src="assets/js/jquery.js"></script>
    <!-- bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- owl carousel -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- magnific popup -->
    <script src="assets/js/jquery-modal-video.min.js"></script>
    <!-- filterizr js -->
    <script src="assets/js/jquery.filterizr.min.js"></script>
    <!-- way poin js-->
    <script src="assets/js/waypoints.min.js"></script>
    <!-- wow js-->
    <script src="assets/js/wow.min.js"></script>
    <!-- main -->
    <script src="assets/js/main.js"></script>
</body>
</html>