@extends('layouts.main')
@section('body')
<style>
    .page-header2 {
    background: linear-gradient(rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url(../img/store.jpg) center center no-repeat;
    background-size: cover;
}
    .buttonPS{
        font-size: 50px;
        font-family: "Poppins" , sans-serif;
        color: black;
        border-bottom: 100px;
        border-color: black;
    }
    .garis{
        color: black;
    }
    .active{
        color: #FFBF00;
    }
    .buttonPS:hover{
        color: #FFBF00;
    }
</style>
    <!-- Page Header Start -->
    <div class="container-fluid page-header2 py-5 mb-3 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5" align="center">
                <h1 class="display-1 text-white animated slideInDown" style="font-family: 'Poppins', sans-serif;">Store</h1>
            </div>
        </div>
    <!-- Page Header End -->
    {{-- Produk Dan Service Start --}}
    <div class="row">
        <div class="col-6">
            <center><b><a href="/storeproduk" class="buttonPS link {{ ($storename === "produk") ? 'active' : '' }}">Produk</a></b></center><hr class="garis"> 
        </div>
        <div class="col-6">
            <center><b><a href="/storeservice" class="buttonPS link {{ ($storename === "service") ? 'active' : '' }}">Service</a></b></center><hr class="garis">
        </div>
    </div>
    {{-- Produk Dan Service End --}}

    @yield('store')
@endsection