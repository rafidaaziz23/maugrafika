@extends('layouts.main')

@section('content')
<div class="card">
   <div class="card card-custom">
      <div class="card-header flex-wrap border-0 pt-6 pb-0">
         <div class="card-title">
            <h3 class="card-label">Form Karir
         </div>
         <div class="card-toolbar">
            <a href="{{ route('karir.index') }}" class="btn btn-sm btn-default"><i class="fas fa-angle-left"></i>Kembali</a>
         </div>
      </div>
      <form action="{{ route('karir.store') }}" method="POST">
         @csrf
         <div class="card-body">
            <div class="form-group row">
               <label class="col-3 col-form-label">Nama Pekerjaan
                  <span class="text-danger">*</span>
               </label>
               <div class="col-9">
                  <input type="text" name="karir_position" id="karir_position" class="form-control" placeholder="Masukkan Nama" autocomplete="off" />
               </div>
            </div>
            <div class="form-group row">
               <label class="col-3 col-form-label">Detail Pekerjaan
                  <span class="text-danger">*</span>
               </label>
               <div class="col-9">
                  <textarea name="karir_detail" id="karir_detail" class="form-control" rows="3"></textarea>
               </div>
            </div>
            <div class="form-group row">
               <label class="col-3 col-form-label">Detail Pekerjaan
                  <span class="text-danger">*</span>
               </label>
               <div class="col-9">
                  <select class="form-control selectpicker" title="-- Pilih --" name="karir_type">
                     <option value="Intern">Intern</option>
                     <option value="Full-time">Full-time</option>
                  </select>
               </div>
            </div>
            <div id="reqruitment">
               <div class="form-group row">
                  <label class="col-3 col-form-label">Persyaratan dan Kualifikasi
                     <span class="text-danger">*</span>
                  </label>
                  <div class="col-9">
                     <div class="input-group mb-1">
                        <input type="text" class="form-control" name="reqruitment_detail[0]" placeholder="Masukkan Syarat" autocomplete="off"/>
                     </div>
                     <div id="form-repeater-req"></div>
                  </div>
               </div>
               <div class="form-group row mt-0">
                  <div class="col-lg-3"></div>
                     <div class="col">
                           <a data-repeater-create="" onclick="addReqruitment(this)" class="btn font-weight-bold btn-info btn-sm">
                              <i class="la la-plus text-center"></i>
                              Tambah
                           </a>
                           <a onclick="removeReqruitment(this)" class="btn font-weight-bold btn-sm btn-danger btn-icon">
                              <i class="la la-close"></i>
                           </a>
                     </div>
               </div>
            </div>
            <div id="task">
               <div class="form-group row">
                  <label class="col-3 col-form-label">Tugas dan Kewajiban
                     <span class="text-danger">*</span>
                  </label>
                  <div class="col-9">
                     <div class="input-group mb-1">
                        <input type="text" class="form-control" name="task_detail[0]" placeholder="Masukkan Tugas" autocomplete="off"/>
                     </div>
                     <div id="form-repeater-task"></div>
                  </div>
               </div>
               <div class="form-group row mt-0">
                  <div class="col-lg-3"></div>
                     <div class="col">
                           <a data-repeater-create="" onclick="addTask(this)" class="btn font-weight-bold btn-info btn-sm">
                              <i class="la la-plus"></i>
                              Tambah
                           </a>
                           <a onclick="removeTask(this)" class="btn font-weight-bold btn-sm btn-danger btn-icon">
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
                        <input type="checkbox" checked="checked" name="karir_is_active" />
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
   var idTask = 0;
   function addReqruitment(el){
      id++;
      $('#form-repeater-req').append(`
         <div class="input-group mb-3" id="reqruitment_detail${id}">
            <input type="text" class="form-control" name="reqruitment_detail[${id}]" autocomplete="off" placeholder="Masukkan Syarat"/>
         </div>
      `);
   }
   
   function removeReqruitment(el){
      $(`#reqruitment_detail${id}`).remove();
      id--;
   }

   function addTask(el){
      idTask++;
      $('#form-repeater-task').append(`
         <div class="input-group mb-3" id="task_detail${idTask}">
            <input type="text" class="form-control" name="task_detail[${idTask}]" autocomplete="off" placeholder="Masukkan Tugas"/>
         </div>
      `);
   }
   
   function removeTask(el){
      $(`#task_detail${idTask}`).remove();
      idTask--;
   }
</script>

@endsection