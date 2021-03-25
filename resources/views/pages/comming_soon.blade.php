@extends('layouts.default')
<link rel="stylesheet" type="text/css" href="{{url('assets/stylesheets/comming.css')}}" />
<!--[if lt IE 9]>
    <link rel="stylesheet" type="text/css" href="{{url('assets/stylesheets/ie.css')}}" />
<![endif]-->
@section('content')
<style type="text/css">
    .row
    {
        height: 100%
    }
    body, .scene {
        overflow: auto;
    }
</style>
<div class="col-12 text-center p-0">
    <div class="background h-100 d-table">
        <div class="d-table-cell align-middle">
            <img src="{{url('assets/images/poornatha_step.png')}}" style="width: 220px;">
            <h2 class="coming_title d-block">Coming Soon</h2>
            <p class="d-block w-100">We will be celebrating the launch of our new site very soon!</p>
            <img src="{{url('assets/images/poornatha_text.png')}}" style="width: 220px;">
        </div>
    </div>
</div>
@stop