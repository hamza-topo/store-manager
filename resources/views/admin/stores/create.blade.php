@extends('layouts.simple.master')
@section('title', 'New Store')
@push('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/range-slider.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/select2.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/date-picker.css') }}">
@endpush



@section('breadcrumb-title')
    <h3>@lang('lang.New Store/Campaign')</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">@lang('lang.Stores')</li>
    <li class="breadcrumb-item active">@lang('lang.New Stores')</li>
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
                            <h5 class="card-title">@lang('New Store')</h5>
                        </div>
                        <div class="card-body o-hidden">
                            <livewire:store.store-form :storeId="null"></livewire:store.store-form>
                        </div>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="select2-drpdwn">
            <div class="row">
                <!-- Default Textbox start-->
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <livewire:store.campaign-form :storeId="null"></livewire:store.campaign-form>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script src="{{ asset('assets/js/range-slider/ion.rangeSlider.min.js') }}"></script>
    <script src="{{ asset('assets/js/range-slider/rangeslider-script.js') }}"></script>
    <script src="{{ asset('assets/js/select2/select2.full.min.js') }}"></script>
    <script src="{{ asset('assets/js/select2/select2-custom.js') }}"></script>
    <script src="{{ asset('assets/js/datepicker/date-picker/datepicker.js') }}"></script>
    <script src="{{ asset('assets/js/datepicker/date-picker/datepicker.en.js') }}"></script>
    <script src="{{ asset('assets/js/datepicker/date-picker/datepicker.custom.js') }}"></script>
    <script src="{{ asset('assets/js/editor/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('assets/js/editor/ckeditor/adapters/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/email-app.js') }}"></script>
@endpush
