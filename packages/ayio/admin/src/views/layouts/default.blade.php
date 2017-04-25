<!doctype html>
<html>
    <head>
        @include('admin::includes.head')
    </head>
    <body>
        <div class="columns">
        <aside class="column is-2 aside hero is-fullheight is-hidden-mobile">
            @include('admin::includes.sidebar')
        </aside>
            <div class="column is-10 admin-panel">
                @include('admin::includes.header')
                @yield('content')
            </div>
        </div>
        @include('admin::includes.footer')
    </body>
</html>
<body>


</body>
</html>
