<?php 
	session_start();
	include 'koneksi.php';

	$username =$_POST['user'];
	$password = $_POST['pass'];

	$admin = mysqli_query ($koneksi, "SELECT * FROM user WHERE username = '$username' and password='$password'");
	$log = mysqli_num_rows($admin);
	$r = mysqli_fetch_array ($admin);

	if ($log > 0){
		session_start();
		$_SESSION['id_user']=$r['id_user'];
		$_SESSION['nama_lengkap']= $r['nama_lengkap'];
		$_SESSION['username'] = $username;
		$_SESSION['password'] = $password;
		$_SESSION['level']=$r['level'];
		if ($r['level']=='admin'){
			echo " <script> location.href='administrator/admin.php'</script>";
		}elseif ($r['level']=='petugas'){
			echo " <script> location.href='administrator/petugas.php'</script>";
		}elseif ($r['level']=='peminjam'){
			echo " <script> location.href='peminjam/peminjaman.php'</script>";
		}else{
		header("location:index.php?login gagal");
		}
	}
	else{
		header("location:index.php?login gagal");
	}
 ?>