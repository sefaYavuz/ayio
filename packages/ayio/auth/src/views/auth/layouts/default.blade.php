<!doctype html>
<html>
    <head>
        @include('auth::auth.includes.head')
    </head>
    <body>
        <div class="login-wrapper columns">
            @include('auth::auth.includes.header')

            <div class="column is-8">
                @yield('content')
            </div>
        </div>
    </body>
</html>
