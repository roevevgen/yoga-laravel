<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') - {{ config('app.name') }}</title>

    @include('sites.partials.style')


</head>
<body>

@include('sites.partials.header')

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

    <div class="container" id="about">

        @include('sites.partials.aboutus')

        @yield('content')

    </div>

    @include('sites.partials.footer')


</div>

@include('sites.partials.popup')

<script src="{{asset('assets/js/main.js')}}"></script>
</body>
</html>
