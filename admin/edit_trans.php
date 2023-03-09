<?php
include'../database.php';
$db = new database();
$id = $_GET['id'];
$trans = $db->tampil_data_trans($id);

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
		input{

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
			margin-left: 10%;
			font-family: serif;
			font-size: 20px;
		}
		h3{
			
			margin-bottom: 2%; 

		}
		input[type="submit"]:hover {
 			background-color: green;
		}
		select{
			width: 25%;
  			padding: 12px 20px;
  			box-sizing: border-box;
  			border: 2px solid #ccc;
  			border-radius: 4px;
  			border-radius: 20px;
  			background: none;
  			cursor: pointer;
		}
	</style>
</head>
<body>
<div>
	<form method="POST" action="../proses.php?">
	<h3>Edit Data Login User</h3>
	<!-- <label>id:</label><br> -->
	<input type="hidden" name="id" value="<?php echo "$trans[id]" ?>"><p></p>
	<label>Front Name:</label><br>
	<input type="text" name="name_f" value="<?php echo "$trans[name_f]" ?>"><p></p>
	<label>Last Name:</label><br>
	<input type="text" name="name_l" value="<?php echo "$trans[name_l]" ?>"><p></p>
	<label>email:</label><br>
	<input type="text" name="email" value="<?php echo "$trans[email]" ?>"><p></p>
	<label>Phone Number:</label><br>
	<input type="number" name="phone" value="<?php echo "$trans[phone]" ?>"><p></p>
	<label>Person:</label><br>
	<input type="number" name="person" value="<?php echo "$trans[person]" ?>"><p></p>
	<label>PaymentMethod:</label><br>
	<select name="payment" >
		<option value="Credit Card">Credit Card</option>
		<option value="Debit Card">Debit Card</option>
		<option value="PayPal">PayPal</option>
	</select><p></p>
	<label>City:</label><br>
	<select name="price">
		<option value="500">Tokyo</option>
		<option value="1000">Antartic</option>
		<option value="700">Hawaii</option>
	</select><p></p>
	<input class=" btn btn-primary btn-lg" type="submit" name="change" value="Update Data">
	<a href="tables.php" class="w-25 btn btn-danger btn-lg">Cancel</a>

	</form>
</div>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="form-validation.js"></script>
</body>
</html>