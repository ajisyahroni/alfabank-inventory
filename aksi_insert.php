<?php
// KONEKSI
include "koneksi.php";

// GET THE DATA
$nama = $_POST['nama'];
$berat = $_POST['berat'];
$deskripsi = $_POST['deskripsi'];
$foto = $_FILES['foto']['name'];

// UPLOAD
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["foto"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
echo $target_file;

if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
    $insert_query = "INSERT INTO `barang`(`nama`, `berat`, `deskripsi`, `foto`) VALUES ('$nama',$berat,'$deskripsi','$target_file')";
    mysqli_query($koneksi, $insert_query);
    header("location:dashboard.php");

} else {
    echo "Sorry, there was an error uploading your file.";
}
