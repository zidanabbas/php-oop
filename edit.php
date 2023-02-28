<?php
include_once 'koneksi.php';

$database = new Database();
$db = $database->getConnection();

$id = $_GET['id'];

$query = "SELECT * FROM user WHERE id_user = $id";
$result = $db->query($query);
$data = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama_lengkap = $_POST['nama_lengkap'];
    $username = $_POST['username'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $tlp = $_POST['tlp'];

    $query = "UPDATE user SET nama_lengkap = '$nama_lengkap', username = '$username', alamat = '$alamat', email = '$email', tlp = '$tlp' WHERE id_user = $id";
    $db->query($query);
?>

    <script>
        window.location.href = 'index.php';
    </script>
<?php
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>


<body>
    <div>
        <h2 class="text-center">EDIT DATA ANGGOTA</h2>
        <button>
            <a href="index.php">Kembali</a>
        </button>
        <form action="" method="post">
            <input type="hidden" name="id_user" value="<?php echo $data['id_user'] ?>">
            <table class="table">
                <tbody>
                    <tr>
                        <td>
                            <label for="nama_lengkap">Nama Lengkap :</label>
                            <input type="text" name="nama_lengkap" id="nama_lengkap" value="<?php echo $data['nama_lengkap']; ?>">
                        </td>
                    </tr>
                    <td>
                        <label for="username">username :</label>
                        <input type="text" name="username" id="username" value="<?php echo $data['username']; ?>">
                    </td>
                    <tr>
                    </tr>
                    <tr>
                        <td>
                            <label for="alamat">Alamat :</label>
                            <input type="text" name="alamat" id="alamat" value="<?php echo $data['alamat']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="alamat">Email :</label>
                            <input type="text" name="email" id="email" value="<?php echo $data['email']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="tlp">Nomor Telepon :</label>
                            <input type="text" name="tlp" id="tlp" value="<?php echo $data['tlp']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button type="submit" name="update" value="update" class="btn btn-primary">Simpan</button>
                            <a href="index.php" class="btn btn-secondary">Batal</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>