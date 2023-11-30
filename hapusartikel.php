<?php
include 'koneksi.php';

// Memeriksa apakah data 'no' telah dikirim melalui metode POST
if(isset($_POST['id_artikel'])) {
    $id_artikel = $_POST['id_artikel'];

    // Menghapus artikel dari database berdasarkan 'no'
    $query = "DELETE FROM artikel WHERE id_artikel = '$id_artikel'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        // Jika penghapusan berhasil, redirect ke halaman menu atau tampilan lainnya
        header("Location: artikel.php");
        exit();
    } else {
        // Jika terjadi kesalahan, tampilkan pesan error
        echo "Error: " . mysqli_error($koneksi);
    }
} else {
    // Jika 'no' tidak ada, redirect ke halaman menu atau tampilan lainnya
    header("Location: artikel.php");
    exit();
}
?>
