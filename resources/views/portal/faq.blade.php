@extends('portal.layouts.faqmain')
@section('faq')
    <section>
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="about-img" style="margin-top: -10%;">
                            <img class="img-fluid" src="img/faq.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <h1>Berbagai Pertanyaan Yang Sering Muncul</h1>
                        <p style="font-family: 'Poppins' , sans-serif;">Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Enim ut harum culpa adipisci sint labore suscipit saepe, porro iure libero. Lorem ipsum
                            dolor sit amet consectetur adipisicing elit. Impedit, repellat. Tempor erat elitr rebum at
                            clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit,
                            sed stet lorem sit clita duo justo magna dolore erat amet</p>
                    </div>
                </div>
            </div>
            <hr>
        </div>
        </div>
        </div>
        <h2 class="title">FAQs</h2>
        @foreach ($faq as $value)
            <div class="faq">
                <div class="question">
                    <h3>{{ $value->faq_title }}</h3>

                    <svg width="15" height="10" viewBox="0 0 42 25">
                        <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round" />
                    </svg>

                </div>
                <div class="answer">
                    <p>
                        {{ $value->faq_detail }}
                    </p>
                </div>
            </div>
        @endforeach
    </section>
    <!-- Template Javascript -->
    <?php $title = 'Faq'; ?>
@endsection
