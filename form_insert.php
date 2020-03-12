<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert barang</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <?php
    include "koneksi.php";
    ?>
</head>

<body class="container">
    <h2>Input Barang</h2>
    <form action="aksi_insert.php" method="post" enctype="multipart/form-data">
        <label for="nama">Nama Barang</label>
        <input class="form-control" type="text" name="nama" id="">

        <label for="berat">Berat Barang</label>
        <input class="form-control" type="number" name="berat" id="berat">
        
        <label for="deskripsi">Deskripsi Barang</label>
        <textarea name="deskripsi" class="form-control" id="deskripsi" cols="30" rows="10"></textarea>
        
        <!-- <label for="dimensi">Dimensi</label>
        <div class="row" id="dimensi">
            <div class="col-md-4">
                <input class="form-control" type="number" name="panjang" id="" placeholder="panjang">
            </div>
            <div class="col-md-4">
                <input class="form-control" type="number" name="lebar" id="" placeholder="lebar">
            </div>
            <div class="col-md-4">
                <input class="form-control" type="number" name="tinggi" id="" placeholder="tinggi">
            </div>
        </div> -->
        <label for="foto">Foto</label>
        <input type="file" name="foto"  id="foto" class="form-control">

        <br>
        <input type="submit" value="tambah" class="btn btn-primary btn-block">
    </form>
</body>

</html>