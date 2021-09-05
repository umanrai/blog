<!doctype html>
<html lang="en">
    <head>
        @include('partials._head')
        <title>Laravel Blog @yield('title')</title>
    </head>

    <body>
        @include('partials._nav')
        <div class="container">
            @yield('content')
            @include('partials._footer')
        </div> <!-- End of .container -->
            @include('partials._javascript')
    </body>
</html>