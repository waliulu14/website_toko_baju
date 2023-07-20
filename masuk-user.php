

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
	<title>FashionStore.RK</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200&display=swap" rel="stylesheet">
</head>
<body>

	<!--header-->
	<header>

			<div class="countainer">
			<h1><a href="masuk-user.php"> FashionStore.RK</h1>
				<ul>
					<li><a href="produk.php">Produk</a></li>
				<li><a href="contact.php">Contact</a></li>

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

    <!-- category -->

    <div class="section">
    	<div class="countainer">
    		<h3>Kategori</h3>
    		<div class="box">
    			<?php 
    				$kategori = mysqli_query($conn, "SELECT * FROM tb_category ORDER BY category_id DESC");
    				if(mysqli_num_rows($kategori) > 0){
    					while($k = mysqli_fetch_array($kategori)){
    			 ?>

    			 	<a href="produk.php?kat=<?php echo $k['category_id'] ?>">
		    			<div class="col-3">
		    				<img src="img/123456.png" width="60px" style="margin-bottom:5px;">
		    				<p><?php echo $k['category_name'] ?></p>
		    			</div>
		    		</a>
    			<?php }}else{ ?>
    				<p>Kategori tidak ada</p>
    			<?php } ?>
    		</div>
    	</div>
    </div>

    <!-- new product-->
    <div class="section">
    	<div class="countainer">
    		<h3>Produk Terbaru</h3>
    		<div class="box">
    			<?php 
    				$produk = mysqli_query($conn, "SELECT * FROM tb_product WHERE product_status = 1 ORDER BY product_id DESC LIMIT 8");

    				if(mysqli_num_rows($produk) > 0){
    					while($p = mysqli_fetch_array($produk)){
    			 ?>
    			 	<a href="detail-produk.php?id=<?php echo $p['product_id'] ?>">
		    			<div class="col-4">
		    				<img src="produk/<?php echo $p['prodeuct_image'] ?>">
		    				<p class="nama"><?php echo substr($p['product_name'] , 0, 30)?></p>
		    				<p class="harga">Rp. <?php echo number_format($p['product_price'])  ?></p>
		    			</div>
	    			</a>
	    		<?php }}else{ ?>
	    			<p>Produk Tidak Ada</p>
	    		<?php } ?>
    		</div>
    	</div>
    </div>

    <!-- footer -->
    <div class="footer">
    	<div class="countainer">
    		<h4>Alamat</h4>
    		<p><?php echo $a->admin_addres ?></p>

    		<h4>Email</h4>
    		<p><?php echo $a->admin_email ?></p>

    		<h4>No. Hp</h4>
    		<p><?php echo $a->admin_telp ?> </p>

    		<small>Copyright &copy; 2023 -  FashionStore.RK</small>
    	</div>
    </div>

</body>