<!doctype html>
<html>
    <head>
        @include('ui::includes.head')
    </head>
    <body>
        <header>
            @include('ui::layouts.menu')
            @include('ui::includes.header')
        </header>

        <div class="container">
            @yield('content')
        </div>

        <footer class="row">
            @include('ui::includes.footer')
        </footer>
    </body>
</html>
