@extends('layout.master')
@section('stylesheets')
@endsection
@section('main')

<div class="login">
    <div class="login-container container">

        <div class="form-content">
            <span>Inloggen</span>
            <div class="login-content">
                <div class="have-acc">
                    <div>
                        <span class="new-text">Bestaande Klanten</span>
                    </div>
                   
                    <input class="login-input" action="email" placeholder="E-mail adres"></input>
                    <input class="login-input" action="password" placeholder="Wachtwoord"></input>
                    <a href="/profiel" class="button">Log in</a>
                </div>
                <div class="line">
                    <div class="green-line">
                    </div>
                </div>
                <div class="new">
                    <div class="new-text">
                        <span>Nieuw bij lurebox?</span>
                        <p>Maak binnen 2 minuten een account aan.</p>
                    </div>
                    <input class="login-input" action="email" placeholder="E-mail adres"></input>
                    <a href="/registreer" class="button">Registreer</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection