<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Giro Fantasy - Login</title>
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
		<style>
		.fb {
				background-color: #3B5998;
				color: white;
			}

		.google {
				background-color: #dd4b39;
				color: white;
			}
			
		</style>
		
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
                            <h2 class="title">Login to enter</h2>
                            <p>Giro Fantasy has thousands of free online games for all generation.</p>
                            <ul>
                                <li>
                                    <a href="#">Home</a>
                                </li>
                                <li class="arrow">
                                    <i class="fas fa-angle-right"></i>
                                </li>
                                <li>
                                    Login
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb end -->

        <!-- register begin -->
        <div class="register login-page">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-6 col-md-8">
                        <div class="reg-body">
                            <form>
                                <h4 class="sub-title">Login to your account</h4>
                                <input type="text" placeholder="User Name or Email*">
                                <input type="password" placeholder="Password*">
								<div style="text-align: center">
								<button class="btn-form def-btn " style="text-center">Login</button>
								<br/>
								<br/>
							
                           <a href="#" class="fb btn">
									<i class="fab fa-facebook-f "  ></i> Login with Facebook
										</a> 
										</div> 
										<br/>
										<div style="text-align: center" >
								<a href="#" class="google btn">
								<i class="fab fa-google"></i> Login with Google
										</a>
                           </div>
							
                                
                            </form>
							
							<div class="mt-3">
                  <div class="row justify-content-center" style="color:white">
                     Don't have an account? <a href=""  class="text-primary ml-2" >Sign Up</a>
                  </div>
                  <div class="row justify-content-center" style="color:white">
                     <a href="reset-password.html" class="f-link">Forgot your password?</a>
                  </div>
               </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- register end -->

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