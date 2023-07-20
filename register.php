<?php include('db.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Halaman Register</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <link rel="stylesheet" href="css/style1.css"/>
</head>
<body>

    <?php

        // Disaat pengguna klik submit, maka insert ke database
        if (isset($_POST['submit'])) 
        {
            // cegah karakter spesial (biar ga bisa di sql injection)
            // hapus backslashes
            $namapengguna = mysqli_real_escape_string($conn, stripslashes($_POST['username']));
            $email = mysqli_real_escape_string($conn, stripslashes($_POST['email']));
            $sandi = mysqli_real_escape_string($conn, stripslashes($_POST['password']));
            $sandi = password_hash($sandi, PASSWORD_BCRYPT);
            $tanggalbuat = date("Y-m-d H:i:s");

            $result   = mysqli_query($conn, "INSERT into `pengguna` (nama_pengguna, kata_sandi, email, tanggal_buat)
            VALUES ('$namapengguna', '$sandi', '$email', '$tanggalbuat')");

            if ($result) 
            {
                echo "<div class='form'>
                        <h3>Anda berhasil mendaftar.</h3><br/>
                        <p class='link'>Sekarang Anda bisa masuk ke akun, <a href='loginn.php'>masuk Sekarang</a>.</p>
                      </div>";
            }
            else 
            {
                echo "<div class='form'>
                        <h3>Tidak dapat membuat akun.</h3><br/>
                        <p class='link'>Silahkan klik <a href='register.php'>daftar</a> lagi.</p>
                      </div>";
            }
        } 
        else { ?>

        <form class="form" method="post">
            <h1 class="login-title">Pendaftaran</h1>
            <input type="text" class="login-input" name="username" placeholder="Nama Pengguna" required /><br/>
            <input type="text" class="login-input" name="email" placeholder="Alamat Email"><br/>
            <input type="password" class="login-input" name="password" placeholder="Kata Sandi"><br/>
            <input type="submit" name="submit" value="Daftar" class="login-button"><br/><br/>

            <p class="link">Apakah sudah memiliki akun? <a href="loginn.php">Masuk sekarang</a>.</p>
            <p class="link"><a href="index.php">Kembali</a></p>
        </form>
        
        <?php } ?>

    </body>
</html>