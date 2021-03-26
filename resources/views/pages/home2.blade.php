@extends('layouts.default')
<!DOCTYPE html>
<title>Naranjee Hirjee</title>
@section('content')
<div class="col-12 p-0 {{ (Request::segment(1) == 'home1') ? 'banner_video' : ''  }}">
    <div class="col-12 p-0 row m-0 align-items-center justify-content-center">
        <img src="{{url('assets/images/logo.png')}}" class="mw-150 mb-3 heart_beat" />
        <h2 class="blogger_font fa-4x text-center mb-4 col-12 text-blue-gradient" id="writing_animation"></h2>
        <p class="mt-2 w-100 text-center mb-4">
            <img src="{{url('assets/images/trust_blue.png')}}" alt="" class="mw-200 trust">
        </p>
        <div class="col-12 row mx-0">
            <div class="col-lg-3 col-md-6 text-center mb-3">
                <div class="bubble-img blue mx-auto d-flex align-items-center justify-content-center">
                    <div class="scale_animation row align-items-center justify-content-center text-white mw-100x mx-auto position-relative">
                        <h3 class="semi_bold_font pb-2 border-bottom border-width-2 w-100">100+</h3>
                        <p class="font-14x m-0 w-100">Years of Experience</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center mb-3">
                <div class="bubble-img white mx-auto d-flex align-items-center justify-content-center">
                    <div class="scale_animation row align-items-center justify-content-center text-blue mw-100x mx-auto position-relative">
                        <h3 class="semi_bold_font pb-2 border-primary border-bottom border-width-2 w-100">4</h3>
                        <p class="font-14x m-0 w-100">Distribution network all across Oman</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center mb-3">
                <div class="bubble-img red mx-auto d-flex align-items-center justify-content-center">
                    <div class="scale_animation row align-items-center justify-content-center text-white mw-100x mx-auto position-relative">
                        <h3 class="semi_bold_font pb-2 border-bottom border-width-2 w-100">20K+</h3>
                        <p class="font-14x m-0 w-100">Products Within Our Portfolio</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center mb-3">
                <div class="bubble-img green mx-auto d-flex align-items-center justify-content-center">
                    <div class="scale_animation row align-items-center justify-content-center text-white mw-100x mx-auto position-relative">
                        <h3 class="semi_bold_font pb-2 border-bottom border-width-2 w-100">300+</h3>
                        <p class="font-14x m-0 w-100">Team of Hardworking People Globally</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('includes.footer')
</div>
@stop