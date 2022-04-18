@extends('layouts.main')

@section('content')
<div class="card">
   <div class="card card-custom">
      <div class="card-header flex-wrap border-0 pt-6 pb-0">
         <div class="card-title">
            <h3 class="card-label">Form Jasa
         </div>
         <div class="card-toolbar">
            <a href="{{ route('jasa.index') }}" class="btn btn-sm btn-default"><i class="fas fa-angle-left"></i>Kembali</a>
         </div>
      </div>
      <form action="{{ route('jasa.store') }}" method="POST" enctype="multipart/form-data">
         @csrf
         <div class="card-body">
            <div class="form-group row">
               <label class="col-3 col-form-label">Nama jasa
                  <span class="text-danger">*</span>
               </label>
               <div class="col-9">
                  <input type="text" name="jasa_nama" id="jasa_nama" class="form-control" placeholder="Masukkan Nama" autocomplete="off" />
               </div>
            </div>
            <div class="form-group row">
               <label class="col-3 col-form-label">Detail jasa
                  <span class="text-danger">*</span>
               </label>
               <div class="col-9">
                  <textarea name="jasa_detail" id="jasa_detail" class="form-control" rows="3"></textarea>
               </div>
            </div>
            <div class="form-group row">
               <label class="col-3 col-form-label">Kategori jasa
                  <span class="text-danger">*</span>
               </label>
               <div class="col-9">
                  <select class="form-control selectpicker" title="-- Pilih --" name="jasa_kategori_id">
                     @foreach ( $katJasa as $value )
                           <option value="{{ $value->id }}">{{ $value->kategori_jasa_nama }}</option>
                     @endforeach
                  </select>
               </div>
            </div>
            <div class="form-group row">
               <label class="col-3 col-form-label">Harga
                  <span class="text-danger">*</span>
               </label>
               <div class="col-9">
                  <input id="kt_touchspin_2" type="number" class="form-control" value="0" name="jasa_harga" placeholder="Masukkan Harga"/>
               </div>
            </div>
            <div class="thumb">
               <div class="form-group row">
                  <label class="col-3 col-form-label">Foto jasa
                     <span class="text-danger">*</span>
                  </label>
                  <div class="col-9">
                     <div class="input-group mb-1">
                        <div class="input-group mb-1" id="thumb[0]">
                           <div class="image-input image-input-empty image-input-outline" id="kt_image_5">
                              <div class="image-input-wrapper"></div>

                              <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                              <i class="fa fa-pen icon-sm text-muted"></i>
                              <input type="file" name="thumb[0]" accept=".png, .jpg, .jpeg"/>
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
                     <div id="form-repeater"></div>
                  </div>  
               </div>
               <div class="form-group row">
                  <div class="col-3"></div>
                  <div class="col-6">
                     <a data-repeater-create="" onclick="addThumb(this)" class="btn font-weight-bold btn-info btn-sm">
                     <i class="la la-plus text-center"></i>
                     Tambah
                  </a>
                  <a onclick="removeThumb(this)" class="btn font-weight-bold btn-sm btn-danger btn-icon">
                     <i class="la la-close"></i>
                  </a>
                  </div>
               </div>
            </div>
            {{-- <div class="form-group row">
               <label class="col-3 col-form-label">Status</label>
               <div class="col-3">
                  <span class="switch switch-success">
                     <label>
                        <input type="checkbox" checked="checked" name="jasa_is_active" />
                        <span></span>
                     </label>
                  </span>
               </div>
            </div> --}}
            <div class="card-footer p-0 text-right pt-3">
               <button type="reset" class="btn btn-sm btn-light-success font-weight-bold"><i class="fas fa-undo-alt"></i> Batal</button>
               <button type="submit" class="btn btn-sm btn-success font-weight-bold mr-2"><i class="far fa-save"></i> Simpan</button>
            </div>
      </form>
   </div>
</div>
@endsection

@section('javascript')

<script>
   var id = 0;
   function addThumb(el){
      id++;
      $('#form-repeater').append(`
         <div class="input-group mb-1" id="thumb[${id}]">
            <div class="image-input image-input-empty image-input-outline" id="kt_image_5">
               <div class="image-input-wrapper"></div>

               <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
               <i class="fa fa-pen icon-sm text-muted"></i>
               <input type="file" name="thumb[${id}]" accept=".png, .jpg, .jpeg"/>
               </label>

               <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
               <i class="ki ki-bold-close icon-xs text-muted"></i>
               </span>

               <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="remove" data-toggle="tooltip" title="Remove avatar">
               <i class="ki ki-bold-close icon-xs text-muted"></i>
               </span>
            </div>
         </div>
      `);
   }
   
   function removeThumb(el){
      $(`#thumb[${id}]`).remove();
      id--;
   }
</script>

@endsection