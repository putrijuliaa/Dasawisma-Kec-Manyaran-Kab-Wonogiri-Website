<?php
// Koneksi ke database
$conn = new mysqli("localhost", "root", "", "dasawisma");

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Jika ada ID yang diterima, proses penghapusan
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Query untuk menghapus data
    $sql = "DELETE FROM pendataan_dasawisma WHERE no_registrasi='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "<div class='alert alert-success' role='alert'>Data berhasil dihapus</div>";
        header("Location: rekap.php");
        exit();
    } else {
        echo "<div class='alert alert-danger' role='alert'>Error: " . $conn->error . "</div>";
    }
}

// Tutup koneksi
$conn->close();
?>
