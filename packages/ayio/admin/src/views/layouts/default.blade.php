<!doctype html>
<html>
    <head>
        @include('admin::includes.head')
    </head>
    <body>
        <div class="columns is-gapless is-multiline">
            <div class="column is-12">
                @include('admin::includes.header')
            </div>
            <aside class="column is-2 aside hero is-fullheight is-hidden-mobile">
                @include('admin::includes.sidebar')
            </aside>
            <div class="column is-10 admin-panel">
                @yield('content')
            </div>
        </div>
        @include('admin::includes.footer')
    </body>
</html>
