<?php
include 'koneksi.php';

// Memeriksa apakah data yang diperlukan telah dikirim melalui metode POST
if (isset($_POST['no']) && isset($_POST['makanan']) && isset($_POST['minuman']) && isset($_POST['harga'])) {
    // Mengambil data dari input form
    $no = $_POST['no'];
    $makanan = $_POST['makanan'];
    $minuman = $_POST['minuman'];
    $harga = $_POST['harga'];

    // Melakukan update data menu berdasarkan nomor (no)
    $query = "UPDATE menu SET makanan = '$makanan', minuman = '$minuman', harga = '$harga' WHERE no = '$no'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        // Jika update berhasil, redirect ke halaman menu.php atau halaman lain yang diinginkan
        header("Location: menu.php");
        exit();
    } else {
        // Jika update gagal, tampilkan pesan kesalahan
        echo "Gagal mengupdate data menu.";
    }
} else {
    // Jika data yang diperlukan tidak dikirim melalui metode POST, redirect ke halaman menu.php atau halaman lain yang diinginkan
    header("Location: menu.php");
    exit();
}
?>
