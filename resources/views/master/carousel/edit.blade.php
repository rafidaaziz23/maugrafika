@extends('layouts.main')

@section('content')
<div class="card">
   <div class="card card-custom">
      <div class="card-header flex-wrap border-0 pt-6 pb-0">
         <div class="card-title">
            <h3 class="card-label">Form Carousel
         </div>
         <div class="card-toolbar">
            <a href="#" class="btn btn-sm btn-default"><i class="fas fa-angle-left"></i>Kembali</a>
         </div>
      </div>
      <form action="{{ route('carousel.update',$carousel->id) }}" method="POST">
         @csrf
         @method('PUT')
         <div class="card-body">
            <div class="form-group row">
               <label class="col-3 col-form-label">Nama Carousel
                  <span class="text-danger">*</span>
               </label>
               <div class="col-6">
                  <input type="text" name="carousel_nama" id="carousel_nama" class="form-control" value="{{ $carousel->carousel_nama }}" placeholder="Masukkan Sosmed" autocomplete="off"/>
               </div>
            </div>
               <div class="form-group row">
                <label class="col-3 col-form-label">Gambar
                    <span class="text-danger">*</span>
                </label>
                <div class="col-6">
                    <input type="text" name="carousel_image" id="carousel_image" class="form-control" value="{{ $carousel->carousel_image }}" placeholder="Masukkan Link" autocomplete="off"/>
                    </div>
               </div>
            <div class="form-group row">
               <label class="col-3 col-form-label">Status</label>
               <div class="col-3">
                  <span class="switch switch-success">
                     <label>
                        <input type="checkbox" checked="checked" name="kategori_jasa_is_active" value="{{ $carousel->kategori_jasa_is_active }}" />
                        <span></span>
                     </label>
                  </span>
               </div>
            </div>
            <div class="card-footer p-0 text-right pt-3">
               <button type="reset" class="btn btn-sm btn-light-success font-weight-bold"><i class="fas fa-undo-alt"></i> Batal</button>
               <button type="submit" class="btn btn-sm btn-success font-weight-bold mr-2"><i class="far fa-save"></i> Simpan</button>
            </div>
      </form>
   </div>
</div>

@endsection