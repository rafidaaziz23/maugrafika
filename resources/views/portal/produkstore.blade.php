@extends('portal.layouts.storemain')
@section('store')
    @php
    $storename === 'produk';
    @endphp
    <style>
        .harga {
            color: red;
        }

        .stock {
            color: black;
        }

        .rating {
            width: 8%;
            margin-top: -10%;
        }

    </style>

    <div class="row m-2">
        <div class="card my-3 mx-3" style="width: 18rem;">
            <a href="/detailstore"><img src="img/product-2.jpg" class="card-img-top" alt="..."></a>
            <div class="card-body">
                <h3 class="card-title">Sablon Kaos</h3>
                Rp:<b class="harga">25.000</b>
                <br>
                <br>
                <img src="img/icons/rating.png" class="rating" alt="">
                <img src="img/icons/rating.png" class="rating" alt="">
                <img src="img/icons/rating.png" class="rating" alt="">
                <img src="img/icons/rating.png" class="rating" alt="">
                <img src="img/icons/rating.png" class="rating" alt=""><br>

            </div>
        </div>
        <div class="card my-3 mx-3" style="width: 18rem;">
            <a href="/detailstore"><img src="img/product-2.jpg" class="card-img-top" alt="..."></a>
            <div class="card-body">
                <h3 class="card-title">Sablon Kaos</h3>
                Rp:<b class="harga">25.000</b>
                <br>
                <br>
                <img src="img/icons/rating.png" class="rating" alt="">
                <img src="img/icons/rating.png" class="rating" alt="">
                <img src="img/icons/rating.png" class="rating" alt="">
                <img src="img/icons/rating.png" class="rating" alt="">
                <img src="img/icons/rating.png" class="rating" alt=""><br>

            </div>
        </div>
        <div class="card my-3 mx-3" style="width: 18rem;">
            <a href="/detailstore"><img src="img/product-2.jpg" class="card-img-top" alt="..."></a>
            <div class="card-body">
                <h3 class="card-title">Sablon Kaos</h3>
                Rp:<b class="harga">25.000</b>
                <br>
                <br>
                <img src="img/icons/rating.png" class="rating" alt="">
                <img src="img/icons/rating.png" class="rating" alt="">
                <img src="img/icons/rating.png" class="rating" alt="">
                <img src="img/icons/rating.png" class="rating" alt="">
                <img src="img/icons/rating.png" class="rating" alt=""><br>

            </div>
        </div>
        <div class="card my-3 mx-3" style="width: 18rem;">
            <a href="/detailstore"><img src="img/product-2.jpg" class="card-img-top" alt="..."></a>
            <div class="card-body">
                <h3 class="card-title">Sablon Kaos</h3>
                Rp:<b class="harga">25.000</b>
                <br>
                <br>
                <img src="img/icons/rating.png" class="rating" alt="">
                <img src="img/icons/rating.png" class="rating" alt="">
                <img src="img/icons/rating.png" class="rating" alt="">
                <img src="img/icons/rating.png" class="rating" alt="">
                <img src="img/icons/rating.png" class="rating" alt=""><br>

            </div>
        </div>
    </div>
    <?php $title = 'Store'; ?>
@endsection
