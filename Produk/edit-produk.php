<?php

include '../config/env.php';

?>


<!DOCTYPE html>
<html>

<head>
    <title>Edit Produk</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-3">
        <h2>Edit Produk</h2>
        <form action="update_produk.php" method="post" enctype="multipart/form-data">
            <?php
            // query untuk select data produk berdasarkan ID
            $id_produk = $_GET["id_produk"];
            $sql = "SELECT * FROM produk WHERE id_produk=$id_produk";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();

                // menampilkan form edit produk
                echo "<input type='hidden' name='id_produk' value='" . $row["id_produk"] . "'>";
                echo "<div class='form-group'>";
                echo "<label for='nama_produk'>Nama Produk:</label>";
                echo "<input type='text' class='form-control' id='nama_produk' name='nama_produk' value='" . $row["nama_produk"] . "'>";
                echo "</div>";
                echo "<div class='form-group'>";
                echo "<label for='stok'>Stok:</label>";
                echo "<textarea class='form-control' id='stok' name='stok'>" . $row["stok"] . "</textarea>";
                echo "</div>";
                echo "<div class='form-group'>";
                echo "<label for='harga'>Harga:</label>";
                echo "<input type='number' class='form-control' id='harga' name='harga' value='" . $row["harga"] . "'>";
                echo "</div>";
                echo "<div class='form-group'>";
                echo "<label for='detail'>Detail:</label>";
                echo "<input type='number' class='form-control' id='detail' name='detail' value='" . $row["detail"] . "'>";
                echo "</div>";
                echo "<div class='form-group'>";
                echo "<label for='id_kategori'>Kategori:</label>";
                echo "<input type='number' class='form-control' id='id_kategori' name='id_kategori' value='" . $row["id_kategori"] . "'>";
                echo "</div>";
                echo "<div class='form-group'>";
                echo "<label for='gambar'>Gambar:</label><br>";
                echo "<img src='" . $row["gambar"] . "' height='100'><br>";
                echo "<input type='file' id='gambar' name='gambar'>";
                echo "</div>";
                echo "<button type='submit' class='btn btn-primary'>Simpan</button>";
            } else {
                echo "<div class='alert alert-danger'>Produk tidak ditemukan.</div>";
            }

            $conn->close();
            ?>
        </form>
    </div>
</body>

</html>