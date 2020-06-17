@extends('layout.master')
@section('stylesheets')
@endsection
@section('main')

<div class="profile intro">
    <div class="profile-intro">
        <span>Mijn profiel</span>
    </div>
</div>

<div class="container">
   <span>Account Gegevens</span> 
   <span class="subspan">Persoonlijke gegevens bewerken</span>

   
   <div class="profilechange-block">
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
            <input type="text" placeholder="de">
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
    <div class="register-help">
        <span>Adres</span>
        <p>Straatnaam 123,</p>
        <p>Plaatsnaam</p>
    </div>
    <div>
        <p><i>Overige</i></p>
        <div class="inputs">
            <div class="input">
                <input type="checkbox" class="required" name="radio1" />Ik ontvang graag de <strong>niewsbrief</strong>
            </div>
        </div>
    </div>
    <a class="button-change button" href="/profiel">Profiel opslaan</a>
   </div>
</div>
@endsection