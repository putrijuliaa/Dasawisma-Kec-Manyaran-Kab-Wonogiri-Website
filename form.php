<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Projek Besar - Dasa Wisma</title>

    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
    <!-- Font Awesome icons-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts: Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="css/styles.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif; /* Terapkan font Poppins */
        }

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
            max-width: 900px;
            padding-right: 1rem;
            padding-left: 1rem;
            margin-right: auto;
            margin-left: auto;
        }

        .small-card {
            width: 90%;
            margin-right: auto;
            margin-left: auto;
            padding: 1rem;
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
        ol li {
        margin-bottom: 20px; /* Adjust the value as needed */
    }
    </style>
</head>

<body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top"><img src="logo.png" alt="Logo" style="height: 60px; width: auto;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu <i class="fas fa-bars ms-1"></i>
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
    <section class="page-section centered-form" id="rekap">
        <div class="container small-container">
            <div class="card small-card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary text-center">Formulir Pendataan Dasa Wisma Desa</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <form action="submit.php" method="post">
                                    <ol>
                                        <li>
                                            <div class="form-group w-55">
                                                <label for="dasawisma">Dasawisma:</label>
                                                <input type="text" id="dasawisma" name="dasawisma"
                                                    class="form-control" required>
                                            </div>
                                        </li>
                                        
                                        <li>
                                            <div class="form-group w-55">
                                                <label for="no_registrasi">No Registrasi:</label>
                                                <input type="text" id="no_registrasi" name="no_registrasi"
                                                    class="form-control" required>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-group w-55">
                                                <label for="no_ktp_nik">No KTP/NIK:</label>
                                                <input type="text" id="no_ktp_nik" name="no_ktp_nik"
                                                    class="form-control" required>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-group w-55">
                                                <label for="nama">Nama:</label>
                                                <input type="text" id="nama" name="nama" class="form-control" required>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-group w-55">
                                            <label for="jabatan">Jabatan:</label>
                                            <input type="text" id="jabatan" name="jabatan" class="form-control" required>
                                            <small class="form-text text-muted">(Ket: Jabatan dalam kepengurusan TPPKK)</small><br>
                                            </div>               
                                        </li>
                                        <li>
                                            <div class="form-group w-50">
                                            <label for="jenis_kelamin">Jenis Kelamin:</label>
                                            <select style="font-size: 12px;" id="jenis_kelamin" name="jenis_kelamin" class="form-control" required>
                                            <option value="" disabled selected>Pilih Jenis Kelamin</option>   
                                            <option value="Laki-laki">Laki-laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                            </select>
                                            </div>                                           
                                        </li>
                                        <li>
                                            <div class="form-group w-55">
                                            <label for="tempat_lahir">Tempat Lahir:</label>
                                            <input type="text" id="tempat_lahir" name="tempat_lahir" class="form-control" required>
                                            </div>
                                            
                                        </li>
                                        <li>
                                            <div class="form-group w-50">
                                            <label for="tgl_lahir">Tanggal Lahir:</label>
                                            <input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control" required>
                                            </div>  
                                        </li>
                                        <li>
                                            <div class="form-group w-50">
                                            <label for="status_perkawinan">Status Perkawinan:</label>
                                            <select style="font-size: 12px;" id="status_perkawinan" name="status_perkawinan" class="form-control" required>
                                            <option value="" disabled selected>Pilih Status Perkawinan</option>   
                                                <option value="Belum Menikah">Menikah</option>
                                                <option value="Menikah">Lajang</option>
                                                <option value="Cerai Mati">Cerai Mati</option>
                                                <option value="Duda/Janda">Cerai Hidup</option>
                                            </select>
                                            </div>                                           
                                        </li>
                                        <li>
                                            <div class="form-group w-50">
                                            <label for="status_dalam_keluarga">Status Dalam Keluarga:</label>
                                            <select style="font-size: 12px;" id="status_dalam_keluarga" name="status_dalam_keluarga" class="form-control" required>
                                            <option value="" disabled selected>Pilih Status Keluarga</option>   
                                                <option value="Kepala Keluarga">Kepala Keluarga</option>
                                                <option value="Kepala Rumah Tangga">Kepala Rumah Tangga</option>
                                                <option value="Ibu Rumah Tangga">Ibu Rumah Tangga</option>
                                                <option value="Anggota Keluarga">Anggota Keluarga</option>
                                            </select>
                                            </div>                                            
                                        </li>
                                        <li>
                                            <div class="form-group w-50">
                                            <label for="agama">Agama:</label>
                                            <select style="font-size: 12px;" id="agama" name="agama" class="form-control" required onchange="checkAgama()">
                                            <option value="" disabled selected>Pilih Agama</option>   
                                                <option value="Islam">Islam</option>
                                                <option value="Kristen">Kristen</option>
                                                <option value="Khatolik">Katholik</option>
                                                <option value="Hindu">Hindu</option>
                                                <option value="Budha">Budha</option>
                                                <option value="Khonghucu">Khonghucu</option>
                                                <option value="Lainnya">Lainnya</option>
                                            </select><br>
                                            <!-- Input untuk agama lain, disembunyikan secara default -->
                                            <input type="text" id="agama_lainnya" name="agama_lainnya"
                                                placeholder="Masukkan agama lain" style="display:none;" class="form-control">
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
                                            </script>

                                            </div>
                                            
                                        </li>
                                        <li>
                                            <div class="form-group w-55">
                                            <label for="alamat">Alamat:</label>
                                            <textarea id="alamat" name="alamat" class="form-control" required></textarea>
                                            <small class="form-text text-muted">(Ket: Setelah alamat diisi status tinggal bermukim/perantau asal/merantau ke)</small>
                                            </div>                                           
                                        </li>
                                        <li>
                                            <div class="form-group w-50"> 
                                            <label for="pendidikan">Pendidikan:</label>
                                            <select style="font-size: 12px;" id="pendidikan" name="pendidikan" class="form-control" required>
                                            <option value="" disabled selected>Pilih Pendidikan</option>
                                                <option value="Tidak Sekolah">Tidak Sekolah</option>
                                                <option value="SD">SD</option>
                                                <option value="SMP">SMP</option>
                                                <option value="SMA">SMA</option>
                                                <option value="Diploma">Diploma</option>
                                                <option value="S1">S1</option>
                                                <option value="S2">S2</option>
                                                <option value="S3">S3</option>
                                            </select>
                                            <small class="form-text text-muted">(Ket: Sesuai Ijazah
                                                Terakhir)</small>
                                            </div>                                       
                                        </li>
                                        <li>
                                            <div class="form-group w-55">
                                            <label for="pekerjaan">Pekerjaan:</label>
                                            <input type="text" id="pekerjaan" name="pekerjaan" class="form-control" required>
                                            </div>    
                                        </li>
                                        <li>
                                            <div class="form-group w-50">
                                            <label for="akseptor_kb">Akseptor KB:</label>
                                            <select style="font-size: 12px;"  id="akseptor_kb" name="akseptor_kb" class="form-control" required>
                                            <option value="" disabled selected>Pilih</option>
                                                <option value="Ya (Jangka Panjang)">Ya(jangka panjang)</option>
                                                <option value="Ya (Jangka Pendek)">Ya(jangka pendek)</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                            </div>                                          
                                        </li>
                                        <li>
                                            <div class="form-group w-50">
                                            <label for="aktif_dalam_kegiatan_posyandu">Aktif dalam Kegiatan
                                                Posyandu:</label>
                                            <select style="font-size: 12px;" id="aktif_dalam_kegiatan_posyandu"
                                                name="aktif_dalam_kegiatan_posyandu" class="form-control" required>
                                                <option value="" disabled selected>Pilih</option>
                                                <option value="Ya">Ya</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                            <small class="form-text text-muted">(Ket: Posy
                                                Balita/Remaja/Lansia)</small>
                                            </div>                                           
                                        </li>
                                        <li>
                                            <div class="form-group w-50">
                                            <label for="mengikuti_program_bina_keluarga_belajar">Mengikuti Program Bina
                                                Keluarga Belajar:</label>
                                            <select style="font-size: 12px;" id="mengikuti_program_bina_keluarga_belajar"
                                                name="mengikuti_program_bina_keluarga_belajar" class="form-control" required>
                                                <option value="" disabled selected>Pilih</option>
                                                <option value="Ya">Ya</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                            <small class="form-text text-muted">(Diisi: Balita/Orang tua/Pengasuh yang
                                                terlibat)</small>
                                            </div>
                                            
                                        </li>
                                        <li>
                                            <div class="form-group w-50">
                                            <label for="memiliki_tabungan">Memiliki Tabungan:</label>
                                            <select style="font-size: 12px;" id="memiliki_tabungan" name="memiliki_tabungan" class="form-control" required>
                                            <option value="" disabled selected>Pilih</option>
                                                <option value="Ya">Ya</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                            <small class="form-text text-muted">(Ket: Diisi khusus oleh KK yang memiliki tab. uang/aset berharga)</small>
                                            </div>
                                            
                                        </li>
                                        <li>
                                            <div class="form-group w-50">
                                            <label for="mengikuti_kelompok_belajar">Mengikuti Kelompok Belajar:</label>
                                            <select style="font-size: 12px;" id="mengikuti_kelompok_belajar" name="mengikuti_kelompok_belajar" class="form-control" required>
                                            <option value="" disabled selected>Pilih</option>
                                                <option value="Ya (Paket A)">Ya (Paket A)</option>
                                                <option value="Ya (Paket B">Ya (Paket B)</option>
                                                <option value="Ya (Paket C)">Ya (Paket C)</option>
                                                <option value="Ya (KF/Keaksaraan Fungsional)">Ya (KF/Keaksaraan Fungsional)</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                            </div>                                           
                                        </li>
                                        <li>
                                            <div class="form-group w-50" >
                                            <label for="mengikuti_paud_sejenisnya">Mengikuti PAUD/Sejenisnya:</label>
                                            <select style="font-size: 12px;" id="mengikuti_paud_sejenisnya" name="mengikuti_paud_sejenisnya" class="form-control" required>
                                            <option value="" disabled selected>Pilih</option>
                                                <option value="Ya">Ya</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                            <small class="form-text text-muted">(Diisi: Anak/Orang tua/Anggota keluarga
                                                yang terlibat)</small>
                                            </div>                                            
                                        </li>
                                        <li>
                                            <div class="form-group w-50">
                                            <label for="ikut_dalam_kegiatan_pkk">Ikut dalam Kegiatan PKK:</label>
                                            <select style="font-size: 12px;" id="ikut_dalam_kegiatan_pkk" name="ikut_dalam_kegiatan_pkk" class="form-control" required>
                                            <option value="" disabled selected>Pilih</option>
                                                <option value="Ya">Ya</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                            <small class="form-text text-muted">(Ket: Jenis koperasi SP/SU (Koperasi
                                                berbadan hukum))</small>
                                            </div>
                                            
                                        </li>
                                        <li>
                                            <div class="form-group w-50">
                                            <label for="berkebutuhan_khusus">Berkebutuhan Khusus:</label>
                                            <select style="font-size: 12px;" id="berkebutuhan_khusus" name="berkebutuhan_khusus" class="form-control" required>
                                            <option value="" disabled selected>Pilih</option>
                                                <option value="Fisik">Fisik</option>
                                                <option value="Non fisik">Non Fisik</option>
                                                <option value="Tidak">Tidak</option>

                                            </select>
                                            <label for="jenis_kebutuhan_khusus">Jenis Kebutuhan Khusus:</label>
                                            <input type="text" id="jenis_kebutuhan_khusus" name="jenis_kebutuhan_khusus" class="form-control">
                                            </div>                                            
                                        </li>
                                        <li>
                                            <div class="form-group w-50">
                                            <label for="keperluan_bpjs">Kepersertaan BPJS:</label>
                                            <select style="font-size: 12px;" id="keperluan_bpjs" name="keperluan_bpjs" class="form-control" required>
                                            <option value="" disabled selected>Pilih</option>
                                                <option value="Ya">Ya</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                            </div>                                           
                                        </li>
                                        <li>
                                            <div class="form-group w-55">
                                            <label for="jenis_kepersertaan_bpjs">Jenis Kepersertaan BPJS:</label>
                                            <input type="text" id="jenis_kepersertaan_bpjs"
                                                name="jenis_kepersertaan_bpjs" class="form-control" required>
                                            </div>
                                            

                                        </li>
                                        <p></p>
                                        <input type="submit" value="Kirim" class="btn btn-primary">
                                    </ol>

                                </form>
                            </div>


                            <!-- Bootstrap core JavaScript-->
                            <script src="vendor/jquery/jquery.min.js"></script>
                            <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

                            <!-- Core plugin JavaScript-->
                            <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

                            <!-- Custom scripts for all pages-->
                            <script src="js/sb-admin-2.min.js"></script>

                            <!-- Page level plugins -->
                            <script src="vendor/datatables/jquery.dataTables.min.js"></script>
                            <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

                            <!-- Page level custom scripts -->
                            <script src="js/demo/datatables-demo.js"></script>
</body>

</html>