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
			<h3>Data Blog</h3>
			<div class="box">
				<p><a href="tambah-blog.php"><i class="fa fa-plus"></i>Tambah Data</a></p>
				<table border="1" cellspacing="0" class="table">
					<thead>
						<tr>
							<th width="60px">No</th>
							<th>Judul</th>
							<th>Deskripsi</th>
							<th>Link</th>
							<th>Foto</th>
							<th width="150px">Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php 
							$no = 1;
							$blogs = mysqli_query($conn, "SELECT * FROM blog ORDER BY id DESC");
							if(mysqli_num_rows($blogs) > 0){
								while($row = mysqli_fetch_array($blogs)){
						?>
						<tr>
							<td><?php echo $no++ ?></td>
							<td><?php echo $row['judul'] ?></td>
							<td><?php echo $row['deskripsi'] ?></td>
							<td><?php echo $row['link'] ?></td>
							<td><img src="<?php echo 'foto/' . $row['foto']; ?>" width="100px"></td>

							<td>
								 <a href="hapus-blog.php?id=<?php echo $row['id'] ?>" onclick="return confirm('Yakin ingin menghapus data?')">Hapus</a>
							</td>
						</tr>
						<?php 
								}
							} else {
						?>
						<tr>
							<td colspan="6">Tidak ada data</td>
						</tr>
						<?php 
							}
						?>
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
