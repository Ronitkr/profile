<header id="head">
		<!-- top search bar -->
		<div class="top-header">
			<div class="container">
				<div class="row">	
					<div class="col-md-2 mt-2">
						<a href="index.html"><h1 class="text-white">F Mart</h1></a>
					</div>
					<div class="col-md-8">
					<!-- Search form -->
						<form class="form-inline active-cyan-4 mt-3">
  							<input class="form-control w-100" type="text" placeholder="Search" aria-label="Search">
						</form>
					</div>
					<div class="col-md-2 mt-2">
						<a href="shopping-cart.html"><i class="fas fa-cart-arrow-down px-2 text-white"><sup><span class="badge badge-danger ml-2">10</span></sup></i></a>
						<a href="#" data-toggle="modal" data-target="#modalLRForm">
							<i class="fas fa-sign-in-alt pr-3 text-white"></i></a>
						<img src="../ecom/img/offer.png">
					</div>									
				</div>
			</div>
		</div>
		
		<!--Modal: Login / Register Form-->
		<div class="modal fade shadow-lg" id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog cascading-modal" role="document">
		    <!--Content-->
		    <div class="modal-content">

		      <!--Modal cascading tabs-->
		      <div class="modal-c-tabs">

		        <!-- Nav tabs -->
		        <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
		          <li class="nav-item">
		            <a class="nav-link active" data-toggle="tab" href="#panel7" role="tab"><i class="fa fa-user mr-1"></i>
		              Login</a>
		          </li>
		          <li class="nav-item">
		            <a class="nav-link" data-toggle="tab" href="#panel8" role="tab"><i class="fa fa-user-plus mr-1"></i>
		              Register</a>
		          </li>
		        </ul>

		        <!-- Tab panels -->
		        <div class="tab-content">
		          <!--Panel 7-->
		          <div class="tab-pane fade in show active" id="panel7" role="tabpanel">

		            <!--Body-->
		            <div class="modal-body mb-1">
		            	<form action="admin.php" method="post">
			              <label data-error="wrong" data-success="right" for="modalLRInput10">Your email</label>
			              <div class="md-form form-sm">
			                <i class="fa fa-envelope prefix"></i>
			                <input type="email" id="modalLRInput10" name="user_email" class="form-control form-control-sm" placeholder="email">
			              </div>
						  <label data-error="wrong" data-success="right" for="modalLRInput10">Password</label>
			              <div class="md-form form-sm">
			                <i class="fa fa-lock prefix"></i>
			                <input type="password" id="modalLRInput11" name="user_password" class="form-control form-control-sm" placeholder="password">
			              </div>
			              <div class="text-center">
			                <button class="btn btn-info" type="submit">Log in <i class="fas fa-sign-in-alt"></i></button>
			              </div>
			            </form>  
		            </div>
		            <!--Footer-->
		            <div class="modal-footer">
		              <div class="options mt-1">
		                <p>Not a member? <a href="#" class="blue-text">Sign Up</a></p>
		                <p>Forgot <a href="#" class="blue-text">Password?</a></p>
		              </div>
		              <!-- <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button> -->
		            </div>

		          </div>
		          <!--/.Panel 7-->

		          <!--Panel 8-->
		          <div class="tab-pane fade" id="panel8" role="tabpanel">

		            <!--Body-->
		            <div class="modal-body">
		              <label data-error="wrong" data-success="right" for="modalLRInput12">Your email</label>
		              <div class="md-form form-sm">
		                <i class="fa fa-envelope prefix"></i>
		                <input type="email" id="modalLRInput12" name="new_user_email" class="form-control form-control-sm validate">
		              </div>
					  <label data-error="wrong" data-success="right" for="modalLRInput13">Your password</label>
		              <div class="md-form form-sm">
		                <i class="fa fa-lock prefix"></i>
		                <input type="password" id="modalLRInput13" name="new_user_password" class="form-control form-control-sm validate">
		              </div>
					  <label data-error="wrong" data-success="right" for="modalLRInput14">Repeat password</label>
		              <div class="md-form form-sm">
		                <i class="fa fa-lock prefix"></i>
		                <input type="password" id="modalLRInput14" name="new_repeat_user_password" class="form-control form-control-sm validate">
		              </div>

		              <div class="text-center form-sm mt-2">
		                <button class="btn btn-info">Sign up <i class="fas fa-sign-in-alt ml-1"></i></button>
		              </div>

		            </div>
		            <!--Footer-->
		            <div class="modal-footer">
		              <div class="options">
		                <p>Already have an account? <a href="#" class="blue-text">Log In</a></p>
		              </div>
		              <!-- <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button> -->
		            </div>
		          </div>
		          <!--/.Panel 8-->
		        </div>

		      </div>
		    </div>
		    <!--/.Content-->
		  </div>
		</div>
<!--Modal: Login / Register Form-->

		<!-- category section -->
		<nav class="navbar navbar-expand-lg navbar-light bg-light" id="">
  			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    		<span class="navbar-toggler-icon"></span>
  			</button>
  			<div class="container">
  				<div class="collapse navbar-collapse" id="navbarNav">
    				<ul class="navbar-nav">
      					<li class="nav-item active">
        					<a class="nav-link" href="product-categories.html">Womens Apperel <span class="sr-only">(current)</span></a>
      					</li>
      					<li class="nav-item">
        					<a class="nav-link" href="product-categories.html">Mens Apperel</a>
      					</li>
      					<li class="nav-item">
        					<a class="nav-link" href="product-categories.html">Kids Apperel</a>
      					</li>
      					<li class="nav-item">
        					<a class="nav-link" href="product-categories.html">Footwear</a>
      					</li>
      					<li class="nav-item">
        					<a class="nav-link" href="product-categories.html">Home & Living</a>
      					</li>
      					<li class="nav-item">
        					<a class="nav-link" href="product-categories.html">Health & Beauty</a>
      					</li>
      					<li class="nav-item">
        					<a class="nav-link" href="product-categories.html">Baby & Toys</a>
      					</li>
      					<li class="nav-item">
        					<a class="nav-link" href="product-categories.html">Sports & Travels</a>
      					</li>
    				</ul>
  				</div>
  			</div>	
		</nav>
</header>

