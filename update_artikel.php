<?php
include 'koneksi.php';

if (isset($_POST['id_artikel']) && isset($_POST['penulis']) && isset($_POST['judul']) && isset($_POST['kategori']) && isset($_POST['deskripsi']) && isset($_POST['file']) && isset($_POST['tgl'])) {
    $id_artikel = $_POST['id_artikel'];
    $penulis = $_POST['penulis'];
    $judul = $_POST['judul'];
    $kategori = $_POST['kategori'];
    $deskripsi = $_POST['deskripsi'];
    $file = $_POST['file'];
    $tgl = $_POST['tgl'];

    $query = "UPDATE artikel SET penulis = ?, judul = ?, kategori = ?, deskripsi = ?, file = ?, tgl = ? WHERE id_artikel = ?";
    $stmt = mysqli_prepare($koneksi, $query);
    mysqli_stmt_bind_param($stmt, "sssssss", $penulis, $judul, $kategori, $deskripsi, $file, $tgl, $id_artikel);
    $result = mysqli_stmt_execute($stmt);

    if ($result) {
        header("Location: artikel.php");
        exit();
    } else {
        echo "Gagal mengupdate data artikel";
    }
} else {
    header("Location: artikel.php");
    exit();
}
?>
