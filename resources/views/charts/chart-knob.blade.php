@extends('layouts.simple.master')
@section('title', 'Knob Chart')

@section('css')
@endsection




@section('breadcrumb-title')
<h3>Knob Chart</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Charts</li>
<li class="breadcrumb-item active">Knob Chart</li>
@endsection

@section('content')
<div class="container-fluid">
   <div class="row">
      <div class="col-xl-6">
         <div class="card">
            <div class="card-header">
               <h5>Clock</h5>
            </div>
            <div class="card-body">
               <div class="knob-block text-center knob-chart">
                  <div class="chart-clock-main">
                     <div class="clock-large">
                        <input class="knob hour" data-min="0" data-max="24" data-bgcolor="#eeeeee" data-fgcolor="#7366ff" data-displayinput="false" data-width="300" data-height="300" data-thickness=".2">
                     </div>
                     <div class="clock-medium">
                        <input class="knob minute" data-min="0" data-max="60" data-bgcolor="#eeeeee" data-fgcolor="#dc3545" data-displayinput="false" data-width="200" data-height="200" data-thickness=".20">
                     </div>
                     <div class="clock-small">
                        <input class="knob second" data-min="0" data-max="60" data-bgcolor="#eeeeee" data-fgcolor="#51bb25" data-displayinput="false" data-width="100" data-height="100" data-thickness=".2">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-xl-6">
         <div class="card">
            <div class="card-header">
               <h5>Tron</h5>
            </div>
            <div class="card-body">
               <div class="knob-block text-center">
                  <input class="knob" data-width="295" data-height="295" data-angleoffset="180" data-fgcolor="#7366ff" data-skin="tron" data-thickness=".1" value="35">
               </div>
            </div>
         </div>
      </div>
      <div class="col-xl-4 xl-50 col-md-6">
         <div class="card">
            <div class="card-header">
               <h5>Angle Offset</h5>
            </div>
            <div class="card-body">
               <div class="knob-block text-center">
                  <input class="knob" data-width="200" data-thickness=".1" data-angleoffset="90" data-fgcolor="#7366ff" data-linecap="round" value="35">
               </div>
            </div>
         </div>
      </div>
      <div class="col-xl-4 xl-50 col-md-6">
         <div class="card">
            <div class="card-header">
               <h5>Disable Display Input</h5>
            </div>
            <div class="card-body">
               <div class="knob-block text-center">
                  <input class="knob" data-width="200" data-thickness=".1" data-fgcolor="#7366ff" data-displayinput="false" value="35">
               </div>
            </div>
         </div>
      </div>
      <div class="col-xl-4 xl-50 col-md-6">
         <div class="card">
            <div class="card-header">
               <h5>Cursor Mode</h5>
            </div>
            <div class="card-body">
               <div class="knob-block text-center">
                  <input class="knob" data-width="200" data-cursor="true" data-fgcolor="#7366ff" data-thickness=".1" value="29">
               </div>
            </div>
         </div>
      </div>
      <div class="col-xl-4 xl-50 col-md-6">
         <div class="card">
            <div class="card-header">
               <h5>Display Previous Value</h5>
            </div>
            <div class="card-body">
               <div class="knob-block text-center">
                  <input class="knob" data-width="200" data-thickness=".1" data-fgcolor="#7366ff" data-min="-100" data-displayprevious="true" value="44">
               </div>
            </div>
         </div>
      </div>
      <div class="col-xl-4 xl-50 col-md-6">
         <div class="card">
            <div class="card-header">
               <h5>Angle Offset & Arc</h5>
            </div>
            <div class="card-body">
               <div class="knob-block text-center">
                  <input class="knob" data-angleoffset="-125" data-anglearc="250" data-fgcolor="#7366ff" data-thickness=".1" data-rotation="anticlockwise" value="35">
               </div>
            </div>
         </div>
      </div>
      <div class="col-xl-4 xl-50 col-md-6">
         <div class="card">
            <div class="card-header">
               <h5>4-digit, step 0.1</h5>
            </div>
            <div class="card-body">
               <div class="knob-block text-center">
                  <input class="knob" data-min="-10000" data-thickness=".1" data-fgcolor="#7366ff" data-displayprevious="true" data-max="10000" data-step=".1" value="0">
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection

@section('script')
<script src="{{asset('assets/js/chart/knob/knob.min.js')}}"></script>
<script src="{{asset('assets/js/chart/knob/knob-chart.js')}}"></script>
@endsection