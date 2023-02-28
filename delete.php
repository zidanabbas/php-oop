<?php
include_once 'koneksi.php';

$database = new Database();
$db = $database->getConnection();

$query = "DELETE FROM user WHERE id_user = $_GET[id]";
$db->query($query);

header('Location: index.php');
