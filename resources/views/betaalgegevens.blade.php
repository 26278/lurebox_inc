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
   <span>Betalingsgegevens wijzigen</span> 
   <div class="profilechange-block">    
    <div class="user-payment">
        <p>Kies je betaalmethode</p>
        <select id="Betaalmethode">
            <option value="ideal">Ideal</option>
            <option value="paypal">Paypal</option>
            <option value="creditcard">Creditcard</option>
        </select>
        <img src="../assets/images/ideal.png" alt="" class="ideal">

        <p>Bank selecteren</p>
        <select id="banks">
            <option value="Rabobank">Rabobank</option>
            <option value="BUNQ">BUNQ</option>
            <option value="ING">ING</option>
            <option value="SNS">SNS</option>
            <option value="Knab">Knab</option>
            <option value="DHB">DHB</option>
            <option value="ASN">ANS</option>
            <option value="ABN-amro">ABN-amro</option>
            <option value="Triados">Triados</option>
        </select>
        <div class="bank-help">
            <span>Voorwaarden</span>
           <p>Lurebox zal een tijdelijke autorisatie op je <br>
             betaalkaart maken om deze te verifiëren. Dit is <br>
              alleen een autorisatie en NIET een afschrijving. Je <br>
               bank kan je op de hoogte brengen van de <br>
                autorisatie. Je gaat ermee akkoord dat je <br>
                 onmiddellijk toegang krijgt tot je Lurebox- <br>
                  abonnement. In het geval van opzegging heb je <br>
                   geen recht op restitutie. 
        </p>
        </div>
    </div>
    <a class="button-change payment button" href="/profile">Betaalgegevens wijzigen</a>
</div>
@endsection