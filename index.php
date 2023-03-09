<?php 
	session_start();
	if(isset($_SESSION["admin"])){
		header("location: admin/home.php");
	}
	if(isset($_SESSION["login"])){
		header("location: user/home.php");
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Fun Pleaces</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="shorcut icon" href="asset/gift.svg">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
  <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
		xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100%" height="100%" viewBox="0 0 1600 900" preserveAspectRatio="xMidYMax slice">
		<defs>
			<linearGradient id="bg">
				<stop offset="0%" style="stop-color:rgba(130, 158, 249, 0.06)"></stop>
				<stop offset="50%" style="stop-color:rgba(76, 190, 255, 0.6)"></stop>
				<stop offset="100%" style="stop-color:rgba(115, 209, 72, 0.2)"></stop>
			</linearGradient>
			<path id="wave" fill="url(#bg)" d="M-363.852,502.589c0,0,236.988-41.997,505.475,0
	s371.981,38.998,575.971,0s293.985-39.278,505.474,5.859s493.475,48.368,716.963-4.995v560.106H-363.852V502.589z" />
		</defs>
		<g>
			<use xlink:href='#wave' opacity=".3">
				<animateTransform
          attributeName="transform"
          attributeType="XML"
          type="translate"
          dur="10s"
          calcMode="spline"
          values="270 230; -334 180; 270 230"
          keyTimes="0; .5; 1"
          keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0"
          repeatCount="indefinite" />
			</use>
			<use xlink:href='#wave' opacity=".6">
				<animateTransform
          attributeName="transform"
          attributeType="XML"
          type="translate"
          dur="8s"
          calcMode="spline"
          values="-270 230;243 220;-270 230"
          keyTimes="0; .6; 1"
          keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0"
          repeatCount="indefinite" />
			</use>
			<use xlink:href='#wave' opacty=".9">
				<animateTransform
          attributeName="transform"
          attributeType="XML"
          type="translate"
          dur="6s"
          calcMode="spline"
          values="0 230;-140 200;0 230"
          keyTimes="0; .4; 1"
          keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0"
          repeatCount="indefinite" />
			</use>
		</g>
	</svg>
	<div class="card">
	<div class="input">
		<form method="POST" action="proses.php">
			<h1>Login<i class="fas fa-sign-in-alt"></i></h1>
			<label><i class="fas fa-user"></i>Username:</label><br>
			<input style="color: white;" type="txt" name="username" placeholder="Username" required autofocus autocomplete="off"><p></p>
			<label><i class="fas fa-lock"></i>Password:</label><br>
			<input style="color: white;" type="password" name="password" placeholder="Password" required><p></p><center>
			<input class="button" type="submit" value="Login" name="submit">
			</center>
			<div class="foother">
				<label>Don't Have Accont?</label><a href="sign_in.php">Sign-in</a>
			</div>
		</form>	
	</div>
	</div>
</body>
</html>