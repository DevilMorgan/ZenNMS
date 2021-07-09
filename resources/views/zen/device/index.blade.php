@extends('layout.default')

@section('content')
    <div class="container">
        <div class="row">
            @include('layout.customsidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Cihazlar</div>
                    <div class="card-body">
                        <a href="{{ url('/nms/device/create') }}" class="btn btn-success btn-sm" title="Add New Post">
                            <i class="fa fa-plus" aria-hidden="true"></i> Yeni Cihaz Ekle
                        </a>


<div class="grid grid-cols-1 gap-4 px-5">
  <!-- Begin::Column-1 -->
  <div id="column-1">
    <x-ui.atoms.card>
      <table class="min-w-full divide-y divide-gray-200 text-gray-600">
        <thead class="bg-white">
          <tr>
            <x-html.table-head-column>Device</x-html.table-head-column>
            <x-html.table-head-column>Vendor</x-html.table-head-column>
            <x-html.table-head-column>IP Address</x-html.table-head-column>
            <x-html.table-head-column>Type</x-html.table-head-column>
{{--            <x-html.table-head-column></x-html.table-head-column>--}}
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
    </x-ui.atoms.card>
</tbody>
                            </table>
                            <div class="pagination-wrapper"> </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
