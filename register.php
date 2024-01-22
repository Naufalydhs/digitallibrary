<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Halaman Register</title>
	<link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
</head>
	<div class="kartu">
		<form action="input_register.php" method="post">
			<h1>Register Digital Library</h1>
			<div class="input_box">
				<input type="text" name="user" placeholder="Username" required>
			</div>
			<div class="input_box">
				<input type="password" name="pass" placeholder="password"required>
			</div>
			<div class="input_box">
				<input type="text" name="nama" placeholder="Nama Lengkap"required>
			</div>
			<div class="input_box">
				<input type="email" name="email" placeholder="Email"required>
			</div>
			<div class="input_box">
				<input type="text" name="alamat" placeholder="Alamat"required>
			</div>
			<button type="submit" class="tbl">Daftar</button>
			<button type="reset" class="tblr btn btn-outline-warning">Reset</button>
			<div class="daftar">
				<p>Sudah Punya Akun ? <a href="index.php">Login Disini</a></p>
			</div>
		</form>
		
	</div>
<body>

</body>
</html>