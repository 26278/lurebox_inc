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
   <span class="subspan">Profiel</span>

   <div class="profile-block">
       <div>
           <strong>Naam</strong>
           <p>Gerard de Visser</p>
       </div>
       <div>
           <strong>Email</strong>
           <p>gerarddevisser@lurebox.nl</p>
       </div>
       <div>
           <strong>Land</strong>
           <p>Nederland</p>
       </div>
       <div class="last">
           <strong>Bezorg Adres</strong>
           <p>Straatnaam 123, Plaatsnaam</p>
       </div>
        <a href="/verander-profiel">Wijzig profiel</a>
        <a href="/betaalgegevens">Wijzig betaalgegevens</a>
   </div>

   <span class="subspan">Je abonnement</span>

   <div class="subscription-box">
        <span>‘Decent One’ box</span>
        <span>ALLROUND BAARSVISSERIJ</span>
        <img src="/assets/images/box-baars.png" alt="fisher" class="fisher-img">
    <p><strong>€24,99</strong> / maand</p>
    <a href="/verander-abonnement" class="button">Wijzig abbonoment</a>
   </div>
</div>
@endsection