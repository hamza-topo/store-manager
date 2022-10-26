@extends('layouts.simple.master')
@section('title', 'Sherin List of activities')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/datatables.css') }}">
@endsection



@section('breadcrumb-title')
    <h3>@lang('lang.activities')</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">@lang('lang.activities')</li>
    <li class="breadcrumb-item active">@lang('lang.activities List')</li>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        @lang('lang.New Activity')
                    </div>
                    <div class="card-body">
                        <livewire:activities.activities-form />
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        {{-- <a class="btn btn-primary" href="{{route('activities.create')}}" title="@lang('New Store')">@lang('lang.New Store')</a> --}}
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <livewire:activities.activities-list />
                        </div>
                    </div>
                </div>
            </div>
            <!-- DOM / jQuery  Ends-->

        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/datatable.custom.js') }}"></script>
@endsection
