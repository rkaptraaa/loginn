<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
	<div class="contaner mt7">
		<div class="row justify-content-center">
	<br/>
	<!-- cek pesan notifikasi -->
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>
	<br/>
	<br/>
	<div class="form-container">
	<h2>Login</h2>
	<form method="post" action="cek_login.php">
		<div class="form-group mb3">
			<label for="">username</label>
			<input type="text" name="username" placeholder="Masukkan username" class="form-control">
		</div>
		<div class="form-group">
			<label for="">password</label>
			<input type="password" name="password" placeholder="Masukkan password" class="form-control">
		</div>
			<button type="submit" value="login" class="btn btn-warning">login</button>		
	</form>
</div>
</div>
</div>
</body>
</html>