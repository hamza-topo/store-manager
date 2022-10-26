@extends('layouts.simple.master')
@section('title', 'Basic DataTables')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/datatables.css')}}">
@endsection



@section('breadcrumb-title')
<h3>@lang('lang.Employers')</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">@lang('lang.Employers')</li>
<li class="breadcrumb-item active">@lang('lang.Employers List')</li>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <a class="btn btn-primary" href="{{route('employers.create')}}" title="@lang('New Employer')">@lang('lang.New Employer')</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                          <livewire:employer.employer-list />
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
