@extends('layouts.main')

@section('content')
<div class="card card-custom card-stretch gutter-b">
   <div class="card-body">
      <!--begin::Engage Widget 15-->
      <div class="card card-custom mb-12">
         <div class="card-body rounded p-0 d-flex" style="background-color:#DAF0FD;">
            <div class="d-flex flex-column flex-lg-row-auto w-auto w-lg-350px w-xl-450px w-xxl-500px p-10 p-md-20">
               <h1 class="font-weight-bolder text-dark">Search Products</h1>
               <div class="font-size-h4 mb-8">Get All Products</div>
               <!--begin::Form-->
               <form class="d-flex flex-center py-2 px-6 bg-white rounded">
                  <span class="svg-icon svg-icon-lg svg-icon-primary">
                     <!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg-->
                     <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                           <rect x="0" y="0" width="24" height="24" />
                           <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                           <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero" />
                        </g>
                     </svg>
                     <!--end::Svg Icon-->
                  </span>
                  <input type="text" class="form-control border-0 font-weight-bold pl-2" placeholder="Search Goods" />
               </form>
               <!--end::Form-->
            </div>
            <div class="d-none d-md-flex flex-row-fluid bgi-no-repeat bgi-position-y-center bgi-position-x-left bgi-size-cover" style="background-image: url(assets/media/svg/illustrations/progress.svg);"></div>
         </div>
      </div>
      <!--end::Engage Widget 15-->
      <!--begin::Section-->
      <div class="mb-11">
         <!--begin::Heading-->
         <div class="d-flex justify-content-between align-items-center mb-7">
               <a href="{{ route('jasa.create') }}" class="btn btn-light-success btn-sm font-weight-bolder">
               <span class="svg-icon svg-icon-succcess svg-icon-2x">
                  <!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Code\Plus.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                     <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <rect x="0" y="0" width="24" height="24" />
                        <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
                        <path d="M11,11 L11,7 C11,6.44771525 11.4477153,6 12,6 C12.5522847,6 13,6.44771525 13,7 L13,11 L17,11 C17.5522847,11 18,11.4477153 18,12 C18,12.5522847 17.5522847,13 17,13 L13,13 L13,17 C13,17.5522847 12.5522847,18 12,18 C11.4477153,18 11,17.5522847 11,17 L11,13 L7,13 C6.44771525,13 6,12.5522847 6,12 C6,11.4477153 6.44771525,11 7,11 L11,11 Z" fill="#000000" />
                     </g>
                  </svg>
                  <!--end::Svg Icon-->
               </span>Tambah</a>
         </div>
         <!--end::Heading-->
         <!--begin::Products-->
         <div class="row">
            @foreach ( $jasas as $key => $value )
            <!--begin::Product-->
            <div class="col-md-4 col-xxl-4">
               <!--begin::Card-->
               <div class="card card-custom card-shadowless">
                  <div class="card-body p-0">
                     <!--begin::Image-->
                     <div class="overlay">
                        <div class="overlay-wrapper rounded bg-light text-center">
                           <img src="{{ Storage::url('public/uploads/jasas/').optional($value->thumbs->first())->thumb }}" alt="" class="mw-100 w-200px" />
                        </div>
                        <div class="overlay-layer">
                           <form action="{{ route('jasa.destroy',$value->id) }}" method="POST">
                              <a href="{{ route('jasa.show',$value->id) }}" class="btn font-weight-bolder btn-lg btn-shadow-hover btn-transparent-info mr-2">
                                 <span class="far fa-list-alt"></span> 
                              </a>
                              <a href="{{ route('jasa.edit' ,$value->id) }}" class="btn font-weight-bolder btn-lg btn-shadow-hover btn-transparent-warning mr-2">
                                 <span class="far fa-edit"></span> 
                              </a>
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn font-weight-bolder btn-lg btn-shadow-hover btn-transparent-danger mr-2">
                                 <span class="far fa-trash-alt"></span> 
                              </button>
                           </form>
                        </div>
                     </div>
                     <!--end::Image-->
                     <!--begin::Details-->
                     <div class="text-center mt-5 mb-md-0 mb-lg-5 mb-md-0 mb-lg-5 mb-lg-0 mb-5 d-flex flex-column">
                        <a href="#" class="font-size-h5 font-weight-bolder text-dark-75 text-hover-primary mb-1">{{ $value['jasa_nama'] }}</a>
                        <span class="font-size-lg">Rp.{{ $value['jasa_harga'] }}</span>
                     </div>
                     <!--end::Details-->
                  </div>
               </div>
               <!--end::Card-->
            </div>
            <!--end::Product-->
            @endforeach
         </div>
         
      </div>
      <!--end::Section-->
   </div>
</div>
@endsection

