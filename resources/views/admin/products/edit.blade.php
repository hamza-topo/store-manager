@extends('layouts.simple.master')
@section('title', 'Product')
<title>@lang('Edit Product')</title>
@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/range-slider.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/select2.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/date-picker.css')}}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>@lang('Edit Product')</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">@lang('lang.products')</li>
<li class="breadcrumb-item active">@lang('lang.Edit Product')</li>
@endsection

@section('content')
<div class="container-fluid">
    <div class="select2-drpdwn">
        <div class="row">
            <!-- Default Textbox start-->
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">@lang('Product')</h5>
                    </div>
                    <div class="card-body o-hidden">
                        <livewire:product.product-form :productIdUpdated='$productId' />
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="{{asset('assets/js/select2/select2.full.min.js')}}"></script>
<script src="{{asset('assets/js/select2/select2-custom.js')}}"></script>
@endsection