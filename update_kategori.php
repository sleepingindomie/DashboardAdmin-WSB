<?php
include 'koneksi.php';

if (isset($_POST['id_kategori']) && isset($_POST['nama']) && isset($_POST['tgl'])) {
    $id_kategori = $_POST['id_kategori'];
    $nama = $_POST['nama'];
    $tgl = $_POST['tgl'];

    $query = "UPDATE kategori SET nama = '$nama', tgl = '$tgl' WHERE id_kategori = '$id_kategori'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        header("Location: kategori.php");
        exit();
    } else {
        echo "Gagal mengupdate kategori";
    }
} else {
    header("Location: kategori.php");
    exit();
}
?>
