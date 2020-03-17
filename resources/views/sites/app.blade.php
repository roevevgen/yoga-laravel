<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700&amp;subset=cyrillic-ext"
          rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap-grid.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

</head>
<body>

@include('sites.nav.header')

<div class="main">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="main-block">
                    <div class="main-block-link">
                        Travel.org
                    </div>
                    <div class="main-block-title">
                        йога-туры в индию
                    </div>
                    <div class="main-block-descr">
                        океан / йога / путешествия / аюрведа
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="content">

    @yield('content')


    @include('sites.footer.footer')


</div>
<div class="overlay fade">
    <div class="popup">
        <div class="popup-close">&times;
        </div>
        <div class="popup-title">
            Форма обратной связи
        </div>
        <div class="popup-form">
            <form action="#" class="main-form">
                <div class="popup-form-header">
                    Узнайте больше о своём отдыхе
                </div>
                <label class="popup-form__label" for="phone">
                    Введите ваш номер телефона:
                </label>
                <input class="popup-form__input" name="phone" type="tel" required placeholder="+38(093) 973 33 45">
                <button class="button popup-form__btn">
                    Оставить заявку!
                </button>
            </form>
        </div>
    </div>
</div>
<script src="{{asset('assets/js/main.js')}}"></script>
</body>
</html>
