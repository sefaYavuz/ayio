@extends('admin::layouts.default')
@section('content')
    <section class="hero">
    <div class="hero-body">
        <div class="container">
            <h1 class="title">
                Gebruikers
            </h1>
            <h2 class="subtitle">
                Overzicht
            </h2>
            <br />
            <table class="table">
                <thead>
                    <tr>
                        <th>Naam</th>
                        <th>E-mail</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <a class="button" href="/admin/users/{{ $user->id }}"><span class="icon is-small"><i class="fa fa-pencil"></i></span></a>
                                <a class="button js-modal" href="/admin/users/{{ $user->id }}"
                                    data-title="Gebruiker &quot;{{ $user->name }}&quot; verwijderen"
                                    data-body="Weet u zeker dat u de gebruiker &quot;{{ $user->name }}&quot; wilt verwijderen?"
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
