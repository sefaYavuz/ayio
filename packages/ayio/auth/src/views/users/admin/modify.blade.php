@extends('admin::layouts.default')
@section('content')
    <section class="hero">
    <div class="hero-body">
        <div class="container">
            <h1 class="title">
                Gebruiker
            </h1>
            <h2 class="subtitle">
                <?= $user->id != null ? '<strong>"'. $user->name .'"</strong> aanpassen' : 'Toevoegen' ?>
            </h2>
            <br />

            @if (count($errors) > 0)
                <article class="message is-danger">
                    <div class="message-header">
                        <p>Gebruiker niet opgeslagen!</p>
                        <button class="delete"></button>
                    </div>
                    <div class="message-body">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </article>
            @endif

            <form action="{{ $method === 'PUT' ? route('admin.users.update', ['id' => $user->id]) : route('admin.users.save') }}" method="POST">
                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                <input name="_method" type="hidden" value="{{ $method }}"/>
                <div class="field">
                    <label class="label">Naam</label>
                    <p class="control">
                        <input class="input" type="text" name="name" placeholder="Naam" value="{{ $user->name }}" >
                    </p>
                </div>

                <div class="field">
                    <label class="label">E-mail</label>
                    <p class="control">
                        <input class="input" type="text" name="email" placeholder="E-mail" value="{{ $user->email }}">
                    </p>
                </div>

                <div class="field">
                    <label class="label">Wachtwoord</label>
                    <p class="control">
                        <input class="input" type="password" name="password" placeholder="Wachtwoord" value="{{ $user->password }}">
                    </p>
                </div>

                <div class="field is-grouped">
                    <p class="control">
                        <button class="button is-primary" type="submit">Opslaan</button>
                    </p>
                </div>
            </form>
        </div>
    </div>
    </section>
@endsection
