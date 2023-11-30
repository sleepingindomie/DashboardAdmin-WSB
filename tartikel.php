<?php
include 'koneksi.php';

$id_artikel = $_POST['id_artikel'];
$penulis = $_POST['penulis'];
$judul = $_POST['judul'];
$kategori = $_POST['kategori'];
$deskripsi = $_POST['deskripsi'];
$file = $_POST['file'];
$tgl = $_POST['tgl'];


$stmt = $koneksi->prepare("INSERT INTO artikel (id_artikel, penulis, judul, kategori,  deskripsi, file, tgl) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssss", $id_artikel, $penulis, $judul, $kategori,  $deskripsi, $file, $tgl);

if ($stmt->execute()) {
    header("location: artikel.php");
    exit();
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$koneksi->close();
?>
