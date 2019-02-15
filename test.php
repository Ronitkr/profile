<?php 
if (isset($_POST['uploadd'])) {
	echo "successful";
}
else{
	echo "no";
}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<!-- Required meta tag -->
		<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">	
		
		<!--Required bootstrap css -->

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		
		<!-- Required custom css -->
		<link rel="stylesheet" type="text/css" href="../admin/css/custom-style.css">

		<!--Fontawsome-->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="d-flex pt-3">
				<div class="logo text-white">
					<h2 class="shadow p-1"><strong>admin</strong></h2>
				</div>
				<div class="admin-setting d-flex d-inline">
					<div class="menu-item">
						<a href=""><i class="fas fa-envelope" ></i>
						<sup><span class="count bg-info">12</span></sup>
						</a>
					</div>	
					<div class="chip menu-item ml-3">
  						<ul>
  							<li class="nav-item dropdown">
						        <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						          <img src="../img/usr.png" alt="Contact Person"> Lara Lim
						        </a>
						        <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: #1a1e27;">
						          <a class="dropdown-item" href="#" >Logout</a>
						
						    	</div>
							</li>
  						</ul>			
					</div>
				</div>
			</div>
			<section class="upload">
		<div class="container">
			<div class="row">
				<div class="col-3"></div>
				<div class="col-6 ml-5">
					<span class="file-icon text-info"><i class="fas fa-cloud-upload-alt"></i></span><br>
					<form action="" method="post" class="form-inline" enctype="multipart/form-data">
						<input type="text" name="title" placeholder="title" class="form-control">
						<input type="url" name="url"placeholder="url" class="form-control">
						<label class="custom-upload">upload file<input type="file" name="myFile" class="form-control"></label>
						<input type="submit" name="uploadd" value="submit" class="btn btn-info mt-2">
					</form>
					
				</div>
				<div class="col-3"></div>
			</div>
		</div>
	</section>
	</div>

<!-- <form action="" method="post" enctype="multipart/form-data">
	<input type="file" name= "file">
	<input type="submit" name="uplaod" value="submit">
</form> -->

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
	<script src="js/custom-js.js"></script>
</body>
</html>
 