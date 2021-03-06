<?php 

$con = mysqli_connect('127.0.0.1', 'root', '', 'img_upload');

$id = $_GET['edit'];

$q = "select * from project_gallery where id = '$id'";

$run = mysqli_query($con, $q);

$result = mysqli_fetch_array($run);

$count = mysqli_num_rows($run);

$image = $result['image'];

$title = $result['title'];
$url = $result['url'];
$category = $result['category']; 

 ?>

 <!DOCTYPE html>
<html>
<head>
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
	<div class="top-menu">
		<div class="container">
			<div class="d-flex pt-3">
				<div class="logo text-white">
					<h2 class="shadow"><strong>admin</strong></h2>
				</div>
				<div class="admin-setting d-flex d-inline">
					<a href="image.php" class="mr-5 text-white" style="text-decoration: none; font-weight: bold; ">Data</a>
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
		</div>
	</div>
	<section class="upload mt-5 pt-5">
		<div class="container">
			<div class="row">
				<div class="col-4"></div>
				<div class="col-4 upload-form align-content-center">
					<span class="file-icon text-info"><i class="fas fa-cloud-upload-alt"></i></span><br>
					<div class="form">
						<form action="" method="post" enctype="multipart/form-data">
							<input type="text" name="title" class="form-control mb-2" placeholder="<?php echo $title; ?>">
							<input type="url" name="url" class="form-control mb-2" placeholder="<?php echo $url; ?>">
							<input type="text" name="category" class="form-control mb-2" placeholder="<?php echo $category; ?>">
							<input type="file" name="file" id="real-file" hidden="hidden" />
							<button type="button" id="custom-button" class="btn btn-danger mb-2">CHOOSE A FILE</button>
							<span id="custom-text"><?php echo $image; ?></span>
							<input type="submit" value="Update" name="submit" class="btn-success">
							
						</form>
					</div>
				</div>
				<div class="col-4"></div>
			</div>
		</div>
	</section>

	<?php 
		if (isset($_POST['submit'])) {
			$title = $_POST['title'];
			$url = $_POST['url'];
			$category = $_POST['category'];
			
			$file_name = $_FILES['file']['name'];
			$file_temp = $_FILES['file']['tmp_name'];
			$file_size = $_FILES['file']['size'];
			$file_type = $_FILES['file']['type'];

			$file_ext = pathinfo($file_name, PATHINFO_EXTENSION);

			if (!empty($file_name)) {
				if ($file_size <= 500000) {
					if ($file_ext == 'png' || $file_ext == 'jpg' || $file_ext == 'gif' || $file_ext == 'jpeg') {
						
						//upload to folder
						$upload_file = "upload/".$file_name;

						$upload = move_uploaded_file($file_temp, $upload_file);

						if ($upload){
							$msg = "File image uploaded";

							$q1 = "update project_gallery set image = '$upload_file', title= '$title', url='$url', category= '$category' where id = '$id'";

							$run = mysqli_query($con, $q1);

							if ($run) {
								header('location:image.php');
							}else{
								echo $msg .= "and also uploaded to database successfully";
							}							

						}

					}else {
						echo "only png, jpg, gif and jpeg file are allowed to upload";
				}
				}else{
					echo "file size is too large";
				}
			}else{
				echo "Please select an image to upload";
			}

			
		}
	 ?>

	<script>
		const realFileBtn = document.getElementById("real-file");
		const customBtn = document.getElementById("custom-button");
		const customTxt = document.getElementById("custom-text");

		customBtn.addEventListener("click", function() {
		  realFileBtn.click();
		});

		realFileBtn.addEventListener("change", function() {
		  if (realFileBtn.value) {
		    customTxt.innerHTML = realFileBtn.value.match(
		      /[\/\\]([\w\d\s\.\-\(\)]+)$/
		    )[1];
		  } else {
		    customTxt.innerHTML = "No file chosen, yet.";
		  }
		});

	</script>		
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
	<script src="js/custom-js.js"></script>
</body>
</html>
