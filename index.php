<!DOCTYPE html>
<html lang="en">
<head>
	<title>Luas segitiga</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-85 p-b-20">
				<form action="index.php" method="post">
					<span class="login100-form-title p-b-70">
						Luas Segitiga
					</span>
					<span class="login100-form-avatar">
						<img src="images/trisula.jpg" alt="AVATAR">
					</span>

					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Masukan Alas">
						<input class="input100" type="text" name="alas">
						<span class="focus-input100" data-placeholder="Alas"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-50" data-validate="Masukan Tinggi">
						<input class="input100" type="text" name="tinggi">
						<span class="focus-input100" data-placeholder="Tinggi"></span>
					</div>

					
<br>
<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="submit" value ="submit">
							Hitung
						</button>
					</div>
					<br>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="submit" value ="submit">
							</form>
				<?php
if (isset($_POST['submit'])){
$alas = $_POST['alas'];
$tinggi = $_POST['tinggi'];
$luas_segitiga = 1/2 * $alas * $tinggi ;// Menghitung luas segitiga
echo "p Luas segitiga dengan alas : $alas, dan tinggi $tinggi <br>";
echo "yaitu $luas_segitiga" ;
}

?>
						</button>
					</div>

			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>