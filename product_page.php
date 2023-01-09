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
		<title>Product Default</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="icon" href="images/2022-04-16_17_39_42-Canva.jpg" type="image/gif">
		<link rel="stylesheet" href="assets/css/product.page.css" />
	</head>
	<body class="is-preload right-sidebar">
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
                                    <li  class="current"><a href="index.php">Main</a></li>

                                    <li><a href="products.php">Products</a></li>
                                   <!-- <li><a href="right-sidebar.html">Right Sidebar</a></li> -->
                                    <li><a href="about_us.php">About us</a></li>

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
						<div class="col-8 col-12-medium">
							<div id="content">
								<!-- Content -->
								<div class="image centered">
									<img src="images/pic01.jpg" alt="Stamp" id="product-image">
								</div>
							</div>
						</div>
						<div class="col-4 col-12-medium">
							<div id="sidebar">

								<!-- Sidebar -->
								<section>
									<h3 id="product-name">Product</h3>
									<p id="product-info">Information given by seller</p>

									<p>Price: <span id="product-price">ppr</span></p>
									<footer>
										<a href="" class="button icon solid">Buy now</a>
									</footer>
								</section>

								<section>
									<h3>Sold by</h3>
									<ul class="style2">
										<li><a href="" id="product-seller-name">Firstname Lastname</a></li>
									</ul>
								</section>

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
								<h3>Random Stuff</h3>
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
								<h3>Random Stuff</h3>
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
							<section class="widget contact">
								<h3>Contact Us</h3>
								<ul>
									<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
									<li><a href="#" class="icon brands fa-pinterest"><span class="label">Pinterest</span></a></li>
								</ul>
								<p>1234 Fictional Road<br />
								Nashville, TN 00000<br />
								(800) 555-0000</p>
							</section>

						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div id="copyright">
								<ul class="menu">
									<li>&copy; Untitled. All rights reserved</li><li>Design: <a href="">TeamName</a></li>
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
        <script src="assets/js/product.display.js"></script>

	</body>
</html>
