@extends('portal.layouts.main')
@section('body')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-1 text-white animated slideInDown">Contact Us</h1>

        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">

            <div class="row g-5">
                <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex flex-column justify-content-between h-100">
                        <div class="d-flex align-items-center w-100 p-4">
                            <h3>HUBUNGI KAMI MELALUI =</h3>
                            <p class=""></p>
                        </div>
                        <div class="bg-light d-flex align-items-center w-100 h-70 row g-3 col-lg-6" style="font-size:20px;">
                            <div class="col-12">
                                <i class="fa fa-map-marker text-warning"></i> Alamat Kantor : JL Tanimbar 22,Malang,Jawa
                                Timur,Indonesia
                            </div>
                            <div class="col-12">
                                <i class="fa fa-clock text-warning"></i> Jam Kerja : 09.00-17.00
                            </div>
                            <div class="col-12">
                                <i class="fa fa-phone-alt text-warning"></i> Kontak : 0821241216
                            </div>
                            <div class="col-12">
                                <i class="fa fa-envelope text-warning"></i> Email : maugrafika@grafika.com
                            </div>


                        </div>

                    </div>
                </div>
                <div class="col-lg-5 wow fadeInUp text-center border border-secondary " data-wow-delay="0.5s"
                    style="border-radius: 30px;">
                    <h3 class="mb-4">Kritik dan Saran</h3>
                    <form>
                        <div class="row g-3">
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control border border-warning" id="name"
                                        placeholder="Nama Lengkap" style="border-radius: 15px;">
                                    <label for="name">Nama lengkap</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control border border-warning" id="email"
                                        placeholder="Alamat Email" style="border-radius: 15px;">
                                    <label for="email">Alamat Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control border border-warning" id="telp"
                                        placeholder="No Telepon" style="border-radius: 15px;">
                                    <label for="telp">No Telepon</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control border border-warning" placeholder="Leave a message here" id="message"
                                        style="height: 80px; border-radius: 15px;"></textarea>
                                    <label for="message">Kritik Dan Saran</label>
                                </div>
                            </div>
                            <div class="col-4">
                            </div>
                            <div class="col-4">
                            </div>
                            <div class="col-4">
                                <button class="btn btn-warning text-light w-100 py-3 " type="submit"
                                    style="border-radius: 15px; margin-bottom: 10px;">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="container justify-content-center" style="float: center; /* Added */">
                <div class="card text-light justify-content-center  "
                    style="margin-top: 50px; margin-left: 20%;
                                                             background-image:
                                                            url(img/pesan-sekarang.jpg); height:97%; width: 68%;background-repeat: no-repeat;">
                    <h3 class="text-light" style="padding-top:45px; padding-left:30px;">ANDA INGIN MEMBELI PRODUK</h3>
                    <h3 class="text-light" style="padding-left:30px;">ATAU LAYANAN JASA KAMI ?</h3>
                    <div class="card-body">
                        <a class="btn btn-info py-2 px-4 text-light" href=""
                            style="border-radius: 10%;margin-top:10%;margin-left:2%;">Pesan Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Google Map Start -->
    <div class="container-xxl pt-5 px-0 wow fadeIn" data-wow-delay="0.1s">

        <iframe class="w-100 mb-n2" style="height: 450px;"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.0850497893216!2d112.62499331415677!3d-7.990153581897506!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6281b75ea5485%3A0x90fd5c6fcedf6acf!2sSMK%20Negeri%204%20Kota%20Malang!5e0!3m2!1sid!2sid!4v1647143809960!5m2!1sid!2sid"
            width="800" height="600" style="border:0;" allowfullscreen="" aria-hidden="false" loading="lazy"></iframe>
    </div>
    <!-- Google Map End -->
    <?php $title = 'Contact Us'; ?>
@endsection
