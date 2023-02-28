<?php
include '../config/env.php';

// if (!isset($_POST['submit'])) {
//     $nama_produk = $_POST['nama_produk'];
//     $stok = $_POST['stok'];
//     $harga = $_POST['harga'];
//     $detail = $_POST['detail'];
//     $id_kategori = $_POST['id_kategori'];

//     // upload gambar
//     $target_dir = "uploads/";
//     $target_file = $target_dir . basename($_FILES["gambar"]["name"]);
//     $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
//     $allowed_types = array('jpg', 'jpeg', 'png', 'gif');

//     if (in_array($imageFileType, $allowed_types)) {
//         if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {

//             // query untuk insert data produk
//             $sql = "INSERT INTO produk (nama_produk, stok, harga, detail, id_kategori) VALUES ('$nama_produk', '$stok', '$harga', '$detail', '$id_kategori', '$target_file')";

//             if ($conn->query($sql) === TRUE) {
//                 echo "Produk berhasil ditambahkan.";
//             } else {
//                 echo "Error: " . $sql . "<br>" . $conn->error;
//             }

//             $conn->close();
//         } else {
//             echo "Upload gambar gagal.";
//         }
//     } else {
//         echo "Format gambar yang diizinkan adalah jpg, jpeg, png, atau gif.";
//     }
// }

$nama_produk = $_POST['nama_produk'];
$stok = $_POST['stok'];
$harga = $_POST['harga'];
$detail = $_POST['detail'];
$id_kategori = $_POST['id_kategori'];
$gambar = $_POST['gambar'];

$query = "INSERT INTO produk (nama_produk, stok, harga, detail, id_kategori, gambar) VALUES ('$nama_produk','$stok','$harga','$detail','$id_kategori','$gambar')";
$result = mysqli_query($conn, $query);

if ($result) {
    # code...
    header("location:daftar-produk.php");
}else{
    echo "Data Gagal Di tambahkan" . mysqli_error($conn);
}



// if (!isset($_POST['submit'])) {
//     # code...
//     $nama_produk = $_POST['nama_produk'];
//     $stok = $_POST['stok'];
//     $harga = $_POST['harga'];
//     $detail = $_POST['detail'];
//     $id_kategori = $_POST['id_kategori'];

//     // Upload Gambar
//     $target_dir = "uploads";
//     $target_file = $target_dir . basename($_FILES["gambar"]["name"]);
//     $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
//     $allowed_types = array('jpg', 'jpeg', 'png', 'gif');

//     if (in_array($imageFileType, $allowed_types)) {
//         # code...
//         if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
//             # code...

//             // query untuk insert data
//             $query = "INSERT INTO produk (nama_produk, stok, harga, detail, id_kategori, gambar) VALUES ('$nama_produk','$stok','$harga','$detail','$id_kategori', '$target_file')";
//             $result = mysqli_query($conn, $query);

//             if ($conn->query($query) === TRUE) {
//                 # code...
//                 echo "Produk Berhasil Ditambahkan. ";
//             }else {
//                 # code...
//                 echo "Error: " . $query. "<br>" . $conn->error;
//             }
//             $conn->close();
//         }else {
//             # code...
//             echo "Upload Gambar Gagal!";
//         }
//     }else {
//         # code...
//         echo "Format gambar yang diizinkan adalah jpeg, jpg, png, gif.";
//     }
// }

// ?>