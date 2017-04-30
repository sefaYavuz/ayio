<!doctype html>
<html>
    <head>
        @include('ui::includes.head')
    </head>
    <body>
        <section class="hero is-fullheight">
            <div class="hero-body">
                <div class="container">
                    @yield('content')
                </div>
            </div>
        </section>
    </body>
</html>
