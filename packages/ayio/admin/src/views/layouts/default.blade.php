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
                @foreach (['primary', 'info', 'success', 'warning', 'danger'] as $msg)
                    @if(Session::has($msg))
                        <div class="notification is-{{ $msg }} show">
                            <button class="delete"></button>
                            {{ Session::get($msg) }}

                            <br />

                            @if(Session::has('undo'))
                                <a href="{{ Session::get('undo') }}" class="button is-inverted is-success is-small" data-method="PUT">
                                    <span class="icon is-small">
                                        <i class="fa fa-undo"></i>
                                    </span> &nbsp; Undo
                                </a>
                            @endif
                        </div>
                    @endif
                @endforeach

                @yield('content')
            </div>
        </div>
        <div class="modal">
            <div class="modal-background"></div>
            <div class="modal-card">
                <header class="modal-card-head">
                    <p class="modal-card-title"></p>
                    <button class="delete"></button>
                </header>
                <section class="modal-card-body">

                </section>
                <footer class="modal-card-foot">
                    <a class="button is-success" href="" data-method="">Ja</a>
                    <a class="button">Nee, annuleren</a>
                </footer>
            </div>
        </div>
        @include('admin::includes.footer')
    </body>
</html>
