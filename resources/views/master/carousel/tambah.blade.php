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
      <form action="{{ route('carousel.store') }}" method="POST" enctype="multipart/form-data">
         @csrf
         <div class="card-body">
            <div class="form-group row">
               <label class="col-3 col-form-label">Nama Carousel
                  <span class="text-danger">*</span>
               </label>
               <div class="col-6">
                  <input type="text" name="carousel_nama" id="carousel_nama" class="form-control" placeholder="Masukkan Nama" autocomplete="off" />
               </div>
            </div>
            <div class="form-group row">
               <label class="col-3 col-form-label">Gambar Carousel
                  <span class="text-danger">*</span>
               </label>
               <div class="col-9">
                        <div class="image-input image-input-empty image-input-outline" id="kt_image_5" style="background-image: url(assets/media/users/blank.png)">
                        <div class="image-input-wrapper"></div>

                        <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                        <i class="fa fa-pen icon-sm text-muted"></i>
                        <input type="file" name="carousel_image" accept=".png, .jpg, .jpeg"/>
                        <input type="hidden" name="user_photo_remove"/>
                        </label>

                        <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                        <i class="ki ki-bold-close icon-xs text-muted"></i>
                        </span>

                        <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="remove" data-toggle="tooltip" title="Remove avatar">
                        <i class="ki ki-bold-close icon-xs text-muted"></i>
                        </span>
                        </div>
                     </div>
            </div>
            </div>
            <div class="form-group row">
               <label class="col-3 col-form-label">Status</label>
               <div class="col-3">
                  <span class="switch switch-success">
                     <label>
                        <input type="checkbox" checked="checked" name="kategori_jasa_is_active" />
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