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
	<title>FashionStore.RK - Contact</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200&display=swap" rel="stylesheet">

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

    <!-- new product-->
    <div class="section">
    	<div class="countainer">
    		<h3>Produk Terbaru Kami</h3>
    		<div class="box">
    			<?php 
    				$produk = mysqli_query($conn, "SELECT * FROM tb_product WHERE product_status = 1 ORDER BY product_id DESC LIMIT 12");

    				if(mysqli_num_rows($produk) > 0){
    					while($p = mysqli_fetch_array($produk)){
    			 ?>
    			 	<a href="">
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
    		<small>Copyright &copy; 2023 - FashionStore.RK</small>
    	</div>
    </div>

</body>
</html>

