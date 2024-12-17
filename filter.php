<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Rekap Data Pendataan Dasa Wisma</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
</head>
<style>
    body {
        font-family: 'Poppins', sans-serif;
    }
</style>

<body id="page-top">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top"><img src="logo.png" alt="..." style="height: 60px; width: auto;" /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="index.php" style="color: #ffc800;">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="form.php" style="color: #ffc800;">Formulir</a></li>
                    <li class="nav-item"><a class="nav-link" href="rekap.php" style="color: #ffc800;">Rekap</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about" style="color: #ffc800;">Profil</a></li>
                    <li class="nav-item"><a class="nav-link" href="#team" style="color: #ffc800;">Tentang</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content Section -->
    <section class="page-section" id="rekap">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Rekap Data Dasa Wisma</h2>
                <p>Pilih Dasawisma untuk melihat data terkait</p>
            </div>

            <!-- Dropdown untuk memilih Dasawisma -->
            <div class="mb-3">
                <label for="filterDasawisma">Filter berdasarkan Dasawisma:</label>
                <select id="filterDasawisma" class="form-control">
                    <option value="">Pilih Dasawisma</option>
                    <?php
// Koneksi ke database
$conn = new mysqli("localhost", "root", "", "dasawisma");

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil nilai dasawisma dari permintaan POST
$dasawisma = $_POST['dasawisma'];

// Query untuk mengambil data berdasarkan dasawisma yang dipilih
$sql = "SELECT * FROM pendataan_dasawisma WHERE dasawisma = '$dasawisma'";
$result = $conn->query($sql);

// Buat respons HTML untuk mengisi tabel
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["dasawisma"] . "</td>";
        echo "<td>" . $row["no_registrasi"] . "</td>";
        echo "<td>" . $row["no_ktp_nik"] . "</td>";
        echo "<td>" . $row["nama"] . "</td>";
        echo "<td>" . $row["jabatan"] . "</td>";
        echo "<td>" . $row["jenis_kelamin"] . "</td>";
        echo "<td>" . $row["tempat_lahir"] . "</td>";
        echo "<td>" . $row["tgl_lahir"] . "</td>";
        echo "<td>" . $row["status_perkawinan"] . "</td>";
        echo "<td>" . $row["status_dalam_keluarga"] . "</td>";
        echo "<td>" . $row["agama"] . "</td>";
        echo "<td>" . $row["alamat"] . "</td>";
        echo "<td>" . $row["pendidikan"] . "</td>";
        echo "<td>" . $row["pekerjaan"] . "</td>";
        echo "<td>" . $row["akseptor_kb"] . "</td>";
        echo "<td>" . $row["aktif_dalam_kegiatan_posyandu"] . "</td>";
        echo "<td>" . $row["mengikuti_program_bina_keluarga_belajar"] . "</td>";
        echo "<td>" . $row["memiliki_tabungan"] . "</td>";
        echo "<td>" . $row["mengikuti_kelompok_belajar"] . "</td>";
        echo "<td>" . $row["mengikuti_paud_sejenisnya"] . "</td>";
        echo "<td>" . $row["ikut_dalam_kegiatan_pkk"] . "</td>";
        echo "<td>" . $row["berkebutuhan_khusus"] . "</td>";
        echo "<td>" . $row["jenis_kebutuhan_khusus"] . "</td>";
        echo "<td>" . $row["keperluan_bpjs"] . "</td>";
        echo "<td>" . $row["jenis_kepersertaan_bpjs"] . "</td>";
        echo "<td><a href='editrekap.php?id=" . $row["no_registrasi"] . "' class='btn btn-primary'><i class='fas fa-edit'></i></a></td>";
        echo "<td><a href='deleterekap.php?id=" . $row["no_registrasi"] . "' class='btn btn-danger' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\");'><i class='fas fa-trash-alt'></i></a></td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='24'>Tidak ada data yang ditemukan untuk Dasawisma ini.</td></tr>";
}

$conn->close();
?>

                </select>
            </div>

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary text-center">Tabel Rekap Pendataan Dasa Wisma</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Dasawisma</th>
                                    <th>No Registrasi</th>
                                    <th>No KTP/NIK</th>
                                    <th>Nama</th>
                                    <!-- Kolom lainnya -->
                                    <th>Edit</th>
                                    <th>Hapus</th>
                                </tr>
                            </thead>
                            <tbody id="dataBody">
                                <!-- Data akan di-load melalui AJAX sesuai pilihan Dasawisma -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- AJAX untuk filter Dasawisma -->
        <script>
            $(document).ready(function() {
                $('#filterDasawisma').on('change', function() {
                    var dasawisma = $(this).val();
                    $.ajax({
                        url: 'filter.php',
                        type: 'POST',
                        data: { dasawisma: dasawisma },
                        success: function(data) {
                            $('#dataBody').html(data);
                        }
                    });
                });
            });
        </script>
</body>

</html>
