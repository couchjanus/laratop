<!-- Stored in resources/views/layouts/front.blade.php -->
<!doctype html>
<html>
<head>
    @include('shared.head')
</head>
<body>
<div class="container">

    <header class="row">
        @include('shared.navigation')
    </header>
    
    <div id="main" class="row">

        @yield('content')

    </div>
    <div>
    @section('sidebar')
            @include('shared.sidebar')
    @endsection
    </div>

    <footer class="row">
        @include('shared.footer')
    </footer>

</div>
    @yield('javascript')

    @stack("custom_scripts")

</body>
</html>
