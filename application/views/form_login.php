<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css'>
    <title>Document</title>
    <style><?php include "style.css" ?></style>
</head>
<body>
<h2>Selamat Datang</h2>
<div class="container" id="container">
	<div class="form-container sign-up-container">
	</div>
	<div class="form-container sign-in-container">
		<form action="<?php echo base_url()."index.php/page_1/aksi_login"; ?>" method="POST">
			<h1>Masuk</h1><br>
			<span>menggunakan akun member mu yang telah terdaftar</span>
			<input type="text" placeholder="Username" name="username" />
			<input type="password" placeholder="Password" name="password" /><br>
			<button>Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-right">
				<h1>Belum Terdaftar?</h1>
				<p>Anda harus terdaftar sebagai member untuk bisa mengakses situs PollutInfo</p>
				<button class="ghost" id="signUp"><a href="<?php echo base_url()."index.php/page_1/daftar/"; ?>">Sign Up</a></button>
			</div>
		</div>
	</div>
</div>  
<script  src="script.js"></script>
</body>
</html>