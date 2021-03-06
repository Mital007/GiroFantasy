<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Giro Fantasy - Contest</title>
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
    <body>

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

        <!-- breadcrumb begin -->
        <div class="breadcrumb-miscoo">
            <div class="breadcrumb-img">
                <img src="assets/img/contest/home_contests.png" alt="">
                <img src="assets/img/breadcrumb.png" alt="">
                <img src="assets/img/breadcrumb.png" alt="">
                <img src="assets/img/breadcrumb.png" alt="">
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-6">
                        <div class="breadcrumb-content">
                            <h2 class="title">Game Tournaments</h2>
                            <p>Giro Fatnasy has thousands of  online games for all generation. Play action, racing, sports, and other fun games for free at Misco</p>
                            <ul>
                                <li>
                                    <a href="#">Home</a>
                                </li>
                                <li class="arrow">
                                    <i class="fas fa-angle-right"></i>
                                </li>
                                <li>
                                    Game Tournaments
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb end -->

        <!-- contest-begin -->
        <div class="contest-section">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="contest-head">
                            <div class="choose-game">
                                <h4 class="title">Choose Your Tournaments</h4>
                                <div class="check-svg d-none">
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130.2 130.2">
                                        <circle class="path circle" fill="none" stroke="#73AF55" stroke-width="6" stroke-miterlimit="10" cx="65.1" cy="65.1" r="62.1"/>
                                        <polyline class="path check" fill="none" stroke="#73AF55" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" points="100.2,40.2 51.5,88.8 29.8,67.5 "/>
                                    </svg>
                                </div>
                                <ul>
                                    <li>
                                        <a href="#0" class="single-game">
                                            <img src="assets/img/games/assets-1.jpg" alt="">
                                            <span class="check-icon"></span>
                                        </a>
                                        <p class="game-name">
                                             Cricket
                                        </p>
                                    </li>
                                    <li>
                                        <a href="#0" class="single-game">
                                            <img src="assets/img/games/assets-2.jpg" alt="">
                                            <span class="check-icon"></span>
                                        </a>
                                        <p class="game-name">
                                            Football
                                        </p>
                                    </li>
                                    <li>
                                        <a href="#0" class="single-game">
                                            <img src="assets/img/games/assets-3.jpg" alt="">
                                            <span class="check-icon"></span>
                                        </a>
                                        <p class="game-name">
                                             Tennis
                                        </p>
                                    </li>
                                    <li>
                                        <a href="#0" class="single-game">
                                            <img src="assets/img/games/assets-4.jpg" alt="">
                                            <span class="check-icon"></span>
                                        </a>
                                        <p class="game-name">
                                            Basketball
                                        </p>
                                    </li>
                                    <li>
                                        <a href="#0" class="single-game">
                                            <img src="assets/img/games/assets-5.jpg" alt="">
                                            <span class="check-icon"></span>
                                        </a>
                                        <p class="game-name">
                                            Esports
                                        </p>
                                    </li>
                                    <li>
                                        <a href="#0" class="single-game">
                                            <img src="assets/img/games/assets-6.jpg" alt="">
                                            <span class="check-icon"></span>
                                        </a>
                                        <p class="game-name">
                                            Table Tennis
                                        </p>
                                    </li>
                                    <li>
                                        <a href="#0" class="single-game">
                                            <img src="assets/img/games/assets-4.jpg" alt="">
                                            <span class="check-icon"></span>
                                        </a>
                                        <p class="game-name">
                                            Vollyball
                                        </p>
                                    </li>
                                    <li>
                                        <a href="#0" class="single-game">
                                            <img src="assets/img/games/assets-5.jpg" alt="">
                                            <span class="check-icon"></span>
                                        </a>
                                        <p class="game-name">
                                            Formula 1
                                        </p>
                                    </li>
                                    <li>
                                        <a href="#0" class="single-game">
                                            <img src="assets/img/games/assets-6.jpg" alt="">
                                            <span class="check-icon"></span>
                                        </a>
                                        <p class="game-name">
                                            Hockey
                                        </p>
                                    </li>
                                </ul>
                            </div>
                            <div class="control-contest">
                                <div class="in-play-and-ended-filter">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">In-Play</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Ended</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="weeki-filter">
                                    <ul>
                                        <li>
                                            <a href="#0">Today</a>
                                        </li>
                                        <li>
                                            <a href="#0">This week</a>
                                        </li>
                                        <li>
                                            <a href="#0">this weekend</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="contest-content">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="contest-list">
                                        <div class="single-contest">
                                            <div class="row">
                                                <div class="col-xl-7 col-lg-7 part-left">
                                                    <div class="contest-box" style="background: url('assets/img/news/news-4.jpg');">
                                                        <div class="part-text">
                                                            <a href="#" class="title">MI vs CSK Contest for 2500 <small>COINS</small> </a>
                                                            <div class="part-timer timer" data-date="01 August 2021 9:56:00 GMT+01:00">
                                                                <div class="single-time">
                                                                    <span class="number day">01</span>
                                                                    <span class="title">Days</span>
                                                                </div>
                                                                <div class="single-time">
                                                                    <span class="number hour">24</span>
                                                                    <span class="title">Hours</span>
                                                                </div>
                                                                <div class="single-time">
                                                                    <span class="number minute">48</span>
                                                                    <span class="title">Minutes</span>
                                                                </div>
                                                                <div class="single-time">
                                                                    <span class="number second">11</span>
                                                                    <span class="title">Seconds</span>
                                                                </div>
                                                            </div>
                                                            <div class="part-info">
                                                                <ul>
                                                                    <li>
                                                                        <div class="part-icon">
                                                                            <img src="assets/img/svg/spin.svg" alt="">
                                                                        </div>
                                                                        <div class="part-info-text">
                                                                            <span class="title">Spin Trigger</span>
                                                                            <span class="descr">30 Times</span>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="part-icon">
                                                                            <img src="assets/img/svg/card-game.svg" alt="">
                                                                        </div>
                                                                        <div class="part-info-text">
                                                                            <span class="title">Joining Coins
																			</span>
                                                                            <span class="descr">100 COINS</span>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="part-icon">
                                                                            <img src="assets/img/svg/clock.svg" alt="">
                                                                        </div>
                                                                        <div class="part-info-text">
                                                                            <span class="title">Contest Duration</span>
                                                                            <span class="descr">5 hours</span>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="part-icon">
                                                                            <img src="assets/img/svg/cup.svg" alt="">
                                                                        </div>
                                                                        <div class="part-info-text">
                                                                            <span class="title">Estimated Prize</span>
                                                                            <span class="descr">2500 COINS</span>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-5 col-lg-5 part-right">
                                                    <div class="contest-date-text">
                                                        <h4><span class="clndr-icon"></span> Sunday 01 August 2021 | 01:00 GMT</h4>
                                                        <p>Defending champions Mumbai Indians will take on three-time winners Chennai Super Kings in Dubai on September 19 to kickstart the second leg of IPL 2021 which was suspended in May this year due to a spate of Coronavirus cases in the bubble.</p>
                                                        <a href="#0" class="def-btn def-small">Join This Contest</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-contest">
                                            <div class="row">
                                                <div class="col-xl-7 col-lg-7 part-left">
                                                    <div class="contest-box" style="background: url('assets/img/news/news-1.jpg');">
                                                        <div class="part-text">
                                                            <a href="#" class="title">Aus vs India for 500 <small>COINS</small> </a>
                                                            <div class="part-timer timer" data-date="12 August 2021 9:56:00 GMT+01:00">
                                                                <div class="single-time">
                                                                    <span class="number day">01</span>
                                                                    <span class="title">Days</span>
                                                                </div>
                                                                <div class="single-time">
                                                                    <span class="number hour">24</span>
                                                                    <span class="title">Hours</span>
                                                                </div>
                                                                <div class="single-time">
                                                                    <span class="number minute">48</span>
                                                                    <span class="title">Minutes</span>
                                                                </div>
                                                                <div class="single-time">
                                                                    <span class="number second">11</span>
                                                                    <span class="title">Seconds</span>
                                                                </div>
                                                            </div>
                                                            <div class="part-info">
                                                                <ul>
                                                                    <li>
                                                                        <div class="part-icon">
                                                                            <img src="assets/img/svg/spin.svg" alt="">
                                                                        </div>
                                                                        <div class="part-info-text">
                                                                            <span class="title">Spin Trigger</span>
                                                                            <span class="descr">30 Times</span>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="part-icon">
                                                                            <img src="assets/img/svg/card-game.svg" alt="">
                                                                        </div>
                                                                        <div class="part-info-text">
                                                                            <span class="title">Joining Coins</span>
                                                                            <span class="descr">50 Coins</span>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="part-icon">
                                                                            <img src="assets/img/svg/clock.svg" alt="">
                                                                        </div>
                                                                        <div class="part-info-text">
                                                                            <span class="title">Contest Duration</span>
                                                                            <span class="descr">5 hours</span>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="part-icon">
                                                                            <img src="assets/img/svg/cup.svg" alt="">
                                                                        </div>
                                                                        <div class="part-info-text">
                                                                            <span class="title">Estimated Prize</span>
                                                                            <span class="descr">500 COINS</span>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-5 col-lg-5 part-right">
                                                    <div class="contest-date-text">
                                                        <h4><span class="clndr-icon"></span> Sunday 12 August 2021 | 02:30 GMT</h4>
                                                        <p>Australia vs India Two Champion Team are going to play 3 T20 Tournament.</p>
                                                        <a href="#0" class="def-btn def-small">Join This Contest</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-contest">
                                            <div class="row">
                                                <div class="col-xl-7 col-lg-7 part-left">
                                                    <div class="contest-box" style="background: url('assets/img/news/news-2.jpg');">
                                                        <div class="part-text">
                                                            <a href="#" class="title">NZ vs ENG 1500 <small>COINS</small> </a>
                                                            <div class="part-timer timer" data-date="18 August 2021 9:56:00 GMT+01:00">
                                                                <div class="single-time">
                                                                    <span class="number day">01</span>
                                                                    <span class="title">Days</span>
                                                                </div>
                                                                <div class="single-time">
                                                                    <span class="number hour">24</span>
                                                                    <span class="title">Hours</span>
                                                                </div>
                                                                <div class="single-time">
                                                                    <span class="number minute">48</span>
                                                                    <span class="title">Minutes</span>
                                                                </div>
                                                                <div class="single-time">
                                                                    <span class="number second">11</span>
                                                                    <span class="title">Seconds</span>
                                                                </div>
                                                            </div>
                                                            <div class="part-info">
                                                                <ul>
                                                                    <li>
                                                                        <div class="part-icon">
                                                                            <img src="assets/img/svg/spin.svg" alt="">
                                                                        </div>
                                                                        <div class="part-info-text">
                                                                            <span class="title">Spin Trigger</span>
                                                                            <span class="descr">30 Times</span>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="part-icon">
                                                                            <img src="assets/img/svg/card-game.svg" alt="">
                                                                        </div>
                                                                        <div class="part-info-text">
                                                                            <span class="title">Joining Coins</span>
                                                                            <span class="descr">30 COINS</span>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="part-icon">
                                                                            <img src="assets/img/svg/clock.svg" alt="">
                                                                        </div>
                                                                        <div class="part-info-text">
                                                                            <span class="title">Contest Duration</span>
                                                                            <span class="descr">5 hours</span>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="part-icon">
                                                                            <img src="assets/img/svg/cup.svg" alt="">
                                                                        </div>
                                                                        <div class="part-info-text">
                                                                            <span class="title">Estimated Prize</span>
                                                                            <span class="descr">1500 COINS</span>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-5 col-lg-5 part-right">
                                                    <div class="contest-date-text">
                                                        <h4><span class="clndr-icon"></span> Wednesday 18 August 2021 | 05:00 GMT</h4>
                                                        <p> New Zealand are just won the world test championship so they are ready to take on England in their Home Conditions.</p>
                                                        <a href="#0" class="def-btn def-small">Join This Contest</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-contest">
                                            <div class="row">
                                                <div class="col-xl-7 col-lg-7 part-left">
                                                    <div class="contest-box" style="background: url('assets/img/news/news-3.jpg');">
                                                        <div class="part-text">
                                                            <a href="#" class="title">Pak vs WI for 2000 <small>COINS</small> </a>
                                                            <div class="part-timer timer" data-date="01 September 2021 9:56:00 GMT+01:00">
                                                                <div class="single-time">
                                                                    <span class="number day">01</span>
                                                                    <span class="title">Days</span>
                                                                </div>
                                                                <div class="single-time">
                                                                    <span class="number hour">24</span>
                                                                    <span class="title">Hours</span>
                                                                </div>
                                                                <div class="single-time">
                                                                    <span class="number minute">48</span>
                                                                    <span class="title">Minutes</span>
                                                                </div>
                                                                <div class="single-time">
                                                                    <span class="number second">11</span>
                                                                    <span class="title">Seconds</span>
                                                                </div>
                                                            </div>
                                                            <div class="part-info">
                                                                <ul>
                                                                    <li>
                                                                        <div class="part-icon">
                                                                            <img src="assets/img/svg/spin.svg" alt="">
                                                                        </div>
                                                                        <div class="part-info-text">
                                                                            <span class="title">Spin Trigger</span>
                                                                            <span class="descr">30 Times</span>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="part-icon">
                                                                            <img src="assets/img/svg/card-game.svg" alt="">
                                                                        </div>
                                                                        <div class="part-info-text">
                                                                            <span class="title">Joining Coins</span>
                                                                            <span class="descr">45 COINS</span>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="part-icon">
                                                                            <img src="assets/img/svg/clock.svg" alt="">
                                                                        </div>
                                                                        <div class="part-info-text">
                                                                            <span class="title">Contest Duration</span>
                                                                            <span class="descr">5 hours</span>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="part-icon">
                                                                            <img src="assets/img/svg/cup.svg" alt="">
                                                                        </div>
                                                                        <div class="part-info-text">
                                                                            <span class="title">Estimated Prize</span>
                                                                            <span class="descr">2000 COINS</span>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-5 col-lg-5 part-right">
                                                    <div class="contest-date-text">
                                                        <h4><span class="clndr-icon"></span> Wednesday 01 September 2020 | 09:30 GMT</h4>
                                                        <p>The final one ODI of Pakistan's tour of West Indies will be played on Wednesday after another round of Covid tests for the members of the bubble returned no new positive case. </p>
                                                        <a href="#0" class="def-btn def-small">Join This Contest</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="contest-list">
                                        <div class="single-contest">
                                            <div class="row">
                                                <div class="col-xl-7 col-lg-7 part-left">
                                                    <div class="contest-box" style="background: url('assets/img/news/news-4.jpg');">
                                                             <div class="part-text">
                                                            <a href="#" class="title">MI vs KKR Contest for 2000 <small>COINS</small> </a>
                                                            <div class="part-timer timer" data-date="25 July 2021 9:56:00 GMT+01:00">
                                                                <div class="single-time">
                                                                    <span class="number day">01</span>
                                                                    <span class="title">Days</span>
                                                                </div>
                                                                <div class="single-time">
                                                                    <span class="number hour">24</span>
                                                                    <span class="title">Hours</span>
                                                                </div>
                                                                <div class="single-time">
                                                                    <span class="number minute">48</span>
                                                                    <span class="title">Minutes</span>
                                                                </div>
                                                                <div class="single-time">
                                                                    <span class="number second">11</span>
                                                                    <span class="title">Seconds</span>
                                                                </div>
                                                            </div>
                                                            <div class="part-info">
                                                                <ul>
                                                                    <li>
                                                                        <div class="part-icon">
                                                                            <img src="assets/img/svg/spin.svg" alt="">
                                                                        </div>
                                                                        <div class="part-info-text">
                                                                            <span class="title">Spin Trigger</span>
                                                                            <span class="descr">30 Times</span>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="part-icon">
                                                                            <img src="assets/img/svg/card-game.svg" alt="">
                                                                        </div>
                                                                        <div class="part-info-text">
                                                                            <span class="title">Joining Coins
																			</span>
                                                                            <span class="descr">100 COINS</span>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="part-icon">
                                                                            <img src="assets/img/svg/clock.svg" alt="">
                                                                        </div>
                                                                        <div class="part-info-text">
                                                                            <span class="title">Contest Duration</span>
                                                                            <span class="descr">5 hours</span>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="part-icon">
                                                                            <img src="assets/img/svg/cup.svg" alt="">
                                                                        </div>
                                                                        <div class="part-info-text">
                                                                            <span class="title">Estimated Prize</span>
                                                                            <span class="descr">2500 COINS</span>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-5 col-lg-5 part-right">
                                                    <div class="contest-date-text">
                                                        <h4><span class="clndr-icon"></span> Sunday 25 July 2021 | 03:00 GMT</h4>
                                                        <p>Defending champions Mumbai Indians will take on three-time winners Chennai Super Kings in Dubai on September 19 to kickstart the second leg of IPL 2021 which was suspended in May this year due to a spate of Coronavirus cases in the bubble.</p>
                                                        <a href="#0" class="def-btn def-small">Join This Contest</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-contest">
                                            <div class="row">
                                                <div class="col-xl-7 col-lg-7 part-left">
                                                    <div class="contest-box" style="background: url('assets/img/news/news-1.jpg');">
                                                             <div class="part-text">
                                                            <a href="#" class="title">BAN vs IRE Contest for 700 <small>COINS</small> </a>
                                                            <div class="part-timer timer" data-date="23 July 2021 9:56:00 GMT+01:00">
                                                                <div class="single-time">
                                                                    <span class="number day">01</span>
                                                                    <span class="title">Days</span>
                                                                </div>
                                                                <div class="single-time">
                                                                    <span class="number hour">24</span>
                                                                    <span class="title">Hours</span>
                                                                </div>
                                                                <div class="single-time">
                                                                    <span class="number minute">48</span>
                                                                    <span class="title">Minutes</span>
                                                                </div>
                                                                <div class="single-time">
                                                                    <span class="number second">11</span>
                                                                    <span class="title">Seconds</span>
                                                                </div>
                                                            </div>
                                                            <div class="part-info">
                                                                <ul>
                                                                    <li>
                                                                        <div class="part-icon">
                                                                            <img src="assets/img/svg/spin.svg" alt="">
                                                                        </div>
                                                                        <div class="part-info-text">
                                                                            <span class="title">Spin Trigger</span>
                                                                            <span class="descr">30 Times</span>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="part-icon">
                                                                            <img src="assets/img/svg/card-game.svg" alt="">
                                                                        </div>
                                                                        <div class="part-info-text">
                                                                            <span class="title">Joining Coins
																			</span>
                                                                            <span class="descr">100 COINS</span>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="part-icon">
                                                                            <img src="assets/img/svg/clock.svg" alt="">
                                                                        </div>
                                                                        <div class="part-info-text">
                                                                            <span class="title">Contest Duration</span>
                                                                            <span class="descr">5 hours</span>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="part-icon">
                                                                            <img src="assets/img/svg/cup.svg" alt="">
                                                                        </div>
                                                                        <div class="part-info-text">
                                                                            <span class="title">Estimated Prize</span>
                                                                            <span class="descr">2500 COINS</span>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-5 col-lg-5 part-right">
                                                    <div class="contest-date-text">
                                                        <h4><span class="clndr-icon"></span> Friday 23 July 2021 | 10:00 GMT</h4>
                                                        <p>Defending champions Mumbai Indians will take on three-time winners Chennai Super Kings in Dubai on September 19 to kickstart the second leg of IPL 2021 which was suspended in May this year due to a spate of Coronavirus cases in the bubble.</p>
                                                        <a href="#0" class="def-btn def-small">Join This Contest</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-contest">
                                            <div class="row">
                                                <div class="col-xl-7 col-lg-7 part-left">
                                                    <div class="contest-box" style="background: url('assets/img/news/news-2.jpg');">
                                                            <div class="part-text">
                                                            <a href="#" class="title">AUS vs IND Contest for 2500 <small>COINS</small> </a>
                                                            <div class="part-timer timer" data-date="21 July 2021 9:56:00 GMT+01:00">
                                                                <div class="single-time">
                                                                    <span class="number day">01</span>
                                                                    <span class="title">Days</span>
                                                                </div>
                                                                <div class="single-time">
                                                                    <span class="number hour">24</span>
                                                                    <span class="title">Hours</span>
                                                                </div>
                                                                <div class="single-time">
                                                                    <span class="number minute">48</span>
                                                                    <span class="title">Minutes</span>
                                                                </div>
                                                                <div class="single-time">
                                                                    <span class="number second">11</span>
                                                                    <span class="title">Seconds</span>
                                                                </div>
                                                            </div>
                                                            <div class="part-info">
                                                                <ul>
                                                                    <li>
                                                                        <div class="part-icon">
                                                                            <img src="assets/img/svg/spin.svg" alt="">
                                                                        </div>
                                                                        <div class="part-info-text">
                                                                            <span class="title">Spin Trigger</span>
                                                                            <span class="descr">30 Times</span>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="part-icon">
                                                                            <img src="assets/img/svg/card-game.svg" alt="">
                                                                        </div>
                                                                        <div class="part-info-text">
                                                                            <span class="title">Joining Coins
																			</span>
                                                                            <span class="descr">100 COINS</span>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="part-icon">
                                                                            <img src="assets/img/svg/clock.svg" alt="">
                                                                        </div>
                                                                        <div class="part-info-text">
                                                                            <span class="title">Contest Duration</span>
                                                                            <span class="descr">5 hours</span>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="part-icon">
                                                                            <img src="assets/img/svg/cup.svg" alt="">
                                                                        </div>
                                                                        <div class="part-info-text">
                                                                            <span class="title">Estimated Prize</span>
                                                                            <span class="descr">2500 COINS</span>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-5 col-lg-5 part-right">
                                                    <div class="contest-date-text">
                                                        <h4><span class="clndr-icon"></span> Wednesday 21 July 2021 | 01:00 GMT</h4>
                                                        <p>Defending champions Mumbai Indians will take on three-time winners Chennai Super Kings in Dubai on September 19 to kickstart the second leg of IPL 2021 which was suspended in May this year due to a spate of Coronavirus cases in the bubble.</p>
                                                        <a href="#0" class="def-btn def-small">Join This Contest</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-contest">
                                            <div class="row">
                                                <div class="col-xl-7 col-lg-7 part-left">
                                                    <div class="contest-box" style="background: url('assets/img/news/news-3.jpg');">
                                                            <div class="part-text">
                                                            <a href="#" class="title">BAN vs PAK Contest for 2500 <small>COINS</small> </a>
                                                            <div class="part-timer timer" data-date="19 July 2021 9:56:00 GMT+01:00">
                                                                <div class="single-time">
                                                                    <span class="number day">01</span>
                                                                    <span class="title">Days</span>
                                                                </div>
                                                                <div class="single-time">
                                                                    <span class="number hour">24</span>
                                                                    <span class="title">Hours</span>
                                                                </div>
                                                                <div class="single-time">
                                                                    <span class="number minute">48</span>
                                                                    <span class="title">Minutes</span>
                                                                </div>
                                                                <div class="single-time">
                                                                    <span class="number second">11</span>
                                                                    <span class="title">Seconds</span>
                                                                </div>
                                                            </div>
                                                            <div class="part-info">
                                                                <ul>
                                                                    <li>
                                                                        <div class="part-icon">
                                                                            <img src="assets/img/svg/spin.svg" alt="">
                                                                        </div>
                                                                        <div class="part-info-text">
                                                                            <span class="title">Spin Trigger</span>
                                                                            <span class="descr">30 Times</span>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="part-icon">
                                                                            <img src="assets/img/svg/card-game.svg" alt="">
                                                                        </div>
                                                                        <div class="part-info-text">
                                                                            <span class="title">Joining Coins
																			</span>
                                                                            <span class="descr">100 COINS</span>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="part-icon">
                                                                            <img src="assets/img/svg/clock.svg" alt="">
                                                                        </div>
                                                                        <div class="part-info-text">
                                                                            <span class="title">Contest Duration</span>
                                                                            <span class="descr">5 hours</span>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="part-icon">
                                                                            <img src="assets/img/svg/cup.svg" alt="">
                                                                        </div>
                                                                        <div class="part-info-text">
                                                                            <span class="title">Estimated Prize</span>
                                                                            <span class="descr">2500 COINS</span>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-5 col-lg-5 part-right">
                                                    <div class="contest-date-text">
                                                        <h4><span class="clndr-icon"></span> Monday 19 July 2021 | 01:00 GMT</h4>
                                                        <p>Defending champions Mumbai Indians will take on three-time winners Chennai Super Kings in Dubai on September 19 to kickstart the second leg of IPL 2021 which was suspended in May this year due to a spate of Coronavirus cases in the bubble.</p>
                                                        <a href="#0" class="def-btn def-small">Join This Contest</a>
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
            </div>
        </div>
        <!-- contest end -->

        <!-- cta begin -->
        <div class="cta">
            <div class="container">
                <div class="row justify-content-xl-between justify-content-lg-between justify-content-sm-center">
                    <div class="col-xl-7 col-lg-7 col-md-8 col-sm-10">
                        <h2>Giro Fantasy - Where everything are<br/> possible with gaming</h2>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-10">
                        <a href="#0" class="def-btn play-now-btn">Play Now</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- cta end -->

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
        <!-- popper js -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
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