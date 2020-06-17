@extends('layout.master')
@section('stylesheets')
@endsection
@section('main')


<div class="faq intro">
    <div class="faq-intro">
        <span>Frequently Asked Questions,</span>
        <p class="subheader">Oftewel veelgestelde vragen.</p>
        <p class="light">Wij hebben ze voor je op een rijtje gezet. <br>
            Zit jouw vraag er niet tussen? <br>
            Stel hem gerust, dan geven wij binnen 24 uur antwoord. </p>
    </div>
</div>

<div class="container">
    <div class="faq-questions">
        <strong>Waarom zou ik mij abonneren op een Lurebox als ik alles ook in de winkel kan kopen?</strong>
        <p>Het voordeel van een lurebox abonnement is niet alleen dat het goedkoper is dan dat je alles op het internet zou kopen,
            maar het is ook nog eens leuk om verrast te worden. Daarnaast hebben wij het aas al voor je uitgetest, zodat je niet meer
            hoeft te twijfelen of het aas wel vis oplevert.</p>

        <strong>Verzenden jullie ook naar het buitenland?</strong>
        <p>Momenteel verzenden wij alleen binnen Nederland en Vlaams België.</p>

        <strong>Wanneer ontvang ik mijn lurebox?</strong>
        <p>Bestel je je lurebox voor 18:00, dan sturen wij deze dezelfde dag nog op de post. Meestal krijg je hem dan 2 werkdagen
            later binnen, bezorgt door PostNL. Vervolgens zullen wij de lureboxes blijven versturen op dezelfde datum als je eerste
            besteldatum.</p>

        <strong>Kan ik mijn bezorgdatum veranderen?</strong>
        <p>Zeker, bij je account instellingen kan je de bezorgdatum veranderen (<span class="bold">Pro tip:</span> Aan het begin van de maand worden de
            boxen met de nieuwste producten verzonden).</p>

        <strong>Ontvangt iedereen met hetzelfde pakket dezelfde inhoud?</strong>
        <p>De producten blijven hetzelfde, het kan wel dat de kleuren afwijken. (<span class="bold">Pro tip:</span> Je kan dus goed wedstrijden doen met je
            vismaat die ook geabonneerd is!)</p>

        <strong>Wat is de hoofdstad van Haïti? </strong>
        <p>Port-Au-Prince.</p>
    </div>

</div>
<div class="faq-contact">
    <div class="faq-contact-left">
        <span>Stel hier je vraag!</span>
        <p>Wij weten alles.</p>
    </div>

    <div class="faq-contact-right">
        <div class="contact-block">
            <input type="email" placeholder="E-mail adres">
            <textarea name="" placeholder="Typ hier je vraag" id="" cols="30" rows="10"></textarea>
            <a class="cta button" href="/">Verstuur</a>
        </div>
    </div>
</div>

@endsection