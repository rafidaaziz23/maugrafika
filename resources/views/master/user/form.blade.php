@extends('layouts.main')

@section('content')
<div class="card">
   <div class="card card-custom">
      <div class="card-header flex-wrap border-0 pt-6 pb-0">
         <div class="card-title">
            <h3 class="card-label">Form User
         </div>
         <div class="card-toolbar">
            <a href="{{ route('user.index') }}" class="btn btn-sm btn-default"><i class="fas fa-angle-left"></i>Kembali</a>
         </div>
      </div>
      <form action="{{ route('user.store') }}" method="POST">
         @csrf
         <div class="card-body">
            <div class="form-group row">
               <label class="col-3 col-form-label">Nama User
                  <span class="text-danger">*</span>
               </label>
               <div class="col-6">
                  <input type="text" name="user_name" id="user_name" class="form-control" placeholder="Masukkan Nama" autocomplete="off" />
               </div>
            </div>
            <div class="form-group row">
               <label class="col-3 col-form-label">Nama Email
                  <span class="text-danger">*</span>
               </label>
               <div class="col-6">
                  <input type="text" name="user_email" id="user_email" class="form-control" placeholder="Masukkan Email" autocomplete="off" />
               </div>
            </div>
            <div class="form-group row">
               <label class="col-3 col-form-label">Username
                  <span class="text-danger">*</span>
               </label>
               <div class="col-6">
                  <input type="text" name="user_name" id="user_name" class="form-control" placeholder="Masukkan Username" autocomplete="off" />
               </div>
            </div>
            <div class="form-group row">
               <label class="col-3 col-form-label">Password
                  <span class="text-danger">*</span>
               </label>
               <div class="col-6">
                  <input type="password" name="user_name" id="user_name" class="form-control" placeholder="Masukkan Password" autocomplete="off" />
               </div>
            </div>
            <div class="form-group row">
               <label class="col-3 col-form-label">Nomer Telp
                  <span class="text-danger">*</span>
               </label>
               <div class="col-6">
                  <input type="text" name="user_telp" id="user_telp" class="form-control" placeholder="Masukkan Telp" autocomplete="off" />
               </div>
            </div>
            <div class="form-group row">
               <label class="col-3 col-form-label">Alamat
                  <span class="text-danger">*</span>
               </label>
               <div class="col-6">
                  <textarea name="user_alamat" id="user_alamat" class="form-control" rows="3"></textarea>
               </div>
            </div>
            <div class="form-group row">
               <label class="col-3 col-form-label">Role
                  <span class="text-danger">*</span>
               </label>
               <div class="col-6">
                   <select class="form-control selectpicker">
                  <option>Admin</option>
                  <option>Staff</option>
                  <option>Manager</option>
               </select>
               </div>
            </div>
            <div class="form-group row">
               <label class="col-3 col-form-label">Status</label>
               <div class="col-3">
                  <span class="switch switch-success">
                     <label>
                        <input type="checkbox" checked="checked" name="user_is_active" />
                        <span></span>
                     </label>
                  </span>
               </div>
            </div>
            <div class="form-group row">
               <label class="col-3 col-form-label">Foto
                  <span class="text-danger">*</span>
               </label>
               <div class="col-6">
                  <div class="image-input image-input-empty image-input-outline" id="kt_image_5" style="background-image: url(assets/media/users/blank.png)">
                  <div class="image-input-wrapper"></div>

                  <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                  <i class="fa fa-pen icon-sm text-muted"></i>
                  <input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg"/>
                  <input type="hidden" name="profile_avatar_remove"/>
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
            <div class="card-footer p-0 text-right pt-3">
               <button type="reset" class="btn btn-sm btn-light-success font-weight-bold"><i class="fas fa-undo-alt"></i> Batal</button>
               <button type="submit" class="btn btn-sm btn-success font-weight-bold mr-2"><i class="far fa-save"></i> Simpan</button>
            </div>
      </form>
   </div>
</div>
@endsection