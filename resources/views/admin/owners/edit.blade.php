@extends('layouts.simple.master')
@section('title', 'Select2')
<title>@lang('Edit Owner')</title>
@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/range-slider.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/select2.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/date-picker.css')}}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>@lang('Nouvelle Owner')</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">@lang('lang.Owners')</li>
<li class="breadcrumb-item active">@lang('lang.Edit Onwer')</li>
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
                        <h5 class="card-title">@lang('Owner Account')</h5>
                    </div>
                    <div class="card-body o-hidden">
                        <livewire:owner.owner-form :ownerIdUpdated='$owner->id' />
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="{{asset('assets/js/range-slider/ion.rangeSlider.min.js')}}"></script>
<script src="{{asset('assets/js/range-slider/rangeslider-script.js')}}"></script>
<script src="{{asset('assets/js/select2/select2.full.min.js')}}"></script>
<script src="{{asset('assets/js/select2/select2-custom.js')}}"></script>
<script src="{{asset('assets/js/datepicker/date-picker/datepicker.js')}}"></script>
<script src="{{asset('assets/js/datepicker/date-picker/datepicker.en.js')}}"></script>
<script src="{{asset('assets/js/datepicker/date-picker/datepicker.custom.js')}}"></script>
@endsection
