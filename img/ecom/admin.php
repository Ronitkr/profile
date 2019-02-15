<!DOCTYPE html>
<html>
<head>
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
<header class="w-100 text-primary">
	<div class="container">
		<div class="row">
			<table class="table table-hover table-dark">
			  <thead>
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">User Id</th>
			      <th scope="col">Email</th>
			      <th scope="col">password</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <th scope="row">1</th>
			      <td>#</td>
			      <td><?php echo $_REQUEST['user_email'];?> </td>
			      <td><?php 
			      if ($_POST['user_password'] == "mynameis") {
			      	echo "your password is correct";
			      }else{
			      	echo "your password is incorrect";
			      }
			       ?></td>
			    </tr>
			  </tbody>
			</table>

		</div>
		
	</div>
</header>
</html>
