<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/blog.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        @include('layouts.partials.mainnav')
        
      <div class="container">

        <div class="row">

            <div class="col-sm-8">

                @yield('content')

            </div>
        </div>
      </div>
    </div>
    
    <footer class="row">

    </footer>

 <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
