<!DOCTYPE html>
<html>
<head>
	<title>Membuat Login Dengan PHP dan MySQLi - WWW.MALASNGODING.COM</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div class="container">
		<div class="row justify-content-center">
	<br>
	<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:index.php?pesan=belum_login");
	}
	?>
 
	<h4>Selamat datang, <?php echo $_SESSION['username']; ?>! anda telah login.</h4>
 <br><br>
	<a href="logout.php" class="btn btn-danger">LOGOUT</a>
 
		</div>
	</div>
 
</body>
</html>