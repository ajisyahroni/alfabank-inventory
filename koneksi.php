<?php
// silahkan ganti nama database sesuai db klean
$database = "alfa_inventory";
$koneksi = mysqli_connect("localhost", "root", "", $database);

// Check connection
if (mysqli_connect_errno()) {
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
