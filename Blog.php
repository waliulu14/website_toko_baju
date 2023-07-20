<?php 
	include 'db.php';
	$blogs = mysqli_query($conn, "SELECT * FROM blog ORDER BY id DESC");
 ?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>FashionStore.RK - Blog</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200&display=swap" rel="stylesheet">
	<style>
		/* Custom CSS for Blog Page */
		<style>
	/* Custom CSS for Blog Page */
	.container {
		margin-top: 30px;
	}

	h3 {
		margin-bottom: 20px;
	}

	.blog-box {
		display: flex;
		flex-wrap: wrap;
		justify-content: space-between;
	}

	.blog-box .col-md-6 {
		width: 48%;
		margin-bottom: 20px;
	}

	.blog-box a {
		text-decoration: none;
		color: #333;
	}

	.blog-box a:hover {
		color: #000;
	}

	.blog-box img {
		width: 100%;
		height: auto;
		margin-bottom: 10px;
	}

	.blog-box h4 {
		font-size: 18px;
		margin-bottom: 10px;
	}

	.blog-box p {
		margin-bottom: 10px;
	}

	.blog-box p:last-child {
		margin-bottom: 0;
	}
</style>

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
	<section id="blog" class="py-5">
		<div class="container">
			<h3 class="text-center mb-5">Blog Kami</h3>
			<div class="row blog-box">
				<?php 
					if(mysqli_num_rows($blogs) > 0) {
						while($blog = mysqli_fetch_array($blogs)) {
				?>
				<div class="col-md-6">
					<a href="<?php echo $blog['link']; ?>" target="_blank">
						<img src="foto/<?php echo $blog['foto']; ?>" class="img-fluid" alt="Blog Image">
						<h4 class="mt-3"><?php echo $blog['judul']; ?></h4>
						<p><?php echo $blog['deskripsi']; ?></p>
						<p><a href="<?php echo $blog['link']; ?>" class="btn btn-primary">Selengkapnya</a></p>
					</a>
				</div>
				<?php 
						}
					} else {
						echo "<p class='text-center'>Blog tidak tersedia.</p>";
					}
				?>
			</div>
		</div>
	</section>

	<!--footer-->
	<footer class="py-3 bg-light">
		<div class="container">
			<p class="text-center">&copy; <?php echo date("Y"); ?> FashionStore.RK. All rights reserved.</p>
		</div>
	</footer>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
