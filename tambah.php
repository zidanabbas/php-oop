<?php
include_once 'koneksi.php';

if ($_POST) {
        $database = new Database();
        $db = $database->getConnection();

        $nama_lengkap = $_POST['nama_lengkap'];
        $username = $_POST['username'];
        $alamat = $_POST['alamat'];
        $email = $_POST['email'];
        $tlp = $_POST['tlp'];

        $query = "INSERT INTO user (nama_lengkap, username, alamat, email, tlp ) VALUES ('$nama_lengkap', '$username', '$alamat', '$email', '$tlp')";
        $db->query($query);

        header('Location: index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan CRUD Ujikom</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>

<body>
    <h2 class="text-center">FORM TAMBAH DATA ANGGOTA</h2>
    <button class="mb-2">
        <a href="index.php">Kembali</a>
    </button>
    <div>
        <div class="container-fluid">
            <form action="" method="POST">
                <div class="mb-3">
                    <label for="nama_lengkap" class="form-label">Nama Lengkap :</label>
                    <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap">
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">Username :</label>
                    <input type="text" class="form-control" id="username" name="username">
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat :</label>
                    <input type="text" class="form-control" id="alamat" name="alamat">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email :</label>
                    <input type="text" class="form-control" id="email" name="email">
                </div>
                <div class="mb-3">
                    <label for="tlp" class="form-label">Nomor Telepon :</label>
                    <input type="text" class="form-control" id="tlp" name="tlp">
                </div>
                <button type="submit" value="submit">Tambah</button>
            </form>
        </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>