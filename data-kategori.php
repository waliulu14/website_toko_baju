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
					<li><a href="data-blog.php">BLOG</a></li>
					<li><a href="index.php">Keluar</a></li>
				</ul>
			</div>
	</header>
	<!--- content -->
	<div class="section">
		<div class="countainer">
			<h3>Data Kategori</h3>
			<div class="box">
				<p><a href="tambah-kategori.php"><i class="fa fa-plus"></i>Tambah Data</a></p>
				<table border="1" cellspacing="0" class="table">
					<thead>
						<tr>
							<th width="60px">No</th>
							<th>Kategori</th>
							<th width="150px">Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php 
							$no = 1;
							$kategori = mysqli_query($conn, "SELECT * FROM tb_category ORDER BY category_id DESC");
							if(mysqli_num_rows($kategori) > 0){
							while($row = mysqli_fetch_array($kategori)){

						 ?>
						<tr>
							<td><?php echo $no++ ?></td>
							<td><?php echo $row['category_name'] ?></td>
							<td>
								<a href="edit-kategori.php?id=<?php echo $row['category_id'] ?>">Edit</a> || <a href="proses-hapus.php?idk=<?php echo $row ['category_id'] ?>" onclick="return confirm('yakin ingin menghapus datanya ?')" >Hapus</a>
							</td>
						</tr>
						<?php }}else{ ?>
							<tr>
								<td colspan="3">Data Kosong</td>
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

