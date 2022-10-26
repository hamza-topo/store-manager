@extends('layouts.simple.master')
@section('title', 'Sherin List of Stores')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/datatables.css')}}">
@endsection



@section('breadcrumb-title')
<h3>@lang('lang.Stores')</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">@lang('lang.stores')</li>
<li class="breadcrumb-item active">@lang('lang.Customers List')</li>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <a class="btn btn-primary" href="{{route('customers.create')}}" title="@lang('New Customer')">@lang('lang.New Customer')</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">

                    </div>
                </div>
            </div>
        </div>
        <!-- DOM / jQuery  Ends-->

    </div>
</div>
@endsection

@section('script')
<script src="{{asset('assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatables/datatable.custom.js')}}"></script>
@endsection