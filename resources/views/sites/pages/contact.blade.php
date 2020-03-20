@extends('sites.app')

@section('title', 'Контакты')

@section('content')

    <div class="contact" id="contacts">
        <div class="contact-img">
            <img src="{{asset('assets/img/letter.png')}}" alt="letter">
        </div>
        <div class="contact-form">
            <div class="contact-form-title">
                Мы с вами свяжемся
            </div>
            <form id="form">
                @csrf
                <input required type="email" placeholder="Ваша почта">
                <input required type="tel" placeholder="Ваш телефон">
                <button type="submit">Отправить</button>
            </form>
        </div>
    </div>

@endsection
