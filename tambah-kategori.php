<?php 
	session_start();
	include 'db.php';
	// if($_SESSION['status_login'] != true){
	// 	echo '<script>window.location="login.php"</script>';

	// }

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dress.co</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200&display=swap" rel="stylesheet">
</head>
<body>

	<!--header-->
	<header>
		<div class="countainer">
			<h1><a href="dashboard.php"> FashionStore.RK</h1>
				<ul>
					<li><a href="dashboard.php">Dashboard</a></li>
					<li><a href="profil.php">Profil</a></li>
					<li><a href="data-kategori.php">Data kategori</a></li>
					<li><a href="data-produk.php">Data Produk</a></li>
					<li><a href="keluar.php">Keluar</a></li>
				</ul>
			</div>
	</header>
	<!--- content -->
	<div class="section">
		<div class="countainer">
			<h3>Tambah Data Kategori</h3>
			<div class="box">
				<form action="" method="POST">
					<input type="text" name="nama" placeholder="Nama Kategori" class="input-control" required>
					<input type="submit" name="submit" value="Submit" class="btn">
				</form>
					<?php 
						if(isset($_POST['submit'])){

							$nama = ucwords($_POST['nama']);

							$insert = mysqli_query($conn, "INSERT INTO tb_category VALUES (
												null,
												'".$nama."') ");
							if($insert){
								echo '<script>alert("Tambah Data Berhasil")</script>';
								echo '<script>window.location="data-kategori.php"</script>';
							}else {
								echo 'gagal'.mysli_error($conn);
							}
						}

					 ?>

			</div>
		</div>
	</div>

	<!-- foother --->
	<footer>
		<div class="countainer">
			<small>Copyright &copy; 2023 -  FashionStore.RK</small>
		</div>
	</footer>
</body>
</html>

