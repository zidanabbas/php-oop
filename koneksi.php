<?php
class Database {
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "latihan_ujikom";

    public $koneksi;

    // function untuk membuat koneksi
    public function getConnection() {
        $this->koneksi = null;

        try {
        $this->koneksi = new mysqli($this->host, $this->username, $this->password, $this->database);
        } catch(Exception $e) {
        echo "Error: " . $e->getMessage();
        }

        return $this->koneksi;
    }
}
