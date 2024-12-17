<?php
$host = "localhost"; // Nama host, biasanya "localhost"
$user = "root"; // Username database Anda
$password = ""; // Password database Anda, kosongkan jika tidak ada
$database = "dasawisma"; // Nama database yang Anda buat

// Membuat koneksi ke database
$conn = new mysqli($host, $user, $password, $database);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
