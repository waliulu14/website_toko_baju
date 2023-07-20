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
    <!-- Header -->
    <header>
		<div class="countainer">
			<h1><a href="dashboard.php"> FashionStore.RK</h1>
				<ul>
					<li><a href="dashboard.php">Dashboard</a></li>
					<li><a href="profil.php">Profil</a></li>
					<li><a href="data-kategori.php">Data kategori</a></li>
					<li><a href="data-produk.php">Data Produk</a></li>
					<li><a href="data-blog.php">BLOG</a></li>
					<li><a href="addres.php">Contact</a></li>
					<li><a href="index.php">Keluar</a></li>
				</ul>
			</div>
	</header>

    <!-- Content -->
    <div class="section">
        <div class="container">
            <h3>Data Contact</h3>
            <div class="box">
                <table border="1" cellspacing="0" class="table">
                    <thead>
                        <tr>
                            <th width="60px">No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Message</th>
                            <th>Created At</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $no = 1;
                            $contacts = mysqli_query($conn, "SELECT * FROM tb_contact ORDER BY id DESC");
                            if(mysqli_num_rows($contacts) > 0){
                                while($row = mysqli_fetch_array($contacts)){
                        ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $row['name'] ?></td>
                            <td><?php echo $row['email'] ?></td>
                            <td><?php echo $row['message'] ?></td>
                            <td><?php echo $row['created_at'] ?></td>
                        </tr>
                        <?php 
                                }
                            } else {
                        ?>
                        <tr>
                            <td colspan="5">Tidak ada data</td>
                        </tr>
                        <?php 
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p style="text-align:center; color:white;">&copy; <?php echo date("Y"); ?> FashionStore.RK</p>
        </div>
    </footer>
</body>
</html>
