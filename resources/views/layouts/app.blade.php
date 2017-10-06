<!-- Stored in resources/views/layouts/app.blade.php -->

<html>
    <head>
        <title>
            @hasSection ('title')
                @yield('title') - Название приложения
            @else
                Название приложения
            @endif    
        </title>
    </head>
    <body>
        @section('sidebar')
            This is the master sidebar.
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>