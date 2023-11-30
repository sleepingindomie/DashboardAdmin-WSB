<?php
include 'koneksi.php';

$no = $_POST['no'];
$makanan = $_POST['makanan'];
$minuman = $_POST['minuman'];
$harga = $_POST['harga'];

$stmt = $koneksi->prepare("INSERT INTO menu (no, makanan, minuman, harga) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $no, $makanan, $minuman, $harga);

if ($stmt->execute()) {
    header("location: menu.php");
    exit();
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$koneksi->close();
?>
