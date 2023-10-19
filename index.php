<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="stylesheet" href="assets/css/navbar.css">


    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>WEBDAV - LCLP</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <link href="../assets/css/main.css" rel="stylesheet">
</head>

<body>

    <!-- ======= Header ======= -->
    <header class="header">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
        <nav class="nav">
            <a href="#" class="logo nav-link">WEBDAV    </a>
            <button class="nav-toggle" aria-keyshortcuts="Abrir menú">
                <i class="fas fa-bars"></i>
            </button>
            <ul class="nav-menu">
                <li class="nav-menu-item">
                    <a href="http://10.0.33.2" class="nav-menu-link nav-link">Regresar</a>
                </li>
               
            </ul>
        </nav>
        </div>
    </header>
    <!-- End Header -->


    <section id="file-list" class="file-list">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>Archivos en /home/pdf</h2>
            </div>

            <ul>
                <?php
                // Directorio de archivos
                $directory = '/home/pdf';

                // Obtener la lista de archivos en el directorio
                $files = scandir($directory);

                // Mostrar los archivos como enlaces
                foreach ($files as $file) {
                    if ($file != "." && $file != "..") {
                        $filePath = $directory . '/' . $file;
                        echo '<li><a href="' . $filePath . '" target="_blank">' . $file . '</a></li>';
                    }
                }
                ?>
            </ul>
        </div>
    </section>

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero">
        <div class="info d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2 data-aos="fade-down"><span>Le cortamos los pelos</span></h2>
                    </div>
                </div>
            </div>
        </div>

        <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
        <div class="carousel-item active" style="background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTqWln_hMIc9eW8YMRWfhrkj4pQJkXMb6qqow&usqp=CAU)"></div>
        </div>
    </section><!-- End Hero Section -->

    <main id="main">
        <!-- ======= Constructions Section ======= -->
        <section id="constructions" class="constructions">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>BIENVENIDO A WEBDAV</h2>
                </div>
            </div>
        </section><!-- End Constructions Section -->
    </main>


    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="footer-legal text-center position-relative">
            <div class="container">
                <div class="copyright">
                    &copy; Copyright <strong><span>LCLP</span></strong>. Todos los derechos reservados
                </div>
            </div>
        </div>

    </footer>
    <!-- End Footer -->

    <div id="preloader"></div>/home/nir/Documentos/webdav-master.zip  

    <!-- Vendor JS Files -->
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/aos/aos.js"></script>
    <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="../assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="../assets/js/main.js"></script>

</body>

</html>