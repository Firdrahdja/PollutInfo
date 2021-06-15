<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css'>
    <title>Document</title>
    <style><?php include "style.css" ?></style>
</head>
<body>
<h2>Daftar Sebagai Member</h2>
<div class="container" id="container">
	<div class="form-container sign-up-container">
	</div>
	<div class="form-container sign-in-container">
		<form action="<?php echo base_url()."index.php/page_1/aksi_daftar"; ?>" method="POST">
			<h1>Daftar</h1>
            <a href="#"></a>
			<input type="text" placeholder="Username" name="username" />
			<input type="password" placeholder="Password" name="password" />
			<a href="#"></a>
			<button>Sign Up</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-right">
				<h1>Sudah Terdaftar ?</h1>
				<p>Mari kita langsung masuk menggunakan akun member mu</p>
				<button class="ghost" id="signUp"><a href="<?php echo base_url()."index.php/page_1/"; ?>">Sign In</a></button>
			</div>
		</div>
	</div>
</div>  
<script src="script.js"></script>
</body>
</html>