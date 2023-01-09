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
	<title>MyStamp</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
      <link rel="icon" href="images/2022-04-16_17_39_42-Canva.jpg" type="image/gif">
		<link rel="stylesheet" href="assets/css/main.css" />

		<style>
ul, #myUL {
  list-style-type: none;
}

#myUL {
  margin: 0;
  padding: 0;
}

.caret {
  cursor: pointer;
  -webkit-user-select: none; 
  -moz-user-select: none; 
  -ms-user-select: none; 
  user-select: none;
}

.caret::before {
  content: "\25B6";
  color: black;
  display: inline-block;
  margin-right: 6px;
}

.caret-down::before {
  -ms-transform: rotate(90deg); 
  -webkit-transform: rotate(90deg); 
  transform: rotate(90deg);  
}

.nested {
  display: none;
}

.active {
  display: block;
}
</style>
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


<!--Banner-->
<div id="banner-wrapper">
				<div id="banner" class="box container">
					<div class="row">
						<div class="col-12 col-12-medium">
							<h2>Scholarly HTML</h2>
						</div>
					</div>
				</div>
			</div>

			<div id="main-wrapper">
				<div class="container">
					<h2>Contents</h2>
        
        <ul style="list-style-type:disc">

            <li><a href="#intr">Introduction</a></li>
            <ol>
						<li><a href="#abstract">Abstract</a></li>
            <li><a href="#DomApl">The domain of aplication of the product</a></li>
            <li><a href="#DocConv">Document Conventions</a></li>

						<li><a href="#team">Team Members</a></li>
						<li><a href="#bib">Bibliography</a></li>
					  
            </ol>
            <li><a href="#GenDesc">General Description</a></li>
            
            <ol>
            <li><a href="#task">Task</a></li>
            <li><a href="#ProdPer">Product's perspective</a></li>
            <li><a href="#ProdFunc">Product's Functionalities</a></li>
            <li><a href="#HardInt">Hardware Interface</a></li>
            <li><a href="#SoftInt">Software Interface</a></li>
            <li><a href="#UsMan">User Manual</a></li>
            <li><a href="#ExtDep">External dependencies</a></li>
            <li><a href="#structure">Structure</a></li>
            <ul style="list-style-type:circle">
              <li><a href="#scheme">Website Scheme</a></li>
              <li><a href="#hf">Header/Footer</a></li>
              <li><a href="#elements">Elements</a></li>
            </ul>

            </ol>

            <li><a href="#GenDesc">External Interface Requirements</a></li>
            
            <ol>
              
            <li><a href="#UserInt">User Interface</a></li>
            <li><a href="#HardInt">Harware Interface</a></li>
            <li><a href="#SoftInt">Software Interface</a></li>
            <li><a href="#ConnInt">Connection Interface</a></li>

            </ol>

        </ul>
          
				</div>
				<div class="container">
          <h2 id="intr">Introduction</h2>
				</div>
				<div class="container">
					<p></p>
					<h2 id="abstract">Abstract</h2>
					
					<p><b>MyStamp</b> is a web-platform app focused on various catalogues, connecting thousands of amateur and dedicated stamp collectors. </p>
                    
				</div>

        <div class="container">
          <p></p>
          <h2 id="DomApl">The domain of aplication of the product</h2>
          
          <p><b>MyStamp</b> is focused on philately, the study of postage stamps, stamped envelopes, postmarks, postcards, and other materials relating to postal delivery. The term itself, <i>"philately"</i>, also denotes the collecting of these items. Traditional philately is the study of the technical aspects of stamp production and stamp identification, including:</p>

          <ul style="list-style-type:square">
            <li>The stamp design process</li>
            <li>The paper used (wove, laid and including watermarks)</li>
            <li>The method of printing (engraving, typography)</li>
            <li>The gum</li>
            <li>The method of separation (perforation, rouletting)</li>
            <li>Any overprints on the stamp</li>
            <li>Any security markings, underprints or perforated initials ("perfins")</li>
            <li>The study of philatelic fakes and forgeries</li>

          </ul>
                    
        </div>

				<div class="container">
          <p></p>
          <h2 id="DocConv">Document Conventions</h2>
          
          
            <ol>
              <li><b>Punctuation</b></li>
              <p>This Scholarly document rely on precise words and language to establish the narrative tone of their work and, therefore, punctuation marks are used very deliberately. For example, exclamation points are rarely used to express a heightened tone because it can come across as unsophisticated or over-excited. Dashes should be limited to the insertion of an explanatory comment in a sentence, while hyphens should be limited to connecting prefixes to words or when forming compound phrases. Finally, understand that semi-colons represent a pause that is longer than a comma, but shorter than a period in a sentence. In general, there are four grammatical uses of semi-colons: when a second clause expands or explains the first clause; to describe a sequence of actions or different aspects of the same topic; placed before clauses which begin with "nevertheless", "therefore", "even so," and "for instance”; and, to mark off a series of phrases or clauses which contain commas. If you are not confident about when to use semi-colons [and most of the time, they are not required for proper punctuation], rewrite using shorter sentences or revise the paragraph.</p>
              <li><b>Thesis-Driven</b></li>
              <p>This Documentation is “thesis-driven”, meaning that the starting point is a particular perspective, idea, or position applied to the chosen topic of investigation, such as, establishing, proving, or disproving solutions to the research questions posed for the topic. Note that a problem statement without the research questions does not qualify as academic writing because simply identifying the research problem does not establish for the reader how you will contribute to solving the problem, what aspects you believe are most critical, or suggest a method for gathering data to better understand the problem.</p>
              <li><b>Academic Conventions</b></li>
              <p>Citing sources in the body of our paper and providing a list of references as either footnotes or endnotes is a very important aspect of academic writing. It is essential to always acknowledge the source of any ideas, research findings, data, paraphrased, or quoted text that you have used in your paper as a defense against allegations of plagiarism. Equally important, the scholarly convention of citing sources allow readers to identify the resources you used in writing your paper so they can independently verify and assess the quality of findings and conclusions based on your review of the literature. Examples of other academic conventions to follow include the appropriate use of headings and subheadings, properly spelling out acronyms when first used in the text, avoiding slang or colloquial language, avoiding emotive language or unsupported declarative statements, avoiding contractions, and using first person and second person pronouns only when necessary.</p>
            </ol>
          
                    
        </div>
        <div class="container">
          <h2 id="GenDesc">General Description</h2>
          <h2 id="task">Task</h2>
          
          Sa doreste implementarea unei aplicatii Web destinata colectionarilor de artefacte filatelice. Pe baza facilitatilor de cautare multi-criteriala implementate, utilizatorii autentificati vor putea crea, inventaria si partaja albume de timbre in functie de diverse caracteristici (imagine, valoare, tara, perioada de emisie, istoric, existenta stampilei, grad de deteriorare etc.), plus vor putea importa/exporta datele referitoare la marcile postale detinute. Se vor genera statistici diverse, textuale si grafice, ce pot fi exportate in formate deschise – minimal, CSV si SVG, respectiv. Se va realiza, de asemenea, un clasament al celor mai populare emisii filatelice, plus al celor mai activi colectionari, disponibil si ca flux de date RSS. Inspiratie: <a href="https://www.stampworld.com/en"><b><i>Stamp World.</i></b></a>
                    
        </div>

        <div class="container">
          <h2 id="ProdPer">Product's perspective</h2>
          
          <p><b>MyStamp</b> is an independent product, with internal implementations for posting and the management of postage stamps, stamped envelopes, postmarks, postcards collections and rating them. </p>
          <br>
          <p>The App consists of 3 parts: the part which represents the interaction USER - WEB APP, which represents the users' interaction with the web app (visualising other collections, uploading the posts and rating them); Front-end, database which are used for storing user info and the proprieties of the posts (Title, Author, Rating and maybe price); Server component which manages all the instructions and does the functions of the web app. </p>
                    
        </div>

        <div class="container">
          <h2 id="ProdFunc">Product's Functionalities</h2>
          
          <ul style="list-style-type:disc">
            <li>Login/ Signin up </li>
            <li>Filtering/ sorting the posts (COUNTRY; THEME; COLOR; RELEASE YEAR)</li>
            <li>Posting and rating photos/ collections</li>
            <li>Visualising posted photos</li>
          </ul>
                    
        </div>

        <div class="container">
          <h2 id="HardInt">Hardware Interface</h2>
          

            <p>Front-end part of the app is compatible with the most of the modern devices (spartphones & tablets (Android & iOS), computers & laptops (Windows, Linux, MacOS etc.)). Because of these basic specs, which are using HTML & CSS & JS & SASS, the page grants simplicity and minimal technical requirements. The back-end part (The DataBase and the server) will run on a common host or a server with reduced capacity , as the specs are of low complexity. The comunication between components is made by PHP functions. Taking in count the previously said things, the maintenance and the app itself can be included in a lowcost category. </p>
            <!--<br>
            <p>Here is an example of connectivity with the database:</p>
            
            <pre>
                $dbhost = "localhost";
                $dbuser = "root";
                $dbpass = "";
                $dbname = "tw";

                if (!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname))
                {
                  die(" failed to connect! ");
                }
            </pre> -->


        </div>

        <div class="container">
          <h2 id="SoftInt">Software Interface</h2>
          
          
            <p>This app interacts with some extern software elements, as user's browser, and search engine. As well, the web app interacts with standard PHP libraries. All these services require a web host, available either in a virtual form, or a physical one, and a domain provider. The comunication between Back-End (server) and Front-End (Web Site/ App) is made through the PHP, including the action: maintaining a log session; storing temporary data to verify the data for authentication; storing the email data for checking if there is no other account using the same email; filtering throughout posts; deleting a post; LOGIN/SIGN-UP and LOGING OUT options; Displaing Account info in the ACCOUNT PAGE; Post's rating data etc.</p>

        </div>

        <div class="container">
          <h2 id="UsMan">User Manual</h2>
          
          
            <p>!!! This document can serve and can be used as a User Manual Document. !!!</p>

        </div>
       <div class="container">
          <h2 id="ExtDep">External Dependencies</h2>
          
          
            <p>This website/web-app does not use any external dependencies.</p>

        </div>

        <div class="container">
          <h2 id="#GenDesc">External Interface Requirements</h2>
				</div>

        <div class="container">
          <h2 id="UserInt">User Interfaces</h2>
          
          
            <p>This web application consists in 5 web pages. Their common element is the header and the footer,the header is the navigation bar that can fly you thru all pages and the footer which has some external links. </p>

        </div>

        <div class="container">
          <h2 id="HardInt">Harware Interfaces</h2>
          
          
            <p>The web application has been made to work on all modern platforms, from your phone or tablet to your computer. The servers for the back-end will work on a common host that has low capacity because of the minimum compexity of the function used.</p>

        </div>

        <div class="container">
          <h2 id="SoftInt">Softaware Interfaces</h2>
          
          
            <p>This website works with multiple external software elements. </p>

        </div>

        <div class="container">
          <h2 id="ConnInt">Connection Interfaces</h2>
          
          
            <p>The communication standard used is the HTTP. For the internal communication there are used direct requests and also there are used a user and a password for the data security </p>

        </div>


				<div class="container">
					<p></p>
					<h2 id="structure">Structure</h2>
					<ul>
						<li>
							<h3 id="scheme">Website scheme</h3>
							<p>
								*All pages will include a:<br>Header containing nav bar<br>Footer containing contancts and some info
							</p>

							<p>
								Pages are the following:
							</p>

							<ul id="myUL">

                              <li><span class="caret">Main</span>
                                <ul class="nested">
                                  <li>Welcome Banner</li>
                                  <li>Recently added stamps section</li>
                                </ul>
                              </li>
                              <li><span class="caret">Products</span>
                                <ul class="nested">
                                  <li>Banner</li>
                                  <li><span class="caret">Filter bar</span>
                                  	<ul class="nested">
                                  		<li>*every part is a dropdown list, triggered on click*</li>
                                  		<li>Country</li>
                                  		<li>Theme</li>
                                  		<li>Color</li>
                                  		<li>Year</li>
                                  	</ul>
                                  </li>
                                  <li><span class="caret">Product grid</span>
                                  	<ul class="nested">
                                  		<li>*just for template will be displayed 3 objects*</li>
                                  		<li>*the content of a product/stamp page will be siplayed accordingly to the it's ID*</li>
                                  		<li>Product 1</li>
                                  		<li>Product 3</li>
                                  		<li>Product 3</li>
                                  	</ul>
                                  </li>

                                </ul>
                              </li>

                              <li><span class="caret">Product page</span>
                                  	<ul class="nested">
                                  		<li>*the content of a product/stamp page will be siplayed accordingly to the it's ID*</li>
                                        <li><span class="caret">Left side</span>
                                        <ul class="nested">
                                          <li>Image</li>
                                        </ul>
                                        </li>
                                        <li><span class="caret">Right side</span>
                                        <ul class="nested">
                                          <li>Name</li>
                                          <li>Description</li>
                                          <li>Price</li>
                                          <li>Button: On-click submits to purchase</li>
                                          <li>Seller</li>
                                        </ul>
                                        </li>
                                  	</ul>
                                  </li>

                              <li><span class="caret">About us</span>
                                <ul class="nested">
                                  <li><span class="caret">Left side</span>
                                  	<ul class="nested">
                                  		<li>Our purpuse or smth like that</li>
                                  		<li>Link to scholarly</li>
                                  	</ul>
                                  </li>
                                  <li><span class="caret">The right side (about us part)</span>
                                  	<ul class="nested">
                                  		<li>Who are we & What we do?</li>
                                  		<li>Our team - team members</li>
                                  	</ul>
                                  </li>
                                </ul>
                              </li>
                              <li><span class="caret">Account stuff</span>
                                <ul class="nested">
                                  <li><span class="caret">Sign In/Up</span>
                                  	<ul class="nested">
                                  		<li><span class="caret">Sign In</span>
                                  			<ul class="nested">
                                  				<li>Username field</li>
                                  				<li>Password field</li>
                                  				<li>Button to submit the info (on click)</li>
                                          <li>Sign Up Button -> will switch to sign up part (on click)</li>
                                  			</ul>
                                  		</li>
                                  		<li><span class="caret">Sign up</span>
                                  			<ul class="nested">
                                  				<li>Email field</li>
                                  				<li>Username field</li>
                                  				<li>Password field</li>
                                  				<li>Button to submit the info (on click)</li>
                                          <li>Sign In Button -> will switch to sign in part (on click)</li>

                                  			</ul>
                                  		</li>
                                      <li>Back Button -> will return the user back on main page</li>

                                  	</ul>
                                  </li>

                                  <li><span class="caret">Profile page</span>
                                  	<ul class="nested">
                                  		<li><span class="caret">Account shape containing the info:</span>
                                  			<ol class="nested">
                                  				<li>Profile photo</li>
                                  				<li>Username</li>
                                  				<li>Email</li>
                                  				<li>Currency or number of posts</li>
                                  				<li>??? Recent orders/posts ???</li>
                                  				<li>??? Wishlist/Recently liked ???</li>
                                  			</ol>
                                  		</li>
                                  	</ul>
                                  </li>

                                </ul>

						</li>
						<li>
							<h3 id="hf">Header/Footer</h3>
							<ul id="myUL">

                              <li><span class="caret">Header</span>
                                <ul class="nested">
                                	<li>*On click these redirect to the according page*</li>
                                  <li>Logo (to the left) -> redirects to main on click</li>
                                  <li><span class="caret">Navigation zone (oriented to the right)</span>
                                  	<ul class="nested">
                                  		<li>*On click these redirect to the according page*</li>
                                  		<li>Main</li>
                                  		<li>Products</li>
                                  		<li>About us</li>
                                  		<li>Account</li>
                                  	</ul>
                                  </li>
                                </ul>

                              </li>
                              <li><span class="caret">Footer</span>
                                <ul class="nested">
                                  <li>Documentation section</li>
                                  <li>Random Links</li>
                                  <li>Random links</li>
                                  <li><span class="caret">Contact us</span>
                                  <ul class="nested">
                                  <li>Social media Button links - Redirect on click </li>
                                  <li>Adress</li>
                                  <li>Phone number</li>
                                  </ul>
                                  </li>
                              </ul>
                             </li>

                            </ul>
						</li>
						<li>
							<h3 id="elements">Elements</h3>
							<p>Here are some elements used</p>
							<ul id="myUL">

                              <li><span class="caret">LOGO</span>
                                <ul class="nested">
                                	<li>
                                		<div id="logo">
						                    <h1><a href="index.html">MyStamp</a></h1>
					                    </div>
                                	</li>
                                </ul>
                              </li>
                              <li><span class="caret">Contact Buttons</span>
                                <ul class="nested">
                                	<li>
                                		<section class="widget contact last">
                                        <ul>
                                            <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
                                            <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
                                            <li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
                                            <li><a href="#" class="icon brands fa-tiktok"><span class="label">Tiktok</span></a></li>
                                            <li><a href="#" class="icon brands fa-pinterest"><span class="label">Pinterest</span></a></li>
                                            <li><a href="#" class="icon brands fa-telegram"><span class="label">Telegram</span></a></li>
                                            <li><a href="#" class="icon brands fa-viber"><span class="label">Viber</span></a></li>
                                            <li><a href="#" class="icon brands fa-linkedin"><span class="label">LinkedIn</span></a></li>
                                            <li><a href="#" class="icon brands fa-amazon"><span class="label">Amazon</span></a></li>
                                            <li><a href="#" class="icon brands fa-google"><span class="label">Google</span></a></li>
                                            <li><a href="#" class="icon brands fa-yahoo"><span class="label">Yahoo!</span></a></li>
                                            <li><a href="#" class="icon brands fa-ebay"><span class="label">Ebay</span></a></li>
                                        </ul>
                                    </section>
                                	</li>
                                </ul>
                              </li>
                              <li><span class="caret">Product box</span>
                                <ul class="nested">
                                	<li>
                                		<div id="features-wrapper">
				                        <div class="container">
				                    	<div class="row">
					                	<div class="col-4 col-12-medium">
										<section class="box feature">
										<a href="product_page.html?id=0" class="image featured"><img src="images/pic01.jpg" alt="" /></a>
										<div class="inner">
										<header>
											<h2>Name</h2>
											<p>Seller</p>
										</header>
										<p>Description</p>
										</div>
										</section>
										</div></div></div></div>
                                	</li>
                                </ul>
                            </li>
                               <li><span class="caret">Filter</span>
                                <ul class="nested">
                                	<li>
                                		
