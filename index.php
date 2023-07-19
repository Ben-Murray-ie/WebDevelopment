<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Denmark Street Guitars</title>
	
	<!--Server Side Include for fetch script, accesses values from database, formatted as multidimensional array. Full description in .php file.-->
	<?php include 'php/fetch.php';?>
	
	<style>
	/*Align card text to center*/
	
	.card {
		text-align:center;
	}

	/*Background colour for body, linear gradient*/
	
	body {
	  background-image: linear-gradient(#9AB1D6, #044EC4);
	}
	</style>

  </head>
  
	<body>
	
		<!-- Logo -->
		<div class="container">
			<div class="row">
				<div class="col-4"></div>
					<div class="col-4">
						<!--Logo image with class attribute for formatting-->
						<img class="w-100" src="images/Logo/LOGO2.png" alt="DenmarkStreetGuitars">
					</div>
					
				<!-- Login-->
				<div class="col-2">
						<!--Class attributes added for positioning-->
						<div class="d-flex h-100 justify-content-center align-items-center text-center">
							<!--Text displayed when login procedure is completed. loginSuccess id is used to reference this element (for visibility check) in shopping.js-->
							<h3 style="visibility: hidden" id="loginSuccess">Login Successful!</h3>
							<!--Button to open login modal, with loginPopupButton id for reference in login.js-->
							<button type="button" class="btn btn-primary btn-lg" id="loginPopupButton" data-bs-toggle="modal" data-bs-target="#loginModal">
							  Login
							</button>
						</div>
								<!-- Login Modal -->
								<!--Code block taken from: https://getbootstrap.com/docs/5.0/components/modal/-->
					<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog">
						<div class="modal-content">
						  <div class="modal-header">
							<h5 class="modal-title">Customer Login:</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						  </div>
							  <div class="modal-body">
							  <!--Form for user credentials input-->
							  <form id="loginForm">
								<p>Please input your details:</p>
									<div class="form-group mb-3">
										<label> Name: </label>
										<!--Name field must be populated (required) as per brief item 2. id for reference in login.js-->
										<input type="text" id="username" class="form-control" placeholder ="Please enter your name" required>
									</div>
									 <div class="mb-3">
										<label for="exampleInputEmail1" class="form-label">Email address:</label>
										<!--Email field must be populated (required), with valid email address, as per brief item 2-->
										<input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Please enter your email address" required>
									  </div>
									<div class="mb-3">
										<label for="exampleInputPassword1" class="form-label">Password:</label>
										<!--Password field must be populated (required) as per brief item 2. id for reference in login.js-->
										<input type="password" class="form-control" id="password" placeholder ="Please enter your password" required>
									</div>
									<!--Login button runs loginCheck() function, see login.js-->
									<a href="#" class="btn btn-primary" id="loginCheckButton" data-bs-dismiss="modal" onclick="loginCheck()">Login</a>
								</form>
						  </div>
						</div>
					  </div>
					</div>
				</div>
				
					<!--Basket-->
					<div class="col-2">
						<!--Class attributes added for positioning-->
						<div class="d-flex h-100 justify-content-center align-items-center text-center">
							<!--Hidden text added to force alignment with login button.-->
							<h3 style="visibility:hidden">align<br>align</h3>
							<!--Basket button to open basket modal, includes loginButton id to be referenced in shopping.js-->
							<button type="button" class="btn btn-primary btn-lg" id="loginButton" data-bs-toggle="modal" data-bs-target="#basketModal">
							  Basket
							</button>
						</div>
					</div>
								<!-- Basket Modal -->
								<!--Code block taken from: https://getbootstrap.com/docs/5.0/components/modal/-->
					<div class="modal fade" id="basketModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog modal-lg">
						<div class="modal-content" style="text-align:center">
						  <div class="modal-header">
							<h5 class="modal-title">Basket:</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						  </div>
							  <div class="modal-body">
								<p>Please review your order:</p>
										<!--Table added to hold items for purchase, id checkoutTable for reference in shopping.js-->
										<table class="table" id="checkoutTable">
											<thead>
												<tr>
												  <th scope="col">Product</th>
												  <th scope="col">Price</th>
												  <th scope="col"></th>
												</tr>
											  </thead>
											  <tbody>
										  </tbody>
										</table>
									</div>
									<!--Modal body div with class attributes for formatting-->
									<div class="modal-body d-flex h-100 justify-content-center align-items-center">
									<!--Divs containing "Total = €" and actual value for total, which is generated in shopping.js-->
									<div style="height:25px; width:100px"><strong>Total = € </strong></div>
									<!--Could not share div with Total = € because value is dynamically generated and updated, id referenced in shopping.js-->
									<div id="totalCost" style="align-text:left"></div><br><br>
									</div>
									<!--Purchase button, onclick event triggers checkOut() function in shopping.js-->
									<a href="#" class="btn btn-primary" id="purchase" data-bs-dismiss="modal" onclick="checkOut()">Purchase</a>
							 </div>
						</div>
					</div>
				</div>
			</div>
		</div>


			<!-- Welcome -->
			<!--Carousel containing images related to store and products. No practical functions, just informative/cosmetic.-->
			<!--Code block taken from: https://getbootstrap.com/docs/5.1/components/carousel/-->
			<div class="container-fluid" style="background-color:white">
			<div class="container justify-content-center align-items-center">
					<div id="carousel_top" class="carousel slide" data-bs-ride="carousel">
						  <div class="carousel-inner">
							<div class="carousel-item active">
							  <img src="images/Banner/1.jpg" alt="Welcome" class="d-block w-100">
							</div>
							<div class="carousel-item">
							  <img src="images/Banner/2.jpg" alt="FreeShipping" class="d-block w-100">
							</div>
							<div class="carousel-item">
							  <img src="images/Banner/3.jpg" alt="SaleNowOn" class="d-block w-100">
							</div>
						  </div>
					</div>
				</div>
			</div>

			<!-- Product Row 1 -->
			<div class="container" style="height:1000px">
			
				<div class="row">

				<!--Product card containing carousel of images, values fetched from database (name, description, price) and button to add item to basket. All product cards contain same formatting/functionality.-->
				<!--Code block taken from: https://getbootstrap.com/docs/5.1/components/carousel/-->				
				<div class="col-12 col-lg-4" style="padding-top: 50px;padding-bottom: 50px;">
					<div class="card bg-light text-dark">
						<div id="carousel_1" class="carousel slide" data-bs-ride="carousel">

						  <!-- Image carousel -->
						  <div class="carousel-inner">
							<div class="carousel-item active">
							  <img src="images/Ibanez/1.jpg" alt="Ibanez1" class="d-block w-100">
							</div>
							<div class="carousel-item">
							  <img src="images/Ibanez/2.jpg" alt="Ibanez2" class="d-block w-100">
							</div>
							<div class="carousel-item">
							  <img src="images/Ibanez/3.jpg" alt="Ibanez3" class="d-block w-100">
							</div>
						  </div>

						  <!-- Carousel controls -->
						  <button class="carousel-control-prev" type="button" data-bs-target="#carousel_1" data-bs-slide="prev">
							<span class="carousel-control-prev-icon"></span>
						  </button>
						  <button class="carousel-control-next" type="button" data-bs-target="#carousel_1" data-bs-slide="next">
							<span class="carousel-control-next-icon"></span>
						  </button>
						</div>
						
						<!--Card body contains values fetched from database, as per description in fetch.php-->
						<div class="card-body">
							<!--Fetches item name from database, id is referenced in addProd() function of shopping.js-->
							<h5 class="card-title" id="productTitle1"><?php echo $Rows[0][1] ?></h5>
							<!--Fetches item description from database-->
							<p class="card-text"><?php echo $Rows[0][2] ?></p>
							<!--Fetches item name from database, id is referenced in addProd() function of shopping.js-->
							€ <span class="card-text" id="productPrice1"><?php echo $Rows[0][3] ?></span><br><br>
							<!--Add to Basket button, onclick event triggers addProd() function in shopping.js-->
						  <a href="#" class="btn btn-primary" onclick="addProd('1')">Add to Basket</a>
						</div>
					</div>	
				</div>

					
						<div class="col-lg-4"></div>
						
				<!--Product card containing carousel of images, values fetched from database (name, description, price) and button to add item to basket.-->
				<!--Code block taken from: https://getbootstrap.com/docs/5.1/components/carousel/-->
				<div class="col-12 col-lg-4" style="padding-top: 50px;padding-bottom: 50px;">
					<div class="card bg-light text-dark">
						<div id="carousel_2" class="carousel slide" data-bs-ride="carousel">
						
						  <!-- Image carousel -->
						  <div class="carousel-inner">
							<div class="carousel-item active">
							  <img src="images/Epiphone/SG/1.jpg" alt="Epi1" class="d-block w-100">
							</div>
							<div class="carousel-item">
							  <img src="images/Epiphone/SG/2.jpg" alt="Epi2" class="d-block w-100">
							</div>
							<div class="carousel-item">
							  <img src="images/Epiphone/SG/3.jpg" alt="Epi3" class="d-block w-100">
							</div>
						  </div>

						  <!-- Carousel controls -->
						  <button class="carousel-control-prev" type="button" data-bs-target="#carousel_2" data-bs-slide="prev">
							<span class="carousel-control-prev-icon"></span>
						  </button>
						  <button class="carousel-control-next" type="button" data-bs-target="#carousel_2" data-bs-slide="next">
							<span class="carousel-control-next-icon"></span>
						  </button>
						</div>
						
						<!--Card body contains values fetched from database, as per description in fetch.php-->
						<div class="card-body">
								<!--Fetches item name from database, id is referenced in addProd() function of shopping.js-->
								<h5 class="card-title" id="productTitle2"><?php echo $Rows[1][1] ?></h5>
								<!--Fetches item description from database-->
								<p class="card-text"><?php echo $Rows[1][2] ?></p>
								<!--Fetches item name from database, id is referenced in addProd() function of shopping.js-->
								€ <span class="card-text" id="productPrice2"><?php echo $Rows[1][3] ?></span><br><br>
								<!--Add to Basket button, onclick event triggers addProd() function in shopping.js-->
								<a href="#" class="btn btn-primary" onclick="addProd('2')">Add to Basket</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		
			<!-- Product Row 2 -->
			<div class="container" style="height:1000px">
			
				<div class="row">

				<!--Product card containing carousel of images, values fetched from database (name, description, price) and button to add item to basket.-->
				<!--Code block taken from: https://getbootstrap.com/docs/5.1/components/carousel/-->
				<div class="col-12 col-lg-4" style="padding-top: 50px;padding-bottom: 50px;">
					<div class="card bg-light text-dark">
						<div id="carousel_3" class="carousel slide" data-bs-ride="carousel">

						  <!-- Image carousel -->
						  <div class="carousel-inner">
							<div class="carousel-item active">
							  <img src="images/Fender/Stratocaster/1.jpg" alt="Strat1" class="d-block w-100">
							</div>
							<div class="carousel-item">
							  <img src="images/Fender/Stratocaster/2.jpg" alt="Strat2" class="d-block w-100">
							</div>
							<div class="carousel-item">
							  <img src="images/Fender/Stratocaster/3.jpg" alt="Strat3" class="d-block w-100">
							</div>
						  </div>

						  <!-- Carousel controls -->
						  <button class="carousel-control-prev" type="button" data-bs-target="#carousel_3" data-bs-slide="prev">
							<span class="carousel-control-prev-icon"></span>
						  </button>
						  <button class="carousel-control-next" type="button" data-bs-target="#carousel_3" data-bs-slide="next">
							<span class="carousel-control-next-icon"></span>
						  </button>
						</div>
						
						<!--Card body contains values fetched from database, as per description in fetch.php-->
						<div class="card-body">
							<!--Fetches item name from database, id is referenced in addProd() function of shopping.js-->
							<h5 class="card-title" id="productTitle3"><?php echo $Rows[2][1] ?></h5>
							<!--Fetches item description from database-->
							<p class="card-text"><?php echo $Rows[2][2] ?></p>
							<!--Fetches item name from database, id is referenced in addProd() function of shopping.js-->
							€ <span class="card-text" id="productPrice3"><?php echo $Rows[2][3] ?></span><br><br>
							<!--Add to Basket button, onclick event triggers addProd() function in shopping.js-->
							<a href="#" class="btn btn-primary" onclick="addProd('3')">Add to Basket</a>
						</div>
						
					</div>
				</div>
					
			<div class="col-lg-4"></div>
				
				<!--Product card containing carousel of images, values fetched from database (name, description, price) and button to add item to basket.-->
				<!--Code block taken from: https://getbootstrap.com/docs/5.1/components/carousel/-->
				<div class="col-12 col-lg-4" style="padding-top: 50px;padding-bottom: 50px;">
					<div class="card bg-light text-dark">
						<div id="carousel_4" class="carousel slide" data-bs-ride="carousel">
						
						  <!-- Image carousel -->
						  <div class="carousel-inner">
							<div class="carousel-item active">
							  <img src="images/Fender/Telecaster/1.jpg" alt="Tele1" class="d-block w-100">
							</div>
							<div class="carousel-item">
							  <img src="images/Fender/Telecaster/2.jpg" alt="Tele2" class="d-block w-100">
							</div>
							<div class="carousel-item">
							  <img src="images/Fender/Telecaster/3.jpg" alt="Tele3" class="d-block w-100">
							</div>
						  </div>

						  <!-- Carousel controls -->
						  <button class="carousel-control-prev" type="button" data-bs-target="#carousel_4" data-bs-slide="prev">
							<span class="carousel-control-prev-icon"></span>
						  </button>
						  <button class="carousel-control-next" type="button" data-bs-target="#carousel_4" data-bs-slide="next">
							<span class="carousel-control-next-icon"></span>
						  </button>
						</div>
						
						<!--Card body contains values fetched from database, as per description in fetch.php-->
						<div class="card-body">
							<!--Fetches item name from database, id is referenced in addProd() function of shopping.js-->
							<h5 class="card-title" id="productTitle4"><?php echo $Rows[3][1] ?></h5>
							<!--Fetches item description from database-->
							<p class="card-text"><?php echo $Rows[3][2] ?></p>
							<!--Fetches item name from database, id is referenced in addProd() function of shopping.js-->
							€ <span class="card-text" id="productPrice4"><?php echo $Rows[3][3] ?></span><br><br>
							<!--Add to Basket button, onclick event triggers addProd() function in shopping.js-->
							<a href="#" class="btn btn-primary" onclick="addProd('4')">Add to Basket</a>
						</div>
					</div>
				</div>
			</div>
		</div>

			<!-- Product Row 3 -->
			<div class="container" style="height:1000px">
			
				<div class="row">
				
				<!--Product card containing carousel of images, values fetched from database (name, description, price) and button to add item to basket.-->
				<!--Code block taken from: https://getbootstrap.com/docs/5.1/components/carousel/-->
				<div class="col-12 col-lg-4" style="padding-top: 50px;padding-bottom: 50px;">
					<div class="card bg-light text-dark">
						<div id="carousel_5" class="carousel slide" data-bs-ride="carousel">

						  <!-- Image carousel -->
						  <div class="carousel-inner">
							<div class="carousel-item active">
							  <img src="images/Gibson/Les_Paul/1.jpg" alt="LesPaul1" class="d-block w-100">
							</div>
							<div class="carousel-item">
							  <img src="images/Gibson/Les_Paul/2.jpg" alt="LesPaul2" class="d-block w-100">
							</div>
							<div class="carousel-item">
							  <img src="images/Gibson/Les_Paul/3.jpg" alt="LesPaul3" class="d-block w-100">
							</div>
						  </div>

						  <!-- Carousel controls -->
						  <button class="carousel-control-prev" type="button" data-bs-target="#carousel_5" data-bs-slide="prev">
							<span class="carousel-control-prev-icon"></span>
						  </button>
						  <button class="carousel-control-next" type="button" data-bs-target="#carousel_5" data-bs-slide="next">
							<span class="carousel-control-next-icon"></span>
						  </button>
						</div>
						
						<!--Card body contains values fetched from database, as per description in fetch.php-->
						<div class="card-body">
							<!--Fetches item name from database, id is referenced in addProd() function of shopping.js-->
							<h5 class="card-title" id="productTitle5"><?php echo $Rows[4][1] ?></h5>
							<!--Fetches item description from database-->
							<p class="card-text"><?php echo $Rows[4][2] ?></p>
							<!--Fetches item name from database, id is referenced in addProd() function of shopping.js-->
							€ <span class="card-text" id="productPrice5"><?php echo $Rows[4][3] ?></span><br><br>
							<!--Add to Basket button, onclick event triggers addProd() function in shopping.js-->
							<a href="#" class="btn btn-primary" onclick="addProd('5')">Add to Basket</a>
						</div>	
					</div>
				</div>
						
						<div class="col-lg-4"></div>
					
				<!--Product card containing carousel of images, values fetched from database (name, description, price) and button to add item to basket.-->
				<!--Code block taken from: https://getbootstrap.com/docs/5.1/components/carousel/-->
				<div class="col-12 col-lg-4" style="padding-top: 50px;padding-bottom: 50px;">
					<div class="card bg-light text-dark">
						<div id="carousel_6" class="carousel slide" data-bs-ride="carousel">
						
						  <!-- Image carousel -->
						  <div class="carousel-inner">
							<div class="carousel-item active">
							  <img src="images/Gibson/Explorer/1.jpg" alt="Explorer1" class="d-block w-100">
							</div>
							<div class="carousel-item">
							  <img src="images/Gibson/Explorer/2.jpg" alt="Explorer2" class="d-block w-100">
							</div>
							<div class="carousel-item">
							  <img src="images/Gibson/Explorer/3.jpg" alt="Explorer3" class="d-block w-100">
							</div>
						  </div>

						  <!-- Carousel controls -->
						  <button class="carousel-control-prev" type="button" data-bs-target="#carousel_6" data-bs-slide="prev">
							<span class="carousel-control-prev-icon"></span>
						  </button>
						  <button class="carousel-control-next" type="button" data-bs-target="#carousel_6" data-bs-slide="next">
							<span class="carousel-control-next-icon"></span>
						  </button>
						</div>
						
						<!--Card body contains values fetched from database, as per description in fetch.php-->
						<div class="card-body">
							<!--Fetches item name from database, id is referenced in addProd() function of shopping.js-->
							<h5 class="card-title" id="productTitle6"><?php echo $Rows[5][1] ?></h5>
							<!--Fetches item description from database-->
							<p class="card-text"><?php echo $Rows[5][2] ?></p>
							<!--Fetches item name from database, id is referenced in addProd() function of shopping.js-->
							€ <span class="card-text" id="productPrice6"><?php echo $Rows[5][3] ?></span><br><br>
							<!--Add to Basket button, onclick event triggers addProd() function in shopping.js-->
							<a href="#" class="btn btn-primary" onclick="addProd('6')">Add to Basket</a>
						</div>
					</div>
				</div>		
			</div>
		</div>

			<!-- Product Row 4 -->
			<div class="container" style="height:1000px">
			
				<div class="row">
				
				<!--Product card containing carousel of images, values fetched from database (name, description, price) and button to add item to basket.-->
				<!--Code block taken from: https://getbootstrap.com/docs/5.1/components/carousel/-->
				<div class="col-12 col-lg-4" style="padding-top: 50px;padding-bottom: 50px;">
					<div class="card bg-light text-dark">
						<div id="carousel_7" class="carousel slide" data-bs-ride="carousel">

						  <!-- Image carousel -->
						  <div class="carousel-inner">
							<div class="carousel-item active">
							  <img src="images/Jackson/Dinky/1.jpg" alt="LesPaul1" class="d-block w-100">
							</div>
							<div class="carousel-item">
							  <img src="images/Jackson/Dinky/2.jpg" alt="LesPaul2" class="d-block w-100">
							</div>
							<div class="carousel-item">
							  <img src="images/Jackson/Dinky/3.jpg" alt="LesPaul3" class="d-block w-100">
							</div>
						  </div>

						  <!-- Carousel controls -->
						  <button class="carousel-control-prev" type="button" data-bs-target="#carousel_7" data-bs-slide="prev">
							<span class="carousel-control-prev-icon"></span>
						  </button>
						  <button class="carousel-control-next" type="button" data-bs-target="#carousel_7" data-bs-slide="next">
							<span class="carousel-control-next-icon"></span>
						  </button>
						</div>
						
						<!--Card body contains values fetched from database, as per description in fetch.php-->
						<div class="card-body">
							<!--Fetches item name from database, id is referenced in addProd() function of shopping.js-->
							<h5 class="card-title" id="productTitle7"><?php echo $Rows[6][1] ?></h5>
							<!--Fetches item description from database-->
							<p class="card-text"><?php echo $Rows[6][2] ?></p>
							<!--Fetches item name from database, id is referenced in addProd() function of shopping.js-->
							€ <span class="card-text" id="productPrice7"><?php echo $Rows[6][3] ?></span><br><br>
							<!--Add to Basket button, onclick event triggers addProd() function in shopping.js-->
							<a href="#" class="btn btn-primary" onclick="addProd('7')">Add to Basket</a>
						</div>	
					</div>
				</div>
						
						<div class="col-lg-4"></div>
						
				<!--Product card containing carousel of images, values fetched from database (name, description, price) and button to add item to basket.-->
				<!--Code block taken from: https://getbootstrap.com/docs/5.1/components/carousel/-->	
				<div class="col-12 col-lg-4" style="padding-top: 50px;padding-bottom: 50px;">
					<div class="card bg-light text-dark">
						<div id="carousel_8" class="carousel slide" data-bs-ride="carousel">
						
						  <!-- Image carousel -->
						  <div class="carousel-inner">
							<div class="carousel-item active">
							  <img src="images/Jackson/Rhoads/1.jpg" alt="Rhoads1" class="d-block w-100">
							</div>
							<div class="carousel-item">
							  <img src="images/Jackson/Rhoads/2.jpg" alt="Rhoads2" class="d-block w-100">
							</div>
							<div class="carousel-item">
							  <img src="images/Jackson/Rhoads/3.jpg" alt="Rhoads3" class="d-block w-100">
							</div>
						  </div>

						  <!-- Carousel controls -->
						  <button class="carousel-control-prev" type="button" data-bs-target="#carousel_8" data-bs-slide="prev">
							<span class="carousel-control-prev-icon"></span>
						  </button>
						  <button class="carousel-control-next" type="button" data-bs-target="#carousel_8" data-bs-slide="next">
							<span class="carousel-control-next-icon"></span>
						  </button>
						</div>
						
						<!--Card body contains values fetched from database, as per description in fetch.php-->
						<div class="card-body">
							<!--Fetches item name from database, id is referenced in addProd() function of shopping.js-->
							<h5 class="card-title" id="productTitle8"><?php echo $Rows[7][1] ?></h5>
							<!--Fetches item description from database-->
							<p class="card-text"><?php echo $Rows[7][2] ?></p>
							<!--Fetches item name from database, id is referenced in addProd() function of shopping.js-->
							€ <span class="card-text" id="productPrice8"><?php echo $Rows[7][3] ?></span><br><br>
							<!--Add to Basket button, onclick event triggers addProd() function in shopping.js-->
							<a href="#" class="btn btn-primary" onclick="addProd('8')">Add to Basket</a>
						</div>
					</div>
				</div>	
			</div>
		</div>

			<!-- Product Row 5 -->
			<div class="container" style="height:1000px">
			
				<div class="row">
								
				<!--Product card containing carousel of images, values fetched from database (name, description, price) and button to add item to basket.-->
				<!--Code block taken from: https://getbootstrap.com/docs/5.1/components/carousel/-->				
				<div class="col-12 col-lg-4" style="padding-top: 50px;padding-bottom: 50px;">
					<div class="card bg-light text-dark">
						<div id="carousel_9" class="carousel slide" data-bs-ride="carousel">

						  <!-- Image carousel -->
						  <div class="carousel-inner">
							<div class="carousel-item active">
							  <img src="images/PRS/McCarty/1.jpg" alt="McC1" class="d-block w-100">
							</div>
							<div class="carousel-item">
							  <img src="images/PRS/McCarty/2.jpg" alt="McC2" class="d-block w-100">
							</div>
							<div class="carousel-item">
							  <img src="images/PRS/McCarty/3.jpg" alt="McC3" class="d-block w-100">
							</div>
						  </div>

						  <!-- Carousel controls -->
						  <button class="carousel-control-prev" type="button" data-bs-target="#carousel_9" data-bs-slide="prev">
							<span class="carousel-control-prev-icon"></span>
						  </button>
						  <button class="carousel-control-next" type="button" data-bs-target="#carousel_9" data-bs-slide="next">
							<span class="carousel-control-next-icon"></span>
						  </button>
						</div>
						
						<!--Card body contains values fetched from database, as per description in fetch.php-->
						<div class="card-body">
							<!--Fetches item name from database, id is referenced in addProd() function of shopping.js-->
							<h5 class="card-title" id="productTitle9"><?php echo $Rows[8][1] ?></h5>
							<!--Fetches item description from database-->
							<p class="card-text"><?php echo $Rows[8][2] ?></p>
							<!--Fetches item name from database, id is referenced in addProd() function of shopping.js-->
							€ <span class="card-text" id="productPrice9"><?php echo $Rows[8][3] ?></span><br><br>
							<!--Add to Basket button, onclick event triggers addProd() function in shopping.js-->
							<a href="#" class="btn btn-primary" onclick="addProd('9')">Add to Basket</a>
						</div>	
					</div>
				</div>
						
						<div class="col-lg-4"></div>
						
				<!--Product card containing carousel of images, values fetched from database (name, description, price) and button to add item to basket.-->
				<!--Code block taken from: https://getbootstrap.com/docs/5.1/components/carousel/-->		
				<div class="col-12 col-lg-4" style="padding-top: 50px;padding-bottom: 50px;">
					<div class="card bg-light text-dark">
						<div id="carousel_10" class="carousel slide" data-bs-ride="carousel">
						
						  <!-- Image carousel -->
						  <div class="carousel-inner">
							<div class="carousel-item active">
							  <img src="images/PRS/SE_Custom/1.jpg" alt="SE_Custom1" class="d-block w-100">
							</div>
							<div class="carousel-item">
							  <img src="images/PRS/SE_Custom/2.jpg" alt="SE_Custom2" class="d-block w-100">
							</div>
							<div class="carousel-item">
							  <img src="images/PRS/SE_Custom/3.jpg" alt="SE_Custom3" class="d-block w-100">
							</div>
						  </div>

						  <!-- Carousel controls -->
						  <button class="carousel-control-prev" type="button" data-bs-target="#carousel_10" data-bs-slide="prev">
							<span class="carousel-control-prev-icon"></span>
						  </button>
						  <button class="carousel-control-next" type="button" data-bs-target="#carousel_10" data-bs-slide="next">
							<span class="carousel-control-next-icon"></span>
						  </button>
						</div>
						
						<!--Card body contains values fetched from database, as per description in fetch.php-->
						<div class="card-body">
							<!--Fetches item name from database, id is referenced in addProd() function of shopping.js-->
							<h5 class="card-title" id="productTitle10"><?php echo $Rows[9][1] ?></h5>
							<!--Fetches item description from database-->
							<p class="card-text"><?php echo $Rows[9][2] ?></p>
							<!--Fetches item name from database, id is referenced in addProd() function of shopping.js-->
							€ <span class="card-text" id="productPrice10"><?php echo $Rows[9][3] ?></span><br><br>
							<!--Add to Basket button, onclick event triggers addProd() function in shopping.js-->
							<a href="#" class="btn btn-primary" onclick="addProd('10')">Add to Basket</a>
						</div>
					</div>
				</div>
			</div>
		</div>
			
	<footer>
	<!--Bootstrap CDN scripts-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
	<!--Connect to shopping.js file for basket and purchase related functions-->
	<script type="text/javascript" src="js/shopping.js"></script>
	<!--Connect to login.js for user login related functions-->
	<script type="text/javascript" src="js/login.js"></script>
	</footer>
  </body>
</html>