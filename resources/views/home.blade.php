@extends('layout.master')
@section('stylesheets')
@endsection
@section('main')

    <div class="container">

        <div class="background-image" style="background-image: url('../assets/images/home-hero.jpg')">
            <div class="top-text-container">
                <h2 class="top-title">Maandelijks exclusief kunstaas<br>
                    voor jouw visserij</h2>
                <p class="top-subtitle">Een selectie aan kunstaas voor elke Nederlandse roofvisserij,<br>
                    gratis thuisbezorgd en maandelijks opzegbaar.</p>
                <a href="{{url('/producten')}}" class="top-cta button">Bekijk Lureboxes</a>
            </div>
            <img src="../assets/images/box-baars.png" alt="" class="lurebox">
        </div>
    </div>
    <div class="container">
        <div class="roadmap">

        </div>
    </div>

@endsection