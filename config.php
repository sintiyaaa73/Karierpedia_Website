<?php
// Informasi koneksi database
$host = "localhost";
$username = "root";
$password = "";
$database = "db_simulasikarir";

try {
    // Buat koneksi menggunakan PDO
    $koneksi = new PDO("mysql:host=$host;dbname=$database", $username, $password);

    // Atur mode error untuk PDO menjadi exception
    $koneksi->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Koneksi ke database berhasil!";
} catch (PDOException $e) {
    // Tangkap kesalahan jika koneksi gagal
    echo "Koneksi ke database gagal: " . $e->getMessage();
}
