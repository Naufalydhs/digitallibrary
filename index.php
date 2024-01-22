<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Halaman Login</title>
	<link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
</head>
	<div class="kartu">
		<form action="cek_login.php" method="post">
			<h1>Login Digital Library</h1>
			<div class="input_box">
				<input type="text" name="user" placeholder="Username" required>
			</div>
			<div class="input_box">
				<input type="password" name="pass" placeholder="password"required>
			</div>
			<button type="submit" class="tbl">Login</button>
			<div class="daftar">
				<p>Belum Punya Akun ? <a href="register.php">Daftar Disini</a></p>
			</div>
		</form>
		
	</div>
<body>

</body>
</html>