<div id="features-wrapper">
				<header id="header" class="container">
					<nav id="nav">
                    <form>
						<ul>
                       <li>
						    <select name="Country" style=" font-weight: bold">
								<option value="" disabled="" selected="">Country</option>
								<option value="Lorem ipsum dolor">Lorem ipsum dolor</option>
								<option value="Lorem ipsum dolor">Lorem ipsum dolor</option>
								<option value="Lorem ipsum dolor">Lorem ipsum dolor</option>
							</select>
						</li>
                        <li>
							<select name="Theme" style=" font-weight: bold" >
								<option value="" disabled="" selected="">Theme</option>
								<option value="Lorem ipsum dolor">Lorem ipsum dolor</option>
								<option value="Lorem ipsum dolor">Lorem ipsum dolor</option>
								<option value="Lorem ipsum dolor">Lorem ipsum dolor</option>
							</select>
						</li>
                        <li>
							<select name="Color" style=" font-weight: bold">
								<option value="" disabled="" selected="">Color</option>
								<option value="Monochrome">Monochrome</option>
								<option value="Multicolor">Multicolor</option>
							</select>
						</li>
                        <li>
							<select name="From Year" style=" font-weight: bold">
								<option value="" disabled="" selected="">From Year</option>
								<option value="1800">1800</option>
								<option value="1900">1900</option>
								<option value="2000">2000</option>
							</select>
						</li>
						</ul>
            </form>
					</nav>
				</header>
			</div>

    </li>                         
    </ul>
       </li>
         <li><span class="caret">LOGO for window label</span>
                                <ul class="nested">
                                  <li>
                                    <img src="images/2022-04-16 17_39_42-Canva.jpg" width="500" height="500">
                                  </li>
                                    </ul>
                                  </li>
     </ul>             
				</div>

          <div class="container">
          <h2 id="task">Team Members</h2>


          
          <ul id="TreeTM">

                              <p><li><span class="caret"> <b> Pavlovschi Catalin </b> </span>
                                <ul class="nested">
                                  <li><p>LOREM IPSUM ...</p></li>
                                </ul>
                              </li></p>
          </ul>
                               
          </div>



                  <div class="container">
                    <p></p>
                  <h2 id="bib">Bibliography</h2>
                  <p>
                    <a href="https://www.w3schools.com">W3schools</a><br>
                    <a href="https://developer.mozilla.org/en-US/docs/Web">mdm web docs_</a><br>
                    <a href="https://way2tutorial.com">Way2Tutorial</a><br>
                    <a href="https://w3c.github.io/scholarly-html/">Scholarly HTML Template</a>
                    <a href="https://libguides.usc.edu/writingguide/academicwriting">USC LIbraries - Research Guides</a>
                    

                  </p>
                  
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


        <!-- Scripts-->
        <script src="assets/js/scholarly.js"></script>
        <script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/jquery.dropotron.min.js"></script>
		<script src="assets/js/browser.min.js"></script>
		<script src="assets/js/breakpoints.min.js"></script>
		<script src="assets/js/util.js"></script>
		<script src="assets/js/main.js"></script>
</body>
</html>