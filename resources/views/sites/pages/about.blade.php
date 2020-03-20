@extends('sites.app')

@section('title', 'О нас')

@section('content')


    <div class="timer">
        <div class="timer-title">Успей забронировать место со скидкой</div>
        <div class="timer-action">
            До конца акции осталось
        </div>
        <div class="timer-numbers" id="timer">
            <span class="hours">18</span>
            <span>:</span>
            <span class="minutes">20</span>
            <span>:</span>
            <span class="seconds">11</span>
        </div>
    </div>
    <button class="more"> Узнать больше</button>

@endsection
