<?php
include 'db_connect.php'; // Menghubungkan ke database

// Ambil data dari form
$dasawisma = $_POST['dasawisma'];
$no_registrasi = $_POST['no_registrasi'];
$no_ktp_nik = $_POST['no_ktp_nik'];
$nama = $_POST['nama'];
$jabatan = $_POST['jabatan'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$tempat_lahir = $_POST['tempat_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$status_perkawinan = $_POST['status_perkawinan'];
$status_dalam_keluarga = $_POST['status_dalam_keluarga'];
$agama = $_POST['agama'];
$agama_lainnya = isset($_POST['agama']) ? $_POST['agama'] : null;
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

// Query untuk memasukkan data ke dalam tabel
$sql = "INSERT INTO pendataan_dasawisma (dasawisma, no_registrasi, no_ktp_nik, nama, jabatan, jenis_kelamin, tempat_lahir, tgl_lahir, status_perkawinan, status_dalam_keluarga, agama, alamat, pendidikan, pekerjaan, akseptor_kb, aktif_dalam_kegiatan_posyandu, mengikuti_program_bina_keluarga_belajar, memiliki_tabungan, mengikuti_kelompok_belajar, mengikuti_paud_sejenisnya, ikut_dalam_kegiatan_pkk, berkebutuhan_khusus, jenis_kebutuhan_khusus, keperluan_bpjs, jenis_kepersertaan_bpjs) 
VALUES ('$dasawisma', '$no_registrasi', '$no_ktp_nik', '$nama', '$jabatan', '$jenis_kelamin', '$tempat_lahir', '$tgl_lahir', '$status_perkawinan', '$status_dalam_keluarga', '$agama', '$alamat', '$pendidikan', '$pekerjaan', '$akseptor_kb', '$aktif_dalam_kegiatan_posyandu', '$mengikuti_program_bina_keluarga_belajar', '$memiliki_tabungan', '$mengikuti_kelompok_belajar', '$mengikuti_paud_sejenisnya', '$ikut_dalam_kegiatan_pkk', '$berkebutuhan_khusus', '$jenis_kebutuhan_khusus', '$keperluan_bpjs', '$jenis_kepersertaan_bpjs')";

// Cek jika user memilih agama "Lainnya"
if ($agama === 'Lainnya' && !empty($agama_lainnya)) {
    $agama = $agama_lainnya; // Ganti agama dengan input lainnya
}

// Mengeksekusi query dan memeriksa apakah berhasil
if ($conn->query($sql) === TRUE) {
    echo "Data berhasil disimpan!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Menutup koneksi
$conn->close();
?>
