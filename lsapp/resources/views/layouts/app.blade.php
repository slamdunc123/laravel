<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>{{config('app.name', 'LSAPP')}}</title><!--get app name from env file - if not populated use the hardcoded 'LSAPP'-->
    </head>
    <body>
        @include('inc/navbar'); <!--blade syntax - refs the navbar file in the inc folder-->
        <div class="container">
            @yield('content');
        </div>
    </body>
</html>