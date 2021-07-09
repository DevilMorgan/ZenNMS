{{-- Extends layout --}}
@extends('layout.default')

@section('title', 'Device Management')

@section('content')


<div class="card card-custom">
    <div class="card-header flex-wrap border-0 pt-6 pb-0">
        <div class="card-title">
            <h3 class="card-label">Cihazlar

                <div class="text-muted pt-2 font-size-sm">Cihaz Yonetimi</div>
            </h3>
        </div>
        <div class="card-toolbar">
            <!--begin::Button-->
            <a href="{{ route('admin.dashboard') }}" class="btn btn-primary font-weight-bolder">
            <span class="svg-icon svg-icon-md">
                <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24"
                     version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <rect x="0" y="0" width="24" height="24"/>
                        <circle fill="#000000" cx="9" cy="15" r="6"/>
                        <path
                            d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z"
                            fill="#000000" opacity="0.3"/>
                    </g>
                </svg>
                <!--end::Svg Icon-->
            </span>span aa</a>
            <!--end::Button-->
        </div>
    </div>

    <div class="card-body">

        <!--begin::Search Form-->
        <form action="{{ route('admin.dashboard') }}" method="GET">
            <div class="mt-2 mb-5 mt-lg-5 mb-lg-10">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-xl-4">
                        <div class="row align-items-center">
                            <div class="col-md-12 my-2 my-md-0">
                                <div class="input-icon">
                                    <input type="text" class="form-control" placeholder="Formcontrol"
                                           id="kt_datatable_search_query" name="name"
                                           value="{{ request('name') }}"/>
                                    <span><i class="flaticon2-search-1 text-muted"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xl-4 mt-5 mt-lg-0">
                        <button class="btn btn-light-primary px-6 font-weight-bold" type="submit">
                    Button
                        </button>
                    </div>
                </div>
            </div>
        </form>
        <!--end::Search Form-->

        <table class="table table-bordered table-hover" id="datatable_admin_list">
            <thead>
            <tr>
                <th>Device</th>
                <th>Vendor</th>
                <th>IP Address</th>
                <th>Type</th>
            </tr>
            </thead>
           <tbody class="bg-white divide-y divide-gray-200">
    @foreach($devices as $device)
      <tr class="hover:bg-gray-50 px-2">
        <x-html.table-body-column>
          <div class="flex flex-row space-x-4">
            <div class="rounded-sm bg-gray-100 p-2">
              <img src="{{ asset('/img/vendors/24/'.$device->vendor_id.'.png') }}" alt=" logo">
            </div>
            <div class="flex flex-col">
              <div class="font-semibold text-green-500">
                <a href="{{ route('admin.dashboard', $device->id) }}">{{ $device->hostname }}</a>
              </div>
              <div>

              </div>
            </div>
          </div>
        </x-html.table-body-column>
        <x-html.table-body-column></x-html.table-body-column>
        <x-html.table-body-column>{{ $device->ip_address }}</x-html.table-body-column>
        <x-html.table-body-column>
          @if(!is_null($device->type_id))
            @if($device->type->font_icon !== '')
              <i class="fal {{ $device->type->font_icon }} fa-fw mr-2"></i>
            @endif
          @endif
          {{ $device->type->type }}
        </x-html.table-body-column>
      </tr>
    @endforeach
    </tbody>

</table>



@endsection

{{-- Styles Section --}}
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link href="{{ asset('plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css"/>
@endsection


{{-- Scripts Section --}}
@section('scripts')
    {{-- vendors --}}
    <script src="{{ asset('plugins/custom/datatables/datatables.bundle.js') }}" type="text/javascript"></script>

    {{-- page scripts --}}
    <script src="{{ asset('js/pages/crud/datatables/basic/basic.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/Tools.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/custom.js') }}" type="text/javascript"></script>
    @toastr_render
@endsection
