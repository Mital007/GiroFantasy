<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Giro Fantasy - Create Team</title>
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
                            <h2 class="title">Create Team</h2>
                            <p>Giro Fantasy has thousands of free online games for all generation. Play Cricker, Football, e-sports, and other fun games at Giro Fantasy</p>
                            <ul>
                                <li>
                                    <a href="#">Home</a>
                                </li>
                                <li class="arrow">
                                    <i class="fas fa-angle-right"></i>
                                </li>
                                <li>
                                    Create Team
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb end -->

        <!-- game details begin -->
        <div class="game-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-8">
                         <!-- <div class="part-prev">  -->
                           <!-- <img class="w-100" src="assets/img/games/game-details.jpg" alt="">  -->
                             <!-- <a href="#0" class="play-btn">Create Your Team</a>	 -->
							 <div class="text-center">
                                            <div class="justify-content-around">
											<h4 style="color:white"> Create your Fantasy Team</h4>
                                     <label id="players"style="color:white" >Players</label>
                                    <label id="playerscount" style="color:white">0/11</label>
                                </div>
								<div style="text-align:center">
                                   <label id="credits" style="color:white;text-align:center">Credits</label>
                                    <label id="creditcount" style="color:white">100.0</label>
                                </div>
                                         </div> 
							
								  
                       <!-- </div>  -->
                        <div class="game-descr">
                            <div class="details-tabs-menu">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="manual-bet-tab" data-toggle="tab" href="#Wicket-Keeper" role="tab" aria-controls="Wicket-Keeper" aria-selected="true">Wicket Keeper</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="provably-fair-tab" data-toggle="tab" href="#Batsmen" role="tab" aria-controls="Batsmen" aria-selected="false">Batsmen</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="how-play-tab" data-toggle="tab" href="#All-Rounders" role="tab" aria-controls="All-Rounders" aria-selected="false">All-Rounders</a>
                                    </li>
									<li class="nav-item">
                                        <a class="nav-link" id="how-play-bowl" data-toggle="tab" href="#Bowlers" role="tab" aria-controls="Bowlers" aria-selected="false">Bowlers</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="details-tab-pan">
	<div class="tab-content" id="myTabContent">
		<div class="tab-pane fade show active" id="Wicket-Keeper" role="tabpanel" aria-labelledby="manual-bet-tab">
			<h3>Pick 1-4 Wicket-Keeper</h3>
			<form>
				<div style="overflow-x:auto;">
					<table class=" table table-borderless text-center align-self-center justify-content-center">
						<tr>
							<th style="color:white">Name</th>
							<th style="color:white">Points</th>
							<th style="color:white">Credits</th>
                            <th style="color:white">Add/Remove</th>
						</tr>
						<tr>
							<td>
								<div class="part-icon">
									 <img src="assets/img/user-dashboard/icon-1.png" alt="">
									</div>
								<div class="part-info">
								 <span class="text" style="color:white" >S Dhavan</span>
                                    <span class="text" style="color:white" >India</span>
                                  
                                </div>
								</td>
								<td >
									<label for="inlineFormInputGroupUsername01">118.00</label>
								</td>
								<td>
									<label for="inlineFormInputGroupUsername02">9.0</label>
								</td>
								<td>
									<button type="button" class="btn def-btn def-small " id="manual-bet-tab" data-toggle="tab">+</button>
								</td>
							</tr>
							<tr>
								<td>
									<div class="part-icon">
									 <img src="assets/img/user-dashboard/icon-1.png" alt="">
									</div>
								<div class="part-info">
								 <span class="text" style="color:white" >S Dhavan</span>
                                    <span class="text" style="color:white" >India</span>
                                  
                                </div>
									</td>
									<td>
										<label for="inlineFormInputGroupUsername01">118.00</label>
									</td>
									<td>
										<label for="inlineFormInputGroupUsername02">9.0</label>
									</td>
									<td>
										<button type="button" class="btn def-btn def-small ">+</button>
									</td>
								</tr>
								<br/>
								<tr>
									<td>
										<div class="part-icon">
									 <img src="assets/img/user-dashboard/icon-1.png" alt="">
									</div>
								<div class="part-info">
								 <span class="text" style="color:white" >S Dhavan</span>
                                    <span class="text" style="color:white" >India</span>
                                  
                                </div>
										</td>
										<td>
											<label for="inlineFormInputGroupUsername01">118.00</label>
										</td>
										<td>
											<label for="inlineFormInputGroupUsername02">9.0</label>
										</td>
										<td>
											<button type="button" class="btn def-btn def-small ">+</button>
										</td>
									</tr>
									<tr>
										<td>
											<div class="part-icon">
									 <img src="assets/img/user-dashboard/icon-1.png" alt="">
									</div>
								<div class="part-info">
								 <span class="text" style="color:white" >S Dhavan</span>
                                    <span class="text" style="color:white" >India</span>
                                  
                                </div>
											</td>
											<td>
												<label for="inlineFormInputGroupUsername01">118.00</label>
											</td>
											<td>
												<label for="inlineFormInputGroupUsername02">9.0</label>
											</td>
											<td>
                                                <div>
                                                    <br>
                                                </div>
												<button type="button" class="btn def-btn def-small ">+</button>
											</td>
										</tr>
									</table>
								</div>
										                                       
                                          
                                        </form>
                                        <!-- <div class="row"> -->
                                            <!-- <div class="col-xl-6 col-lg-6 col-md-6 text-xl-right text-lg-right text-center"> -->
                                                <!-- <div class="bet-control"> -->
                                                    <!-- <div class="btn-group" role="group" aria-label="Basic example"> -->
                                                        <!-- <button type="button" class="btn btn-secondary">Min</button> -->
                                                        <!-- <button type="button" class="btn btn-secondary">1/2</button> -->
                                                        <!-- <button type="button" class="btn btn-secondary">x2</button> -->
                                                        <!-- <button type="button" class="btn btn-secondary">Max</button> -->
                                                    <!-- </div> -->
                                                <!-- </div> -->
                                            <!-- </div> -->
                                            <!-- <div class="col-xl-6 col-lg-6 col-md-6"> -->
                                                <!-- <div class="roll-controlling"> -->
                                                    <!-- <div class="btn-group" role="group" aria-label="Basic example"> -->
                                                        <!-- <button type="button" class="btn btn-secondary roll-ctrl-btn"> Over <span class="arrowIcon"></span> </button> -->
                                                        <!-- <button type="button" class="btn btn-secondary roll-ctrl-btn under"> <span class="arrowIcon"></span>  Under </button> -->
                                                    <!-- </div> -->
                                                    <!-- <div class="number"> -->
                                                        <!-- <span class="text under">12008</span> -->
                                                        <!-- <span class="text over d-none">10008</span> -->
                                                    <!-- </div> -->
                                                <!-- </div> -->
                                            <!-- </div> -->
                                        <!-- </div> -->
                                        <!-- <div class="text-center"> -->
                                            <!-- <button class="place-bet-btn def-btn def-small">Place a bet</button> -->
                                        <!-- </div> -->
                                    </div>
                                    <div class="tab-pane fade" id="Batsmen" role="tabpanel" aria-labelledby="provably-fair-tab">
                                        <h3>Pick 3-6 Batsmen</h3>
			<form>
				<div style="overflow-x:auto;">
					<table class="table table-borderless text-center align-self-center justify-content-center">
						<tr>
							<th style="color:white">Name</th>
							<th style="color:white">Points</th>
							<th style="color:white">Credits</th>
                            <th style="color:white">Add/Remove</th>
						</tr>
						<tr>
							<td>
								<div class="part-icon">
									 <img src="assets/img/user-dashboard/icon-1.png" alt="">
									</div>
								<div class="part-info">
								 <span class="text" style="color:white" >S Dhavan</span>
                                    <span class="text" style="color:white" >India</span>
									</div>
								</td>
								<td>
									<label for="inlineFormInputGroupUsername01">118.00</label>
								</td>
								<td>
									<label for="inlineFormInputGroupUsername02">9.0</label>
								</td>
								<td>
									<button type="button" class="btn def-btn def-small">+</button>
								</td>
							</tr>
							<tr>
								<td>
									<div class="part-icon">
									 <img src="assets/img/user-dashboard/icon-1.png" alt="">
									</div>
								<div class="part-info">
								 <span class="text" style="color:white" >S Dhavan</span>
                                    <span class="text" style="color:white" >India</span>
									</div>
									</td>
									<td>
										<label for="inlineFormInputGroupUsername01">118.00</label>
									</td>
									<td>
										<label for="inlineFormInputGroupUsername02">9.0</label>
									</td>
									<td>
										<button type="button" class="btn def-btn def-small">+</button>
									</td>
								</tr>
								<br/>
								<tr>
									<td>
										<div class="part-icon">
									 <img src="assets/img/user-dashboard/icon-1.png" alt="">
									</div>
								<div class="part-info">
								 <span class="text" style="color:white" >S Dhavan</span>
                                    <span class="text" style="color:white" >India</span>
									</div>
										</td>
										<td>
											<label for="inlineFormInputGroupUsername01">118.00</label>
										</td>
										<td>
											<label for="inlineFormInputGroupUsername02">9.0</label>
										</td>
										<td>
											<button type="button" class="btn def-btn def-small">+</button>
										</td>
									</tr>
									<tr>
										<td>
											<div class="part-icon">
									 <img src="assets/img/user-dashboard/icon-1.png" alt="">
									</div>
								<div class="part-info">
								 <span class="text" style="color:white" >S Dhavan</span>
                                    <span class="text" style="color:white" >India</span>
									</div>
											</td>
											<td>
												<label for="inlineFormInputGroupUsername01">118.00</label>
											</td>
											<td>
												<label for="inlineFormInputGroupUsername02">9.0</label>
											</td>
											<td>
												<button type="button" class="btn def-btn def-small">+</button>
											</td>
										</tr>
									</table>
								</div>
										                                       
                                          
                                        </form>
                                        <!-- <div class="row"> -->
                                            <!-- <div class="col-xl-6 col-lg-6 col-md-6 text-xl-right text-lg-right text-center"> -->
                                                <!-- <div class="bet-control"> -->
                                                    <!-- <div class="btn-group" role="group" aria-label="Basic example"> -->
                                                        <!-- <button type="button" class="btn btn-secondary">Min</button> -->
                                                        <!-- <button type="button" class="btn btn-secondary">1/2</button> -->
                                                        <!-- <button type="button" class="btn btn-secondary">x2</button> -->
                                                        <!-- <button type="button" class="btn btn-secondary">Max</button> -->
                                                    <!-- </div> -->
                                                <!-- </div> -->
                                            <!-- </div> -->
                                            <!-- <div class="col-xl-6 col-lg-6 col-md-6"> -->
                                                <!-- <div class="roll-controlling"> -->
                                                    <!-- <div class="btn-group" role="group" aria-label="Basic example"> -->
                                                        <!-- <button type="button" class="btn btn-secondary roll-ctrl-btn"> Over <span class="arrowIcon"></span> </button> -->
                                                        <!-- <button type="button" class="btn btn-secondary roll-ctrl-btn under"> <span class="arrowIcon"></span>  Under </button> -->
                                                    <!-- </div> -->
                                                    <!-- <div class="number"> -->
                                                        <!-- <span class="text under">12008</span> -->
                                                        <!-- <span class="text over d-none">10008</span> -->
                                                    <!-- </div> -->
                                                <!-- </div> -->
                                            <!-- </div> -->
                                        <!-- </div> -->
                                        <!-- <div class="text-center"> -->
                                            <!-- <button class="place-bet-btn def-btn def-small">Place a bet</button> -->
                                        <!-- </div> -->
                                    </div>
                                    <div class="tab-pane fade" id="All-Rounders" role="tabpanel" aria-labelledby="how-play-tab">
                                      <h3>Pick 1-4 All-Rounders</h3>
						<form>
									<div style="overflow-x:auto;">
									<table class="table table-borderless text-center align-self-center justify-content-center">
						<tr>
							<th style="color:white">Name</th>
							<th style="color:white">Points</th>
							<th style="color:white">Credits</th>
                            <th style="color:white">Add/Remove</th>
						</tr>
						<tr>
							<td>
								<div class="part-icon">
									 <img src="assets/img/user-dashboard/icon-1.png" alt="">
									</div>
								<div class="part-info">
								 <span class="text" style="color:white" >S Dhavan</span>
                                    <span class="text" style="color:white" >India</span>
									</div>
								</td>
								<td>
									<label for="inlineFormInputGroupUsername01">118.00</label>
								</td>
								<td>
									<label for="inlineFormInputGroupUsername02">9.0</label>
								</td>
								<td>
									<button type="button" class="btn def-btn def-small">+</button>
								</td>
							</tr>
							<tr>
								<td>
									<div class="part-icon">
									 <img src="assets/img/user-dashboard/icon-1.png" alt="">
									</div>
								<div class="part-info">
								 <span class="text" style="color:white" >S Dhavan</span>
                                    <span class="text" style="color:white" >India</span>
									</div>
									</td>
									<td>
										<label for="inlineFormInputGroupUsername01">118.00</label>
									</td>
									<td>
										<label for="inlineFormInputGroupUsername02">9.0</label>
									</td>
									<td>
										<button type="button" class="btn def-btn def-small">+</button>
									</td>
								</tr>
								<br/>
								<tr>
									<td>
										<div class="part-icon">
									 <img src="assets/img/user-dashboard/icon-1.png" alt="">
									</div>
								<div class="part-info">
								 <span class="text" style="color:white" >S Dhavan</span>
                                    <span class="text" style="color:white" >India</span>
									</div>
										</td>
										<td>
											<label for="inlineFormInputGroupUsername01">118.00</label>
										</td>
										<td>
											<label for="inlineFormInputGroupUsername02">9.0</label>
										</td>
										<td>
											<button type="button" class="btn def-btn def-small">+</button>
										</td>
									</tr>
									<tr>
										<td>
											<div class="part-icon">
									 <img src="assets/img/user-dashboard/icon-1.png" alt="">
									</div>
								<div class="part-info">
								 <span class="text" style="color:white" >S Dhavan</span>
                                    <span class="text" style="color:white" >India</span>
									</div>
											</td>
											<td>
												<label for="inlineFormInputGroupUsername01">118.00</label>
											</td>
											<td>
												<label for="inlineFormInputGroupUsername02">9.0</label>
											</td>
											<td>
												<button type="button" class="btn def-btn def-small">+</button>
											</td>
										</tr>
									</table>
								</div>
										                                       
                                          
                                        </form>
                                        <!-- <div class="row"> -->
                                            <!-- <div class="col-xl-6 col-lg-6 col-md-6 text-xl-right text-lg-right text-center"> -->
                                                <!-- <div class="bet-control"> -->
                                                    <!-- <div class="btn-group" role="group" aria-label="Basic example"> -->
                                                        <!-- <button type="button" class="btn btn-secondary">Min</button> -->
                                                        <!-- <button type="button" class="btn btn-secondary">1/2</button> -->
                                                        <!-- <button type="button" class="btn btn-secondary">x2</button> -->
                                                        <!-- <button type="button" class="btn btn-secondary">Max</button> -->
                                                    <!-- </div> -->
                                                <!-- </div> -->
                                            <!-- </div> -->
                                            <!-- <div class="col-xl-6 col-lg-6 col-md-6"> -->
                                                <!-- <div class="roll-controlling"> -->
                                                    <!-- <div class="btn-group" role="group" aria-label="Basic example"> -->
                                                        <!-- <button type="button" class="btn btn-secondary roll-ctrl-btn"> Over <span class="arrowIcon"></span> </button> -->
                                                        <!-- <button type="button" class="btn btn-secondary roll-ctrl-btn under"> <span class="arrowIcon"></span>  Under </button> -->
                                                    <!-- </div> -->
                                                    <!-- <div class="number"> -->
                                                        <!-- <span class="text under">12008</span> -->
                                                        <!-- <span class="text over d-none">10008</span> -->
                                                    <!-- </div> -->
                                                <!-- </div> -->
                                            <!-- </div> -->
                                        <!-- </div> -->
                                        <!-- <div class="text-center"> -->
                                            <!-- <button class="place-bet-btn def-btn def-small">Place a bet</button> -->
                                        <!-- </div> -->
                                    </div>
									 <div class="tab-pane fade" id="Bowlers" role="tabpanel" aria-labelledby="how-play-bowl">
									       <h3>Pick 3-6 Bowlers</h3>
						<form>
									<div style="overflow-x:auto;">
									<table class="table table-borderless text-center align-self-center justify-content-center">
						<tr>
							<th style="color:white">Name</th>
							<th style="color:white">Points</th>
							<th style="color:white">Credits</th>
                            <th style="color:white">Add/Remove</th>
						</tr>
						<tr>
							<td>
								<div class="part-icon">
									 <img src="assets/img/user-dashboard/icon-1.png" alt="">
									</div>
								<div class="part-info">
								 <span class="text" style="color:white" >S Dhavan</span>
                                    <span class="text" style="color:white" >India</span>
									</div>
								</td>
								<td>
									<label for="inlineFormInputGroupUsername01">118.00</label>
								</td>
								<td>
									<label for="inlineFormInputGroupUsername02">9.0</label>
								</td>
								<td>
									<button type="button" class="btn def-btn def-small">+</button>
								</td>
							</tr>
							<tr>
								<td>
									<div class="part-icon">
									 <img src="assets/img/user-dashboard/icon-1.png" alt="">
									</div>
								<div class="part-info">
								 <span class="text" style="color:white" >S Dhavan</span>
                                    <span class="text" style="color:white" >India</span>
									</div>
									</td>
									<td>
										<label for="inlineFormInputGroupUsername01">118.00</label>
									</td>
									<td>
										<label for="inlineFormInputGroupUsername02">9.0</label>
									</td>
									<td>
										<button type="button" class="btn def-btn def-small">+</button>
									</td>
								</tr>
								<br/>
								<tr>
									<td>
									<div class="part-icon">
									 <img src="assets/img/user-dashboard/icon-1.png" alt="">
									</div>
								<div class="part-info">
								 <span class="text" style="color:white" >S Dhavan</span>
                                    <span class="text" style="color:white" >India</span>
									</div>
										</td>
										<td>
											<label for="inlineFormInputGroupUsername01">118.00</label>
										</td>
										<td>
											<label for="inlineFormInputGroupUsername02">9.0</label>
										</td>
										<td>
											<button type="button" class="btn def-btn def-small">+</button>
										</td>
									</tr>
									<tr>
										<td>
											<div class="part-icon">
									 <img src="assets/img/user-dashboard/icon-1.png" alt="">
									</div>
								<div class="part-info">
								 <span class="text" style="color:white" >S Dhavan</span>
                                    <span class="text" style="color:white" >India</span>
									</div>
											</td>
											<td>
												<label for="inlineFormInputGroupUsername01">118.00</label>
											</td>
											<td>
												<label for="inlineFormInputGroupUsername02">9.0</label>
											</td>
											<td>
												<button type="button" class="btn def-btn def-small">+</button>
											</td>
										</tr>
									</table>
								</div>
										                                       
                                          
                                        </form>
                                        <!-- <div class="row"> -->
                                            <!-- <div class="col-xl-6 col-lg-6 col-md-6 text-xl-right text-lg-right text-center"> -->
                                                <!-- <div class="bet-control"> -->
                                                    <!-- <div class="btn-group" role="group" aria-label="Basic example"> -->
                                                        <!-- <button type="button" class="btn btn-secondary">Min</button> -->
                                                        <!-- <button type="button" class="btn btn-secondary">1/2</button> -->
                                                        <!-- <button type="button" class="btn btn-secondary">x2</button> -->
                                                        <!-- <button type="button" class="btn btn-secondary">Max</button> -->
                                                    <!-- </div> -->
                                                <!-- </div> -->
                                            <!-- </div> -->
                                            <!-- <div class="col-xl-6 col-lg-6 col-md-6"> -->
                                                <!-- <div class="roll-controlling"> -->
                                                    <!-- <div class="btn-group" role="group" aria-label="Basic example"> -->
                                                        <!-- <button type="button" class="btn btn-secondary roll-ctrl-btn"> Over <span class="arrowIcon"></span> </button> -->
                                                        <!-- <button type="button" class="btn btn-secondary roll-ctrl-btn under"> <span class="arrowIcon"></span>  Under </button> -->
                                                    <!-- </div> -->
                                                    <!-- <div class="number"> -->
                                                        <!-- <span class="text under">12008</span> -->
                                                        <!-- <span class="text over d-none">10008</span> -->
                                                    <!-- </div> -->
                                                <!-- </div> -->
                                            <!-- </div> -->
                                        <!-- </div> -->
                                         <div class="text-center">
                                           <button class="place-bet-btn def-btn def-small">Team Preview</button>
											&nbsp;&nbsp;&nbsp;&nbsp;
										   <button class="place-bet-btn def-btn def-small">Next</button> 
                                         </div> 
										 
									 </div>
									
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="recent-activity p-0">
                            <div class="single-col">
                                <div class="activity-list">
                                    <div class="row">
                                        <div class="col-xl-12 col-lg-12 col-md-6">
                                            <div class="single-activity">
                                                <div class="part-img">
                                                    <img src="assets/img/games/assets-1.jpg" alt="">
                                                </div>
                                                <div class="part-text">
                                                    <p><span class="player-name">Mukta</span> won 2 minutes ago<br> on game of <a href="#0" class="game-name">Cricket</a></p>
                                                    <span class="winning-amount">1000 Coins</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-6">
                                            <div class="single-activity">
                                                <div class="part-img">
                                                    <img src="assets/img/games/assets-2.jpg" alt="">
                                                </div>
                                                <div class="part-text">
                                                    <p><span class="player-name">Shehwar</span> won 2 minutes ago<br> on game of <a href="#0" class="game-name">Football</a></p>
                                                    <span class="winning-amount">1500 Coins</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-6">
                                            <div class="single-activity">
                                                <div class="part-img">
                                                    <img src="assets/img/games/assets-3.jpg" alt="">
                                                </div>
                                                <div class="part-text">
                                                    <p><span class="player-name">Maria</span> won 2 minutes ago<br> on game of <a href="#0" class="game-name">Football</a></p>
                                                    <span class="winning-amount">2000 Coins</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-6">
                                            <div class="single-activity">
                                                <div class="part-img">
                                                    <img src="assets/img/games/assets-4.jpg" alt="">
                                                </div>
                                                <div class="part-text">
                                                    <p><span class="player-name">Drubo</span> won 2 minutes ago<br> on game of <a href="#0" class="game-name">Cricket</a></p>
                                                    <span class="winning-amount">800 Coins</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-6">
                                            <div class="single-activity">
                                                <div class="part-img">
                                                    <img src="assets/img/games/assets-1.jpg" alt="">
                                                </div>
                                                <div class="part-text">
                                                    <p><span class="player-name">Mukta</span> won 2 minutes ago<br> on game of <a href="#0" class="game-name">Football</a></p>
                                                    <span class="winning-amount">500 Coins</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-6">
                                            <div class="single-activity">
                                                <div class="part-img">
                                                    <img src="assets/img/games/assets-2.jpg" alt="">
                                                </div>
                                                <div class="part-text">
                                                    <p><span class="player-name">Shehwar</span> won 2 minutes ago<br> on game of <a href="#0" class="game-name">Cricket</a></p>
                                                    <span class="winning-amount">120 Coins</span>
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
        <!-- game details end -->

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