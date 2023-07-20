<?php
session_start();
include 'db.php';
if ($_SESSION['status_login'] != true) {
    echo '<script>window.location="login.php"</script>';
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Hapus data blog berdasarkan ID
    $hapus = mysqli_query($conn, "DELETE FROM blog WHERE id = '$id'");

    if ($hapus) {
        echo '<script>alert("Data berhasil dihapus")</script>';
        echo '<script>window.location="data-blog.php"</script>';
    } else {
        echo '<script>alert("Gagal menghapus data")</script>';
        echo '<script>window.location="data-blog.php"</script>';
    }
} else {
    echo '<script>window.location="data-blog.php"</script>';
}
?>
