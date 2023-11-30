<?php
include 'koneksi.php';

// Memeriksa apakah id_admin telah dikirim melalui metode POST
if (isset($_POST['id_admin'])) {
    $id_admin = $_POST['id_admin'];

    // Menghapus data admin berdasarkan id_admin
    $query = "DELETE FROM admin WHERE id_admin = '$id_admin'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        // Jika penghapusan berhasil, redirect ke halaman admin.php atau halaman lain yang diinginkan
        header("Location: admin.php");
        exit();
    } else {
        // Jika penghapusan gagal, tampilkan pesan kesalahan
        echo "Gagal menghapus data admin.";
    }
} else {
    // Jika id_admin tidak dikirim melalui metode POST, redirect ke halaman admin.php atau halaman lain yang diinginkan
    header("Location: admin.php");
    exit();
}
?>
