<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update barang</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <?php
    include "koneksi.php";
    ?>
</head>

<body class="container">
    <?php

    $id = $_GET['id'];
    $select_query = "SELECT * FROM `barang` WHERE id=$id";


    $data = mysqli_query($koneksi, $select_query);
    while ($d = mysqli_fetch_array($data)) {
        
    ?>

    <h2>Input Barang</h2>
    <form action="aksi_update.php" method="post" enctype="multipart/form-data">
        <label for="nama">Nama Barang</label>
        <input class="form-control" type="text" name="nama" id="" value="<?php echo $d['nama']; ?>">

        <label for="berat">Berat Barang</label>
        <input class="form-control" type="number" name="berat" id="berat" value="<?php echo $d['berat']; ?>">


        <label for="deskripsi">Deskripsi Barang</label>
        <textarea name="deskripsi" class="form-control" id="deskripsi" cols="30" rows="10">
        <?php echo $d['deskripsi']; ?>
        </textarea>

        <label for="foto">Foto</label>
        <br>
        <img class="img-thumbnail my-5" src="<?php echo $d['foto']; ?>" alt="">
        <input type="file" name="foto" id="foto" class="form-control">
        <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
        <br>
        <input type="submit" value="tambah" class="btn btn-primary btn-block">
    </form>

    <?php

    }

    ?>
</body>

</html>