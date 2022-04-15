@extends('layouts.main')
@section('body')
<style>
    @media(min-width: 992px){
    p{
        color: black;
        font-family: "Poppins" , sans-serif;
        margin-top: 2%;
    }
    .imgpesan{
        padding: 5% 20% 3% 20%;
        /* margin-left: auto;
        margin-right: auto; */
    }
    .harga{
        color: red;
    }
    .stock{
        color: black;
    }
    .tambah_keranjang{
        color: white;
        width: 100%;
        height: 4rem;
        font-family: "Poppins" , sans-serif;
        font-size: 24px;
    }
    .wrapper{
        
        
        display: flex;
        overflow-x: auto;
    }

    .wrapper .item{
        min-width: 200px;
        height: 200px;
        
        text-align: center;
        background-color: white;
        margin-right: 30px;
        border: 1px solid white;
    }
}
</style>
    
        <div class="container-xxl py-5">
            <div class="container">
                <a href=""><b>Store ></b></a>Detail Produk
                    <br>
                <h1 style="text-align: left;margin-top: 30px;"><u style="font-size: 30px;">Sablon Kaos</u></h1>
                        <img src="img/icons/rating.png"  alt="">
                        <img src="img/icons/rating.png"  alt="">
                        <img src="img/icons/rating.png"  alt="">
                        <img src="img/icons/rating.png"  alt="">
                        <img src="img/icons/rating.png"  alt="">
                        (100)
                        <br>
                <div class="row g-5">

                    <div class="wow fadeIn" data-wow-delay="0.1s">
                        <div class="about-img" style="margin-top: -60px; text-align: center;">
                            <img class="img-fluid" style="max-width: 600px; " src="img/product-1.jpg" alt="">
                        </div>
                    </div>
                    <div class="wow fadeIn" data-wow-delay="0.5s">
                        <div class="wrapper">
                            <div class="item"><img class="img-fluid" src="img/product-1.jpg" alt=""></div>
                            <div class="item"><img class="img-fluid" src="img/product-1.jpg" alt=""></div>
                            <div class="item">box-3</div>
                            <div class="item">box-4</div>
                            <div class="item">box-5</div>
                            <div class="item">box-6</div>
                            <div class="item">box-7</div>
                        </div>
                        <button class="btn btn-warning text-light" style="border-radius: 10px; margin-top: 30px; margin-bottom: 10px;">Deskripsi</button>

                        <p>Tentang Sablon Kaos</p>
                        <b class="mb-4">Stet no et lorem dolor et diam, amet duo ut dolore vero eos. No stet est diam rebum amet diam ipsum. Clita clita labore, dolor duo nonumy clita sit at, sed sit sanctus dolor eos.</b>
                        <div class="row">
                        <p>Spek Sablon Kaos</p>
                        <b>
                            <ul><li>OK</li>
                                <li>ok</li>
                                <li>ok</li>
                            </ul>
                        </b>
                        </div>
                        
                        <b class="harga"> Rp 25.000</b>
                        <button class="btn btn-warning text-light" style="float: right; border-radius: 10px;">Tambah Ke Keranjang</button>
                        </div>
                    </div>
                    </div>
            </div>
            </div>
        </div>
        
@endsection