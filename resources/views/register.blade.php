@extends('layout.master')
@section('stylesheets')
@endsection
@section('main')

<div class="register">
    <div class="register-container container">
        <span class="register-title">Nieuw bij Lurebox</span>
        <span class="subspan register-subtitle">Account Gegevens</span>
        <div class="register-content">
            <p><i>Persoonlijke gegevens</i></p>
            <p>Aanhef</p>
            <div class="inputs">
                <div class="input">
                    <input type="radio" class="required" name="radio1" />De heer
                </div>
                <div class="input no">
                    <input type="radio" class="required" name="radio1" />Mevrouw
                </div>
            </div>
            <div class="register-inputs">
                <div>
                    <p>Voornaam</p>
                    <input type="text" placeholder="Gerard">
                </div>
                <div>
                    <p>Tussenvoegsel</p>
                    <input type="text" placeholder="De">
                </div>
                <div>
                    <p>Achternaam</p>
                    <input type="text" placeholder="Visser">
                </div>
            </div>
            <div>
                <p>Land</p>
                <div class="inputs">
                    <div class="input">
                        <input type="radio" class="required" name="radio2" />Nederland
                    </div>
                    <div class="input no">
                        <input type="radio" class="required" name="radio2" />België
                    </div>
                </div>
            </div>

            <div class="register-inputs">
                <div>
                    <p>Postcode</p>
                    <input type="text" placeholder="1234AB">
                </div>
                <div>
                    <p>Huisnummer + toevoeging</p>
                    <input type="text" placeholder="12A">
                </div>
            </div>
            <div class="register-help adres-container">
                <span class="bold">Adres</span>
                <p>Straatnaam 123,</p>
                <p>Plaatsnaam</p>
            </div>
            <div class="user-credentials">
                <p><i>Inloggegens</i></p>
                <input type="email" placeholder="gerarddevisser@lurebox.nl">
                <p>*Via dit e-mailadres houden we je op de hoogte van je abonnoment.</p>
                <input type="password" placeholder="Wachtwoord">
                <div class="register-help">
                    <span class="bold">Wachtwoord</span>
                    <p>Je wachtwoord moet bestaan uit minimaal:</p>
                    <p>8 karakters,</p>
                    <p>1 hoofdletter,</p>
                    <p>1 cijfer.</p>
                </div>
            </div>

            <div>
                <p><i>Overige</i></p>
                <div class="inputs">
                    <div class="input">
                        <input type="checkbox" class="required" name="radio1" />Ik ontvang graag de <span class="green">niewsbrief</span>
                    </div>
                    <div class="input no">
                        <input type="checkbox" class="required" name="radio1" />Ik ga akkoord met de <span class="green">algemene voorwaarden</span>
                    </div>
                </div>
            </div>
        </div>
        <a href="/profiel" class="button">Registreer</a>
    </div>
</div>


@endsection