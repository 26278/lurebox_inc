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
                <a href="{{url('/faq')}}" class="step-link">Stel hier je vragen</a>
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
                <a href="{{url('/over-ons')}}" class="step-link">Lees meer over ons</a>
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
            <div class="slider-wrapper">
                <div class="slider-top">
                    <div class="lurebox-container">
                        <img src="../assets/images/box-baars.png" alt="" class="slider-lurebox">
                    </div>
                    <div class="slider-text-container">
                        <h2 class="slider-title">
                            Lureboxes van<br>
                            afgelopen maand
                        </h2>
                        <p class="slider-subtitle">
                            "Decent one" box<br>
                            ALLROUND BAARSVISSERIJ
                        </p>
                    </div>
                </div>
                <div class="lurebox-contains">
                    <div class="lurebox-item row-one">
                        <div class="lure-container">
                            <img src="../assets/lures/keitech-easy-shiner.png" alt="" class="lure">
                        </div>
                        <h2 class="lurename">Keitech Easy Shiner</h2>
                    </div>
                    <div class="lurebox-item row-one">
                        <div class="lure-container">
                            <img src="../assets/lures/zman-chatterbait-elite.png" alt="" class="lure">
                        </div>
                        <h2 class="lurename">Z-man Chatterbait Elite</h2>
                    </div>
                    <div class="lurebox-item row-one">
                        <div class="lure-container">
                            <img src="../assets/lures/missile-baits-baby-d-stroyer.png" alt="" class="lure">
                        </div>
                        <h2 class="lurename">Missile Baits Baby D Stroyer</h2>
                    </div>
                    <div class="lurebox-item">
                        <div class="lure-container">
                            <img src="../assets/lures/creature.png" alt="" class="lure">
                        </div>
                        <h2 class="lurename">Berkley Powerhawg 4”</h2>
                    </div>
                    <div class="lurebox-item">
                        <div class="lure-container">
                            <img src="../assets/lures/lurefans-doublekill-dk4.png" alt="" class="lure">
                        </div>
                        <h2 class="lurename">Lurefans Doublekill DK4</h2>
                    </div>
                    <div class="lurebox-item">
                        <div class="lure-container">
                            <img src="../assets/lures/quantum-x-street-tungsten-ball-jigheads.png" alt="" class="lure">
                        </div>
                        <h2 class="lurename">Quantum Tungsten Jigheads</h2>
                    </div>
                    <div class="lurebox-item">
                        <div class="lure-container">
                            <img src="../assets/lures/rapala-shadow-rap-jack-deep.png" alt="" class="lure">
                        </div>
                        <h2 class="lurename">Rapala Shadow Rap Jack Deep</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide fade">
            <div class="slider-wrapper">
                <div class="slider-top">
                    <div class="lurebox-container">
                        <img src="../assets/images/box-snoekbaars.png" alt="" class="slider-lurebox">
                    </div>
                    <div class="slider-text-container">
                        <h2 class="slider-title">
                            Lureboxes van<br>
                            afgelopen maand
                        </h2>
                        <p class="slider-subtitle">
                            "Decent one" box<br>
                            SNOEKBAARS VERTIKALE BOOTVISSERIJ
                        </p>
                    </div>
                </div>
                <div class="lurebox-contains">
                    <div class="lurebox-item row-one">
                        <div class="lure-container">
                            <img src="../assets/lures/berkley-power-tube.png" alt="" class="lure">
                        </div>
                        <h2 class="lurename">Berkley Power Tube</h2>
                    </div>
                    <div class="lurebox-item row-one">
                        <div class="lure-container">
                            <img src="../assets/lures/lucky-john-makora-split-tail.png" alt="" class="lure">
                        </div>
                        <h2 class="lurename">Lucky John Makora Split Tail</h2>
                    </div>
                    <div class="lurebox-item row-one">
                        <div class="lure-container">
                            <img src="../assets/lures/molix-real-action-shad.png" alt="" class="lure">
                        </div>
                        <h2 class="lurename">Molix Real Action Shad</h2>
                    </div>
                    <div class="lurebox-item">
                        <div class="lure-container">
                            <img src="../assets/lures/osp-dolive-shad.png" alt="" class="lure">
                        </div>
                        <h2 class="lurename">OSP Dolive Shad”</h2>
                    </div>
                    <div class="lurebox-item">
                        <div class="lure-container">
                            <img src="../assets/lures/strike-pro-the-pig-shad.png" alt="" class="lure">
                        </div>
                        <h2 class="lurename">Strike Pro The Pig Shad</h2>
                    </div>
                    <div class="lurebox-item">
                        <div class="lure-container">
                            <img src="../assets/lures/zman-scented-paddlerz.png" alt="" class="lure">
                        </div>
                        <h2 class="lurename">ZMan Scented Paddlerz</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide fade">
            <div class="slider-wrapper">
                <div class="slider-top">
                    <div class="lurebox-container">
                        <img src="../assets/images/box-snoek.png" alt="" class="slider-lurebox">
                    </div>
                    <div class="slider-text-container">
                        <h2 class="slider-title">
                            Lureboxes van<br>
                            afgelopen maand
                        </h2>
                        <p class="slider-subtitle">
                            "Decent one" box<br>
                            SNOEK LUREBOX KANTVISSERIJ
                        </p>
                    </div>
                </div>
                <div class="lurebox-contains">
                    <div class="lurebox-item row-one">
                        <div class="lure-container">
                            <img src="../assets/lures/Dead_Ghost-wit_500.png" alt="" class="lure">
                        </div>
                        <h2 class="lurename">BFT Black Ghost Jerk</h2>
                    </div>
                    <div class="lurebox-item row-one">
                        <div class="lure-container">
                            <img src="../assets/lures/eastfield-chubby-chaser.png" alt="" class="lure">
                        </div>
                        <h2 class="lurename">Eastfield Chubby Chaser</h2>
                    </div>
                    <div class="lurebox-item row-one">
                        <div class="lure-container">
                            <img src="../assets/lures/fly-dressing-dobb-daddy-spin-fly-hook.png" alt="" class="lure">
                        </div>
                        <h2 class="lurename">Dobb Daddy Spin Fly</h2>
                    </div>
                    <div class="lurebox-item">
                        <div class="lure-container">
                            <img src="../assets/lures/rapala-super-shadow-rap.png" alt="" class="lure">
                        </div>
                        <h2 class="lurename">Rapala Super Shadow Rap</h2>
                    </div>
                    <div class="lurebox-item">
                        <div class="lure-container">
                            <img src="../assets/lures/rapala-x-rap-otus.png" alt="" class="lure">
                        </div>
                        <h2 class="lurename">Rapala X-Rap Otus</h2>
                    </div>
                </div>
            </div>
        </div>

        <a onclick="plusSlides(-1)" class="prev">&#10094;</a>
        <a onclick="plusSlides(1)" class="next">&#10095;</a>
        <div class="dots">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
    </div>



    <div class="share-container">

        <div class="share-top">
            <h2 class="share-title">Deel je vangst met <span>#LureboxCatch</span><br>
                en maak kans op meer kunstaas!</h2>
            <img src="../assets/images/present.png" alt="" class="present">
        </div>
        <div class="share-section">
            <div class="text-section">
                <h2 class="text-title">
                    Sharing is caring
                </h2>
                <p class="text-subtitle">
                    Elke maand kiezen we 5 posts<br>
                    uit op Facebook en Instagram,<br>
                    waarbij we eenmalig wat extra<br>
                    kunstaas toevoegen aan de<br>
                    lurebox.
                </p>
            </div>
            <div class="insta-shot">
                <img src="../assets/images/insta-shot.jpg" alt="" class="insta-shot-img">
            </div>
        </div>



    </div>

@endsection