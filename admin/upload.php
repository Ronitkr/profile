<?php

$con = mysqli_connect('127.0.0.1', 'root', '', 'img_upload');  

if (isset($_POST['uploading'])) {
	$title = $_POST['title'];
	$url = $_POST['url'];
	$category = $_POST['category'];

	// file uploading

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

					$q = "INSERT into project_gallery (id, image, title, url, category) VALUES ('', '$upload_file', '$title', '$url', '$category')";

					$run = mysqli_query($con, $q) or die("Can not insert into databases".$mysli_error($con));

					if ($run) {
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

}else {
	echo "button is not set";
}

?>