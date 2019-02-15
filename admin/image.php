<?php
session_start();
$user = $_SESSION['user'];
if (!$user) {
    header('location:login.php');   
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Image</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

	
	<!-- Required custom css -->
        <link rel="stylesheet" type="text/css" href="../admin/css/custom-style.css">
	
	<!-- jquery plugin -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- font awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">



</head>
<body >
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
                                
                                <a class="nav-link text-success font-weight-bold" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <img src="../img/usr.png" alt="Contact Person"> <?php echo $user; ?> 
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: #1a1e27;">
                                  <a class="dropdown-item" href="logout.php" >Logout</a>
                        
                                </div>
                            </li>
                        </ul>           
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="container mt-5">
    <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
    <thead class="bg-info text-white text-center">
        <tr>
        <th class="th-sm">Image
        </th>
        <th class="th-sm">Website Name
        </th>
        <th class="th-sm">Category
        </th>
        <th class="th-sm" colspan="2">Action
        </th>
        </tr>
    </thead>
    <tbody>
        
<?php 

    $con = mysqli_connect('127.0.0.1', 'root', '', 'img_upload');

    $q = "select * FROM project_gallery";

    $run = mysqli_query($con, $q) or die("Connection Failed".mysql_error($con));

    while ($result = mysqli_fetch_array($run)) {
        
    

 ?>
        <tr class="text-center">
            <td class="pt-2" width="100px" height="50px"><img src="<?php echo $result['image'] ?>" alt="" width="100px" height="50px" class="text-center"></td>
            <td class="pt-3 text-white"><?php echo $result['title'] ?></a></td>
            <td class="pt-3 text-white"><?php echo $result['category'] ?></a></td>
            <td class="pt-2"><strong><a class="btn btn-danger w-100" href="delete.php?del=<?php echo $result['id']; ?>" >Delete</a></strong></td>
            <td class="pt-2"><strong><a class="btn btn-success w-100" href="edit.php?edit=<?php echo $result['id']; ?>" >Edit</a></strong></td>
        </tr>
 <?php } ?>       
        
        
    </tbody>
    </table>

</div>


<!-- script -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
	<script src="js/custom-js.js"></script>
</body>
</html>