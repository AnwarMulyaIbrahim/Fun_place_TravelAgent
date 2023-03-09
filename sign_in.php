<!DOCTYPE html>
<html>
<head>
	<title>Sign-in!</title>
	<link rel="stylesheet" type="text/css" href="signin.css">
	<link rel="shorcut icon" href="asset/user-plus.svg">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
	<div class="card">
	<div class="input">
		<form method="POST" action="proses.php">
			<h1>Register!<i class="fas fa-sign-in-alt"></i></h1>
			<label><i class="fas fa-user"></i>Full Name:</label><br>
			<input style="color: white;" type="txt" name="name" placeholder="Your Full Name" required autofocus autocomplete="off"><p></p>
			<label><i class="fas fa-envelope"></i>Email:</label><br>
			<input style="color: white;" type="text" name="email" placeholder="user@email.com" required autofocus autocomplete="off"><p></p>
			<label><i class="fas fa-user"></i>Username:</label><br>
			<input style="color: white;" type="txt" name="username" placeholder="Make Username" required autofocus autocomplete="off"><p></p>
			<label><i class="fas fa-lock"></i>Password:</label><br>
			<input style="color: white;" type="password" name="password" placeholder="Make Password" required autofocus autocomplete="off"><p></p>
			<label><i class="fas fa-lock"></i>Password:</label><br>
			<input style="color: white;" type="password" name="password2" placeholder="Confirm Password" required autofocus autocomplete="off"><p></p>
			<input style="color: white;" type="submit" name="regis" value="Register">
			<div class="foother">
				<label>Need Help? Contact Us</label><a href="https://www.instagram.com/war_0690/"><i class="fab fa-instagram"></i></a>
			</div>
		</form>	
	</div>
	</div>
</body>
</html>