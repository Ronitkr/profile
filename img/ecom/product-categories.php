<!DOCTYPE html>
<html>
<head>
	<title>Product Categories</title>
	<!-- Required meta tag -->
		<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">	
		
		<!--Required bootstrap css -->

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		
		<!-- Required custom css -->
		<link rel="stylesheet" type="text/css" href="../ecom/css/style.css">

		<!--Fontawsome-->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>
<body>
	<?php 
		include 'header.php';
	?>
	<!-- filter -->
	<div class="categories-product-page">
			<div class="container-fluid">
				<div class="row pr-3" >
					<div class="col-md-3">
						<ul class="list-group">
						  <li class="list-group-item list-group-item-action active d-flex justify-content-between align-items-center">
						   <strong>Gender</strong>
						  </li>
						  <li class="list-group-item d-flex justify-content-between align-items-center">
						    <form action="">
						    	<input type="checkbox"> Boys
						    </form>
						    <span class="badge badge-primary badge-pill">2</span>
						  </li>
						  <li class="list-group-item d-flex justify-content-between align-items-center">
						    <form action="">
						    	<input type="checkbox"> Girls
						    </form>
						    <span class="badge badge-primary badge-pill">8</span>
						  </li>
						  <li class="list-group-item d-flex justify-content-between align-items-center">
						    <form action="">
						    	<input type="checkbox"> Mens
						    </form>
						    <span class="badge badge-primary badge-pill">10</span>
						  </li>
						  <li class="list-group-item d-flex justify-content-between align-items-center">
						    <form action="">
						    	<input type="checkbox"> Womens
						    </form>
						    <span class="badge badge-primary badge-pill">5</span>
						  </li>			  
						</ul>
					
						<ul class="list-group mt-3">
						  <li class="list-group-item list-group-item-action active d-flex justify-content-between align-items-center">
						   <strong>All Brands</strong>
						  </li>
						  <li class="list-group-item d-flex justify-content-between align-items-center">
						    <form action="">
						    	<input type="checkbox"> Adidas
						    </form>
						    
						    <span class="badge badge-primary badge-pill">2</span>
						  </li>
						  <li class="list-group-item d-flex justify-content-between align-items-center">
						    <form action="">
						    	<input type="checkbox"> Nike
						    </form>
						    <span class="badge badge-primary badge-pill">8</span>
						  </li>
						  <li class="list-group-item d-flex justify-content-between align-items-center">
						    <form action="">
						    	<input type="checkbox"> Zara
						    </form>
						    <span class="badge badge-primary badge-pill">10</span>
						  </li>
						  <li class="list-group-item d-flex justify-content-between align-items-center">
						    <form action="">
						    	<input type="checkbox"> Mango
						    </form>
						    <span class="badge badge-primary badge-pill">5</span>
						  </li>
						  <li class="list-group-item d-flex justify-content-between align-items-center">
						    <a href="#">view more >></a>
						  </li>			  
						</ul>
				
						<ul class="list-group mt-3">
						  <li class="list-group-item list-group-item-action active d-flex justify-content-between align-items-center">
						   <strong>Price</strong>
						  </li>
						  <li class="list-group-item d-flex justify-content-between align-items-center">
						   <form action="">
						    	<input type="checkbox"> 0 - Rs 599
						    </form> 
						  </li>
						  <li class="list-group-item d-flex justify-content-between align-items-center">
						    <form action="">
						    	<input type="checkbox"> Rs 599 - Rs 999
						    </form> 
						  </li>
						  <li class="list-group-item d-flex justify-content-between align-items-center">
						    <form action="">
						    	<input type="checkbox"> Rs 999 - Rs 1599
						    </form> 
						  </li>
						  <li class="list-group-item d-flex justify-content-between align-items-center">
						    <form action="">
						    	<input type="checkbox"> Rs 1599 - Rs 2199
						    </form> 
						  </li>
						  <li class="list-group-item d-flex justify-content-between align-items-center">
						    <form action="">
						    	<input type="checkbox"> Rs 2199 +
						    </form> 
						  </li>			  
						</ul>
					</div>
					<div class="col-md-9 product-list-item">
						<div class="row">
							<div class="col-md-3">
								<div class="card shadow bg-white">
									<img src="../ecom/img/d1.webp" alt="" class="card-img-top">
									<div class="card-body">
					    				<a href="product-page.html"><h6 class="card-title text-center">Puma s124</h6></a>
					    				<ul class="rating">
				    	        			<li>
				        	      				<i class="fa fa-star"></i>
				            				</li>
				            				<li>
				            					<i class="fa fa-star"></i>
				            				</li>
				          	 				<li>
				           						<i class="fa fa-star"></i>
				           					</li>
				           					<li>
				           						<i class="fa fa-star-half"></i>
				           					</li>
				           					<li>
				           						<i class="fa fa-star-o"></i>
				            				</li>
				          				</ul>
				    					<p class="card-text float-lg-left">Rs 1900 <sub><del>Rs 3000</del></sub></p>
			    					<a href="#"><i class="fas fa-cart-arrow-down float-lg-right"></i></a>   
			  						</div>
			  					</div>	
							</div>
							<div class="col-md-3">
								<div class="card shadow bg-white ">
									<img src="../ecom/img/d2.jpg" alt="" class="card-img-top">
									<div class="card-body">
					    				<a href="product-page.html"><h6 class="card-title text-center">Puma s124</h6></a>
					    				<ul class="rating">
				    	        			<li>
				        	      				<i class="fa fa-star"></i>
				            				</li>
				            				<li>
				            					<i class="fa fa-star"></i>
				            				</li>
				          	 				<li>
				           						<i class="fa fa-star"></i>
				           					</li>
				           					<li>
				           						<i class="fa fa-star-half"></i>
				           					</li>
				           					<li>
				           						<i class="fa fa-star-o"></i>
				            				</li>
				          				</ul>
				    					<p class="card-text float-lg-left">Rs 1900 <sub><del>Rs 3000</del></sub></p>
			    					<a href="#"><i class="fas fa-cart-arrow-down float-lg-right"></i></a>   
			  						</div>
			  					</div>	
							</div>
							<div class="col-md-3">
								<div class="card shadow bg-white ">
									<img src="../ecom/img/d3.jpg" alt="" class="card-img-top">
									<div class="card-body">
					    				<a href="product-page.html"><h6 class="card-title text-center">Puma s124</h6></a>
					    				<ul class="rating">
				    	        			<li>
				        	      				<i class="fa fa-star"></i>
				            				</li>
				            				<li>
				            					<i class="fa fa-star"></i>
				            				</li>
				          	 				<li>
				           						<i class="fa fa-star"></i>
				           					</li>
				           					<li>
				           						<i class="fa fa-star-half"></i>
				           					</li>
				           					<li>
				           						<i class="fa fa-star-o"></i>
				            				</li>
				          				</ul>
				    					<p class="card-text float-lg-left">Rs 1900 <sub><del>Rs 3000</del></sub></p>
			    					<a href="#"><i class="fas fa-cart-arrow-down float-lg-right"></i></a>   
			  						</div>
			  					</div>	
							</div>
							<div class="col-md-3">
								<div class="card shadow bg-white ">
									<img src="../ecom/img/d8.webp" alt="" class="card-img-top">
									<div class="card-body">
					    				<a href="product-page.html"><h6 class="card-title text-center">Puma s124</h6></a>
					    				<ul class="rating">
				    	        			<li>
				        	      				<i class="fa fa-star"></i>
				            				</li>
				            				<li>
				            					<i class="fa fa-star"></i>
				            				</li>
				          	 				<li>
				           						<i class="fa fa-star"></i>
				           					</li>
				           					<li>
				           						<i class="fa fa-star-half"></i>
				           					</li>
				           					<li>
				           						<i class="fa fa-star-o"></i>
				            				</li>
				          				</ul>
				    					<p class="card-text float-lg-left">Rs 1900 <sub><del>Rs 3000</del></sub></p>
			    					<a href="#"><i class="fas fa-cart-arrow-down float-lg-right"></i></a>   
			  						</div>
			  					</div>	
							</div>
							<div class="col-md-3 mt-3">
								<div class="card shadow bg-white ">
									<img src="../ecom/img/d8.webp" alt="" class="card-img-top">
									<div class="card-body">
					    				<a href="product-page.html"><h6 class="card-title text-center">Puma s124</h6></a>
					    				<ul class="rating">
				    	        			<li>
				        	      				<i class="fa fa-star"></i>
				            				</li>
				            				<li>
				            					<i class="fa fa-star"></i>
				            				</li>
				          	 				<li>
				           						<i class="fa fa-star"></i>
				           					</li>
				           					<li>
				           						<i class="fa fa-star-half"></i>
				           					</li>
				           					<li>
				           						<i class="fa fa-star-o"></i>
				            				</li>
				          				</ul>
				    					<p class="card-text float-lg-left">Rs 1900 <sub><del>Rs 3000</del></sub></p>
			    					<a href="#"><i class="fas fa-cart-arrow-down float-lg-right"></i></a>   
			  						</div>
			  					</div>	
							</div>
							<div class="col-md-3 mt-3">
								<div class="card shadow bg-white ">
									<img src="../ecom/img/d5.webp" alt="" class="card-img-top">
									<div class="card-body">
					    				<a href="product-page.html"><h6 class="card-title text-center">Puma s124</h6></a>
					    				<ul class="rating">
				    	        			<li>
				        	      				<i class="fa fa-star"></i>
				            				</li>
				            				<li>
				            					<i class="fa fa-star"></i>
				            				</li>
				          	 				<li>
				           						<i class="fa fa-star"></i>
				           					</li>
				           					<li>
				           						<i class="fa fa-star-half"></i>
				           					</li>
				           					<li>
				           						<i class="fa fa-star-o"></i>
				            				</li>
				          				</ul>
				    					<p class="card-text float-lg-left">Rs 1900 <sub><del>Rs 3000</del></sub></p>
			    					<a href="#"><i class="fas fa-cart-arrow-down float-lg-right"></i></a>   
			  						</div>
			  					</div>	
							</div>
							<div class="col-md-3 mt-3">
								<div class="card shadow bg-white ">
									<img src="../ecom/img/d4.webp" alt="" class="card-img-top">
									<div class="card-body">
					    				<a href="product-page.html"><h6 class="card-title text-center">Puma s124</h6></a>
					    				<ul class="rating">
				    	        			<li>
				        	      				<i class="fa fa-star"></i>
				            				</li>
				            				<li>
				            					<i class="fa fa-star"></i>
				            				</li>
				          	 				<li>
				           						<i class="fa fa-star"></i>
				           					</li>
				           					<li>
				           						<i class="fa fa-star-half"></i>
				           					</li>
				           					<li>
				           						<i class="fa fa-star-o"></i>
				            				</li>
				          				</ul>
				    					<p class="card-text float-lg-left">Rs 1900 <sub><del>Rs 3000</del></sub></p>
			    					<a href="#"><i class="fas fa-cart-arrow-down float-lg-right"></i></a>   
			  						</div>
			  					</div>	
							</div>
							<div class="col-md-3 mt-3">
								<div class="card shadow bg-white ">
									<img src="../ecom/img/d7.webp" alt="" class="card-img-top">
									<div class="card-body">
					    				<a href="product-page.html"><h6 class="card-title text-center">Puma s124</h6></a>
					    				<ul class="rating">
				    	        			<li>
				        	      				<i class="fa fa-star"></i>
				            				</li>
				            				<li>
				            					<i class="fa fa-star"></i>
				            				</li>
				          	 				<li>
				           						<i class="fa fa-star"></i>
				           					</li>
				           					<li>
				           						<i class="fa fa-star-half"></i>
				           					</li>
				           					<li>
				           						<i class="fa fa-star-o"></i>
				            				</li>
				          				</ul>
				    					<p class="card-text float-lg-left">Rs 1900 <sub><del>Rs 3000</del></sub></p>
			    					<a href="#"><i class="fas fa-cart-arrow-down float-lg-right"></i></a>   
			  						</div>
			  					</div>	
							</div>
							<div class="col-md-3 mt-3">
								<div class="card shadow bg-white ">
									<img src="../ecom/img/d1.webp" alt="" class="card-img-top">
									<div class="card-body">
					    				<a href="product-page.html"><h6 class="card-title text-center">Puma s124</h6></a>
					    				<ul class="rating">
				    	        			<li>
				        	      				<i class="fa fa-star"></i>
				            				</li>
				            				<li>
				            					<i class="fa fa-star"></i>
				            				</li>
				          	 				<li>
				           						<i class="fa fa-star"></i>
				           					</li>
				           					<li>
				           						<i class="fa fa-star-half"></i>
				           					</li>
				           					<li>
				           						<i class="fa fa-star-o"></i>
				            				</li>
				          				</ul>
				    					<p class="card-text float-lg-left">Rs 1900 <sub><del>Rs 3000</del></sub></p>
			    					<a href="#"><i class="fas fa-cart-arrow-down float-lg-right"></i></a>   
			  						</div>
			  					</div>	
							</div>
						</div>
					</div>
				</div>
			</div>				
	</div>	

	<?php 
		include 'footer.php';
	?>
</body>
</html>