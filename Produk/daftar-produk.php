<?php
include '../config/env.php';

$query = "SELECT * FROM produk";
$result = $conn->query($query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="p-4">
        <h2 class="p-2 m-2 text-center">My Product</h2>
        <button>
            <a href="../index.php">Kembali</a>
        </button>

        <section id="my-product">
            <div class="container-fluid p-2">
                <h3 class="p-2 m-2 bg-primary-subtle">Shoe Category</h3>
                <table class="table">
                    <thead>
                        <tr class="text-white font-bold bg-danger">
                            <th class="col p-2">No</th>
                            <th class="col p-2">Nama Produk</th>
                            <th class="col p-2">Stock</th>
                            <th class="col p-2">Harga</th>
                            <th class="col p-2">Detail</th>
                            <th class="col p-2">Kategori</th>
                            <th class="col p-2">Gambar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($result->num_rows > 0) {
                            # code...
                            while ($data_produk = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" .  $data_produk['id_produk']."</td>";
                                echo "<td>" .  $data_produk['nama_produk']."</td>";
                                echo "<td>" .  $data_produk['stok']."</td>";
                                echo "<td>" .  $data_produk['harga']."</td>";
                                echo "<td>" .  $data_produk['detail']."</td>";
                                echo "<td>" .  $data_produk['id_kategori']."</td>";
                                echo "<td><img src='" .  $data_produk['gambar']."' height='100'></td>";
                                echo "<tr>";
                        }
                    }else {
                        # code...
                        echo "<tr><td colspan='5'>Tidak ada data produk.</td></tr>";
                    }
                    $conn ->close();
                    ?>
                    </tbody>
                </table>
            </div>
        </section>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>