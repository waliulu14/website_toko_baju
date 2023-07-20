<?php 
	session_start();
	include 'db.php';
	if($_SESSION['status_login'] != true){
		echo '<script>window.location="login.php"</script>';
	}

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
	<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
</head>
<body>

	<!--header-->
	<header>
		<div class="countainer">
			<h1><a href="dashboard.php"> FashionStore.RK</a></h1>
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
			<h3>Tambah Data Blog</h3>
			<div class="box">
				<form action="" method="POST" enctype="multipart/form-data">
					<input type="text" name="judul" class="input-control" placeholder="Judul" required>
					<textarea class="input-control" name="deskripsi" placeholder="Deskripsi" required></textarea>
					<input type="text" name="link" class="input-control" placeholder="Link" required>
					<input type="file" name="foto" class="input-control" required>
					<input type="submit" name="submit" value="Submit" class="btn">
				</form>
					<?php 
						if(isset($_POST['submit'])){
							$judul = $_POST['judul'];
							$deskripsi = $_POST['deskripsi'];
							$link = $_POST['link'];

							$filename = $_FILES['foto']['name'];
							$tmp_name = $_FILES['foto']['tmp_name'];

							$type1 = explode('.', $filename);
							$type2 = $type1[1];

							$newname = 'foto'.time().'.'.$type2;

							$type_diizinkan = array('jpg', 'jpeg', 'png', 'gif');

							if(!in_array($type2, $type_diizinkan)){
								echo '<script>alert("Format file tidak diizinkan")</script>';
							}else{
								move_uploaded_file($tmp_name, './foto/'.$newname);

								$insert = mysqli_query($conn, "INSERT INTO blog VALUES (
											null,
											'".$judul."',
											'".$deskripsi."',
											'".$link."',
											'".$newname."'
											) ");
								if($insert){
									echo '<script>alert("Tambah Data Berhasil")</script>';
									echo '<script>window.location="data-blog.php"</script>';
								}else{
									echo 'gagal' .mysqli_error($conn);
								}
							}
						}

					 ?>

			</div>
		</div>
	</div>

	<!-- foother --->
	<footer>
		<div class="countainer">
			<small>&copy; 2023 - FashionStore.RK</small>
		</div>
	</footer>
	 <script>
          CKEDITOR.replace( 'deskripsi');
     </script>
</body>
</html>
