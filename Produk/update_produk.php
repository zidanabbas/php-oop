<?php
	// koneksi database
	include '../config/env.php';

	// cek apakah form telah di-submit
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$id_produk = $_POST["id_produk"];
		$nama_produk = $_POST["nama_produk"];
		$stok = $_POST["stok"];
		$harga = $_POST["harga"];
		$detail = $_POST["detail"];
		$id_kategori = $_POST["id_kategori"];

		// upload gambar produk baru jika ada
		$gambar = "";
		if ($_FILES["gambar"]["name"] != "") {
			$target_dir = "uploads/";
			$target_file = $target_dir . basename($_FILES["gambar"]["name"]);
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

			// cek apakah file gambar yang diupload adalah gambar valid
			$check = getimagesize($_FILES["gambar"]["tmp_name"]);
			if($check !== false) {
				if ($_FILES["gambar"]["size"] > 500000) {
					echo "<div class='alert alert-danger'>Ukuran file gambar terlalu besar. Maksimum 500KB.</div>";
				} else {
					if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
					&& $imageFileType != "gif" ) {
						echo "<div class='alert alert-danger'>Hanya file gambar dengan ekstensi JPG, JPEG, PNG, dan GIF yang diizinkan.</div>";
					} else {
						if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
							$gambar = $target_file;
						} else {
							echo "<div class='alert alert-danger'>Gagal mengupload file gambar.</div>";
						}
					}
				}
			} else {
				echo "<div class='alert alert-danger'>File yang diupload bukan gambar.</div>";
			}
		}

		// update data produk ke dalam database
		$sql = "UPDATE produk SET nama_produk='$nama_produk', stok='$stok', harga='$harga', detail='$detail', id_kategori=$id_kategori";
		if ($gambar != "") {
			$sql .= ", gambar='$gambar'";
		}
		$sql .= " WHERE id_produk=$id_produk";

		if ($conn->query($sql) === TRUE) {
			echo "<div class='alert alert-success'>Produk berhasil di-update.</div>";
		} else {
			echo "<div class='alert alert-danger'>Gagal meng-update produk: " . $conn->error . "</div>";
		}
	}

	$conn->close();
