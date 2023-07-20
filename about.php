<?php
	include 'db.php';
	$kontak = mysqli_query($conn, "SELECT admin_telp, admin_email, admin_addres FROM tb_admin WHERE admin_id = 1");
	$a = mysqli_fetch_object($kontak);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>FashionStore.RK - About</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200&display=swap" rel="stylesheet">
	<style>
		/* Custom CSS for About Page */
		.container {
			margin-top: 30px;
		}

		.about-img {
			margin-bottom: 20px;
		}

		.about-desc {
			margin-bottom: 30px;
		}
	</style>
</head>
<body>
	<!--header-->
	<header>
		<div class="countainer">
			<h1><a href="index.php">FashionStore.RK</a></h1>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="pro.php">Produk</a></li>
				<li><a href="about.php">Tentang Kami</a></li>
				<li><a href="blog.php">Blog</a></li>
				<li><a href="contact.php">Contact</a></li>
				<li><a href="loginn.php">Login</a></li>
			</ul>
		</div>
	</header>
	<!--content-->
	<section id="about">
		<div class="container">
			<h2>About FashionStore.RK</h2>
			<div class="row">
				<div class="col-md-6">
					<img src="https://i.pinimg.com/564x/a6/0f/0b/a60f0bc22fe23fc9072722398c4a11cc.jpg" alt="About FashionStore.RK" class="about-img img-fluid">
				</div>
				<div class="col-md-6">
					<div class="about-desc">
                        <br>
                        <br>
                        <h1>Tentang Toko Kami</h1>
                        <br>
                        <br>
						<p>FashionStore.RK adalah toko pakaian terkemuka yang menawarkan koleksi lengkap pakaian untuk pria, wanita, dan anak-anak. Dengan perpaduan gaya, kualitas, dan harga yang terjangkau, kami menyediakan pilihan pakaian yang modern dan trendi untuk setiap kesempatan.</p>
						<p>Kami percaya bahwa pakaian adalah cara untuk mengekspresikan diri dan menunjukkan kepribadian. Oleh karena itu, kami selalu menghadirkan beragam gaya dan desain terbaru dalam koleksi kami. Dari busana kasual hingga pakaian formal, FashionStore.RK memiliki segala yang Anda butuhkan untuk tampil trendy dan percaya diri.</p>
						<p>Toko kami didirikan pada tahun 2023 dengan komitmen untuk memberikan pengalaman berbelanja yang menyenangkan dan memuaskan bagi pelanggan kami. Kami mengutamakan kualitas produk, pelayanan pelanggan yang ramah, dan pengiriman yang cepat dan andal.</p>
						<p>Ayo bergabung dengan FashionStore.RK dan temukan pakaian yang cocok untuk Anda dan keluarga Anda. Bersiaplah untuk menghadapi dunia dengan gaya dan kepercayaan diri yang tak tertandingi!</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!--footer-->
	<footer>
		<div class="container">
			<p>&copy; <?php echo date("Y"); ?> FashionStore.RK. All rights reserved.</p>
		</div>
	</footer>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
