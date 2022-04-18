<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Arkitektur - Architecture HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border position-relative text-primary" style="width: 6rem; height: 6rem;" role="status"></div>
        <img class="position-absolute top-50 start-50 translate-middle" src="img/logo.png" width="5%" alt="Icon">
    </div>
    <!-- Spinner End -->




    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-lg-0 px-lg-5 wow fadeIn"
        data-wow-delay="0.1s">
        <a href="index.html" class="navbar-brand ms-4 ms-lg-0">
            <h2 class="m-0"><img class="me-3" width="50px" src="img/logo.png" alt="Icon">MauGrafika</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="" class="nav-item nav-link active">Home</a>
                <a href="" class="nav-item nav-link">About Us</a>
                <a href="service.html" class="nav-item nav-link">Store</a>
                <a href="about.html" class="nav-item nav-link">Portofolio</a>
                <a href="project.html" class="nav-item nav-link">Blog</a>
                <a href="contact.html" class="nav-item nav-link">Contact Us</a>
            </div>
            <a href="" class="btn btn-outline-warning py-2 px-4 d-none d-lg-block">Login</a>
        </div>
    </nav>
    <!-- Navbar End -->


    {{-- CONTENT --}}
    @yield('content')
    {{-- END CONTENT --}}


    

    <!-- Footer Start -->
    <div class="container-fluid text-body footer pt-5 px-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h1 class="text-light mb-4">MauGrafika</h1>
                    <p style="color: white;">Jl.Tanimbar No. 22 Kasin, Kec.Klojen, Kota Malang, JAwa Timur 65117,
                        Indonesia
                    </p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Perusahaan</h4>
                    <a class="btn btn-link" href="">Tentang Kami</a>
                    <a class="btn btn-link" href="">Karier</a>
                    <a class="btn btn-link" href="">Tim Kami</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Informasi</h4>
                    <a class="btn btn-link" href="">FAQ</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Temukan Kami</h4>
                    <a class="btn btn-link" href=""><img src="img/icons-sosmed/Shape.png" class="icon-sosmed" alt="">Mau
                        Grafika</a>
                    <a class="btn btn-link" href=""><img src="img/icons-sosmed/ig.png" class="icon-sosmed"
                            alt="">maugrafika</a>
                    <a class="btn btn-link" href=""><img src="img/icons-sosmed/twitter.png" class="icon-sosmed"
                            alt="">maugrafika</a>
                    <a class="btn btn-link" href=""><img src="img/icons-sosmed/linkin.png" class="icon-sosmed"
                            alt="">maugrafika</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    {{-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>