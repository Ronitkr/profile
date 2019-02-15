<?php 

$con = mysqli_connect('127.0.0.1', 'root', '', 'img_upload');

$id = $_GET['del'];

$q = "delete from project_gallery WHERE id = '$id'";

$run = mysqli_query($con, $q);

if ($run) {
 	header('location:image.php');
 }
 else{
 echo "Delete failed please try again";
 }

 ?>