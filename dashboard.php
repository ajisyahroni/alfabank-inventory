<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <?php
    include "koneksi.php";
    session_start();
    if (empty($_SESSION['username'])) {
        header("location:index.php");
    } 
    ?>
</head>

<body class="container">
    
    <h2>READ DATA BARANG</h2>
    <a href="aksi_logout.php">Logout admin</a>
    <br />
    <a href="form_insert.php">+ TAMBAH BARANG</a>
    <br />
    <br />

    <div class="card-deck">
        <?php
        $data = mysqli_query($koneksi, "select * from barang");
        while ($d = mysqli_fetch_array($data)) {
        ?>
            <div class="card">
                <img src="<?php echo $d['foto']; ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><td><?php echo $d['nama']; ?></td></h5>
                    
                    <p class="card-text">berat : <td><?php echo $d['berat']; ?></p>
                    <p class="card-text">deskripsi : <td><?php echo $d['deskripsi']; ?></p>
                    <a href="form_update.php?id=<?php echo $d['id']; ?>" class="btn btn-info">Edit</a>
                    <a href="aksi_delete.php?id=<?php echo $d['id']; ?>" class="btn btn-danger">Delete</a>

                </div>
            </div>
        <?php
        }
        ?>
    </div>
</body>

</html>