<?php
// KONEKSI
include "koneksi.php";

// GET THE DATA
$id = $_GET['id'];


// DO QUERY
$insert_query = "DELETE FROM `barang` WHERE id=$id";
mysqli_query($koneksi, $insert_query);
header("location:dashboard.php");



?>