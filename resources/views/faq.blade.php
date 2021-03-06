<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Giro Fantasy - FAQ</title>
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
                            <h2 class="title">frequently asked questions</h2>
                            
                            <ul>
                                <li>
                                    <a href="#">Home</a>
                                </li>
                                <li class="arrow">
                                    <i class="fas fa-angle-right"></i>
                                </li>
                                <li>
                                    Faq
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
                                <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">FAQ Giro Fantasy</a>
                                
                                
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-8">
                        <div class="faq-content">
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                    <div class="single-faq">
                                        <h4>What is Fantasy Gaming?</h4>
                                        <p>Fantasy gaming is a growing form of online gaming in which gamers or fantasy gaming enthusiasts choose any fantasy gaming website like Giro Fantasy Sports from real live upcoming matches through their knowledge and skills of their chosen sport in order to win real money day in and day out. Fantasy gaming is now becoming a trend and a reliable way to earn real cash in the online gaming world</p>
                                    </div>

                                    <div class="single-faq">
                                        <h4>How Do I Play Fantasy Games?</h4>
                                        <p>Choose any fantasy gaming site like Giro Fantasy. Make your teams in real live upcoming matches according to your knowledge and skills of the game. If your team does well in the live game then there are high chances that you can earn real cash in fantasy games. It all depends on your knowledge and skill of the concerned Fantasy Cricket Game that you will be making your teams for.</p>
                                    </div>

                                    <div class="single-faq">
                                        <h4>What are Fantasy Games?</h4>
                                        <p>Fantasy games are online games that allow sports lovers to come closer to their favourite sport. It is an opportunity to help you make your own teams in real live fantasy games along with choosing a Captain & Vice-Captain. If your team does well and the Captain Vice-Captain choice comes out as match winners, then you get a chance to win real cash in the available prize pool.
                                            
                                            </p>
                                    </div>
                                    <div class="single-faq">
                                        <h4>How do you Play Fantasy Games?</h4>
                                        <p>To play fantasy games, the process is extremely simple & to the point. Make your teams from an upcoming match, choose your Captain & Vice Captain choice according to the match situations and pertaining to your knowledge and skills of the fantasy game involved. If the live match goes according to your predictions and the selected players do well then you will get a chance to earn real cash from the prize pool available.
                                            
                                            </p>
                                    </div>
                                    <div class="single-faq">
                                        <h4>Is Fantasy Games a Skill or Luck?</h4>
                                        <p>Fantasy games are a mixture of 60% skill and 40% luck according to me because it takes a good amount of knowledge of the game to choose the right kind of players in a particular game according to the conditions available & their current form. Luck does play a part but it all the more depends on the knowledge and skill of the concerned fantasy gamer who is selecting those players available in the real upcoming matches.
                                            </p>
                                    </div>
                                    <div class="single-faq">
                                        <h4>What are Fantasy Games or Sports?</h4>
                                        <p>Fantasy games or fantasy sports are an online form of gaming where users or gamers can participate in an upcoming real life game choosing their own players and making their own teams for a particular match or the whole tournament. Fantasy games allow you to use your sports knowledge and skills to the fullest and best possible way in order to win real cash daily in various contests.
                                            </p>
                                    </div>
                                    <div class="single-faq">
                                        <h4>Why should I play fantasy games?</h4>
                                        <p> This is an easy one. Playing Fantasy Sports, or more specifically, Fantasy Cricket offers you a thought-provoking way to create your team of superstars as per your fantasy and insights. It also lets you use your knowledge of the game to win rewards. By playing these Online Games, you can manoeuvre your players around in a way that their collective and personal synergies are laser-focused towards a unified goal.
                                            What is fantasy cricket?
                                            Fantasy Cricket is just what the name implies- it is a virtual genre of cricket that hinges on fantasy-based selections of top performers.
                                            In it, a player selects a virtual team of 11 players from a total of 30 or so players from two competing teams. He may select them on the basis of their track record, current form, strengths and weaknesses, playing conditions and sometimes even intuition.
                                            This online gaming genre also keeps a reserved space for every player???s own understanding and version of cricket. It is so because different fantasy players may perceive a certain real match player differently and the same perception closely affects their team creation.
                                            Once a player has created a fantasy team, he is also supposed to mark the captain and vice-captain for it. Each of the players that he has chosen receive points on the basis of their performance on the ground. The captain and vice-captain get additional Fantasy Points for every other player???s performance in the team, besides theirs.
                                            Online fantasy cricket: Salient features:
                                            Get in the driver???s seat: There is nothing more exciting than being the commander of your army. Ditto for Online Fantasy Cricket games. You are always in control of your team and its selection- and it???s you who takes all the decision of selection on a daily basis!
                                            Get actively involved in the game: If you have created a team of yours, you won???t rest easy. It???s rather like being out in the centre and making all your decision count in real time. The best thing is, you get to know what it takes to be a winner in seemingly impossible conditions.
                                            Building your game up: There is an adrenaline rush that comes only with applying one???s insights and learning some more from the Pros on a daily basis. With online gaming, you can always count on making it better with every single match and every single day!
                                            Know Some Fantasy Cricket Tips here.
                                             </p>
                                    </div>
                                    <div class="single-faq">
                                        <h4>Why play daily on Giro Fantasy Sports?</h4>
                                        <p> Fantasy Cricket is as much a skill-based sport as is Cricket itself. Online players, irrespective of their respective proficiency levels, are thus advised to play only on a safe and trusted online gaming portal that respects their passion and skills for the game. Giro Fantasy offers all online gamers to play and evolve themselves over a period of time and to translate their progress in terms of grand rewards on a regular basis.
                                            The best thing with Giro Fantasy Sports is that allows you to excel in the gaming department that you???d like most. It means that just as you would have a choice to be either a batsman or bowler or an all-rounder in real life, you have the same liberty in playing virtual games.
                                            You could always choose to play either in Classic, Batting or Bowling fantasies and then be the best version of yourself over a period of time. Rewards would flow-in automatically if you are pursuing your passion, and you can best answer this for yourself!
                                            Legal, safe and secure <br>
                                            Giro Fantasy offers a comprehensive online gaming experience of fantasy sports online. Right from its Signup to Cashout phase, it offers a transparent window where you can see how your game is taking you from one stage to another. The (Hon.) Supreme Court of India acknowledges and approves of all Games of Skill, and several High Courts have approved Fantasy Gaming as a game of skill. A consistent element of skill is required to attain a certain outcome in every such virtual game and this can result only from a profound understanding of the game.
                                            Giro Fantasy is pivotally focused on providing only the safest of online gaming environments to its players. The same attribute is predominantly visible in its user-facing interfaces on the web portal and smartphone apps. All financial transactions are secured by <128-bit encryption> and to ensure transparency at all times, without compromising on the speed at any instant.
                                            
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
                                        <h4>Other points</h4>
                                        <p>
                                            1.	Captain of the Dream11 team - 2x the points scored in the match <br>
                                            2.	Vice-captain of the Dream11 team - 1.5x the points scored in the match <br>
                                            3.	4 points each for every player announced in the playing XI <br>
                                            </p>
                                    </div>
                                    <div class="single-faq">
                                        <h4>Other points</h4>
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