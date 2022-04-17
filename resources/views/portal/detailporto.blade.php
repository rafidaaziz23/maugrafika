@extends('portal.layouts.main')
@section('body')
    <style>
        @media(min-width: 992px) {
            p {
                color: black;
            }

            .imgpesan {
                padding: 5% 20% 3% 20%;
                /* margin-left: auto;
                                                    margin-right: auto; */
            }
        }

    </style>
    <div>
        <h1 style="text-align: center;margin: 3%;"><u>Sablon GUCCI</u></h1>
    </div>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img" style="margin-top: -10%;">
                        <img class="img-fluid" src="img/Gucci.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat
                        ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                    <p class="mb-4">Stet no et lorem dolor et diam, amet duo ut dolore vero eos. No stet est diam
                        rebum amet diam ipsum. Clita clita labore, dolor duo nonumy clita sit at, sed sit sanctus dolor eos.
                    </p>
                    <div class="row">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique excepturi accusantium
                            voluptas quidem iste tempora mollitia doloribus error incidunt, officiis cumque vel, aut libero
                            dolorem sequi soluta ab assumenda ullam fuga molestiae eius dolor? Minima, sed! Aspernatur
                            quisquam laudantium impedit totam cumque! Vel repudiandae veniam similique modi quia amet, iusto
                            ipsa, consectetur obcaecati soluta maiores voluptatem facere molestias iste autem sunt culpa
                            ullam ea </p>
                    </div>
                </div>
            </div>
            <p>delectus, fugiat asperiores nihil quisquam. Expedita, hic soluta praesentium repellendus voluptate
                perferendis consectetur minima cupiditate earum voluptas maiores doloremque sapiente ad fugit, architecto
                asperiores, totam ratione voluptatibus? Et iusto tempora non voluptate beatae vero, soluta harum laudantium
                accusantium rem quo, eligendi incidunt, veritatis natus? Beatae, fugit voluptatum ratione earum eum alias
                illum impedit magni odio nesciunt voluptate enim veritatis. Minus ut impedit vero distinctio vitae quos cum
                corporis sequi ea fugiat! Nisi sit adipisci dolorum quas recusandae provident, omnis reprehenderit cumque
                blanditiis, quam ipsa neque amet? Voluptatum deleniti expedita, neque fugiat voluptate quam! Amet sunt
                doloremque eveniet? Unde deleniti laudantium blanditiis, tenetur ea nesciunt suscipit dignissimos sunt
                quibusdam dolores maiores quae placeat praesentium nostrum voluptate! Provident explicabo beatae harum
                dolores dolorem quo et, ipsum consequatur perferendis, tempora magni corrupti earum? Ullam expedita optio
                impedit voluptatum officiis.</p>
        </div>
        <div class="card text-light justify-content-center  "
            style="margin-top: 50px; margin-left: 20%;
                                                                    background-image:
                                                                    url(img/pesan-sekarang.jpg); height:97%; width: 57%;background-repeat: no-repeat;">
            <h3 class="text-light" style="padding-top:45px; padding-left:30px;">INGIN BEKERJA SAMA</h3>
            <h3 class="text-light" style="padding-left:30px;">DENGAN KAMI ?</h3>
            <div class="card-body">
                <a class="btn btn-info py-2 px-4 text-light" href=""
                    style="border-radius: 10%;margin-top:10%;margin-left:2%;">Hubungi Kami</a>
            </div>
        </div>
        {{-- <div class="container text-light col-lg-12float" style="margin-top: 50px; margin-left: 150px; background-image: 
            url(img/pesan sekarang edit.jpg); height:400px;background-repeat: no-repeat;">
            <h3 class="text-dark" style="padding-top:45px; padding-left:30px;">ANDA INGIN MEMBELI PDORUK</h3>
            <h3 class="text-light" style="padding-left:30px;">ATAU LAYANAN JASA KAMI ?</h3>

            <button class="text-light" style="border-radius: 5px; background-color: blue; margin-left:30px;
            margin-top:70px;">
                Pesan Sekarang
            </button> --}}
    </div>
    </div>
    </div>
    <?php $title = 'Portofolio'; ?>
@endsection
