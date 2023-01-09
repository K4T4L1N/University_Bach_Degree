<?php
session_start();


  include("connect.php");
  include("functions_login.php");

  $user_data=check_login($con);

$_SESSION;

?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>About Us</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	    <link rel="icon" href="images/2022-04-16_17_39_42-Canva.jpg" type="image/gif">
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload left-sidebar">
		<div id="page-wrapper">

            <!-- Header -->
            <div id="header-wrapper">
                <header id="header" class="container">

                    <!-- Logo -->
                    <div id="logo">
                        <h1><a href="index.php">MyStamp</a></h1>
                    </div>

                    <!-- Nav -->
                    <nav id="nav">
                                <ul>
                                    <li><a href="index.php">Main</a></li>

                                    <li><a href="products.php">Products</a></li>
                                   <!-- <li><a href="right-sidebar.html">Right Sidebar</a></li> -->
                                    <li   class="current"><a href="about_us.php">About us</a></li>

                                    <!-- Account -->
                                    <li>
                                        <a href="#">Account</a>
                                        <ul>
                                            <?php
                                            if (isset($user_data['username'])) {
                                            ?>
                                            <li><a href="profile.php">Account info</a></li>
                                            <?php
                                            }
                                            ?>
                                            
                                            <?php
                                            if (!isset($user_data['username'])) {
                                            ?>
                                            <li><a href="login.php">LOGIN & REGISTER</a></li>
                                            <?php
                                            }
                                            ?>


                                            <?php
                                            if (isset($user_data['username'])) {
                                            ?>
                                            <li><a href="logout.php">LOGOUT</a></li>
                                            <?php
                                            }
                                            ?>
                                            

                                            



                                            <!-- Unused stuff, just to be in case it will be needed in future XD -->

                                            <!--<li> 
                                                <a href="#">Phasellus consequat</a>
                                                <ul>
                                                    <li><a href="#">Lorem ipsum dolor</a></li>
                                                    <li><a href="#">Phasellus consequat</a></li>
                                                    <li><a href="#">Magna phasellus</a></li>
                                                    <li><a href="#">Etiam dolore nisl</a></li>
                                                </ul>
                                            </li>
                                        <li><a href="#">Veroeros feugiat</a></li>-->

                                            
                                        </ul>
                                    </li>
                                </ul>
                            </nav>

                    </header>
            </div>				
         

			<!-- Main -->
				<div id="main-wrapper">
					<div class="container">
						<div class="row gtr-200">
							<div class="col-4 col-12-medium">
								<div id="sidebar">

									<!-- Sidebar -->
										<section>
											<h3>Our purpose</h3>
											<p>Here you can find our vision, if you are interested in finding out more, click the button below!</p>
                                            <footer>
												<a href="scholarly.php" class="button icon solid fa-info-circle">Find out more about our purpose</a>
											</footer>
										</section>
								</div>
							</div>
							<div class="col-8 col-12-medium imp-medium">
								<div id="content">

									<!-- Content -->
										<article>

											<h2>About Us</h2>

											<p>Our purpose is to fulfill all types of tastes and help everyone find a stamp that suits its preferences.
                                            </p>

											<h3>Who are we & What we do?</h3>
											<p>Here you can find all kind of stamps: collections ones, rare ones, old or new, everything you search for.
                                                Moreover if you are a collectionar you can also sell your stamps to our customers and that's how our vast
                                                collection has been made. 
                                            </p>

											<p>We are selling stamps all over the world coming from all over the world helping people collect and share their
                                                stamps with others.
                                            </p>
                                            <h3>Our team</h3>
                                            <div id="features-wrapper">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-4 col-12-medium">
                            
                                                            <!-- Box -->

                                                        <div class="col-4 col-12-medium">
                            
                                                            <!-- Box -->
                                                                <section class="box feature">
                                                                    <a class="image featured"><img src="images/pic03.jpg" alt="" /></a>
                                                                    <div class="inner">
                                                                        <header>
                                                                            <h2>Pavlovschi Catalin</h2>
                                                                        </header>
                                                                    </div>
                                                                </section>
                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

										</article>

								</div>
							</div>
						</div>
					</div>
				</div>

<!-- Footer -->
                <div id="footer-wrapper">
                    <footer id="footer" class="container">
                        <div class="row">
                            <div class="col-3 col-6-medium col-12-small">

                                <!-- Links -->
                                    <section class="widget links">
                                        <h3>Documentation</h3>
                                        <ul class="style2">
                                            <li><a href="Scholarly.php">Scholarly</a></li>
                                            <li><a href="#">Aliquam imperdiet suscipit odio</a></li>
                                            <li><a href="#">Sed porttitor cras in erat nec</a></li>
                                            <li><a href="#">Felis varius pellentesque potenti</a></li>
                                            <li><a href="#">Nullam scelerisque blandit leo</a></li>
                                        </ul>
                                    </section>

                            </div>
                            <div class="col-3 col-6-medium col-12-small">

                                <!-- Links -->
                                    <section class="widget links">
                                <h3>Random Links</h3>
                                <ul class="style2">
                                    <li><a href="#">Etiam feugiat condimentum</a></li>
                                    <li><a href="#">Aliquam imperdiet suscipit odio</a></li>
                                    <li><a href="#">Sed porttitor cras in erat nec</a></li>
                                    <li><a href="#">Felis varius pellentesque potenti</a></li>
                                    <li><a href="#">Nullam scelerisque blandit leo</a></li>
                                </ul>
                                    </section>

                            </div>
                            <div class="col-3 col-6-medium col-12-small">

                                <!-- Links -->
                                    <section class="widget links">
                                        <h3>Random Links</h3>
                                        <ul class="style2">
                                            <li><a href="#">Etiam feugiat condimentum</a></li>
                                            <li><a href="#">Aliquam imperdiet suscipit odio</a></li>
                                            <li><a href="#">Sed porttitor cras in erat nec</a></li>
                                            <li><a href="#">Felis varius pellentesque potenti</a></li>
                                            <li><a href="#">Nullam scelerisque blandit leo</a></li>
                                        </ul>
                                    </section>

                            </div>
                            <div class="col-3 col-6-medium col-12-small">

                                <!-- Contact -->
                                    <section class="widget contact last">
                                        <h3>Contact Us</h3>
                                        <ul>
                                            <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
                                            <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
                                            <li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
                                            <li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
                                            <li><a href="#" class="icon brands fa-pinterest"><span class="label">Pinterest</span></a></li>
                                        </ul>
                                        <p>1234 Fictional Str.<br />
                                        Fictional City, RO 00000<br />
                                        (505) 503-4455</p>
                                    </section>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div id="copyright">
                                    <ul class="menu">
                                        <li>&copy; MyStamp. All rights reserved</li><li>Design: <a href="about_us.html"> TeamName</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>
</div>

		<!-- Scripts -->

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>