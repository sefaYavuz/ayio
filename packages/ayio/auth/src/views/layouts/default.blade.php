<!doctype html>
<html>
    <head>
        @include('auth::includes.head')
    </head>
    <body>
        <div class="login-wrapper columns">
            @include('auth::includes.header')

            <div class="column is-4">
                @yield('content')
            </div>
        </div>
    </body>
</html>
