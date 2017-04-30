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
                        <th>Url</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pages as $page)
                        <tr>
                            <td>{{ $page->id }}</td>
                            <td>{{ $page->name }}</td>
                            <td>{{ $page->slug }}</td>
                            <td>{{ $page->url }}</td>
                            <td>
                                <a class="button" href="/admin/pages/{{ $page->id }}"><span class="icon is-small"><i class="fa fa-pencil"></i></span></a>
                                <a class="button js-modal" href="/admin/pages/{{ $page->id }}"
                                    data-title="Pagina &quot;{{ $page->name }}&quot; verwijderen"
                                    data-body="Weet u zeker dat u de pagina &quot;{{ $page->name }}&quot; wilt verwijderen?"
                                    data-methods="DELETE"
                                ><span class="icon is-small"><i class="fa fa-times"></i></span></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </section>
@endsection
