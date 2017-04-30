@extends('admin::layouts.default')
@section('content')
    <section class="hero">
    <div class="hero-body">
        <div class="container">
            <h1 class="title">
                Pagina
            </h1>
            <h2 class="subtitle">
                <?= $page->id != null ? '<strong>"'. $page->name .'"</strong> aanpassen' : 'Toevoegen' ?>
            </h2>
            <br />

            @if (count($errors) > 0)
                <article class="message is-danger">
                    <div class="message-header">
                        <p>Pagina niet opgeslagen!</p>
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

            <form action="{{ $method === 'PUT' ? route('admin.pages.update', ['id' => $page->id]) : route('admin.pages.save') }}" method="POST">
                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                <input name="_method" type="hidden" value="{{ $method }}"/>
                <div class="field">
                    <label class="label">Naam</label>
                    <p class="control">
                        <input class="input" type="text" name="name" placeholder="Naam" value="{{ $page->name }}" >
                    </p>
                </div>

                <div class="field">
                    <label class="label">Slug</label>
                    <p class="control">
                        <input class="input" type="text" name="slug" placeholder="Slug" value="{{ $page->slug }}">
                    </p>
                </div>

                <div class="field">
                    <label class="label">Url</label>
                    <p class="control">
                        <input class="input" type="text" name="url" placeholder="Url bijv: home" value="{{ $page->url }}">
                    </p>
                </div>

                <div class="field">
                    <label class="label">Titel</label>
                    <p class="control">
                        <input class="input" type="text" name="title" placeholder="Titel" value="{{ $page->title }}">
                    </p>
                </div>

                <div class="field">
                    <label class="label">Content</label>
                    <p class="control">
                        <textarea class="textarea js-editor" name="content" placeholder="Content">{{ $page->content }}</textarea>
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
