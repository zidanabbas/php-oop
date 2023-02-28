<?php
include '../config/env.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="p-2">
        <h2 class="text-center">TAMBAH PRODUK</h2>
        <button class="mb-3">
            <a href="../index.php">Kembali</a>
        </button>
        <div class="container-fluid">
            <form action="product-process.php" method="POST" enctype="form-data/">
                <div class="mb-3">
                    <label for="nama-produk" class="form-label">Nama Produk :</label>
                    <input type="text" class="form-control" id="nama-produk" aria-describedby="produkHelp" name="nama_produk" require>
                    <div id="produkHelp" class="form-text">Masukkan nama produk barang yang sesuai.</div>
                </div>
                <div class="mb-3">
                    <label for="stok" class="form-label">Stock :</label>
                    <input type="text" class="form-control" id="stok" name="stok" require>
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label">Harga :</label>
                    <input type="text" class="form-control" id="harga" name="harga" require>
                </div>
                <div class="mb-3">
                    <label for="detail" class="form-label">Detail Barang:</label>
                    <input type="text" class="form-control" id="detail" name="detail" require>
                </div>
                <div class="mb-3">
                    <label for="kategori" class="form-label">Kategori :</label>
                    <input type="text" class="form-control" id="kategori" name="id_kategori" require>
                </div>
                <div class="mb-3">
                    <label for="gambar" class="form-label">Gambar :</label>
                    <input type="file" class="form-control-file" id="gambar" name="gambar" require>
                </div>
                <button type="submit" value="submit" class="btn btn-primary">Tambah Produk</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>