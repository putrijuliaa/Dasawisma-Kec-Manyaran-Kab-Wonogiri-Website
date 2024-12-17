<?php
// Koneksi ke database
$conn = new mysqli("localhost", "root", "", "dasawisma");

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Cek jika ada ID dalam URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM pendataan_dasawisma WHERE no_registrasi='$id'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $no_ktp_nik = $_POST['no_ktp_nik'];
    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $status_perkawinan = $_POST['status_perkawinan'];
    $status_dalam_keluarga = $_POST['status_dalam_keluarga'];
    $agama = $_POST['agama'];
    $agama_lainnya = isset($_POST['agama_lainnya']) ? $_POST['agama_lainnya'] : null;
    if ($agama === 'Lainnya' && $agama_lainnya) {
        $agama = "Lainnya: $agama_lainnya";
    }
    $alamat = $_POST['alamat'];
    $pendidikan = $_POST['pendidikan'];
    $pekerjaan = $_POST['pekerjaan'];
    $akseptor_kb = $_POST['akseptor_kb'];
    $aktif_dalam_kegiatan_posyandu = $_POST['aktif_dalam_kegiatan_posyandu'];
    $mengikuti_program_bina_keluarga_belajar = $_POST['mengikuti_program_bina_keluarga_belajar'];
    $memiliki_tabungan = $_POST['memiliki_tabungan'];
    $mengikuti_kelompok_belajar = $_POST['mengikuti_kelompok_belajar'];
    $mengikuti_paud_sejenisnya = $_POST['mengikuti_paud_sejenisnya'];
    $ikut_dalam_kegiatan_pkk = $_POST['ikut_dalam_kegiatan_pkk'];
    $berkebutuhan_khusus = $_POST['berkebutuhan_khusus'];
    $jenis_kebutuhan_khusus = $_POST['jenis_kebutuhan_khusus'];
    $keperluan_bpjs = $_POST['keperluan_bpjs'];
    $jenis_kepersertaan_bpjs = $_POST['jenis_kepersertaan_bpjs'];

    $sql = "UPDATE pendataan_dasawisma SET 
                no_ktp_nik='$no_ktp_nik', 
                nama='$nama', 
                jabatan='$jabatan', 
                jenis_kelamin='$jenis_kelamin', 
                tempat_lahir='$tempat_lahir', 
                tgl_lahir='$tgl_lahir', 
                status_perkawinan='$status_perkawinan', 
                status_dalam_keluarga='$status_dalam_keluarga', 
                agama='$agama', 
                agama_lainnya='$agama', 
                alamat='$alamat', 
                pendidikan='$pendidikan', 
                pekerjaan='$pekerjaan', 
                akseptor_kb='$akseptor_kb', 
                aktif_dalam_kegiatan_posyandu='$aktif_dalam_kegiatan_posyandu', 
                mengikuti_program_bina_keluarga_belajar='$mengikuti_program_bina_keluarga_belajar', 
                memiliki_tabungan='$memiliki_tabungan', 
                mengikuti_kelompok_belajar='$mengikuti_kelompok_belajar', 
                mengikuti_paud_sejenisnya='$mengikuti_paud_sejenisnya', 
                ikut_dalam_kegiatan_pkk='$ikut_dalam_kegiatan_pkk', 
                berkebutuhan_khusus='$berkebutuhan_khusus', 
                jenis_kebutuhan_khusus='$jenis_kebutuhan_khusus', 
                keperluan_bpjs='$keperluan_bpjs', 
                jenis_kepersertaan_bpjs='$jenis_kepersertaan_bpjs' 
            WHERE no_registrasi='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil diperbarui";
        header("Location: rekap.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <style>
        .centered-form {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            min-height: 100vh;
        }

        .form-container {
            width: 60%;
            background-color: #f8f9fc;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .small-container {
            width: 90%;
            /* Mengurangi lebar container */
            max-width: 900px;
            /* Batasi lebar maksimum */
            padding-right: 1rem;
            /* Sesuaikan padding */
            padding-left: 1rem;
            margin-right: auto;
            margin-left: auto;
        }

        .small-card {
            width: 90%;
            /* Mengurangi lebar card */
            margin-right: auto;
            margin-left: auto;
            padding: 1rem;
            /* Sesuaikan padding card */
        }

        .text-center {
            text-align: center;
        }


        ol {
            padding-left: 50px;
        }


        label {
            font-weight: bold;
        }
    </style>
</head>


<body id="page-top">
    <div id="wrapper">
        <!-- Sidebar (Include your sidebar here) -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <!-- Topbar content (same as in your original HTML) -->
                </nav>
                <div class="container-fluid small-container">
                    <div class="card small-card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary text-center">Edit Data Dasawisma</h6>
                        </div>
                        <div class="card-body">
                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) . "?id=" . $id; ?>"
                                method="post">
                                <ol>
                                    <li>
                                            <div class="form-group w-55">
                                                <label for="dasawisma">Dasawisma:</label>
                                                <input type="text" id="dasawisma" name="dasawisma"
                                                    class="form-control"
                                                    value="<?php echo htmlspecialchars($row['dasawisma']); ?>" required>
                                            </div>
                                        </li>
                                    <li>
                                        <div class="form-group w-55">
                                            <label for="no_registrasi">No Registrasi:</label>
                                            <input type="text" id="no_registrasi" name="no_registrasi"
                                                class="form-control"
                                                value="<?php echo htmlspecialchars($row['no_registrasi']); ?>" disabled>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-group w-55">
                                            <label for="no_ktp_nik">No KTP/NIK:</label>
                                            <input type="text" id="no_ktp_nik" name="no_ktp_nik" class="form-control"
                                                value="<?php echo htmlspecialchars($row['no_ktp_nik']); ?>" required>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-group w-55">
                                            <label for="nama">Nama:</label>
                                            <input type="text" id="nama" name="nama" class="form-control"
                                                value="<?php echo htmlspecialchars($row['nama']); ?>" required>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-group w-55">
                                            <label for="jabatan">Jabatan:</label>
                                            <input type="text" id="jabatan" name="jabatan" class="form-control"
                                                value="<?php echo htmlspecialchars($row['jabatan']); ?>" required>
                                            <small class="form-text text-muted">(Ket: Jabatan dalam kepengurusan
                                                TPPKK)</small><br>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-group w-50">
                                            <label for="jenis_kelamin">Jenis Kelamin:</label>
                                            <select id="jenis_kelamin" name="jenis_kelamin" class="form-control"
                                                required>
                                                <option value="" disabled selected>Pilih Jenis Kelamin</option>
                                                <option value="Laki-laki" <?php echo $row['jenis_kelamin'] == 'Laki-laki' ? 'selected' : ''; ?>>Laki-laki</option>
                                                <option value="Perempuan" <?php echo $row['jenis_kelamin'] == 'Perempuan' ? 'selected' : ''; ?>>Perempuan</option>
                                            </select>

                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-group w-55">
                                            <label for="tempat_lahir">Tempat Lahir:</label>
                                            <input type="text" id="tempat_lahir" name="tempat_lahir"
                                                class="form-control"
                                                value="<?php echo htmlspecialchars($row['tempat_lahir']); ?>" required>
                                        </div>

                                    </li>
                                    <li>
                                        <div class="form-group w-50">
                                            <label for="tgl_lahir">Tanggal Lahir:</label>
                                            <input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control"
                                                value="<?php echo htmlspecialchars($row['tgl_lahir']); ?>" required>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-group w-50">
                                            <label for="status_perkawinan">Status Perkawinan:</label>
                                            <select id="status_perkawinan" name="status_perkawinan" class="form-control"
                                                value="<?php echo htmlspecialchars($row['status_perkawinan']); ?>"
                                                required>
                                                <option value="" disabled selected>Pilih Status Perkawinan</option>
                                                <option value="Belum Menikah" <?php echo $row['status_perkawinan'] == 'Belum Menikah' ? 'selected' : ''; ?>>
                                                    Belum Menikah</option>
                                                <option value="Menikah" <?php echo $row['status_perkawinan'] == 'Menikah' ? 'selected' : ''; ?>>Menikah</option>
                                                <option value="Lajang" <?php echo $row['status_perkawinan'] == 'Lajang' ? 'selected' : ''; ?>>Lajang</option>
                                                <option value="Cerai Mati" <?php echo $row['status_perkawinan'] == 'Cerai Mati' ? 'selected' : ''; ?>>Cerai Mati</option>
                                                <option value="Duda/Janda" <?php echo $row['status_perkawinan'] == 'Duda/Janda' ? 'selected' : ''; ?>>Cerai
                                                    Hidup</option>
                                            </select>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-group w-50">
                                            <label for="status_dalam_keluarga">Status Dalam Keluarga:</label>
                                            <select id="status_dalam_keluarga" name="status_dalam_keluarga"
                                                class="form-control"
                                                value="<?php echo htmlspecialchars($row['status_dalam_keluarga']); ?>"
                                                required>
                                                <option value="" disabled selected>Pilih Status Dalam Keluarga</option>
                                                <option value="Kepala Keluarga" <?php echo $row['status_dalam_keluarga'] == 'Kepala Keluarga' ? 'selected' : ''; ?>>Kepala Keluarga</option>
                                                <option value="Kepala Rumah Tangga" <?php echo $row['status_dalam_keluarga'] == 'Kepala Rumah Tangga' ? 'selected' : ''; ?>>Kepala Rumah Tangga</option>
                                                <option value="Ibu Rumah Tangga" <?php echo $row['status_dalam_keluarga'] == 'Ibu Rumah Tangga' ? 'selected' : ''; ?>>Ibu Rumah Tangga</option>
                                                <option value="Anggota Keluarga" <?php echo $row['status_dalam_keluarga'] == 'Anggota Keluarga' ? 'selected' : ''; ?>>Anggota Keluarga</option>
                                            </select>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-group w-50">
                                            <label for="agama">Agama:</label>
                                            <select id="agama" name="agama" class="form-control" onchange="checkAgama()"
                                                value="<?php echo htmlspecialchars($row['agama']); ?>" required>
                                                <option value="" disabled selected>Pilih Agama</option>
                                                <option value="Islam" <?php echo $row['agama'] == 'Islam' ? 'selected' : ''; ?>>Islam</option>
                                                <option value="Kristen" <?php echo $row['agama'] == 'Kristen' ? 'selected' : ''; ?>>Kristen</option>
                                                <option value="Khatolik" <?php echo $row['agama'] == 'Khatolik' ? 'selected' : ''; ?>>Katholik</option>
                                                <option value="Hindu" <?php echo $row['agama'] == 'Hindu' ? 'selected' : ''; ?>>Hindu</option>
                                                <option value="Budha" <?php echo $row['agama'] == 'Budha' ? 'selected' : ''; ?>>Budha</option>
                                                <option value="Khonghucu" <?php echo $row['agama'] == 'Khonghucu' ? 'selected' : ''; ?>>Khonghucu</option>
                                                <option value="Lainnya" <?php echo $row['agama'] == 'Lainnya' ? 'selected' : ''; ?>>Lainnya</option>
                                            </select><br>
                                            <!-- Input untuk agama lain, disembunyikan secara default -->
                                            <input type="text" id="agama_lainnya" name="agama_lainnya"
                                                placeholder="Masukkan agama lain" style="display:none;"
                                                class="form-control"
                                                value="<?php echo htmlspecialchars($row['agama_lainnya']); ?>" required>
                                            <script>
                                                function checkAgama() {
                                                    var agama = document.getElementById("agama").value;
                                                    var agamaLainnyaInput = document.getElementById("agama_lainnya");
                                                    if (agama === "Lainnya") {
                                                        agamaLainnyaInput.style.display = "block";
                                                        agamaLainnyaInput.required = true; // Buat input wajib diisi jika 'Lainnya' dipilih
                                                    } else {
                                                        agamaLainnyaInput.style.display = "none";
                                                        agamaLainnyaInput.required = false;
                                                    }
                                                }
                                                // Set the selected option in the select field and show/hide agama_lainnya input based on the existing value
                                                window.onload = function () {
                                                    var agama = "<?php echo htmlspecialchars($row['agama']); ?>";
                                                    var agamaLainnyaInput = document.getElementById("agama_lainnya");
                                                    var select = document.getElementById("agama");

                                                    if (agama.startsWith("Lainnya: ")) {
                                                        select.value = "Lainnya";
                                                        agamaLainnyaInput.value = agama.substring(9); // Extracts the agama_lainnya part
                                                        agamaLainnyaInput.style.display = "block";
                                                        agamaLainnyaInput.required = true;
                                                    } else {
                                                        select.value = agama;
                                                        agamaLainnyaInput.style.display = "none";
                                                        agamaLainnyaInput.required = false;
                                                    }
                                                };
                                            </script>

                                        </div>

                                    </li>
                                    <li>
                                        <div class="form-group w-55">
                                            <label for="alamat">Alamat:</label>
                                            <textarea id="alamat" name="alamat" class="form-control"
                                                required><?php echo htmlspecialchars($row['alamat']); ?></textarea>
                                            <small class="form-text text-muted">(Ket: Setelah alamat diisi status
                                                tinggal bermukim/perantau asal/merantau ke)</small>
                                        </div>

                                    </li>
                                    <li>
                                        <div class="form-group w-50">
                                            <label for="pendidikan">Pendidikan:</label>
                                            <select id="pendidikan" name="pendidikan" class="form-control"
                                                value="<?php echo htmlspecialchars($row['pendidikan']); ?>" required>
                                                <option value="" disabled selected>Pilih Pendidikan</option>
                                                <option value="Tidak Sekolah" <?php echo $row['pendidikan'] == 'Tidak Sekolah' ? 'selected' : ''; ?>>Tidak Sekolah</option>
                                                <option value="SD" <?php echo $row['pendidikan'] == 'SD' ? 'selected' : ''; ?>>SD</option>
                                                <option value="SMP" <?php echo $row['pendidikan'] == 'SMP' ? 'selected' : ''; ?>>SMP</option>
                                                <option value="SMA" <?php echo $row['pendidikan'] == 'SMA' ? 'selected' : ''; ?>>SMA</option>
                                                <option value="Diploma" <?php echo $row['pendidikan'] == 'Diploma' ? 'selected' : ''; ?>>Diploma</option>
                                                <option value="S1" <?php echo $row['pendidikan'] == 'S1' ? 'selected' : ''; ?>>S1</option>
                                                <option
                                                    value="S2 <?php echo $row['pendidikan'] == 'S2' ? 'selected' : ''; ?>">
                                                    S2</option>
                                                <option value="S3" <?php echo $row['pendidikan'] == 'S3' ? 'selected' : ''; ?>>S3</option>
                                            </select>
                                            <small class="form-text text-muted">(Ket: Sesuai Ijazah
                                                Terakhir)</small>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-group w-55">
                                            <label for="pekerjaan">Pekerjaan:</label>
                                            <input type="text" id="pekerjaan" name="pekerjaan" class="form-control"
                                                value="<?php echo htmlspecialchars($row['pekerjaan']); ?>" required>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-group w-50">
                                            <label for="akseptor_kb">Akseptor KB:</label>
                                            <select id="akseptor_kb" name="akseptor_kb" class="form-control"
                                                value="<?php echo htmlspecialchars($row['akseptor_kb']); ?>" required>
                                                <option value="" disabled selected>Pilih</option>
                                                <option value="Ya (Jangka Panjang)" <?php echo $row['akseptor_kb'] == 'Ya (Jangka Panjang)' ? 'selected' : ''; ?>>Ya(jangka panjang)</option>
                                                <option value="Ya (Jangka Pendek)" <?php echo $row['akseptor_kb'] == 'Ya (Jangka Pendek)' ? 'selected' : ''; ?>>Ya(jangka pendek)</option>
                                                <option value="Tidak" <?php echo $row['akseptor_kb'] == 'Tidak' ? 'selected' : ''; ?>>Tidak </option>
                                            </select>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-group w-50">
                                            <label for="aktif_dalam_kegiatan_posyandu">Aktif dalam Kegiatan
                                                Posyandu:</label>
                                            <select id="aktif_dalam_kegiatan_posyandu"
                                                name="aktif_dalam_kegiatan_posyandu" class="form-control"
                                                value="<?php echo htmlspecialchars($row['aktif_dalam_kegiatan_posyandu']); ?>"
                                                required>
                                                <option value="" disabled selected>Pilih</option>
                                                <option value="Ya" <?php echo $row['aktif_dalam_kegiatan_posyandu'] == 'Ya' ? 'selected' : ''; ?>>Ya
                                                </option>
                                                <option value="Tidak" <?php echo $row['aktif_dalam_kegiatan_posyandu'] == 'Tidak' ? 'selected' : ''; ?>>Tidak</option>
                                            </select>
                                            <small class="form-text text-muted">(Ket: Posy
                                                Balita/Remaja/Lansia)</small>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-group w-50">
                                            <label for="mengikuti_program_bina_keluarga_belajar">Mengikuti Program Bina
                                                Keluarga Belajar:</label>
                                            <select id="mengikuti_program_bina_keluarga_belajar"
                                                name="mengikuti_program_bina_keluarga_belajar" class="form-control"
                                                value="<?php echo htmlspecialchars($row['mengikuti_program_bina_keluarga_belajar']); ?>"
                                                required>
                                                <option value="" disabled selected>Pilih</option>
                                                <option value="Ya" <?php echo $row['mengikuti_program_bina_keluarga_belajar'] == 'Ya' ? 'selected' : ''; ?>>Ya</option>
                                                <option value="Tidak" <?php echo $row['mengikuti_program_bina_keluarga_belajar'] == 'Tidak' ? 'selected' : ''; ?>>Tidak</option>
                                            </select>
                                            <small class="form-text text-muted">(Diisi: Balita/Orang tua/Pengasuh yang
                                                terlibat)</small>
                                        </div>

                                    </li>
                                    <li>
                                        <div class="form-group w-50">
                                            <label for="memiliki_tabungan">Memiliki Tabungan:</label>
                                            <select id="memiliki_tabungan" name="memiliki_tabungan" class="form-control"
                                                value="<?php echo htmlspecialchars($row['memiliki_tabungan']); ?>"
                                                required>
                                                <option value="" disabled selected>Pilih</option>
                                                <option value="Ya" <?php echo $row['memiliki_tabungan'] == 'Ya' ? 'selected' : ''; ?>>Ya</option>
                                                <option value="Tidak" <?php echo $row['memiliki_tabungan'] == 'Tidak' ? 'selected' : ''; ?>>Tidak</option>
                                            </select>
                                            <small class="form-text text-muted">(Ket: Diisi khusus oleh KK yang memiliki
                                                tab. uang/aset berharga)</small>
                                        </div>

                                    </li>
                                    <li>
                                        <div class="form-group w-50">
                                            <label for="mengikuti_kelompok_belajar">Mengikuti Kelompok Belajar:</label>
                                            <select id="mengikuti_kelompok_belajar" name="mengikuti_kelompok_belajar"
                                                class="form-control"
                                                value="<?php echo htmlspecialchars($row['mengikuti_kelompok_belajar']); ?>"
                                                required>
                                                <option value="" disabled selected>Pilih</option>
                                                <option value="Ya (Paket A)" <?php echo $row['mengikuti_kelompok_belajar'] == 'Ya (Paket A)' ? 'selected' : ''; ?>>Ya (Paket A)</option>
                                                <option value="Ya (Paket B)" <?php echo $row['mmengikuti_kelompok_belajar'] == 'Ya (Paket B)' ? 'selected' : ''; ?>>Ya (Paket B)</option>
                                                <option value="Ya (Paket C)" <?php echo $row['mengikuti_kelompok_belajar'] == 'Ya (Paket C)' ? 'selected' : ''; ?>>Ya (Paket C)</option>
                                                <option value="Ya (KF/Keaksaraan Fungsional)" <?php echo $row['mengikuti_kelompok_belajar'] == 'Ya ((KF/Keaksaraan Fungsional)' ? 'selected' : ''; ?>>Ya (KF/Keaksaraan Fungsional)</option>
                                                <option value="Tidak" <?php echo $row['mengikuti_kelompok_belajar'] == 'Tidak' ? 'selected' : ''; ?>>Tidak</option>
                                            </select>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-group w-50">
                                            <label for="mengikuti_paud_sejenisnya">Mengikuti PAUD/Sejenisnya:</label>
                                            <select id="mengikuti_paud_sejenisnya" name="mengikuti_paud_sejenisnya"
                                                class="form-control"
                                                value="<?php echo htmlspecialchars($row['nmengikuti_paud_sejenisnya']); ?>"
                                                required>
                                                <option value="" disabled selected>Pilih</option>
                                                <option value="Ya" <?php echo $row['mengikuti_paud_sejenisnya'] == 'Ya' ? 'selected' : ''; ?>>Ya</option>
                                                <option value="Tidak" <?php echo $row['mengikuti_paud_sejenisnya'] == 'Tidak' ? 'selected' : ''; ?>>Tidak</option>
                                            </select>
                                            <small class="form-text text-muted">(Diisi: Anak/Orang tua/Anggota keluarga
                                                yang terlibat)</small>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-group w-50">
                                            <label for="ikut_dalam_kegiatan_pkk">Ikut dalam Kegiatan PKK:</label>
                                            <select id="ikut_dalam_kegiatan_pkk" name="ikut_dalam_kegiatan_pkk"
                                                class="form-control"
                                                value="<?php echo htmlspecialchars($row['ikut_dalam_kegiatan_pkk']); ?>"
                                                required>
                                                <option value="" disabled selected>Pilih</option>
                                                <option value="Ya" <?php echo $row['ikut_dalam_kegiatan_pkk'] == 'Ya' ? 'selected' : ''; ?>>Ya</option>
                                                <option value="Tidak" <?php echo $row['ikut_dalam_kegiatan_pkk'] == 'Tidak' ? 'selected' : ''; ?>>Tidak</option>
                                            </select>
                                            <small class="form-text text-muted">(Ket: Jenis koperasi SP/SU (Koperasi
                                                berbadan hukum))</small>
                                        </div>

                                    </li>
                                    <li>
                                        <div class="form-group w-50">
                                            <label for="berkebutuhan_khusus">Berkebutuhan Khusus:</label>
                                            <select id="berkebutuhan_khusus" name="berkebutuhan_khusus"
                                                class="form-control"
                                                value="<?php echo htmlspecialchars($row['berkebutuhan_khusus']); ?>"
                                                required>
                                                <option value="" disabled selected>Pilih</option>
                                                <option value="Fisik" <?php echo $row['berkebutuhan_khusus'] == 'Fisik' ? 'selected' : ''; ?>>Fisik</option>
                                                <option value="Non fisik" <?php echo $row['berkebutuhan_khusus'] == 'Non Fisik' ? 'selected' : ''; ?>>Non Fisik</option>
                                                <option value="Tidak" <?php echo $row['berkebutuhan_khusus'] == 'Tidak' ? 'selected' : ''; ?>>Tidak</option>
                                            </select>
                                            <script>
                                                document.getElementById('berkebutuhan_khusus').addEventListener('change', function () {
                                                    var jenisInput = document.getElementById('jenis_kebutuhan_khusus');
                                                    if (this.value === 'Tidak') {
                                                        jenisInput.value = ''; // Kosongkan input
                                                        jenisInput.disabled = true; // Nonaktifkan input
                                                    } else {
                                                        jenisInput.disabled = false; // Aktifkan kembali input
                                                    }
                                                });

                                            </script>


                                            <label for="jenis_kebutuhan_khusus">Jenis Kebutuhan Khusus:</label>
                                            <input type="text" id="jenis_kebutuhan_khusus" name="jenis_kebutuhan_khusus"
                                                class="form-control"
                                                value="<?php echo htmlspecialchars($row['jenis_kebutuhan_khusus']); ?>" />
                                        </div>
                                    </li>

                                    <li>
                                        <div class="form-group w-50">
                                            <label for="keperluan_bpjs">Kepersertaan BPJS:</label>
                                            <select id="keperluan_bpjs" name="keperluan_bpjs" class="form-control"
                                                value="<?php echo htmlspecialchars($row['keperluan_bpjs']); ?>"
                                                required>
                                                <option value="" disabled selected>Pilih</option>
                                                <option value="Ya" <?php echo $row['keperluan_bpjs'] == 'Ya' ? 'selected' : ''; ?>>Ya</option>
                                                <option value="Tidak" <?php echo $row['keperluan_bpjs'] == 'Tidak' ? 'selected' : ''; ?>>Tidak</option>
                                            </select>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="form-group w-55">
                                            <label for="jenis_kepersertaan_bpjs">Jenis Kepersertaan BPJS:</label>
                                            <input type="text" id="jenis_kepersertaan_bpjs"
                                                name="jenis_kepersertaan_bpjs" class="form-control"
                                                value="<?php echo htmlspecialchars($row['jenis_kepersertaan_bpjs']); ?>"
                                                required>
                                        </div>


                                    </li>
                                    <input type="submit" value="Update" class="btn btn-primary">

                                </ol>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/sb-admin-2.min.js"></script>
</body>

</html>