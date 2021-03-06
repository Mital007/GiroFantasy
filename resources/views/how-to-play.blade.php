<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Giro Fantasy - How to Play?</title>
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
                <img src="assets/img/breadcrumb.png" alt="">
                <img src="assets/img/breadcrumb.png" alt="">
                <img src="assets/img/breadcrumb.png" alt="">
                <img src="assets/img/breadcrumb.png" alt="">
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-6">
                        <div class="breadcrumb-content">
                            <h2 class="title">How to Play?</h2>
                            
                            <ul>
                                <li>
                                    <a href="#">Home</a>
                                </li>
                                <li class="arrow">
                                    <i class="fas fa-angle-right"></i>
                                </li>
                                <li>
                                    How to Play ?
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb end -->

        <!-- faq begin -->
        <div class="faq">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-md-4">
                        <div class="faq-sidebar">
                            <div class="search-widget">
                                <form>
                                    <input type="text" placeholder="Search here">
                                    <button type="submit"><i class="fas fa-search"></i></button>
                                </form>
                            </div>
                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">How to Create Team</a>
                                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Point System</a>
                                
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-8">
                        <div class="faq-content">
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                    <div class="single-faq">
                                        <h4>How to create a team?</h4>
                                        <p>Every cricket team you build on Fantasy has to have 11 players, of which a maximum of 7 players can be from any one team playing the real-life match.</p>
                                    </div>

                                    <div class="single-faq">
                                        <h4>What are the player combinations?</h4>
                                        <p>Your Fantasy can have different combinations of players, but has to be within the 100 credit cap and must qualify the following team selection criteria: </p>
                                        <table class="table table-bordered" style="color: white">
                                            <thead>
                                              <tr>
                                                <th scope="col">Player Type</th>
                                                <th scope="col">Min</th>
                                                <th scope="col">Max</th>
                                                
                                              </tr>
                                            </thead>
                                            <tbody>
                                              <tr>
                                                <th scope="row">Wicket Keeper - WK</th>
                                                <td>1</td>
                                                <td>4</td>
                                                
                                              </tr>
                                              <tr>
                                                <th scope="row">Batsman - BAT</th>
                                                <td>3</td>
                                                <td>6</td>
                                                
                                              </tr>
                                              <tr>
                                                <th scope="row">All Rounder - AR</th>
                                                <td>1</td>
                                                <td>4</td>
                                                
                                              </tr>
                                              <tr>
                                                <th scope="row">Bowler - BWL </th>
                                                <td>3</td>
                                                <td>6</td>
                                                
                                              </tr>
                                            </tbody>
                                          </table>
                                    </div>

                                    <div class="single-faq">
                                        <h4>How many points do you earn from choosing the VC and C ?</h4>
                                        <p>Once you have selected your 11 players, you will have to assign a captain and vice-captain for your team.

                                            The captain will give you 2x points scored by them in the actual match.
                                            
                                            The vice-captain will give you 1.5x points scored by them in the actual match.
                                            
                                            </p>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                    <div class="single-faq">
                                        <h4>Batting Points </h4>
                                        <p>1.	1 point per run <br>
                                            2.	1 point per boundary bonus <br>
                                            3.	2 points per six scored <br>
                                            4.	4 points for scoring 30 runs <br>
                                            5.	8 points for a half-century <br>
                                            6.	16 points for a century <br>
                                            7.	-2 points if dismissed for a duck (Only for batsmen, wicket-keepers, and all-rounders) <br>
                                            </p>
                                    </div>
                                    <div class="single-faq">
                                        <h4>Bowling Points</h4>
                                        <p>1.	25 points per wicket, excluding run-outs <br>
                                            2.	8 bonus points for taking the wicket by LBW or Bowled <br>
                                            3.	4 bonus points for taking three wickets in a single match <br>
                                            4.	8 bonus points for taking four wickets in a single match <br>
                                            5.	16 bonus points for taking five wickets in a single match <br>
                                            6.	12 points per maiden over <br>
                                            </p>
                                    </div>
                                    <div class="single-faq">
                                        <h4>Captain & Vice-captain points</h4>
                                        <p>
                                            1.	Captain of the Dream11 team - 2x the points scored in the match <br>
                                            2.	Vice-captain of the Dream11 team - 1.5x the points scored in the match <br>
                                            3.	4 points each for every player announced in the playing XI <br>
                                            </p>
                                    </div>
                                    <div class="single-faq">
                                        <h4>Economy Rate  points</h4>
                                        <p>
                                            1.	6 points if his economy rate is below 5 runs per over <br>
                                            2.	4 points if his economy rate is between 5 - 5.99 runs per over <br>
                                            3.	2 points if his economy rate is between 6 - 7 runs per over <br>
                                            4.	-2 points if his economy rate is between 10 - 11 runs per over <br>
                                            5.	-4 points if his economy rate is between 11.01 - 12 runs per over <br>
                                            6.	-6 points if his economy rate is above 12 runs per over <br>
                                            The economy rate comes into consideration for Giro Fantasy points only after a bowler has bowled at least two overs. <br> 
                                            
                                            </p>
                                    </div>
                                    <div class="single-faq">
                                        <h4>Strike Rate points</h4>
                                        <p>
                                            1.	-2 points if his Strike Rate is between 60 - 70 <br>
                                            2.	-4 points if his Strike Rate is between 50 - 50.99 <br>
                                            3.	-6 points if his Strike Rate is below 50 <br>
                                            4.	+2 points if his Strike Rate is between 130-150  <br>
                                            5.	+4 points if his Strike Rate is between 150.01-170 <br>
                                            6.	+6 points if his Strike Rate is more than 170 <br>
                                            
                                            </p>
                                    </div>
                                </div>
                                
                                <!--<div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                    <div class="single-faq">
                                        <h4>When are the results published?</h4>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page whene at
                                            layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters too
                                            using eader will be distracted by the readable conten.</p>
                                    </div>

                                    <div class="single-faq">
                                        <h4>How do I check if I???ve won?</h4>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page whene at
                                            layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters too
                                            using eader will be distracted by the readable conten.</p>
                                    </div>

                                    <div class="single-faq">
                                        <h4>Is there automatic notification of winnings?</h4>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page whene at
                                            layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters too
                                            using eader will be distracted by the readable conten.</p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                    <div class="single-faq">
                                        <h4>Do I need to register to play?</h4>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page whene at
                                            layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters too
                                            using eader will be distracted by the readable conten.</p>
                                    </div>

                                    <div class="single-faq">
                                        <h4>How do I register?</h4>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page whene at
                                            layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters too
                                            using eader will be distracted by the readable conten.</p>
                                    </div>

                                    <div class="single-faq">
                                        <h4>Do I need to confirm my email address?</h4>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page whene at
                                            layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters too
                                            using eader will be distracted by the readable conten.</p>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- faq end -->

        <!-- cta begin -->
        <div class="cta">
            <div class="container">
                <div class="row justify-content-xl-between justify-content-lg-between justify-content-sm-center">
                    <div class="col-xl-7 col-lg-7 col-md-8 col-sm-10">
                        <h2>Giro Fantasy Sports<br/> </h2>
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