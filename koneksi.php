<?php  
$koneksi = mysqli_connect("localhost", "root", "", "wsb");

if(mysqli_connect_errno()){
	echo "Koneksi database gagal: " . mysqli_connect_errno();
}
?>
