<?php
include 'koneksi.php';

$id_kategori = $_POST['id_kategori'];
$nama = $_POST['nama'];
$tgl = $_POST['tgl'];

$stmt = $koneksi->prepare("INSERT INTO kategori (id_kategori, nama, tgl) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $id_kategori, $nama, $tgl);

if ($stmt->execute()) {
    header("location: kategori.php");
    exit();
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$koneksi->close();
?>
