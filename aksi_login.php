<?php
include "koneksi.php";
$username = $_POST['username'];
$password = $_POST['password'];

$login_query = "SELECT * FROM `admin` WHERE username='$username' AND password='$password'";

$data_login = mysqli_query($koneksi, $login_query);
$login = mysqli_num_rows($data_login);

session_start();
if($login > 0){
    session_start();
    $_SESSION['username'] = $username;
    header("location:dashboard.php");
}
else{
    echo "password dan username salah";
}


?>