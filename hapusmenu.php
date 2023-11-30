<?php
include 'koneksi.php';

// Memeriksa apakah data 'no' telah dikirim melalui metode POST
if(isset($_POST['no'])) {
    $no = $_POST['no'];

    // Menghapus data menu dari database berdasarkan 'no'
    $query = "DELETE FROM menu WHERE no = '$no'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        // Jika penghapusan berhasil, redirect ke halaman menu atau tampilan lainnya
        header("Location: menu.php");
        exit();
    } else {
        // Jika terjadi kesalahan, tampilkan pesan error
        echo "Error: " . mysqli_error($koneksi);
    }
} else {
    // Jika 'no' tidak ada, redirect ke halaman menu atau tampilan lainnya
    header("Location: menu.php");
    exit();
}
?>
