@extends('auth::layouts.default') @section('content')
<section class="hero is-fullheight">
    <div class="hero-heading">
        <div class="section has-text-centered">
            LOGO
        </div>
    </div>
    <div class="hero-body">
        <div class="container">
            <div class="columns">
                <div class="column is-4 is-offset-4">
                    <h1 class="avatar has-text-centered section">
                        <img src="https://placehold.it/128x128">
                    </h1>
                    <form role="form" method="POST" action="{{ route('auth.login') }}" class="login-form">
                        <div class="control has-icon has-icon-right">
                            <input class="input email-input" type="text" name="email" placeholder="info@ayio.nl" value="{{ old('email') }}" required autofocus>
                            <span class="icon user">
                                <i class="fa fa-user"></i>
                            </span>
                        </div>
                        <br />
                        <div class="control has-icon has-icon-right">
                            <input class="input password-input" type="password" name="password" placeholder="●●●●●●●">
                            <span class="icon user">
                                <i class="fa fa-lock"></i>
                            </span>
                        </div>
                        <div class="control login">
                            <button class="button is-primary is-fullwidth" type="submit">Login</button>
                        </div>
                    </form>
                    <div class="section forgot-password">
                        <p class="has-text-centered">
                            <a href="#">Wachtwoord vergeten?</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
