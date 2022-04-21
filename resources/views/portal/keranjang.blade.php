@extends('portal.template')
@section('content')
    <!-- Page Header Start -->
<div class="container-xxl py-5 mt-4">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <h1>Keranjang Anda</h1>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <a href="" class="btn btn-warning cart-btn">
                    Lanjut Belanja
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->



<!-- Cart Item Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="table-responsive">
            <table class="table" style="color: black;">
                <thead>
                    <tr style="text-align: center;">
                        <th>Produk</th>
                        <th></th>
                        <th>Jumlah</th>
                        <th>Harga</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="text-align: center;vertical-align: middle;">
                        <td><img src="assets/img/team-1.jpg" alt=""></td>
                        <td class="cart-produk">kaos polos hitam</td>
                        <td>
                            <button class="btn btn-warning add-btn" id="kurang">-</button> 
                            <span id="hasil"> 0 </span>
                            <button class="btn btn-warning add-btn" id="tambah">+</button>
                        </td>
                        <td>Rp 39.999</td>
                        <td><a href="" class="btn btn-danger del-btn">Remove</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="total" align="right">
            <h5>Subtotal Rp. 299.999</h5>
            <a href="" class="btn pesan-btn mt-5">Pesan</a>
        </div>
    </div>
</div>
<!-- Cart Item End -->

<script>
    var no = 0;
    tambah.onclick = function(){
        hasil.innerHTML = ++no;
    }
    kurang.onclick = function(){
        if(no != 0){
            hasil.innerHTML = --no;
        }
    }

</script>
@endsection
