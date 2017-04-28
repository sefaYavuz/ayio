@extends('admin::layouts.default')
@section('content')
    <section class="hero">
    <div class="hero-body">
        <div class="container">
            <h1 class="title">
                Pagina's
            </h1>
            <h2 class="subtitle">
                Overzicht
            </h2>
            <br />
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Naam</th>
                        <th>Slug</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pages as $page)
                        <tr>
                            <td>$page->id</td>
                            <td>$page->name</td>
                            <td>$page->slug</td>
                            <td>$page->slug</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </section>
@endsection
