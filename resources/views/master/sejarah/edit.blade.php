@extends('layouts.main')

@section('content')
<div class="card">
   <div class="card card-custom">
      <div class="card-header flex-wrap border-0 pt-6 pb-0">
         <div class="card-title">
            <h3 class="card-label">Form Sejarah
         </div>
         <div class="card-toolbar">
            <a href="#" class="btn btn-sm btn-default"><i class="fas fa-angle-left"></i>Kembali</a>
         </div>
      </div>
      <form action="{{ route('sejarah.update',$sejarah->id) }}" method="POST"  enctype="multipart/form-data">
         @csrf
         @method('PUT')
         <div class="card-body">
            <div class="form-group row">
               <label class="col-3 col-form-label">Judul Sejarah
                  <span class="text-danger">*</span>
               </label>
               <div class="col-6">
                  <input type="text" name="sejarah_judul" id="sejarah_judul" class="form-control" value="{{ $sejarah->sejarah_judul }}" placeholder="Masukkan Sosmed" autocomplete="off"/>
               </div>
            </div>
               <div class="form-group row">
                <label class="col-3 col-form-label">Detail Sejarah
                    <span class="text-danger">*</span>
                </label>
                <div class="col-6">
                    <input type="text" name="sejarah_detail" id="sejarah_detail" class="form-control" value="{{ $sejarah->sejarah_detail }}" placeholder="Masukkan Link" autocomplete="off"/>
                    </div>
               </div>
               <div class="form-group row">
               <label class="col-3 col-form-label">Gambar Sejarah
                  <span class="text-danger">*</span>
               </label>
               <div class="col-9">
                           <div class="image-input image-input-empty image-input-outline" id="kt_image_5" style="background-image: url(storage/uploads/sejarah/{{ $sejarah->sejarah_image }})">
                           <div class="image-input-wrapper"></div>

                           <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                           <i class="fa fa-pen icon-sm text-muted"></i>
                           <input type="file" name="sejarah_image" accept=".png, .jpg, .jpeg"/>
                           {{-- <input type="hidden" name="user_photo_remove"/> --}}
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
                        <input type="checkbox" checked="checked" name="kategori_jasa_is_active" value="{{ $sejarah->kategori_jasa_is_active }}" />
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