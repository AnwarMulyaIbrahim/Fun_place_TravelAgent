<?php
include'../database.php';
$db = new database();
$id = $_GET['id'];
$login = $db->tampil_data($id);

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>data login</title>
	<link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="shorcut icon" href="#">
	<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
	<style>
		
		a{
			margin-left: 35%;
		}
		input{
			margin-left: 35%;
			width: 25%;
  			padding: 12px 20px;
  			box-sizing: border-box;
  			border: 2px solid #ccc;
  			border-radius: 4px;
  			border-radius: 20px;
  			background: none;
  			cursor: pointer;
		}
		label{
			margin-left: 40%;
			font-family: serif;
			font-size: 20px;
		}
		h3{
			margin-left: 38%;
			
			margin-bottom: 2%; 

		}
		input[type="submit"]:hover {
 			background-color: green;
		}
	</style>
</head>
<body>
<div class="card">
	<form method="POST" action="../proses.php?">
	<h3>Edit Data Login User</h3>
	<!-- <label>id:</label><br> -->
	<input type="hidden" name="id" value="<?php echo "$login[id]" ?>"><p></p>
	<label>Name:</label><br>
	<input type="text" name="name" value="<?php echo "$login[name]" ?>"><p></p>
	<label>email:</label><br>
	<input type="text" name="email" value="<?php echo "$login[email]" ?>"><p></p>
	<label>Username:</label><br>
	<input type="text" name="username" value="<?php echo "$login[username]" ?>"><p></p>
	<label>Password:</label><br>
	<input type="text" name="password" value="<?php echo "$login[password]" ?>"><p></p>
	<input class=" btn btn-primary btn-lg" type="submit" name="edit" value="Update Data"><p></p>
	<a href="home.php" class="w-25 btn btn-danger btn-lg">Cancel</a>

	</form>
</div>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="form-validation.js"></script>
</body>
</html>