@extends('sites.app')

@section('title', 'Фото')

@section('content')

    <div class="slider" id="photo">
        <div class="slider-title">Фото с наших поездок
        </div>
        <div class="wrap">

            <div class="slider-item fade">
                <img src="{{asset('assets/img/slider_1.jpg')}}" alt="slider">
            </div>
            <div class="slider-item fade">
                <img src="{{asset('assets/img/slider_2.jpg')}}" alt="slider">
            </div>
            <div class="slider-item fade">
                <img src="{{asset('assets/img/slider_3.jpg')}}" alt="slider">
            </div>
            <div class="slider-item fade">
                <img src="{{asset('assets/img/slider_4.jpg')}}" alt="slider">
            </div>

            <div class="prev">
                <div class="arrow-left"></div>
            </div>
            <div class="next">
                <div class="arrow-right"></div>
            </div>
        </div>
        <div class="slider-dots">
            <div class="dot dot-active"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
        </div>
    </div>

@endsection
