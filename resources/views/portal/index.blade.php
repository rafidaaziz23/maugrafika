@extends('portal.layouts.main')

@section('body')
@php
    $title = '';
@endphp
    <style>
        .section-title {
            color: black;
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            letter-spacing: 5px;
            text-transform: uppercase;
        }
        .about-img,
        .feature-img {
            position: relative;
            height: 100%;
            min-height: 400px;
        }

        .about-img img,
        .feature-img img {
            position: absolute;
            width: 60%;
            height: 80%;
            object-fit: cover;
        }

        .about-img img:last-child,
        .feature-img img:last-child {
            margin: 20% 0 0 40%;
        }

        .about-img::before,
        .feature-img::before {
            position: absolute;
            content: "";
            width: 60%;
            height: 80%;
            top: 10%;
            left: 20%;
            border: 5px solid#FFBF00;
            z-index: -1;
        }

    </style>
<!-- Carousel Start -->
<div class="container-fluid p-0 pb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative" data-dot="<img src='img/Home.jpg'>">
                <img  src="img/Home.jpg" alt="">

            </div>
            <div class="owl-carousel-item position-relative" data-dot="<img src='img/Home.jpg'>">
                <img class="img-fluid" src="img/Home.jpg" alt="">

            </div>
            <div class="owl-carousel-item position-relative" data-dot="<img src='img/Home.jpg'>">
                <img class="img-fluid" src="img/Home.jpg" alt="">
                {{-- <div class="owl-carousel-inner">
                     <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h1 class="display-1 text-white animated slideInDown">Best Architecture And Interior Design Services</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-3">Vero elitr justo clita lorem. Ipsum dolor at sed stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea elitr.</p>
                                <a href="" class="btn btn-primary py-3 px-5 animated slideInLeft">Read More</a>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img">
                        <img class="img-fluid" src="img/img-about.png" alt="">
                        <img class="img-fluid" src="img/img-about.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h4 class="section-title"> About Us</h4>
                    <h1 class="display-5 mb-4"></h1>
                    <p>ISI tentang Kami</p>
                    <p class="mb-4">Contoh : MALANG – Senin, 14 Sepetember 2020, Technopark SMKN 4 Malang meluncurkan beberapa produk baru sebagai wadah untuk pengembangan industri di SMKN 4 Malang. Produk ini berhubungan dengan beberapa jurusan yang ada di SMKN 4 Malang sehingga guru dan siswa dapat mengembangkan potensi kejuruannya.</p>
                    <div class="d-flex align-items-center mb-5">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center border border-5 border-warning" style="width: 120px; height: 120px;">
                            <h1 class="display-1 mb-n2" data-toggle="counter-up">1</h1>
                        </div>
                        <div class="ps-4">
                            <h3>Years</h3>
                            <h3>Working</h3>
                            <h3 class="mb-0">Experience</h3>
                        </div>
                    </div>
                    <a class="btn btn-warning py-3 px-5" href="/aboutus">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->





    <!-- Feature Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h4 class="section-title">Our Service</h4>
                    <h1 class="display-5 mb-4"></h1>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="d-flex align-items-start">
                                <img class="flex-shrink-0" src="img/icons/vector-1.png" alt="Icon">
                                <div class="ms-4">
                                    <h3>Design Approach</h3>
                                    <p class="mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex align-items-start">
                                <img class="flex-shrink-0" src="img/icons/vector-2.png" alt="Icon">
                                <div class="ms-4">
                                    <h3>Innovative Solutions</h3>
                                    <p class="mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex align-items-start">
                                <img class="flex-shrink-0" src="img/icons/vector-3.png" alt="Icon">
                                <div class="ms-4">
                                    <h3>Project Management</h3>
                                    <p class="mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="feature-img">
                        <img class="img-fluid" src="img/ourservice-1.jpg" alt="">
                        <img class="img-fluid" src="img/ourservice-2.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->


    <!-- Service Start-->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h4 class="section-title">Our Product</h4>
                <h1 class="display-5 mb-4"></h1>
            </div>
            <div class="row g-0 team-items">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/product-1.jpg" alt="">

                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/product-2.jpg" alt="">

                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/product-1.jpg" alt="">

                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/product-2.jpg" alt="">

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
     <!--Service End -->

    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h4 class="section-title">Portofolio</h4>

            </div>
            <div class="row g-0 team-items">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div >
                        <div class="position-relative">
                            <img class="img-fluid" src="img/portofolio1.jpg" alt="">

                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div >
                        <div class="position-relative">
                            <img class="img-fluid" src="img/portofolio2.jpg" alt="">

                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div >
                        <div class="position-relative">
                            <img class="img-fluid" src="img/portofolio3.jpg" alt="">

                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div >
                        <div class="position-relative">
                            <img class="img-fluid" src="img/portofolio-0.jpg" alt="">

                        </div>

                    </div>
                </div>

            </div>
            <!-- row 2 portofolio -->
            <div class="row g-0 team-items">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div >
                        <div class="position-relative">
                            <img class="img-fluid" src="img/portofolio-4.jpg" alt="">

                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div >
                        <div class="position-relative">
                            <img class="img-fluid" src="img/portofolio-5.jpg" alt="">

                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div >
                        <div class="position-relative">
                            <img class="img-fluid" src="img/portofolio-6.jpg" alt="">

                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div >
                        <div class="position-relative">
                            <img class="img-fluid" src="img/portofolio-0.jpg" alt="">

                        </div>

                    </div>
                </div>
            </div>
            <!-- end row 2 -->
            <div class="row g-0 team-items">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div >
                        <div class="position-relative">
                            <img class="img-fluid" src="img/portofolio-7.jpg" alt="">

                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div >
                        <div class="position-relative">
                            <img class="img-fluid" src="img/portofolio-8.jpg" alt="">

                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div >
                        <div class="position-relative">
                            <img class="img-fluid" src="img/portofolio-9.jpg" alt="">

                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div >
                        <div class="position-relative">
                            <img class="img-fluid" src="img/portofolio-0.jpg" alt="">

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Team End -->

    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h4 class="section-title">Testimonial</h4>
                <h1 class="display-5 mb-4"> </h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item text-center" data-dot="<img class='img-fluid' src='img/customer-3.jpg' alt=''>">
                    <p class="fs-5"> Wow ,sangat Memuaskan hasrat sayaClita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo lab</p>
                    <h3>Bagos FF</h3>
                    <span class="text-primary">NUYUL SHOPEE</span>
                </div>
                <div class="testimonial-item text-center" data-dot="<img class='img-fluid' src='img/customer-1.jpg' alt=''>">
                    <p class="fs-5">Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                    <h3>Marlboro</h3>
                    <span class="text-primary">NUYUL GOJEK</span>
                </div>
                <div class="testimonial-item text-center" data-dot="<img class='img-fluid' src='img/customer-3.jpg' alt=''>">
                    <p class="fs-5">Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                    <h3>Client Name</h3>
                    <span class="text-primary">Profession</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
@endsection