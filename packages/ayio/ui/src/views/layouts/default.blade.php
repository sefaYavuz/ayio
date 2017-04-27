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

        <section class="section">
            <div class="container content">
                @yield('content')
            </div>
        </section>

        <footer class="row">
            @include('ui::includes.footer')
        </footer>
        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="../js/main.js"></script>
    </body>
</html>
