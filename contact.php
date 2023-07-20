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
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200&display=swap" rel="stylesheet">
    <style>
		/* Custom CSS for Contact Page */
		.container {
			margin-top: 30px;
		}

		h2 {
			margin-bottom: 20px;
		}

		.map-container {
			margin-bottom: 20px;
		}

		.contact-form {
			margin-top: 30px;
		}

		.form-group label {
			font-weight: bold;
		}

		.btn-primary {
			margin-top: 20px;
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
<?php 
    session_start();
    include 'db.php';
    if($_SESSION['status_login'] != true){
        echo '<script>window.location="login.php"</script>';
    }

    // Tangkap data yang dikirimkan melalui form
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        // Insert data kontak ke tabel tb_contact
        $insert = mysqli_query($conn, "INSERT INTO tb_contact (name, email, message) VALUES ('$name', '$email', '$message')");
        if($insert){
            echo '<script>alert("Pesan berhasil dikirim")</script>';
        } else {
            echo '<script>alert("Gagal mengirim pesan")</script>';
        }
    }
?>
<section id="contact">
	<div class="container">
		<h2>Contact Us</h2>
		<div class="row">
			<div class="col-md-6">
				<p><strong>Phone:</strong> 123-456-7890</p>
				<p><strong>Email:</strong> info@fashionstore.com</p>
				<p><strong>Address:</strong> 123 Street, City, Country</p>
			</div>
			<div class="col-md-6">
				<div class="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63468.48521907333!2d106.75725949999999!3d-6.1601685999999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f7c9d110d719%3A0x300c5e82dd4b8a0!2sJakarta%20Barat%2C%20Kec.%20Kb.%20Jeruk%2C%20Kota%20Jakarta%20Barat%2C%20Daerah%20Khusus%20Ibukota%20Jakarta!5e0!3m2!1sid!2sid!4v1688691445570!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
				 <!-- Form Kontak -->
				 <div class="section">
        <div class="container">
            <h3>Kontak Kami</h3>
            <div class="box">
                
                <div class="contact-form">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" id="name" name="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message:</label>
                            <textarea id="message" name="message" class="form-control" rows="5" required></textarea>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

			</div>
		</div>
	</div>
</section>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<!--footer-->
	<footer>
		<div class="container">
			<p>&copy; <?php echo date("Y"); ?> FashionStore.RK. All rights reserved.</p>
		</div>
	</footer>
</body>
</html>
