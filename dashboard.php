<?php 
	session_start();
	if($_SESSION['status_login'] != true){
		echo '<script>window.location="login.php"</script>';
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> FashionStore.RK</title>
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
					<li><a href="data-blog.php">Blog</a></li>
					<li><a href="addres.php">Contact</a></li>
					<li><a href="index.php">Keluar</a></li>
				</ul>
			</div>
	</header>
	<!--- content -->
	<div class="section">
		<div class="countainer">
			<h3>Dashboard</h3>
			<div class="box">
				<h4>Selamat Datang <?php echo $_SESSION['a_global']->admin_name ?> FashionStore.RK </h4>
			</div>
		</div>
	</div>

	<!-- foother --->
	<footer>
		<div class="countainer">
			<p style="text-align:center; color:white;">&copy; 2023 <b> FashionStore.RK</p>
		</div>
	</footer>
</body>
</html>

