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
            <div class="step">
                <div class="step-header">
                    <div class="step-number">
                        <p>1.</p>
                    </div>
                    <h2 class="step-title">Kies de box die het beste <br>
                    bij jouw visserij past.</h2>
                </div>
                <p class="step-paragraph">
                    Voor zowel de visserij op baars, snoek en
                    snoekbaars zijn er verschillende categorieën aan
                    lureboxes beschikbaar. Of je nu gericht op de
                    grootste snoeken van het Hollands Diep vist, of in
                    het centrum van Amsterdam snoekbaarzen wilt
                    vangen… We got you covered!
                </p>
                <a href="{{url('/producten')}}" class="step-link">Bekijk de lureboxes</a>
            </div>
            <div class="step">
                <div class="step-header">
                    <div class="step-number">
                        <p>2.</p>
                    </div>
                    <h2 class="step-title">Geniet van de<br>
                        gratis verzendkosten</h2>
                </div>
                <p class="step-paragraph">
                    Binnen Nederland en België verzenden<br>
                    we de lurebox gratis naar je toe.
                </p>
                <a href="{{url('/producten')}}" class="step-link">Stel hier je vragen</a>
            </div>
            <div class="step">
                <div class="step-header">
                    <div class="step-number">
                        <p>3.</p>
                    </div>
                    <h2 class="step-title">Check it out!</h2>
                </div>
                <p class="step-paragraph">
                    Het is zover, je lurebox is binnen! Alle lureboxes
                    zijn zorgvuldig samengesteld door onze professionals
                    die zich dagelijks bezig houden met de innovaties
                    en ontwikkelingen op het gebied van sportvisserij.
                </p>
                </p>
                <a href="{{url('/producten')}}" class="step-link">Lees meer over ons</a>
            </div>
            <div class="step">
                <div class="step-header">
                    <div class="step-number">
                        <p>4.</p>
                    </div>
                    <h2 class="step-title">Catch ‘nd Repeat</h2>
                </div>
                <p class="step-paragraph">
                    Zolang het kunstaas niet door het water
                    zwemt vang je niks, dus trek erop uit
                    naar je hot spots en vang een bak! In de
                    tussentijd stellen wij de nieuwe box
                    voor je op, zodat je volgende maand
                    weer kan genieten van een nieuwe box.
                    Tight Lines!
                </p>
                <a href="{{url('/producten')}}" class="step-link">Bekijk de lureboxes</a>
            </div>
        </div>
    </div>
    <div class="slider-container">
        <div class="slide fade">
        </div>
    </div>

@endsection