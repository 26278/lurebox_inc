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
   <span>Inloggegens bewerken</span> 
   <div class="profilechange-block">    
    <div class="user-credentials">
        <p>Inloggegens</p>
        <input type="email" placeholder="gerarddevisser@lurebox.nl">
        <p>*Via dit e-mailadres houden we je op de hoogte van je abonnoment.</p>
        <input type="password" placeholder="Wachtwoord">
        <div class="register-help">
            <span>Wachtwoord</span>
            <p>Je wachtwoord moet bestaan uit minimaal:</p>
            <p>8 karakters,</p>
            <p>1 hoofdletter,</p>
            <p>1 cijfer.</p>
        </div>
    </div>
    <a class="button-change button" href="/profile">Inloggegens opslaan</a>
</div>
@endsection