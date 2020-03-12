<?php
// KONEKSI
include "koneksi.php";

// GET THE DATA
$id = $_POST['id'];
$nama = $_POST['nama'];
$berat = $_POST['berat'];
$deskripsi = $_POST['deskripsi'];
$foto = $_FILES['foto']['name'];

// UPLOAD
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["foto"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
$update_query = "";

if ($foto) {
    if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
        $update_query = "UPDATE `barang` SET `nama`='$nama',`berat`='$berat',`deskripsi`='$deskripsi',`foto`='$target_file' WHERE id=$id";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
} else {
    $update_query = "UPDATE `barang` SET `nama`='$nama',`berat`='$berat',`deskripsi`='$deskripsi' WHERE id=$id";
}


mysqli_query($koneksi, $update_query);
header("location:dashboard.php");
