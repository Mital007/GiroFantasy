<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Giro Fantasy - Wallet</title>
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
                            <h2 class="title">Wallet</h2>
                            <p>Giro Fantasy is a fantasy sports platform that lets you build your dream team in multiple sports. We are a part of the Giro Fintech family that is involved in providing the best FinTech solutions.</p>
                            <ul>
                                <li>
                                    <a href="#">Home</a>
                                </li>
                                <li class="arrow">
                                    <i class="fas fa-angle-right"></i>
                                </li>
                                <li>
                                    Wallet
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb end -->

        <!-- contact begin -->
        <div class="contact" id="contact">
            <div class="container container-contact">
                <div class="row justify-content-center">
                    <div class="collapse navbar-collapse d-flex align-self-center justify-content-center" id="navbarSupportedContent2">
                            
                        <div class="view-more-btn text-center my-auto ">
                           <form>
                            <label for="balance" style="color:white">Current Coin Balance:</label><br>
                            <label for="amount" style="color:white">100 Coins</label><br>	

									<div class="form-group ">
                                        <label style="color:white">Enter the coin you want to add</label>
                                        <input type="tel" class="form-control" placeholder="coins" />
                                    </div>							

                            <button type="button" class="def-btn" value="Submit">Add Coins</button>
                            
                            </form> 
                        </div>
                  </div>
               </div>
               <br>
                <div class="bg-tamim">
                    
                    <div class="row justify-content-around">
                        
                        <div class="col-xl-6 col-lg-6 col-sm-10 col-md-6">
                            <div class="part-form">
                                <form>
                                    
                                    <div class="input-group">
                                        <label><span class="hidden-xs" style="color:white" >CARD NUMBER</span></label>
                                        <input type="tel" class="form-control" placeholder="1111-2222-3333-4444" />
                                        
                                    </div>
                                    <div class="form-group">
                                        <label><span class="hidden-xs" style="color:white" >EXPIRY DATE</span></label>
                                       <div class="row">
                        <div class="form-group col-sm-4">
                            <label for="ccmonth" style="color:white">Month</label>
                            <select class="form-control" id="ccmonth">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                                <option>11</option>
                                <option>12</option>
                            </select>
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="ccyear" style="color:white">Year</label>
                            <select class="form-control" id="ccyear">
                                <option>2014</option>
                                <option>2015</option>
                                <option>2016</option>
                                <option>2017</option>
                                <option>2018</option>
                                <option>2019</option>
                                <option>2020</option>
                                <option>2021</option>
                                <option>2022</option>
                                <option>2023</option>
                                <option>2024</option>
                                <option>2025</option>
                            </select>
                        </div>
						</div>		
							</div>

                                    <div class="form-group ">
                                        <label style="color:white">CVV CODE</label>
                                        <input type="tel" class="form-control" placeholder="CVV" />
                                    </div>
                                    <div class="form-group">
                                        <label style="color:white">CARD OWNER</label>
                                        <input type="text" class="form-control" placeholder="Card Owner's Name" />
                                    </div>
									
									  <div class="view-more-btn text-center my-auto ">
									<button type="button" class="def-btn">Make Payment</button>
                                </div>
                                </form>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
        <!-- contact end -->
 <!-- account begin -->
 <div class="user-dashboard">
    <div class="container">

        <div>
            <nav class="navbar navbar-expand-lg">
               <!--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button> --> 
              <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent2"> -->
								<h4 class="sub-title" style="color:white">Check Coin Prices:</h4>
                        <!-- </div> -->
              </nav>
        </div>
        <br>
        <div class="user-statics">
            <div class="row">
                <div class="col-xl-6 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-statics">
                        <div class="part-icon">
                            <img src="assets/img/user-dashboard/icon-5.png" alt="">
                        </div>
                        <div class="part-info col-md-4">
                            <span class="number">5000 Coins</span>
                            <span class="text">Coins</span>
                        </div>
                        <div class="part-info col-md-3">
                            <span class="number">100 $</span>
                            <span class="text">Price</span>
                        </div>
                        <a href="#0" class="def-btn def-small text-center">
                            Buy <svg aria-hidden="true" focusable="false" data-prefix="fal" class=" fa-w-14 fa-fw fa-2x"><path fill="currentColor" d="M311.03 131.515l-7.071 7.07c-4.686 4.686-4.686 12.284 0 16.971L387.887 239H12c-6.627 0-12 5.373-12 12v10c0 6.627 5.373 12 12 12h375.887l-83.928 83.444c-4.686 4.686-4.686 12.284 0 16.971l7.071 7.07c4.686 4.686 12.284 4.686 16.97 0l116.485-116c4.686-4.686 4.686-12.284 0-16.971L328 131.515c-4.686-4.687-12.284-4.687-16.97 0z" class=""></path></svg>
                        </a>
                    </div>
                </div>
              <!--  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-statics">
                        <div class="part-icon">
                            <img src="assets/img/user-dashboard/icon-2.png" alt="">
                        </div>
                        <div class="part-info">
                            <span class="number">$7,480.00</span>
                            <span class="text">Total Payout</span>
                        </div>
                    </div>
                </div> -->
                
               <div class="col-xl-6 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-statics">
                        <div class="part-icon">
                            <img src="assets/img/user-dashboard/icon-3.png" alt="">
                        </div>
                        <div class="part-info col-md-4">
                            <span class="number">3000 Coins</span>
                            <span class="text">Coins</span>
                        </div>
                        <div class="part-info col-md-3">
                            <span class="number">70 $</span>
                            <span class="text">Price</span>
                        </div>
                        <a href="#0" class="def-btn def-small text-center">
                            Buy <svg aria-hidden="true" focusable="false" data-prefix="fal" class=" fa-w-14 fa-fw fa-2x"><path fill="currentColor" d="M311.03 131.515l-7.071 7.07c-4.686 4.686-4.686 12.284 0 16.971L387.887 239H12c-6.627 0-12 5.373-12 12v10c0 6.627 5.373 12 12 12h375.887l-83.928 83.444c-4.686 4.686-4.686 12.284 0 16.971l7.071 7.07c4.686 4.686 12.284 4.686 16.97 0l116.485-116c4.686-4.686 4.686-12.284 0-16.971L328 131.515c-4.686-4.687-12.284-4.687-16.97 0z" class=""></path></svg>
                        </a>
                    </div>
                </div> 
               <!-- <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-statics">
                        <div class="part-icon">
                            <img src="assets/img/user-dashboard/icon-4.png" alt="">
                        </div>
                        <div class="part-info">
                            <span class="number">$242.00</span>
                            <span class="text">Pending Amount</span>
                        </div>
                    </div>
                </div> -->
                <div class="col-xl-6 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-statics">
                        <div class="part-icon">
                            <img src="assets/img/user-dashboard/icon-5.png" alt="">
                        </div>
                        <div class="part-info col-md-4">
                            <span class="number">2000 Coins</span>
                            <span class="text">Coins</span>
                        </div>
                        <div class="part-info col-md-3">
                            <span class="number">50 $</span>
                            <span class="text">Price</span>
                        </div>
                        <a href="#0" class="def-btn def-small text-center">
                            Buy <svg aria-hidden="true" focusable="false" data-prefix="fal" class=" fa-w-14 fa-fw fa-2x"><path fill="currentColor" d="M311.03 131.515l-7.071 7.07c-4.686 4.686-4.686 12.284 0 16.971L387.887 239H12c-6.627 0-12 5.373-12 12v10c0 6.627 5.373 12 12 12h375.887l-83.928 83.444c-4.686 4.686-4.686 12.284 0 16.971l7.071 7.07c4.686 4.686 12.284 4.686 16.97 0l116.485-116c4.686-4.686 4.686-12.284 0-16.971L328 131.515c-4.686-4.687-12.284-4.687-16.97 0z" class=""></path></svg>
                        </a>
                    </div>
                </div>
                <!--<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-statics">
                        <div class="part-icon">
                            <img src="assets/img/user-dashboard/icon-6.png" alt="">
                        </div>
                        <div class="part-info">
                            <span class="number">$158.00</span>
                            <span class="text">Your Total Earning</span>
                        </div>
                    </div>
                </div>-->
                <div class="col-xl-6 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-statics">
                        <div class="part-icon">
                            <img src="assets/img/user-dashboard/icon-7.png" alt="">
                        </div>
                        <div class="part-info col-md-4">
                            <span class="number">1000 Coins</span>
                            <span class="text">Coins</span>
                        </div>
                        <div class="part-info col-md-3">
                            <span class="number">30 $</span>
                            <span class="text">Price</span>
                        </div>
                        <a href="#0" class="def-btn def-small text-center">
                            Buy <svg aria-hidden="true" focusable="false" data-prefix="fal" class=" fa-w-14 fa-fw fa-2x"><path fill="currentColor" d="M311.03 131.515l-7.071 7.07c-4.686 4.686-4.686 12.284 0 16.971L387.887 239H12c-6.627 0-12 5.373-12 12v10c0 6.627 5.373 12 12 12h375.887l-83.928 83.444c-4.686 4.686-4.686 12.284 0 16.971l7.071 7.07c4.686 4.686 12.284 4.686 16.97 0l116.485-116c4.686-4.686 4.686-12.284 0-16.971L328 131.515c-4.686-4.687-12.284-4.687-16.97 0z" class=""></path></svg>
                        </a>
                    </div>
                </div>
             <!--  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-statics">
                        <div class="part-icon">
                            <img src="assets/img/user-dashboard/icon-8.png" alt="">
                        </div>
                        <div class="part-info">
                            <span class="number">$534.00</span>
                            <span class="text">Fund Transfer</span>
                        </div>
                    </div>
                </div> --> 
                <div class="col-xl-6 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-statics">
                        <div class="part-icon">
                            <img src="assets/img/user-dashboard/icon-1.png" alt="">
                        </div>
                        <div class="part-info col-md-4">
                            <span class="number">500 Coins</span>
                            <span class="text">Coins</span>
                        </div>
                        <div class="part-info col-md-3">
                            <span class="number">15 $</span>
                            <span class="text">Price</span>
                        </div>
                        <a href="#0" class="def-btn def-small text-center">
                            Buy <svg aria-hidden="true" focusable="false" data-prefix="fal" class=" fa-w-14 fa-fw fa-2x"><path fill="currentColor" d="M311.03 131.515l-7.071 7.07c-4.686 4.686-4.686 12.284 0 16.971L387.887 239H12c-6.627 0-12 5.373-12 12v10c0 6.627 5.373 12 12 12h375.887l-83.928 83.444c-4.686 4.686-4.686 12.284 0 16.971l7.071 7.07c4.686 4.686 12.284 4.686 16.97 0l116.485-116c4.686-4.686 4.686-12.284 0-16.971L328 131.515c-4.686-4.687-12.284-4.687-16.97 0z" class=""></path></svg>
                        </a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-statics">
                        <div class="part-icon">
                            <img src="assets/img/user-dashboard/icon-1.png" alt="">
                        </div>
                        <div class="part-info col-md-4">
                            <span class="number">100 Coins</span>
                            <span class="text">Coins</span>
                        </div>
                        <div class="part-info col-md-3">
                            <span class="number">5 $</span>
                            <span class="text">Price</span>
                        </div>
                        <a href="#0" class="def-btn def-small text-center">
                            Buy <svg aria-hidden="true" focusable="false" data-prefix="fal" class="fa-w-14 fa-fw fa-2x"><path fill="currentColor" d="M311.03 131.515l-7.071 7.07c-4.686 4.686-4.686 12.284 0 16.971L387.887 239H12c-6.627 0-12 5.373-12 12v10c0 6.627 5.373 12 12 12h375.887l-83.928 83.444c-4.686 4.686-4.686 12.284 0 16.971l7.071 7.07c4.686 4.686 12.284 4.686 16.97 0l116.485-116c4.686-4.686 4.686-12.284 0-16.971L328 131.515c-4.686-4.687-12.284-4.687-16.97 0z" class=""></path></svg>
                        </a>
                    </div>
                </div>
                <!-- <div class="col-xl-6 col-lg-4 col-md-6 col-sm-6"> -->
                    <!-- <div class="single-statics"> -->
                        <!-- <div class="part-icon"> -->
                            <!-- <img src="assets/img/user-dashboard/icon-1.png" alt=""> -->
                        <!-- </div> -->
                        <!-- <div class="part-info col-md-4"> -->
                            <!-- <span class="number">1000 Coins</span> -->
                            <!-- <span class="text">Prize</span> -->
                        <!-- </div> -->
                        <!-- <div class="part-info col-md-3"> -->
                            <!-- <span class="number">50 Coins</span> -->
                            <!-- <span class="text">Enter</span> -->
                        <!-- </div> -->
                        <!-- <a href="#0" class="def-btn def-small text-center"> -->
                            <!-- Join <svg aria-hidden="true" focusable="false" data-prefix="fal" class=" fa-w-14 fa-fw fa-2x"><path fill="currentColor" d="M311.03 131.515l-7.071 7.07c-4.686 4.686-4.686 12.284 0 16.971L387.887 239H12c-6.627 0-12 5.373-12 12v10c0 6.627 5.373 12 12 12h375.887l-83.928 83.444c-4.686 4.686-4.686 12.284 0 16.971l7.071 7.07c4.686 4.686 12.284 4.686 16.97 0l116.485-116c4.686-4.686 4.686-12.284 0-16.971L328 131.515c-4.686-4.687-12.284-4.687-16.97 0z" class=""></path></svg> -->
                        <!-- </a> -->
                    <!-- </div> -->
                <!-- </div> -->
                <!-- <div class="col-xl-6 col-lg-4 col-md-6 col-sm-6"> -->
                    <!-- <div class="single-statics"> -->
                        <!-- <div class="part-icon"> -->
                            <!-- <img src="assets/img/user-dashboard/icon-1.png" alt=""> -->
                        <!-- </div> -->
                        <!-- <div class="part-info col-md-4"> -->
                            <!-- <span class="number">1000 Coins</span> -->
                            <!-- <span class="text">Prize</span> -->
                        <!-- </div> -->
                        <!-- <div class="part-info col-md-3"> -->
                            <!-- <span class="number">50 Coins</span> -->
                            <!-- <span class="text">Enter</span> -->
                        <!-- </div> -->
                        <!-- <a href="#0" class="def-btn def-small text-center"> -->
                            <!-- Join <svg aria-hidden="true" focusable="false" data-prefix="fal" class=" fa-w-14 fa-fw fa-2x"><path fill="currentColor" d="M311.03 131.515l-7.071 7.07c-4.686 4.686-4.686 12.284 0 16.971L387.887 239H12c-6.627 0-12 5.373-12 12v10c0 6.627 5.373 12 12 12h375.887l-83.928 83.444c-4.686 4.686-4.686 12.284 0 16.971l7.071 7.07c4.686 4.686 12.284 4.686 16.97 0l116.485-116c4.686-4.686 4.686-12.284 0-16.971L328 131.515c-4.686-4.687-12.284-4.687-16.97 0z" class=""></path></svg> -->
                        <!-- </a> -->
                    <!-- </div> -->
                <!-- </div> -->
                <!-- <div class="col-xl-6 col-lg-4 col-md-6 col-sm-6"> -->
                    <!-- <div class="single-statics"> -->
                        <!-- <div class="part-icon"> -->
                            <!-- <img src="assets/img/user-dashboard/icon-1.png" alt=""> -->
                        <!-- </div> -->
                        <!-- <div class="part-info col-md-4"> -->
                            <!-- <span class="number">1000 Coins</span> -->
                            <!-- <span class="text">Prize</span> -->
                        <!-- </div> -->
                        <!-- <div class="part-info col-md-3"> -->
                            <!-- <span class="number">50 Coins</span> -->
                            <!-- <span class="text">Enter</span> -->
                        <!-- </div> -->
                        <!-- <a href="#0" class="def-btn def-small text-center"> -->
                            <!-- Join <svg aria-hidden="true" focusable="false" data-prefix="fal" class=" fa-w-14 fa-fw fa-2x"><path fill="currentColor" d="M311.03 131.515l-7.071 7.07c-4.686 4.686-4.686 12.284 0 16.971L387.887 239H12c-6.627 0-12 5.373-12 12v10c0 6.627 5.373 12 12 12h375.887l-83.928 83.444c-4.686 4.686-4.686 12.284 0 16.971l7.071 7.07c4.686 4.686 12.284 4.686 16.97 0l116.485-116c4.686-4.686 4.686-12.284 0-16.971L328 131.515c-4.686-4.687-12.284-4.687-16.97 0z" class=""></path></svg> -->
                        <!-- </a> -->
                    <!-- </div> -->
                <!-- </div> -->
                <!-- <div class="col-xl-6 col-lg-4 col-md-6 col-sm-6"> -->
                    <!-- <div class="single-statics"> -->
                        <!-- <div class="part-icon"> -->
                            <!-- <img src="assets/img/user-dashboard/icon-1.png" alt=""> -->
                        <!-- </div> -->
                        <!-- <div class="part-info col-md-4"> -->
                            <!-- <span class="number">1000 Coins</span> -->
                            <!-- <span class="text">Prize</span> -->
                        <!-- </div> -->
                        <!-- <div class="part-info col-md-3"> -->
                            <!-- <span class="number">50 Coins</span> -->
                            <!-- <span class="text">Enter</span> -->
                        <!-- </div> -->
                        <!-- <a href="#0" class="def-btn def-small text-center"> -->
                            <!-- Join <svg aria-hidden="true" focusable="false" data-prefix="fal" class=" fa-w-14 fa-fw fa-2x"><path fill="currentColor" d="M311.03 131.515l-7.071 7.07c-4.686 4.686-4.686 12.284 0 16.971L387.887 239H12c-6.627 0-12 5.373-12 12v10c0 6.627 5.373 12 12 12h375.887l-83.928 83.444c-4.686 4.686-4.686 12.284 0 16.971l7.071 7.07c4.686 4.686 12.284 4.686 16.97 0l116.485-116c4.686-4.686 4.686-12.284 0-16.971L328 131.515c-4.686-4.687-12.284-4.687-16.97 0z" class=""></path></svg> -->
                        <!-- </a> -->
                    <!-- </div> -->
                <!-- </div> -->
                
               <!-- <div class="col-xl-6 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-statics">
                        <div class="part-icon">
                            <img src="assets/img/user-dashboard/icon-7.png" alt="">
                        </div>
                        <div class="part-info col-md-4">
                            <span class="number">1000 Coins</span>
                            <span class="text">Prize</span>
                        </div>
                        <div class="part-info col-md-3">
                            <span class="number">50 Coins</span>
                            <span class="text">Enter</span>
                        </div>
                        <a href="#0" class="def-btn def-small text-center">
                            Join <svg aria-hidden="true" focusable="false" data-prefix="fal" class=" fa-w-14 fa-fw fa-2x"><path fill="currentColor" d="M311.03 131.515l-7.071 7.07c-4.686 4.686-4.686 12.284 0 16.971L387.887 239H12c-6.627 0-12 5.373-12 12v10c0 6.627 5.373 12 12 12h375.887l-83.928 83.444c-4.686 4.686-4.686 12.284 0 16.971l7.071 7.07c4.686 4.686 12.284 4.686 16.97 0l116.485-116c4.686-4.686 4.686-12.284 0-16.971L328 131.515c-4.686-4.687-12.284-4.687-16.97 0z" class=""></path></svg>
                        </a>
                    </div>
                </div>-->
            </div>
        </div>
		
         <!-- <div class="row"> -->
                    <!-- <div class="col-xl-3 col-lg-4 benmathew-col"> -->
                        <!-- <div class="user-benmathew"> -->
                            <!-- <h3 class="title"> -->
                                <!-- Benmathew -->
                            <!-- </h3> -->
                            <!-- <div class="single-data"> -->
                                <!-- <span class="title">Registration Date</span> -->
                                <!-- <span class="data">Sep-10-2014 11:20:37</span> -->
                            <!-- </div> -->
                            <!-- <div class="single-data"> -->
                                <!-- <span class="title">Last Login</span> -->
                                <!-- <span class="data">Jul-05-2019 07:06:36</span> -->
                            <!-- </div> -->
                            <!-- <div class="single-data"> -->
                                <!-- <span class="title">Current Login</span> -->
                                <!-- <span class="data">Jul-06-2019 02:47:23</span> -->
                            <!-- </div> -->
                            <!-- <div class="single-data"> -->
                                <!-- <span class="title">Last Access IP</span> -->
                                <!-- <span class="data">27.57.18.1</span> -->
                            <!-- </div> -->
                            <!-- <div class="single-data"> -->
                                <!-- <span class="title">Current Access IP</span> -->
                                <!-- <span class="data">122.175.131.51</span> -->
                            <!-- </div> -->
                        <!-- </div> -->
                    <!-- </div> -->
                    <!-- <div class="col-xl-9 col-lg-8 chart-col"> -->
                        <!-- <div class="transaction-chart"> -->
                            <!-- <h3 class="title"> -->
                                <!-- Transaction & Deposit -->
                            <!-- </h3> -->
                            <!-- <div class="charts-for-misco"> -->
                                <!-- <canvas id="chart-0"></canvas> -->
                            <!-- </div> -->
                        <!-- </div> -->
                    <!-- </div> -->
                <!-- </div> -->

                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <!-- <div class="transactions-table"> -->
                            <!-- <div class="table-responsive"> -->
                                <!-- <table id="example" class="display misco-data-table" style="width:100%"> -->
                                    <!-- <thead> -->
                                        <!-- <tr> -->
                                            <!-- <th>BetID</th> -->
                                            <!-- <th>Game</th> -->
                                            <!-- <th>Coin</th> -->
                                            <!-- <th>Bet</th> -->
                                            <!-- <th>Time</th> -->
                                            <!-- <th>Profit</th> -->
                                        <!-- </tr> -->
                                    <!-- </thead> -->
                                    <!-- <tbody> -->
                                        <!-- <tr> -->
                                            <!-- <td>Tiger Nixon</td> -->
                                            <!-- <td>System Architect</td> -->
                                            <!-- <td>Edinburgh</td> -->
                                            <!-- <td>61</td> -->
                                            <!-- <td>2011/04/25</td> -->
                                            <!-- <td>$320,800</td> -->
                                        <!-- </tr> -->
                                        <!-- <tr> -->
                                            <!-- <td>Garrett Winters</td> -->
                                            <!-- <td>Accountant</td> -->
                                            <!-- <td>Tokyo</td> -->
                                            <!-- <td>63</td> -->
                                            <!-- <td>2011/07/25</td> -->
                                            <!-- <td>$170,750</td> -->
                                        <!-- </tr> -->
                                        <!-- <tr> -->
                                            <!-- <td>Ashton Cox</td> -->
                                            <!-- <td>Junior Technical Author</td> -->
                                            <!-- <td>San Francisco</td> -->
                                            <!-- <td>66</td> -->
                                            <!-- <td>2009/01/12</td> -->
                                            <!-- <td>$86,000</td> -->
                                        <!-- </tr> -->
                                        <!-- <tr> -->
                                            <!-- <td>Cedric Kelly</td> -->
                                            <!-- <td>Senior Javascript Developer</td> -->
                                            <!-- <td>Edinburgh</td> -->
                                            <!-- <td>22</td> -->
                                            <!-- <td>2012/03/29</td> -->
                                            <!-- <td>$433,060</td> -->
                                        <!-- </tr> -->
                                        <!-- <tr> -->
                                            <!-- <td>Airi Satou</td> -->
                                            <!-- <td>Accountant</td> -->
                                            <!-- <td>Tokyo</td> -->
                                            <!-- <td>33</td> -->
                                            <!-- <td>2008/11/28</td> -->
                                            <!-- <td>$162,700</td> -->
                                        <!-- </tr> -->
                                        <!-- <tr> -->
                                            <!-- <td>Brielle Williamson</td> -->
                                            <!-- <td>Integration Specialist</td> -->
                                            <!-- <td>New York</td> -->
                                            <!-- <td>61</td> -->
                                            <!-- <td>2012/12/02</td> -->
                                            <!-- <td>$372,000</td> -->
                                        <!-- </tr> -->
                                        <!-- <tr> -->
                                            <!-- <td>Herrod Chandler</td> -->
                                            <!-- <td>Sales Assistant</td> -->
                                            <!-- <td>San Francisco</td> -->
                                            <!-- <td>59</td> -->
                                            <!-- <td>2012/08/06</td> -->
                                            <!-- <td>$137,500</td> -->
                                        <!-- </tr> -->
                                        <!-- <tr> -->
                                            <!-- <td>Rhona Davidson</td> -->
                                            <!-- <td>Integration Specialist</td> -->
                                            <!-- <td>Tokyo</td> -->
                                            <!-- <td>55</td> -->
                                            <!-- <td>2010/10/14</td> -->
                                            <!-- <td>$327,900</td> -->
                                        <!-- </tr> -->
                                        <!-- <tr> -->
                                            <!-- <td>Colleen Hurst</td> -->
                                            <!-- <td>Javascript Developer</td> -->
                                            <!-- <td>San Francisco</td> -->
                                            <!-- <td>39</td> -->
                                            <!-- <td>2009/09/15</td> -->
                                            <!-- <td>$205,500</td> -->
                                        <!-- </tr> -->
                                        <!-- <tr> -->
                                            <!-- <td>Sonya Frost</td> -->
                                            <!-- <td>Software Engineer</td> -->
                                            <!-- <td>Edinburgh</td> -->
                                            <!-- <td>23</td> -->
                                            <!-- <td>2008/12/13</td> -->
                                            <!-- <td>$103,600</td> -->
                                        <!-- </tr> -->
                                        <!-- <tr> -->
                                            <!-- <td>Jena Gaines</td> -->
                                            <!-- <td>Office Manager</td> -->
                                            <!-- <td>London</td> -->
                                            <!-- <td>30</td> -->
                                            <!-- <td>2008/12/19</td> -->
                                            <!-- <td>$90,560</td> -->
                                        <!-- </tr> -->
                                        <!-- <tr> -->
                                            <!-- <td>Quinn Flynn</td> -->
                                            <!-- <td>Support Lead</td> -->
                                            <!-- <td>Edinburgh</td> -->
                                            <!-- <td>22</td> -->
                                            <!-- <td>2013/03/03</td> -->
                                            <!-- <td>$342,000</td> -->
                                        <!-- </tr> -->
                                        <!-- <tr> -->
                                            <!-- <td>Charde Marshall</td> -->
                                            <!-- <td>Regional Director</td> -->
                                            <!-- <td>San Francisco</td> -->
                                            <!-- <td>36</td> -->
                                            <!-- <td>2008/10/16</td> -->
                                            <!-- <td>$470,600</td> -->
                                        <!-- </tr> -->
                                        <!-- <tr> -->
                                            <!-- <td>Haley Kennedy</td> -->
                                            <!-- <td>Senior Marketing Designer</td> -->
                                            <!-- <td>London</td> -->
                                            <!-- <td>43</td> -->
                                            <!-- <td>2012/12/18</td> -->
                                            <!-- <td>$313,500</td> -->
                                        <!-- </tr> -->
                                        <!-- <tr> -->
                                            <!-- <td>Tatyana Fitzpatrick</td> -->
                                            <!-- <td>Regional Director</td> -->
                                            <!-- <td>London</td> -->
                                            <!-- <td>19</td> -->
                                            <!-- <td>2010/03/17</td> -->
                                            <!-- <td>$385,750</td> -->
                                        <!-- </tr> -->
                                        <!-- <tr> -->
                                            <!-- <td>Michael Silva</td> -->
                                            <!-- <td>Marketing Designer</td> -->
                                            <!-- <td>London</td> -->
                                            <!-- <td>66</td> -->
                                            <!-- <td>2012/11/27</td> -->
                                            <!-- <td>$198,500</td> -->
                                        <!-- </tr> -->
                                        <!-- <tr> -->
                                            <!-- <td>Paul Byrd</td> -->
                                            <!-- <td>Chief Financial Officer (CFO)</td> -->
                                            <!-- <td>New York</td> -->
                                            <!-- <td>64</td> -->
                                            <!-- <td>2010/06/09</td> -->
                                            <!-- <td>$725,000</td> -->
                                        <!-- </tr> -->
                                        <!-- <tr> -->
                                            <!-- <td>Gloria Little</td> -->
                                            <!-- <td>Systems Administrator</td> -->
                                            <!-- <td>New York</td> -->
                                            <!-- <td>59</td> -->
                                            <!-- <td>2009/04/10</td> -->
                                            <!-- <td>$237,500</td> -->
                                        <!-- </tr> -->
                                        <!-- <tr> -->
                                            <!-- <td>Bradley Greer</td> -->
                                            <!-- <td>Software Engineer</td> -->
                                            <!-- <td>London</td> -->
                                            <!-- <td>41</td> -->
                                            <!-- <td>2012/10/13</td> -->
                                            <!-- <td>$132,000</td> -->
                                        <!-- </tr> -->
                                        <!-- <tr> -->
                                            <!-- <td>Dai Rios</td> -->
                                            <!-- <td>Personnel Lead</td> -->
                                            <!-- <td>Edinburgh</td> -->
                                            <!-- <td>35</td> -->
                                            <!-- <td>2012/09/26</td> -->
                                            <!-- <td>$217,500</td> -->
                                        <!-- </tr> -->
                                        <!-- <tr> -->
                                            <!-- <td>Jenette Caldwell</td> -->
                                            <!-- <td>Development Lead</td> -->
                                            <!-- <td>New York</td> -->
                                            <!-- <td>30</td> -->
                                            <!-- <td>2011/09/03</td> -->
                                            <!-- <td>$345,000</td> -->
                                        <!-- </tr> -->
                                        <!-- <tr> -->
                                            <!-- <td>Yuri Berry</td> -->
                                            <!-- <td>Chief Marketing Officer (CMO)</td> -->
                                            <!-- <td>New York</td> -->
                                            <!-- <td>40</td> -->
                                            <!-- <td>2009/06/25</td> -->
                                            <!-- <td>$675,000</td> -->
                                        <!-- </tr> -->
                                        <!-- <tr> -->
                                            <!-- <td>Caesar Vance</td> -->
                                            <!-- <td>Pre-Sales Support</td> -->
                                            <!-- <td>New York</td> -->
                                            <!-- <td>21</td> -->
                                            <!-- <td>2011/12/12</td> -->
                                            <!-- <td>$106,450</td> -->
                                        <!-- </tr> -->
                                        <!-- <tr> -->
                                            <!-- <td>Doris Wilder</td> -->
                                            <!-- <td>Sales Assistant</td> -->
                                            <!-- <td>Sydney</td> -->
                                            <!-- <td>23</td> -->
                                            <!-- <td>2010/09/20</td> -->
                                            <!-- <td>$85,600</td> -->
                                        <!-- </tr> -->
                                        <!-- <tr> -->
                                            <!-- <td>Angelica Ramos</td> -->
                                            <!-- <td>Chief Executive Officer (CEO)</td> -->
                                            <!-- <td>London</td> -->
                                            <!-- <td>47</td> -->
                                            <!-- <td>2009/10/09</td> -->
                                            <!-- <td>$1,200,000</td> -->
                                        <!-- </tr> -->
                                        <!-- <tr> -->
                                            <!-- <td>Gavin Joyce</td> -->
                                            <!-- <td>Developer</td> -->
                                            <!-- <td>Edinburgh</td> -->
                                            <!-- <td>42</td> -->
                                            <!-- <td>2010/12/22</td> -->
                                            <!-- <td>$92,575</td> -->
                                        <!-- </tr> -->
                                        <!-- <tr> -->
                                            <!-- <td>Jennifer Chang</td> -->
                                            <!-- <td>Regional Director</td> -->
                                            <!-- <td>Singapore</td> -->
                                            <!-- <td>28</td> -->
                                            <!-- <td>2010/11/14</td> -->
                                            <!-- <td>$357,650</td> -->
                                        <!-- </tr> -->
                                        <!-- <tr> -->
                                            <!-- <td>Brenden Wagner</td> -->
                                            <!-- <td>Software Engineer</td> -->
                                            <!-- <td>San Francisco</td> -->
                                            <!-- <td>28</td> -->
                                            <!-- <td>2011/06/07</td> -->
                                            <!-- <td>$206,850</td> -->
                                        <!-- </tr> -->
                                        <!-- <tr> -->
                                            <!-- <td>Fiona Green</td> -->
                                            <!-- <td>Chief Operating Officer (COO)</td> -->
                                            <!-- <td>San Francisco</td> -->
                                            <!-- <td>48</td> -->
                                            <!-- <td>2010/03/11</td> -->
                                            <!-- <td>$850,000</td> -->
                                        <!-- </tr> -->
                                        <!-- <tr> -->
                                            <!-- <td>Shou Itou</td> -->
                                            <!-- <td>Regional Marketing</td> -->
                                            <!-- <td>Tokyo</td> -->
                                            <!-- <td>20</td> -->
                                            <!-- <td>2011/08/14</td> -->
                                            <!-- <td>$163,000</td> -->
                                        <!-- </tr> -->
                                        <!-- <tr> -->
                                            <!-- <td>Michelle House</td> -->
                                            <!-- <td>Integration Specialist</td> -->
                                            <!-- <td>Sydney</td> -->
                                            <!-- <td>37</td> -->
                                            <!-- <td>2011/06/02</td> -->
                                            <!-- <td>$95,400</td> -->
                                        <!-- </tr> -->
                                        <!-- <tr> -->
                                            <!-- <td>Suki Burks</td> -->
                                            <!-- <td>Developer</td> -->
                                            <!-- <td>London</td> -->
                                            <!-- <td>53</td> -->
                                            <!-- <td>2009/10/22</td> -->
                                            <!-- <td>$114,500</td> -->
                                        <!-- </tr> -->
                                        <!-- <tr> -->
                                            <!-- <td>Prescott Bartlett</td> -->
                                            <!-- <td>Technical Author</td> -->
                                            <!-- <td>London</td> -->
                                            <!-- <td>27</td> -->
                                            <!-- <td>2011/05/07</td> -->
                                            <!-- <td>$145,000</td> -->
                                        <!-- </tr> -->
                                        <!-- <tr> -->
                                            <!-- <td>Gavin Cortez</td> -->
                                            <!-- <td>Team Leader</td> -->
                                            <!-- <td>San Francisco</td> -->
                                            <!-- <td>22</td> -->
                                            <!-- <td>2008/10/26</td> -->
                                            <!-- <td>$235,500</td> -->
                                        <!-- </tr> -->
                                        <!-- <tr> -->
                                            <!-- <td>Martena Mccray</td> -->
                                            <!-- <td>Post-Sales support</td> -->
                                            <!-- <td>Edinburgh</td> -->
                                            <!-- <td>46</td> -->
                                            <!-- <td>2011/03/09</td> -->
                                            <!-- <td>$324,050</td> -->
                                        <!-- </tr> -->
                                        <!-- <tr> -->
                                            <!-- <td>Unity Butler</td> -->
                                            <!-- <td>Marketing Designer</td> -->
                                            <!-- <td>San Francisco</td> -->
                                            <!-- <td>47</td> -->
                                            <!-- <td>2009/12/09</td> -->
                                            <!-- <td>$85,675</td> -->
                                        <!-- </tr> -->
                                        <!-- <tr> -->
                                            <!-- <td>Howard Hatfield</td> -->
                                            <!-- <td>Office Manager</td> -->
                                            <!-- <td>San Francisco</td> -->
                                            <!-- <td>51</td> -->
                                            <!-- <td>2008/12/16</td> -->
                                            <!-- <td>$164,500</td> -->
                                        <!-- </tr> -->
                                        <!-- <tr> -->
                                            <!-- <td>Hope Fuentes</td> -->
                                            <!-- <td>Secretary</td> -->
                                            <!-- <td>San Francisco</td> -->
                                            <!-- <td>41</td> -->
                                            <!-- <td>2010/02/12</td> -->
                                            <!-- <td>$109,850</td> -->
                                        <!-- </tr> -->
                                        <!-- <tr> -->
                                            <!-- <td>Vivian Harrell</td> -->
                                            <!-- <td>Financial Controller</td> -->
                                            <!-- <td>San Francisco</td> -->
                                            <!-- <td>62</td> -->
                                            <!-- <td>2009/02/14</td> -->
                                            <!-- <td>$452,500</td> -->
                                        <!-- </tr> -->
                                        <!-- <tr> -->
                                            <!-- <td>Timothy Mooney</td> -->
                                            <!-- <td>Office Manager</td> -->
                                            <!-- <td>London</td> -->
                                            <!-- <td>37</td> -->
                                            <!-- <td>2008/12/11</td> -->
                                            <!-- <td>$136,200</td> -->
                                        <!-- </tr> -->
                                        <!-- <tr> -->
                                            <!-- <td>Jackson Bradshaw</td> -->
                                            <!-- <td>Director</td> -->
                                            <!-- <td>New York</td> -->
                                            <!-- <td>65</td> -->
                                            <!-- <td>2008/09/26</td> -->
                                            <!-- <td>$645,750</td> -->
                                        <!-- </tr> -->
                                        <!-- <tr> -->
                                            <!-- <td>Olivia Liang</td> -->
                                            <!-- <td>Support Engineer</td> -->
                                            <!-- <td>Singapore</td> -->
                                            <!-- <td>64</td> -->
                                            <!-- <td>2011/02/03</td> -->
                                            <!-- <td>$234,500</td> -->
                                        <!-- </tr> -->
                                        <!-- <tr> -->
                                            <!-- <td>Bruno Nash</td> -->
                                            <!-- <td>Software Engineer</td> -->
                                            <!-- <td>London</td> -->
                                            <!-- <td>38</td> -->
                                            <!-- <td>2011/05/03</td> -->
                                            <!-- <td>$163,500</td> -->
                                        <!-- </tr> -->
                                        <!-- <tr> -->
                                            <!-- <td>Sakura Yamamoto</td> -->
                                            <!-- <td>Support Engineer</td> -->
                                            <!-- <td>Tokyo</td> -->
                                            <!-- <td>37</td> -->
                                            <!-- <td>2009/08/19</td> -->
                                            <!-- <td>$139,575</td> -->
                                        <!-- </tr> -->
                                        <!-- <tr> -->
                                            <!-- <td>Thor Walton</td> -->
                                            <!-- <td>Developer</td> -->
                                            <!-- <td>New York</td> -->
                                            <!-- <td>61</td> -->
                                            <!-- <td>2013/08/11</td> -->
                                            <!-- <td>$98,540</td> -->
                                        <!-- </tr> -->
                                        <!-- <tr> -->
                                            <!-- <td>Finn Camacho</td> -->
                                            <!-- <td>Support Engineer</td> -->
                                            <!-- <td>San Francisco</td> -->
                                            <!-- <td>47</td> -->
                                            <!-- <td>2009/07/07</td> -->
                                            <!-- <td>$87,500</td> -->
                                        <!-- </tr> -->
                                        <!-- <tr> -->
                                            <!-- <td>Serge Baldwin</td> -->
                                            <!-- <td>Data Coordinator</td> -->
                                            <!-- <td>Singapore</td> -->
                                            <!-- <td>64</td> -->
                                            <!-- <td>2012/04/09</td> -->
                                            <!-- <td>$138,575</td> -->
                                        <!-- </tr> -->
                                        <!-- <tr> -->
                                            <!-- <td>Zenaida Frank</td> -->
                                            <!-- <td>Software Engineer</td> -->
                                            <!-- <td>New York</td> -->
                                            <!-- <td>63</td> -->
                                            <!-- <td>2010/01/04</td> -->
                                            <!-- <td>$125,250</td> -->
                                        <!-- </tr> -->
                                        <!-- <tr> -->
                                            <!-- <td>Zorita Serrano</td> -->
                                            <!-- <td>Software Engineer</td> -->
                                            <!-- <td>San Francisco</td> -->
                                            <!-- <td>56</td> -->
                                            <!-- <td>2012/06/01</td> -->
                                            <!-- <td>$115,000</td> -->
                                        <!-- </tr> -->
                                        <!-- <tr> -->
                                            <!-- <td>Jennifer Acosta</td> -->
                                            <!-- <td>Junior Javascript Developer</td> -->
                                            <!-- <td>Edinburgh</td> -->
                                            <!-- <td>43</td> -->
                                            <!-- <td>2013/02/01</td> -->
                                            <!-- <td>$75,650</td> -->
                                        <!-- </tr> -->
                                        <!-- <tr> -->
                                            <!-- <td>Cara Stevens</td> -->
                                            <!-- <td>Sales Assistant</td> -->
                                            <!-- <td>New York</td> -->
                                            <!-- <td>46</td> -->
                                            <!-- <td>2011/12/06</td> -->
                                            <!-- <td>$145,600</td> -->
                                        <!-- </tr> -->
                                        <!-- <tr> -->
                                            <!-- <td>Hermione Butler</td> -->
                                            <!-- <td>Regional Director</td> -->
                                            <!-- <td>London</td> -->
                                            <!-- <td>47</td> -->
                                            <!-- <td>2011/03/21</td> -->
                                            <!-- <td>$356,250</td> -->
                                        <!-- </tr> -->
                                        <!-- <tr> -->
                                            <!-- <td>Lael Greer</td> -->
                                            <!-- <td>Systems Administrator</td> -->
                                            <!-- <td>London</td> -->
                                            <!-- <td>21</td> -->
                                            <!-- <td>2009/02/27</td> -->
                                            <!-- <td>$103,500</td> -->
                                        <!-- </tr> -->
                                        <!-- <tr> -->
                                            <!-- <td>Jonas Alexander</td> -->
                                            <!-- <td>Developer</td> -->
                                            <!-- <td>San Francisco</td> -->
                                            <!-- <td>30</td> -->
                                            <!-- <td>2010/07/14</td> -->
                                            <!-- <td>$86,500</td> -->
                                        <!-- </tr> -->
                                        <!-- <tr> -->
                                            <!-- <td>Shad Decker</td> -->
                                            <!-- <td>Regional Director</td> -->
                                            <!-- <td>Edinburgh</td> -->
                                            <!-- <td>51</td> -->
                                            <!-- <td>2008/11/13</td> -->
                                            <!-- <td>$183,000</td> -->
                                        <!-- </tr> -->
                                        <!-- <tr> -->
                                            <!-- <td>Michael Bruce</td> -->
                                            <!-- <td>Javascript Developer</td> -->
                                            <!-- <td>Singapore</td> -->
                                            <!-- <td>29</td> -->
                                            <!-- <td>2011/06/27</td> -->
                                            <!-- <td>$183,000</td> -->
                                        <!-- </tr> -->
                                        <!-- <tr> -->
                                            <!-- <td>Donna Snider</td> -->
                                            <!-- <td>Customer Support</td> -->
                                            <!-- <td>New York</td> -->
                                            <!-- <td>27</td> -->
                                            <!-- <td>2011/01/25</td> -->
                                            <!-- <td>$112,000</td> -->
                                        <!-- </tr> -->
                                    <!-- </tbody> -->
                                    <!-- <tfoot> -->
                                        <!-- <tr> -->
                                            <!-- <th>Name</th> -->
                                            <!-- <th>Position</th> -->
                                            <!-- <th>Office</th> -->
                                            <!-- <th>Age</th> -->
                                            <!-- <th>Start date</th> -->
                                            <!-- <th>Salary</th> -->
                                        <!-- </tr> -->
                                    <!-- </tfoot> -->
                                <!-- </table> -->
                            <!-- </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <!-- account end -->
		
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