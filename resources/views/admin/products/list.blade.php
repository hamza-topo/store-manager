@extends('layouts.simple.master')
@section('title', 'Basic DataTables')
<title>@lang('List Of Products & Services')</title>
@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/datatables.css')}}">
@endsection



@section('breadcrumb-title')
<h3>@lang('lang.Products/Services')</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">@lang('lang.Products')</li>
<li class="breadcrumb-item active">@lang('lang.Products/Services List')</li>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <livewire:product.product-list />
    </div>
</div>
@endsection

@section('script')
<script src="{{asset('assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatables/datatable.custom.js')}}"></script>
@endsection
