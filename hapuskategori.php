<?php
include 'koneksi.php';

// Memeriksa apakah no telah dikirim melalui metode POST
if (isset($_POST['id_kategori'])) {
    $id_kategori = $_POST['id_kategori'];

    // Menghapus data admin berdasarkan no
    $query = "DELETE FROM kategori WHERE id_kategori = '$id_kategori'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        // Jika penghapusan berhasil, redirect ke halaman kategori.php atau halaman lain yang diinginkan
        header("Location: kategori.php");
        exit();
    } else {
        // Jika penghapusan gagal, tampilkan pesan kesalahan
        echo "Gagal menghapus kategori.";
    }
} else {
    // Jika no tidak dikirim melalui metode POST, redirect ke halaman admin.php atau halaman lain yang diinginkan
    header("Location: kategori.php");
    exit();
}
?>
