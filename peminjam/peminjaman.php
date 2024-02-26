<?php 
session_start();

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Halaman Peminjaman</title>
	<link rel="stylesheet" href="../bootstrap-5.3.2-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="peminjaman.php">
      <img src="https://smkswadhipa2.sch.id/wp-content/uploads/2023/08/LOGO-SWD.png" width="50">
  	  </a>
  	  <div class="namaj">
  	  	<?= $_SESSION['nama_lengkap']?>
  	  </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <li class="nav-item navbar-nav ms-auto mb-2 mb-lg-0">
            <a class="btn btn-outline-light me-2" href="peminjaman.php?url=koleksi_buku" role="button">Koleksi Pribadi</a>
            <a class="btn btn-outline-light me-2" href="peminjaman.php?url=pinjam" role="button">Peminjaman</a>
            <a class="btn btn-outline-light " href="../logout.php" role="button">LogOut</a>
          </li>
      </div>
    </div>
  </nav>
  <section class="p-4" id="main-content">
          <div class="card mt-5">
            <div class="card-body">
            <?php 
              $file = @$_GET['url'];
              if (empty($file)){
                echo"<h4>Anda Login Sebagai PEMINJAM</h4>";
                  echo "<p>
                     Selamat Datang ! ini adalah website Digital Library SMK Swadhipa 2 Natar, aplikasi ini akan mempermudah sekolah dalam mengelola perpustakaan sekolah secara digital.
                    </p>";
              }else {
                include $file.'.php';
              }
             ?>
            </div>
          </div>
        </section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js" integrity="sha512-GWzVrcGlo0TxTRvz9ttioyYJ+Wwk9Ck0G81D+eO63BaqHaJ3YZX9wuqjwgfcV/MrB2PhaVX9DkYVhbFpStnqpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>
</html>