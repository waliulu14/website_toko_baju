

<?php 
	include 'db.php';
	$kontak = mysqli_query($conn, "SELECT admin_telp, admin_email, admin_addres FROM tb_admin WHERE admin_id = 1");

	$a = mysqli_fetch_object($kontak);

	$produk = mysqli_query($conn, "SELECT * FROM tb_product WHERE product_id = '".$_GET['id']."' ");
	$p = mysqli_fetch_object($produk);
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
			<h1><a href=""> FashionStore.RK</h1>
				<ul>
					<li><a href="masuk-user.php">Home</a></li>
					<li><a href="produk.php">Produk</a></li>
					<li><a href="index.php">Keluar</a></li>
				</ul>
			</div>
	</header>

	
	<!-- search -->
	<div class="search">
		<div class="countainer">
			<form action="produk.php">
				<input type="text" name="search" placeholder="Cari Produk">
				<input type="submit" name="cari" value="Cari Produk">
			</form>
		</div>
	</div>

	<!-- produk detail-->
	<div class="section">
		<div class="countainer">
			<h3>Detail Produk</h3>
			
			<div class="box">
				<div class="col-2">
					<img src="produk/<?php echo $p->prodeuct_image ?>"width="100%">
				</div>
				<div class="col-2">
					<h3><?php echo $p->product_name ?></h3>
					<h4>Rp. <?php echo number_format($p->product_price)  ?></h4>
					<p>Deskripsi :<br>
						<?php echo $p->product_description ?>
					</p>
				
				</div>
			</div>
		</div>
	</div>

    <!-- fother -->
    <div class="footer">
    	

    		<small>Copyright &copy; 2023 -  FashionStore.RK</small>
    	</div>
    </div>

</body>