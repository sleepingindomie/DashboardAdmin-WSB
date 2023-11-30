<?php
// Mengambil data dari form login
$email = $_POST['email'];
$password = $_POST['password'];

// Koneksi ke database
$host = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'wsb';

$conn = new mysqli($host, $db_username, $db_password, $db_name);

// Memeriksa koneksi database
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}

// Melakukan query untuk mencari akun dengan email dan password yang sesuai
$sql = "SELECT * FROM akun WHERE email = '$email' AND password = '$password'";
$result = $conn->query($sql);

// Memeriksa jumlah baris yang ditemukan
if ($result->num_rows > 0) {
    // Login berhasil
    header("Location: dashboard.php");
    exit;
} else {
    // Login gagal
    echo "<script>alert('Email atau Password Salah!'); window.location.href = 'index.php';</script>";
}

// Menutup koneksi database
$conn->close();
?>
