<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dasboard - Dasawisma</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts: Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<style>
    body {
    font-family: 'Poppins', sans-serif; /* Terapkan font Poppins */
}

    .nav-link {
        color: #FFA500;
        /* Warna orange */
    }

    .nav-link:hover,
    .nav-link.active {
        color: #e07b00;
        /* Orange lebih gelap saat hover atau aktif */
    }
    /* Styling untuk gambar dan frame kotak */
.icon-box {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 300px; /* Ukuran kotak */
    height: 300px;
    margin: 0 auto 20px;
    border: 3px solid #ffc800; /* Warna frame */
    border-radius: 10px; /* Radius frame untuk sedikit melengkung */
    overflow: hidden; /* Pastikan gambar tidak keluar dari frame */
    transition: transform 0.3s ease, box-shadow 0.3s ease; /* Tambahkan animasi */
}

.service-icon {
    width: 100%; /* Gambar menyesuaikan dengan kotak */
    height: 100%;
    object-fit: cover; /* Agar gambar menyesuaikan ukuran kotak tanpa distorsi */
}

/* Animasi saat hover */
.icon-box:hover {
    transform: scale(1.1); /* Gambar akan membesar sedikit saat di-hover */
    box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2); /* Tambahkan bayangan saat hover */
}

</style>



<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top"><img src="logo.png" alt="..."
                    style="height: 60px; width: auto;" /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                <li class="nav-item"><a class="nav-link" href="index.php" style="color: #ffc800;">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="form.php" style="color: #ffc800;">Formulir</a></li>
                    <li class="nav-item"><a class="nav-link" href="rekap.php"style="color: #ffc800;">Rekap</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about"style="color: #ffc800;">Profil</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact"style="color: #ffc800;">Tentang</a></li>
                </ul>
            </div>



        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead" style="background-image: url('manyaran2.jpeg'); background-size: cover;">
        <div class="container">
            <div class="masthead-subheading">Go Nyawiji Sesarengan Mbangun Wonogiri</div>
            <div class="masthead-heading text-uppercase">DASAWISMA Kecamatan Manyaran</div>
            <a class="btn btn-primary btn-xl text-uppercase" href="#services">Selengkapnya</a>
        </div>
    </header>


    <!-- Services-->
<section class="page-section" id="services">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Dasawisma</h2>
            <h3 class="section-subheading text-muted">Digitalisasi Data Dasa Wisma TP PKK Kecamatan Manyaran Kabupaten Wonogiri</h3>
        </div>
        <div class="row text-center">
            <div class="col-md-4">
                <div class="icon-box">
                    <img src="Wonogiri.jpg" alt="Pengertian" class="service-icon">
                </div>
                <h4 class="my-3">Pengertian</h4>
                <p class="text-muted">Dasa Wisma adalah kelompok ibu-ibu yang tergabung dalam program PKK dan terdiri dari 10 kepala keluarga rumah yang bertetangga. Dasa wisma memiki peran dalam mewujudkan keluarga sejahtera dalam hal ini perlu adanya pendataan data dasa wisma.</p>
            </div>
            <div class="col-md-4">
                <div class="icon-box">
                    <img src="gambar1.jpg" alt="Manfaat" class="service-icon">
                </div>
                <h4 class="my-3">Peran</h4>
                <p class="text-muted">Dasa wisma memiki peran dalam mewujudkan keluarga sejahtera.</p>
            </div>
            <div class="col-md-4">
                <div class="icon-box">
                    <img src="gambar2.jpg" alt="Dasa Wisma Manyaran" class="service-icon">
                </div>
                <h4 class="my-3">Manfaat</h4>
                <p class="text-muted">Perencanaan pembangunan lebih tepat, diketahui permasalahan sosial di masyarakat sehingga akan lebih mudah dalam menyusun strategi bagaimana mengatasi permaslaahan tersebut.</p>
            </div>
        </div>
    </div>
</section>

   <!-- Contact-->
   <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Dasa Wisma Manyaran</h3>
                </div>
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Name input-->
                                <input class="form-control" id="name" type="text" placeholder="Your Name *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control" id="email" type="email" placeholder="Your Email *" data-sb-validations="required,email" />
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Phone number input-->
                                <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <!-- Message input-->
                                <textarea class="form-control" id="message" placeholder="Your Message *" data-sb-validations="required"></textarea>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>
                        </div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center text-white mb-3">
                            <div class="fw-bolder">Form submission successful!</div>
                            To activate this form, sign up at
                            <br />
                            <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                    <!-- Submit Button-->
                    <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase disabled" id="submitButton" type="submit">Send Message</button></div>
                </form>
            </div>
        </section>
</body>

</html>