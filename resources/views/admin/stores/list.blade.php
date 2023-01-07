@extends('layouts.simple.master')
@section('title', 'Sherin List of Stores')

@push('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/datatables.css')}}">
@endpush



@section('breadcrumb-title')
<h3>@lang('lang.Stores')</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">@lang('lang.stores')</li>
<li class="breadcrumb-item active">@lang('lang.Stores List')</li>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <a class="btn btn-primary" href="{{route('stores.create')}}" title="@lang('New Store')">@lang('lang.New Store')</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                          <livewire:store.store-list />
                    </div>
                </div>
            </div>
        </div>
        <!-- DOM / jQuery  Ends-->

    </div>
</div>
@endsection

@push('script')
<script src="{{asset('assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatables/datatable.custom.js')}}"></script>
@endpush
