<?php
session_start();


  include("connect.php");
  include("functions_login.php");
  include("validate.php");

  $user_data=check_login($con);

$_SESSION;

?>

<!DOCTYPE html>
<html>
<head>

	<title>My Stamp</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="icon" href="images/2022-04-16_17_39_42-Canva.jpg" type="image/gif">
        <link rel="stylesheet" href="assets/css/main.css" />
	    <link rel="stylesheet" type="text/css" href="assets/css/style_profile.css">
</head>
<body>

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
                                    <li><a href="about_us.php">About us</a></li>

                                    <!-- Account -->
                                    <li class="current">
                                        <a href="#">Account</a>
                                        <ul>
                                            <?php
                                            
                                            if (isset($user_data['username'])) {
                                            ?>

                                            <?php
                                            if (isset($status['1'])) {
                                            ?>

                                            <li><a href="adminpage.php">Admin page</a></li>

                                            <?php
                                            } 
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

<!-- Profile -->
<div class="">
<div class="container1" >
    <div class="card1">
        <div class="top-container1"> <img src="images/1.png" alt="profile image" class="img-fluid profile-image" width="70">
            <div class="ml-3">
                <h5 class="name">&nbsp; &nbsp;<?php echo $user_data['username'];?></h5>
                <p class="mail">&nbsp; &nbsp;<?php echo $user_data['email'];?></p>
            </div>
        </div>
        <div class="middle-container1 ">
           <!-- <div class="dollar-div">
                <div class="round-div"><i class="dollar">$$$</i></div> 
                <div class="" style="align-content: center;"> <span class="current-balance">Current Posts</span> <span class="amount">999</span> </div>
            </div>-->
           
        </div>
        <br>
        <a href="post_form.php" class="button">Create post</a>
        <br>
        <br>
        <div class="recent-border "> <span class="recent-orders">Recent posts</span> </div>
        <!-- <div class="wishlist-border "> <span class="wishlist">Wishlist</span> </div> -->
       
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
                                        <h3>Random Info</h3>
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
                                        <h3>Random Info</h3>
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


        <!-- Scripts -->

            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/jquery.dropotron.min.js"></script>
            <script src="assets/js/browser.min.js"></script>
            <script src="assets/js/breakpoints.min.js"></script>
            <script src="assets/js/util.js"></script>
            <script src="assets/js/main.js"></script>
</body>
</html>