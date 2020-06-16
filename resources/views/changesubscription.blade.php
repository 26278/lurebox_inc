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
   <span class="subspan">Abonnement wijzigen</span>

   <div class="subscription-box">
       <p class="left"><i>Huidige abbonement</i></p>
        <span>‘Decent One’ box</span>
        <span>ALLROUND BAARSVISSERIJ</span>
        <img src="/assets/images/box-baars.png" alt="fisher" class="fisher-img">
    <p><strong>€24,99</strong> / maand</p>
    <a href="/changesubscription">Wijzig abbonoment</a>
   </div>
</div>
@endsection