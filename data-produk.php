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
			<h3>Data Produk</h3>
			<div class="box">
				<p><a href="tambah-produk.php"><i class="fa fa-plus"></i>Tambah Data</a></p>
				<table border="1" cellspacing="0" class="table">
					<thead>
						<tr>
							<th width="60px">No</th>
							<th>Kategori</th>
							<th>Nama Produk</th>
							<th>Harga</th>
							<th>Gambar</th>
							<th>Status</th>
							<th width="150px">Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php 
							$no = 1;
							$produk = mysqli_query($conn, "SELECT * FROM tb_product LEFT JOIN tb_category USING (category_id) ORDER BY product_id DESC");
							if(mysqli_num_rows($produk) > 0){
							while($row = mysqli_fetch_array($produk)){

						 ?>
						<tr>
							<td><?php echo $no++ ?></td>
							<td><?php echo $row['category_name'] ?></td>
							<td><?php echo $row['product_name'] ?></td>
							<td>Rp. <?php echo number_format($row['product_price'])  ?></td>
							<td> <a href="produk/<?php echo $row['prodeuct_image'] ?>" target="_blank"><img src="produk/<?php echo $row['prodeuct_image'] ?>" width="60px"> </a></td>
							<td><?php echo ($row['product_status'] == 0)? 'Tidak Aktif': 'Aktif';?></td>
							<td>
								<a href="edit-produk.php?id=<?php echo $row['product_id'] ?>">Edit</a> || <a href="proses-hapus.php?idp=<?php echo $row ['product_id'] ?>" onclick="return confirm('yakin ingin menghapus datanya ?')" >Hapus</a>
							</td>
						</tr>
						<?php }} else{ ?>
							<tr>
								<td colspan="7">Tidak ada data</td>
							</tr>

						<?php } ?>
					</tbody>
				</table>
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

