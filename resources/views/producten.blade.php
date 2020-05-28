@extends('layout.master')
@section('stylesheets')
@endsection
@section('main')



{{-- ---------- PIKE ---------- --}}
    <div class="container pike-container">
        <button style="display: none; opacity: 0;" onclick="window.location.href='/producten'" class="back-button top-back-button">
            <svg class="button-list" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M3 13h2v-2H3v2zm0 4h2v-2H3v2zm0-8h2V7H3v2zm4 4h14v-2H7v2zm0 4h14v-2H7v2zM7 7v2h14V7H7z"/></svg>
            Terug naar overzicht
        </button>
        <div class="category snoek" style="opacity: 0">
            <div class="product-text">
                <span class="title">Snoek Lureboxes</span>
                <button id="pike-button" class="cta" type="submit">Bekijk Lureboxes</button>
            </div>
            <div class="clicked-text" style="display: none; opacity: 0;">
                <h2 class="clicked-title">Snoek Lureboxes</h2>
                <p class="clicked-paragraph">Voor kantvisserij, bootvisserij en<br> bootvisserij met XL kunstaas.</p>
            </div>
        </div>
    </div>

    <div class="product-section pike-product-section" style="display: none; opacity: 0;">
        <div class="description-section">
            <div class="description-content pike-description-content" style="opacity: 0;">
                <h3 class="desc-title">Lureboxes voor kantvisserij</h3>
                <p class="desc-paragraph">
                    Het kunstaas heeft een lengte van 8cm tot 16cm en een gewicht van 5g tot 60g.<br>
                    Deze box bestaat voornamelijk uit: jerkbaits, swimbaits, softbaits, crankbaits, topwaters en chatterbaits.<br>
                    Altijd geleverd met een 7strand titanium onderlijn zodat je direct aan de slag kan aan de waterkant.
                </p>
            </div>
        </div>

        <div class="container boxes pike-boxes">
            <div class="box" style="opacity: 0;">
                <h2 class="box-title">'Guppy' box</h2>
                <p class="box-amount">Ongeveer 3 à 4 verschillende<br>
                    soorten kunstaas.
                </p>
                <img src="/assets/images/cardboard.jpg" alt="box" class="cartboard-img">
                <h2 class="box-price">€14,99 <span class="price-small">/ maand</span></h2>
                <p class="box-slogan">Met deze selectie aan kunstaas kan je direct aan de slag.</p>
                <p class="box-desc">Deze box bevat een paar soorten kunstaas van verschillende merken, met een totaalwaarde van ongeveer €20,-. </p>
                <button class="cta">
                    <svg class="button-cart" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
                    VOEG TOE
                </button>
            </div>

            <div class="box" style="opacity: 0;">
                <div class="mostsold-container">
                    <h2 class="mostsold">Meest gekocht</h2>
                </div>
                <h2 class="box-title">'Decent one' box</h2>
                <p class="box-amount">Ongeveer 3 à 4 verschillende<br>
                    soorten kunstaas.
                </p>
                <img src="/assets/images/cardboard.jpg" alt="box" class="cartboard-img">
                <h2 class="box-price">€24,99 <span class="price-small">/ maand</span></h2>
                <p class="box-slogan">Met deze selectie aan kunstaas kan je direct aan de slag.</p>
                <p class="box-desc">Deze box bevat een paar soorten kunstaas van verschillende merken, met een totaalwaarde van ongeveer €20,-. </p>
                <button class="cta">
                    <svg class="button-cart" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
                    VOEG TOE
                </button>
            </div>

            <div class="box" style="opacity: 0;">
                <h2 class="box-title">'Guppy' box</h2>
                <p class="box-amount">Ongeveer 3 à 4 verschillende<br>
                    soorten kunstaas.
                </p>
                <img src="/assets/images/cardboard.jpg" alt="box" class="cartboard-img">
                <h2 class="box-price">34,99 <span class="price-small">/ maand</span></h2>
                <p class="box-slogan">Met deze selectie aan kunstaas kan je direct aan de slag.</p>
                <p class="box-desc">Deze box bevat een paar soorten kunstaas van verschillende merken, met een totaalwaarde van ongeveer €20,-. </p>
                <button class="cta">
                    <svg class="button-cart" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
                    VOEG TOE
                </button>
            </div>
        </div>
        <div class="description-section">
            <div class="description-content pike-description-content" style="opacity: 0;">
                <h3 class="desc-title">Lureboxes voor de standaard Bootvisserij</h3>
                <p class="desc-paragraph">
                    Het kunstaas heeft een lengte van 8cm tot 16cm en een gewicht van 5g tot 60g.<br>
                    Deze box bestaat voornamelijk uit: jerkbaits, swimbaits, softbaits, crankbaits, topwaters en chatterbaits.<br>
                    Altijd geleverd met een 7strand titanium onderlijn zodat je direct aan de slag kan aan de waterkant.<br>
                </p>
            </div>
        </div>

        <div class="container boxes pike-boxes">
            <div class="box" style="opacity: 0;">
                <h2 class="box-title">'Guppy' box</h2>
                <p class="box-amount">Ongeveer 3 à 4 verschillende<br>
                    soorten kunstaas.
                </p>
                <img src="/assets/images/cardboard.jpg" alt="box" class="cartboard-img">
                <h2 class="box-price">€14,99 <span class="price-small">/ maand</span></h2>
                <p class="box-slogan">Met deze selectie aan kunstaas kan je direct aan de slag.</p>
                <p class="box-desc">Deze box bevat een paar soorten kunstaas van verschillende merken, met een totaalwaarde van ongeveer €20,-. </p>
                <button class="cta">
                    <svg class="button-cart" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
                    VOEG TOE
                </button>
            </div>

            <div class="box" style="opacity: 0;">
                <div class="mostsold-container">
                    <h2 class="mostsold">Meest gekocht</h2>
                </div>
                <h2 class="box-title">'Decent one' box</h2>
                <p class="box-amount">Ongeveer 3 à 4 verschillende<br>
                    soorten kunstaas.
                </p>
                <img src="/assets/images/cardboard.jpg" alt="box" class="cartboard-img">
                <h2 class="box-price">24,99 <span class="price-small">/ maand</span></h2>
                <p class="box-slogan">Met deze selectie aan kunstaas kan je direct aan de slag.</p>
                <p class="box-desc">Deze box bevat een paar soorten kunstaas van verschillende merken, met een totaalwaarde van ongeveer €20,-. </p>
                <button class="cta">
                    <svg class="button-cart" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
                    VOEG TOE
                </button>
            </div>

            <div class="box" style="opacity: 0;">
                <h2 class="box-title">'Big one' box</h2>
                <p class="box-amount">Ongeveer 3 à 4 verschillende<br>
                    soorten kunstaas.
                </p>
                <img src="/assets/images/cardboard.jpg" alt="box" class="cartboard-img">
                <h2 class="box-price">€34,99 <span class="price-small">/ maand</span></h2>
                <p class="box-slogan">Met deze selectie aan kunstaas kan je direct aan de slag.</p>
                <p class="box-desc">Deze box bevat een paar soorten kunstaas van verschillende merken, met een totaalwaarde van ongeveer €20,-. </p>
                <button class="cta">
                    <svg class="button-cart" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
                    VOEG TOE
                </button>
            </div>
        </div>
        <div class="description-section">
            <div class="description-content pike-description-content" style="opacity: 0;">
                <h3 class="desc-title">Lureboxes voor de XL Bootvisserij</h3>
                <p class="desc-paragraph">
                    Het kunstaas heeft een lengte van 8cm tot 16cm en een gewicht van 5g tot 60g.<br>
                    Deze box bestaat voornamelijk uit: jerkbaits, swimbaits, softbaits, crankbaits, topwaters en chatterbaits.<br>
                    Altijd geleverd met een 7strand titanium onderlijn zodat je direct aan de slag kan aan de waterkant.
                </p>
            </div>
        </div>

        <div class="container boxes pike-boxes">
            <div class="box" style="opacity: 0;">
                <h2 class="box-title">'Guppy' box</h2>
                <p class="box-amount">Ongeveer 3 à 4 verschillende<br>
                    soorten kunstaas.
                </p>
                <img src="/assets/images/cardboard.jpg" alt="box" class="cartboard-img">
                <h2 class="box-price">€14,99 <span class="price-small">/ maand</span></h2>
                <p class="box-slogan">Met deze selectie aan kunstaas kan je direct aan de slag.</p>
                <p class="box-desc">Deze box bevat een paar soorten kunstaas van verschillende merken, met een totaalwaarde van ongeveer €20,-. </p>
                <button class="cta">
                    <svg class="button-cart" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
                    VOEG TOE
                </button>
            </div>

            <div class="box" style="opacity: 0;">
                <div class="mostsold-container">
                    <h2 class="mostsold">Meest gekocht</h2>
                </div>
                <h2 class="box-title">'Decent one' box</h2>
                <p class="box-amount">Ongeveer 3 à 4 verschillende<br>
                    soorten kunstaas.
                </p>
                <img src="/assets/images/cardboard.jpg" alt="box" class="cartboard-img">
                <h2 class="box-price">€24,99 <span class="price-small">/ maand</span></h2>
                <p class="box-slogan">Met deze selectie aan kunstaas kan je direct aan de slag.</p>
                <p class="box-desc">Deze box bevat een paar soorten kunstaas van verschillende merken, met een totaalwaarde van ongeveer €20,-. </p>
                <button class="cta">
                    <svg class="button-cart" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
                    VOEG TOE
                </button>
            </div>

            <div class="box" style="opacity: 0;">
                <h2 class="box-title">'Big one' box</h2>
                <p class="box-amount">Ongeveer 3 à 4 verschillende<br>
                    soorten kunstaas.
                </p>
                <img src="/assets/images/cardboard.jpg" alt="box" class="cartboard-img">
                <h2 class="box-price">€34,99 <span class="price-small">/ maand</span></h2>
                <p class="box-slogan">Met deze selectie aan kunstaas kan je direct aan de slag.</p>
                <p class="box-desc">Deze box bevat een paar soorten kunstaas van verschillende merken, met een totaalwaarde van ongeveer €20,-. </p>
                <button class="cta">
                    <svg class="button-cart" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
                    VOEG TOE
                </button>
            </div>
        </div>
        <div class="description-section">
            <div class="description-content pike-description-content" style="opacity: 0;">
                <button onclick="window.location.href='/producten'" class="back-button">
                    <svg class="button-list" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M3 13h2v-2H3v2zm0 4h2v-2H3v2zm0-8h2V7H3v2zm4 4h14v-2H7v2zm0 4h14v-2H7v2zM7 7v2h14V7H7z"/></svg>
                    Terug naar overzicht
                </button>
            </div>
        </div>
    </div>

{{-- ---------- ZANDER ---------- --}}


    <div class="container zander-container">
        <div class="category snoekbaars" style="opacity: 0">
            <div class="product-text">
                <span class="title small-title">Snoekbaars lureboxes</span>
                <button id="zander-button" class="cta" type="submit">Bekijk Lureboxes</button>
            </div>
            <div class="clicked-text" style="display: none; opacity: 0;">
                <h2 class="clicked-title">Snoekbaars Lureboxes</h2>
                <p class="clicked-paragraph">Voor riviervisserij, verticale bootvisserij<br>en pelagic bootvisserij</p>
            </div>
        </div>
    </div>
    <div class="product-section zander-product-section" style="display: none; opacity: 0;">
        <div class="description-section">
            <div class="description-content zander-description-content" style="opacity: 0;">
                <h3 class="desc-title">Lureboxes voor Riviervisserij</h3>
                <p class="desc-paragraph">
                    Het kunstaas heeft een lengte van 8cm tot 16cm en een gewicht van 5g tot 60g.<br>
                    Deze box bestaat voornamelijk uit: jerkbaits, swimbaits, softbaits, crankbaits, topwaters en chatterbaits.<br>
                    Altijd geleverd met een 7strand titanium onderlijn zodat je direct aan de slag kan aan de waterkant.
                </p>
            </div>
        </div>

        <div class="container boxes zander-boxes">
            <div class="box" style="opacity: 0;">
                <h2 class="box-title">'Guppy' box</h2>
                <p class="box-amount">Ongeveer 3 à 4 verschillende<br>
                    soorten kunstaas.
                </p>
                <img src="/assets/images/cardboard.jpg" alt="box" class="cartboard-img">
                <h2 class="box-price">€14,99 <span class="price-small">/ maand</span></h2>
                <p class="box-slogan">Met deze selectie aan kunstaas kan je direct aan de slag.</p>
                <p class="box-desc">Deze box bevat een paar soorten kunstaas van verschillende merken, met een totaalwaarde van ongeveer €20,-. </p>
                <button class="cta">
                    <svg class="button-cart" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
                    VOEG TOE
                </button>
            </div>

            <div class="box" style="opacity: 0;">
                <div class="mostsold-container">
                    <h2 class="mostsold">Meest gekocht</h2>
                </div>
                <h2 class="box-title">'Decent one' box</h2>
                <p class="box-amount">Ongeveer 3 à 4 verschillende<br>
                    soorten kunstaas.
                </p>
                <img src="/assets/images/cardboard.jpg" alt="box" class="cartboard-img">
                <h2 class="box-price">€24,99 <span class="price-small">/ maand</span></h2>
                <p class="box-slogan">Met deze selectie aan kunstaas kan je direct aan de slag.</p>
                <p class="box-desc">Deze box bevat een paar soorten kunstaas van verschillende merken, met een totaalwaarde van ongeveer €20,-. </p>
                <button class="cta">
                    <svg class="button-cart" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
                    VOEG TOE
                </button>
            </div>

            <div class="box" style="opacity: 0;">
                <h2 class="box-title">'Guppy' box</h2>
                <p class="box-amount">Ongeveer 3 à 4 verschillende<br>
                    soorten kunstaas.
                </p>
                <img src="/assets/images/cardboard.jpg" alt="box" class="cartboard-img">
                <h2 class="box-price">34,99 <span class="price-small">/ maand</span></h2>
                <p class="box-slogan">Met deze selectie aan kunstaas kan je direct aan de slag.</p>
                <p class="box-desc">Deze box bevat een paar soorten kunstaas van verschillende merken, met een totaalwaarde van ongeveer €20,-. </p>
                <button class="cta">
                    <svg class="button-cart" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
                    VOEG TOE
                </button>
            </div>
        </div>
        <div class="description-section">
            <div class="description-content zander-description-content" style="opacity: 0;">
                <h3 class="desc-title">Lureboxes voor de Verticale Bootvisserij</h3>
                <p class="desc-paragraph">
                    Het kunstaas heeft een lengte van 8cm tot 16cm en een gewicht van 5g tot 60g.<br>
                    Deze box bestaat voornamelijk uit: jerkbaits, swimbaits, softbaits, crankbaits, topwaters en chatterbaits.<br>
                    Altijd geleverd met een 7strand titanium onderlijn zodat je direct aan de slag kan aan de waterkant.<br>
                </p>
            </div>
        </div>

        <div class="container boxes zander-boxes">
            <div class="box" style="opacity: 0;">
                <h2 class="box-title">'Guppy' box</h2>
                <p class="box-amount">Ongeveer 3 à 4 verschillende<br>
                    soorten kunstaas.
                </p>
                <img src="/assets/images/cardboard.jpg" alt="box" class="cartboard-img">
                <h2 class="box-price">€14,99 <span class="price-small">/ maand</span></h2>
                <p class="box-slogan">Met deze selectie aan kunstaas kan je direct aan de slag.</p>
                <p class="box-desc">Deze box bevat een paar soorten kunstaas van verschillende merken, met een totaalwaarde van ongeveer €20,-. </p>
                <button class="cta">
                    <svg class="button-cart" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
                    VOEG TOE
                </button>
            </div>

            <div class="box" style="opacity: 0;">
                <div class="mostsold-container">
                    <h2 class="mostsold">Meest gekocht</h2>
                </div>
                <h2 class="box-title">'Decent one' box</h2>
                <p class="box-amount">Ongeveer 3 à 4 verschillende<br>
                    soorten kunstaas.
                </p>
                <img src="/assets/images/cardboard.jpg" alt="box" class="cartboard-img">
                <h2 class="box-price">24,99 <span class="price-small">/ maand</span></h2>
                <p class="box-slogan">Met deze selectie aan kunstaas kan je direct aan de slag.</p>
                <p class="box-desc">Deze box bevat een paar soorten kunstaas van verschillende merken, met een totaalwaarde van ongeveer €20,-. </p>
                <button class="cta">
                    <svg class="button-cart" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
                    VOEG TOE
                </button>
            </div>

            <div class="box" style="opacity: 0;">
                <h2 class="box-title">'Big one' box</h2>
                <p class="box-amount">Ongeveer 3 à 4 verschillende<br>
                    soorten kunstaas.
                </p>
                <img src="/assets/images/cardboard.jpg" alt="box" class="cartboard-img">
                <h2 class="box-price">€34,99 <span class="price-small">/ maand</span></h2>
                <p class="box-slogan">Met deze selectie aan kunstaas kan je direct aan de slag.</p>
                <p class="box-desc">Deze box bevat een paar soorten kunstaas van verschillende merken, met een totaalwaarde van ongeveer €20,-. </p>
                <button class="cta">
                    <svg class="button-cart" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
                    VOEG TOE
                </button>
            </div>
        </div>
        <div class="description-section">
            <div class="description-content zander-description-content" style="opacity: 0;">
                <h3 class="desc-title">Lureboxes voor de Pelagic Bootvisserij</h3>
                <p class="desc-paragraph">
                    Het kunstaas heeft een lengte van 8cm tot 16cm en een gewicht van 5g tot 60g.<br>
                    Deze box bestaat voornamelijk uit: jerkbaits, swimbaits, softbaits, crankbaits, topwaters en chatterbaits.<br>
                    Altijd geleverd met een 7strand titanium onderlijn zodat je direct aan de slag kan aan de waterkant.
                </p>
            </div>
        </div>

        <div class="container boxes zander-boxes">
            <div class="box" style="opacity: 0;">
                <h2 class="box-title">'Guppy' box</h2>
                <p class="box-amount">Ongeveer 3 à 4 verschillende<br>
                    soorten kunstaas.
                </p>
                <img src="/assets/images/cardboard.jpg" alt="box" class="cartboard-img">
                <h2 class="box-price">€14,99 <span class="price-small">/ maand</span></h2>
                <p class="box-slogan">Met deze selectie aan kunstaas kan je direct aan de slag.</p>
                <p class="box-desc">Deze box bevat een paar soorten kunstaas van verschillende merken, met een totaalwaarde van ongeveer €20,-. </p>
                <button class="cta">
                    <svg class="button-cart" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
                    VOEG TOE
                </button>
            </div>

            <div class="box" style="opacity: 0;">
                <div class="mostsold-container">
                    <h2 class="mostsold">Meest gekocht</h2>
                </div>
                <h2 class="box-title">'Decent one' box</h2>
                <p class="box-amount">Ongeveer 3 à 4 verschillende<br>
                    soorten kunstaas.
                </p>
                <img src="/assets/images/cardboard.jpg" alt="box" class="cartboard-img">
                <h2 class="box-price">€24,99 <span class="price-small">/ maand</span></h2>
                <p class="box-slogan">Met deze selectie aan kunstaas kan je direct aan de slag.</p>
                <p class="box-desc">Deze box bevat een paar soorten kunstaas van verschillende merken, met een totaalwaarde van ongeveer €20,-. </p>
                <button class="cta">
                    <svg class="button-cart" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
                    VOEG TOE
                </button>
            </div>

            <div class="box" style="opacity: 0;">
                <h2 class="box-title">'Big one' box</h2>
                <p class="box-amount">Ongeveer 3 à 4 verschillende<br>
                    soorten kunstaas.
                </p>
                <img src="/assets/images/cardboard.jpg" alt="box" class="cartboard-img">
                <h2 class="box-price">€34,99 <span class="price-small">/ maand</span></h2>
                <p class="box-slogan">Met deze selectie aan kunstaas kan je direct aan de slag.</p>
                <p class="box-desc">Deze box bevat een paar soorten kunstaas van verschillende merken, met een totaalwaarde van ongeveer €20,-. </p>
                <button class="cta">
                    <svg class="button-cart" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
                    VOEG TOE
                </button>
            </div>
        </div>
        <div class="description-section">
            <div class="description-content zander-description-content" style="opacity: 0;">
                <button onclick="window.location.href='/producten'" class="back-button">
                    <svg class="button-list" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M3 13h2v-2H3v2zm0 4h2v-2H3v2zm0-8h2V7H3v2zm4 4h14v-2H7v2zm0 4h14v-2H7v2zM7 7v2h14V7H7z"/></svg>
                    Terug naar overzicht
                </button>
            </div>
        </div>
    </div>

{{-- ---------- PERCH ---------- --}}

    <div class="container perch-container">
        <div class="category baars" style="opacity: 0">
            <div class="product-text">
                <span class="title">Baars Lureboxes</span>
                <button id="perch-button" class="cta" type="submit">Bekijk Lureboxes</button>
            </div>
            <div class="clicked-text" style="display: none; opacity: 0;">
                <h2 class="clicked-title">Snoek Lureboxes</h2>
                <p class="clicked-paragraph">Voor kantvisserij, bootvisserij en<br> bootvisserij met XL kunstaas.</p>
            </div>
        </div>
    </div>
    <div class="product-section perch-product-section" style="display: none; opacity: 0;">
        <div class="description-section">
            <div class="description-content perch-description-content" style="opacity: 0;">
                <h3 class="desc-title">Lureboxes voor kantvisserij</h3>
                <p class="desc-paragraph">
                    Het kunstaas heeft een lengte van 8cm tot 16cm en een gewicht van 5g tot 60g.<br>
                    Deze box bestaat voornamelijk uit: jerkbaits, swimbaits, softbaits, crankbaits, topwaters en chatterbaits.<br>
                    Altijd geleverd met een 7strand titanium onderlijn zodat je direct aan de slag kan aan de waterkant.
                </p>
            </div>
        </div>

        <div class="container boxes perch-boxes">
            <div class="box" style="opacity: 0;">
                <h2 class="box-title">'Guppy' box</h2>
                <p class="box-amount">Ongeveer 3 à 4 verschillende<br>
                    soorten kunstaas.
                </p>
                <img src="/assets/images/cardboard.jpg" alt="box" class="cartboard-img">
                <h2 class="box-price">€14,99 <span class="price-small">/ maand</span></h2>
                <p class="box-slogan">Met deze selectie aan kunstaas kan je direct aan de slag.</p>
                <p class="box-desc">Deze box bevat een paar soorten kunstaas van verschillende merken, met een totaalwaarde van ongeveer €20,-. </p>
                <button class="cta">
                    <svg class="button-cart" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
                    VOEG TOE
                </button>
            </div>

            <div class="box" style="opacity: 0;">
                <div class="mostsold-container">
                    <h2 class="mostsold">Meest gekocht</h2>
                </div>
                <h2 class="box-title">'Decent one' box</h2>
                <p class="box-amount">Ongeveer 3 à 4 verschillende<br>
                    soorten kunstaas.
                </p>
                <img src="/assets/images/cardboard.jpg" alt="box" class="cartboard-img">
                <h2 class="box-price">€24,99 <span class="price-small">/ maand</span></h2>
                <p class="box-slogan">Met deze selectie aan kunstaas kan je direct aan de slag.</p>
                <p class="box-desc">Deze box bevat een paar soorten kunstaas van verschillende merken, met een totaalwaarde van ongeveer €20,-. </p>
                <button class="cta">
                    <svg class="button-cart" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
                    VOEG TOE
                </button>
            </div>

            <div class="box" style="opacity: 0;">
                <h2 class="box-title">'Guppy' box</h2>
                <p class="box-amount">Ongeveer 3 à 4 verschillende<br>
                    soorten kunstaas.
                </p>
                <img src="/assets/images/cardboard.jpg" alt="box" class="cartboard-img">
                <h2 class="box-price">34,99 <span class="price-small">/ maand</span></h2>
                <p class="box-slogan">Met deze selectie aan kunstaas kan je direct aan de slag.</p>
                <p class="box-desc">Deze box bevat een paar soorten kunstaas van verschillende merken, met een totaalwaarde van ongeveer €20,-. </p>
                <button class="cta">
                    <svg class="button-cart" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
                    VOEG TOE
                </button>
            </div>
        </div>
        <div class="description-section">
            <div class="description-content perch-description-content" style="opacity: 0;">
                <h3 class="desc-title">Lureboxes voor de standaard Bootvisserij</h3>
                <p class="desc-paragraph">
                    Het kunstaas heeft een lengte van 8cm tot 16cm en een gewicht van 5g tot 60g.<br>
                    Deze box bestaat voornamelijk uit: jerkbaits, swimbaits, softbaits, crankbaits, topwaters en chatterbaits.<br>
                    Altijd geleverd met een 7strand titanium onderlijn zodat je direct aan de slag kan aan de waterkant.<br>
                </p>
            </div>
        </div>

        <div class="container boxes perch-boxes">
            <div class="box" style="opacity: 0;">
                <h2 class="box-title">'Guppy' box</h2>
                <p class="box-amount">Ongeveer 3 à 4 verschillende<br>
                    soorten kunstaas.
                </p>
                <img src="/assets/images/cardboard.jpg" alt="box" class="cartboard-img">
                <h2 class="box-price">€14,99 <span class="price-small">/ maand</span></h2>
                <p class="box-slogan">Met deze selectie aan kunstaas kan je direct aan de slag.</p>
                <p class="box-desc">Deze box bevat een paar soorten kunstaas van verschillende merken, met een totaalwaarde van ongeveer €20,-. </p>
                <button class="cta">
                    <svg class="button-cart" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
                    VOEG TOE
                </button>
            </div>

            <div class="box" style="opacity: 0;">
                <div class="mostsold-container">
                    <h2 class="mostsold">Meest gekocht</h2>
                </div>
                <h2 class="box-title">'Decent one' box</h2>
                <p class="box-amount">Ongeveer 3 à 4 verschillende<br>
                    soorten kunstaas.
                </p>
                <img src="/assets/images/cardboard.jpg" alt="box" class="cartboard-img">
                <h2 class="box-price">24,99 <span class="price-small">/ maand</span></h2>
                <p class="box-slogan">Met deze selectie aan kunstaas kan je direct aan de slag.</p>
                <p class="box-desc">Deze box bevat een paar soorten kunstaas van verschillende merken, met een totaalwaarde van ongeveer €20,-. </p>
                <button class="cta">
                    <svg class="button-cart" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
                    VOEG TOE
                </button>
            </div>

            <div class="box" style="opacity: 0;">
                <h2 class="box-title">'Big one' box</h2>
                <p class="box-amount">Ongeveer 3 à 4 verschillende<br>
                    soorten kunstaas.
                </p>
                <img src="/assets/images/cardboard.jpg" alt="box" class="cartboard-img">
                <h2 class="box-price">€34,99 <span class="price-small">/ maand</span></h2>
                <p class="box-slogan">Met deze selectie aan kunstaas kan je direct aan de slag.</p>
                <p class="box-desc">Deze box bevat een paar soorten kunstaas van verschillende merken, met een totaalwaarde van ongeveer €20,-. </p>
                <button class="cta">
                    <svg class="button-cart" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
                    VOEG TOE
                </button>
            </div>
        </div>
        <div class="description-section">
            <div class="description-content perch-description-content" style="opacity: 0;">
                <h3 class="desc-title">Lureboxes voor de XL Bootvisserij</h3>
                <p class="desc-paragraph">
                    Het kunstaas heeft een lengte van 8cm tot 16cm en een gewicht van 5g tot 60g.<br>
                    Deze box bestaat voornamelijk uit: jerkbaits, swimbaits, softbaits, crankbaits, topwaters en chatterbaits.<br>
                    Altijd geleverd met een 7strand titanium onderlijn zodat je direct aan de slag kan aan de waterkant.
                </p>
            </div>
        </div>

        <div class="container boxes perch-boxes">
            <div class="box" style="opacity: 0;">
                <h2 class="box-title">'Guppy' box</h2>
                <p class="box-amount">Ongeveer 3 à 4 verschillende<br>
                    soorten kunstaas.
                </p>
                <img src="/assets/images/cardboard.jpg" alt="box" class="cartboard-img">
                <h2 class="box-price">€14,99 <span class="price-small">/ maand</span></h2>
                <p class="box-slogan">Met deze selectie aan kunstaas kan je direct aan de slag.</p>
                <p class="box-desc">Deze box bevat een paar soorten kunstaas van verschillende merken, met een totaalwaarde van ongeveer €20,-. </p>
                <button class="cta">
                    <svg class="button-cart" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
                    VOEG TOE
                </button>
            </div>

            <div class="box" style="opacity: 0;">
                <div class="mostsold-container">
                    <h2 class="mostsold">Meest gekocht</h2>
                </div>
                <h2 class="box-title">'Decent one' box</h2>
                <p class="box-amount">Ongeveer 3 à 4 verschillende<br>
                    soorten kunstaas.
                </p>
                <img src="/assets/images/cardboard.jpg" alt="box" class="cartboard-img">
                <h2 class="box-price">€24,99 <span class="price-small">/ maand</span></h2>
                <p class="box-slogan">Met deze selectie aan kunstaas kan je direct aan de slag.</p>
                <p class="box-desc">Deze box bevat een paar soorten kunstaas van verschillende merken, met een totaalwaarde van ongeveer €20,-. </p>
                <button class="cta">
                    <svg class="button-cart" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
                    VOEG TOE
                </button>
            </div>

            <div class="box" style="opacity: 0;">
                <h2 class="box-title">'Big one' box</h2>
                <p class="box-amount">Ongeveer 3 à 4 verschillende<br>
                    soorten kunstaas.
                </p>
                <img src="/assets/images/cardboard.jpg" alt="box" class="cartboard-img">
                <h2 class="box-price">€34,99 <span class="price-small">/ maand</span></h2>
                <p class="box-slogan">Met deze selectie aan kunstaas kan je direct aan de slag.</p>
                <p class="box-desc">Deze box bevat een paar soorten kunstaas van verschillende merken, met een totaalwaarde van ongeveer €20,-. </p>
                <button class="cta">
                    <svg class="button-cart" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
                    VOEG TOE
                </button>
            </div>
        </div>
        <div class="description-section">
            <div class="description-content perch-description-content" style="opacity: 0;">
                <button onclick="window.location.href='/producten'" class="back-button">
                    <svg class="button-list" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M3 13h2v-2H3v2zm0 4h2v-2H3v2zm0-8h2V7H3v2zm4 4h14v-2H7v2zm0 4h14v-2H7v2zM7 7v2h14V7H7z"/></svg>
                    Terug naar overzicht
                </button>
            </div>
        </div>
    </div>

{{-- ---------- STREETFISHING ---------- --}}


    <div class="container streetfishing-container">
        <div class="category streetfishing" style="opacity: 0">
            <div class="product-text">
                <span class="title small-title">Streetfishing Lureboxes</span>
                <button id="streetfishing-button" class="cta" type="submit">Bekijk Lureboxes</button>
            </div>
            <div class="clicked-text" style="display: none; opacity: 0;">
                <h2 class="clicked-title">Snoek Lureboxes</h2>
                <p class="clicked-paragraph">Voor kantvisserij, bootvisserij en<br> bootvisserij met XL kunstaas.</p>
            </div>
        </div>
    </div>
    <div class="product-section streetfishing-product-section" style="display: none; opacity: 0;">
        <div class="description-section">
            <div class="description-content streetfishing-description-content" style="opacity: 0;">
                <h3 class="desc-title">Lureboxes voor kantvisserij</h3>
                <p class="desc-paragraph">
                    Het kunstaas heeft een lengte van 8cm tot 16cm en een gewicht van 5g tot 60g.<br>
                    Deze box bestaat voornamelijk uit: jerkbaits, swimbaits, softbaits, crankbaits, topwaters en chatterbaits.<br>
                    Altijd geleverd met een 7strand titanium onderlijn zodat je direct aan de slag kan aan de waterkant.
                </p>
            </div>
        </div>

        <div class="container boxes streetfishing-boxes">
            <div class="box" style="opacity: 0;">
                <h2 class="box-title">'Guppy' box</h2>
                <p class="box-amount">Ongeveer 3 à 4 verschillende<br>
                    soorten kunstaas.
                </p>
                <img src="/assets/images/cardboard.jpg" alt="box" class="cartboard-img">
                <h2 class="box-price">€14,99 <span class="price-small">/ maand</span></h2>
                <p class="box-slogan">Met deze selectie aan kunstaas kan je direct aan de slag.</p>
                <p class="box-desc">Deze box bevat een paar soorten kunstaas van verschillende merken, met een totaalwaarde van ongeveer €20,-. </p>
                <button class="cta">
                    <svg class="button-cart" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
                    VOEG TOE
                </button>
            </div>

            <div class="box" style="opacity: 0;">
                <div class="mostsold-container">
                    <h2 class="mostsold">Meest gekocht</h2>
                </div>
                <h2 class="box-title">'Decent one' box</h2>
                <p class="box-amount">Ongeveer 3 à 4 verschillende<br>
                    soorten kunstaas.
                </p>
                <img src="/assets/images/cardboard.jpg" alt="box" class="cartboard-img">
                <h2 class="box-price">€24,99 <span class="price-small">/ maand</span></h2>
                <p class="box-slogan">Met deze selectie aan kunstaas kan je direct aan de slag.</p>
                <p class="box-desc">Deze box bevat een paar soorten kunstaas van verschillende merken, met een totaalwaarde van ongeveer €20,-. </p>
                <button class="cta">
                    <svg class="button-cart" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
                    VOEG TOE
                </button>
            </div>

            <div class="box" style="opacity: 0;">
                <h2 class="box-title">'Guppy' box</h2>
                <p class="box-amount">Ongeveer 3 à 4 verschillende<br>
                    soorten kunstaas.
                </p>
                <img src="/assets/images/cardboard.jpg" alt="box" class="cartboard-img">
                <h2 class="box-price">34,99 <span class="price-small">/ maand</span></h2>
                <p class="box-slogan">Met deze selectie aan kunstaas kan je direct aan de slag.</p>
                <p class="box-desc">Deze box bevat een paar soorten kunstaas van verschillende merken, met een totaalwaarde van ongeveer €20,-. </p>
                <button class="cta">
                    <svg class="button-cart" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
                    VOEG TOE
                </button>
            </div>
        </div>
        <div class="description-section">
            <div class="description-content streetfishing-description-content" style="opacity: 0;">
                <h3 class="desc-title">Lureboxes voor de standaard Bootvisserij</h3>
                <p class="desc-paragraph">
                    Het kunstaas heeft een lengte van 8cm tot 16cm en een gewicht van 5g tot 60g.<br>
                    Deze box bestaat voornamelijk uit: jerkbaits, swimbaits, softbaits, crankbaits, topwaters en chatterbaits.<br>
                    Altijd geleverd met een 7strand titanium onderlijn zodat je direct aan de slag kan aan de waterkant.<br>
                </p>
            </div>
        </div>

        <div class="container boxes streetfishing-boxes">
            <div class="box" style="opacity: 0;">
                <h2 class="box-title">'Guppy' box</h2>
                <p class="box-amount">Ongeveer 3 à 4 verschillende<br>
                    soorten kunstaas.
                </p>
                <img src="/assets/images/cardboard.jpg" alt="box" class="cartboard-img">
                <h2 class="box-price">€14,99 <span class="price-small">/ maand</span></h2>
                <p class="box-slogan">Met deze selectie aan kunstaas kan je direct aan de slag.</p>
                <p class="box-desc">Deze box bevat een paar soorten kunstaas van verschillende merken, met een totaalwaarde van ongeveer €20,-. </p>
                <button class="cta">
                    <svg class="button-cart" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
                    VOEG TOE
                </button>
            </div>

            <div class="box" style="opacity: 0;">
                <div class="mostsold-container">
                    <h2 class="mostsold">Meest gekocht</h2>
                </div>
                <h2 class="box-title">'Decent one' box</h2>
                <p class="box-amount">Ongeveer 3 à 4 verschillende<br>
                    soorten kunstaas.
                </p>
                <img src="/assets/images/cardboard.jpg" alt="box" class="cartboard-img">
                <h2 class="box-price">24,99 <span class="price-small">/ maand</span></h2>
                <p class="box-slogan">Met deze selectie aan kunstaas kan je direct aan de slag.</p>
                <p class="box-desc">Deze box bevat een paar soorten kunstaas van verschillende merken, met een totaalwaarde van ongeveer €20,-. </p>
                <button class="cta">
                    <svg class="button-cart" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
                    VOEG TOE
                </button>
            </div>

            <div class="box" style="opacity: 0;">
                <h2 class="box-title">'Big one' box</h2>
                <p class="box-amount">Ongeveer 3 à 4 verschillende<br>
                    soorten kunstaas.
                </p>
                <img src="/assets/images/cardboard.jpg" alt="box" class="cartboard-img">
                <h2 class="box-price">€34,99 <span class="price-small">/ maand</span></h2>
                <p class="box-slogan">Met deze selectie aan kunstaas kan je direct aan de slag.</p>
                <p class="box-desc">Deze box bevat een paar soorten kunstaas van verschillende merken, met een totaalwaarde van ongeveer €20,-. </p>
                <button class="cta">
                    <svg class="button-cart" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
                    VOEG TOE
                </button>
            </div>
        </div>
        <div class="description-section">
            <div class="description-content streetfishing-description-content" style="opacity: 0;">
                <h3 class="desc-title">Lureboxes voor de XL Bootvisserij</h3>
                <p class="desc-paragraph">
                    Het kunstaas heeft een lengte van 8cm tot 16cm en een gewicht van 5g tot 60g.<br>
                    Deze box bestaat voornamelijk uit: jerkbaits, swimbaits, softbaits, crankbaits, topwaters en chatterbaits.<br>
                    Altijd geleverd met een 7strand titanium onderlijn zodat je direct aan de slag kan aan de waterkant.
                </p>
            </div>
        </div>

        <div class="container boxes streetfishing-boxes">
            <div class="box" style="opacity: 0;">
                <h2 class="box-title">'Guppy' box</h2>
                <p class="box-amount">Ongeveer 3 à 4 verschillende<br>
                    soorten kunstaas.
                </p>
                <img src="/assets/images/cardboard.jpg" alt="box" class="cartboard-img">
                <h2 class="box-price">€14,99 <span class="price-small">/ maand</span></h2>
                <p class="box-slogan">Met deze selectie aan kunstaas kan je direct aan de slag.</p>
                <p class="box-desc">Deze box bevat een paar soorten kunstaas van verschillende merken, met een totaalwaarde van ongeveer €20,-. </p>
                <button class="cta">
                    <svg class="button-cart" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
                    VOEG TOE
                </button>
            </div>

            <div class="box" style="opacity: 0;">
                <div class="mostsold-container">
                    <h2 class="mostsold">Meest gekocht</h2>
                </div>
                <h2 class="box-title">'Decent one' box</h2>
                <p class="box-amount">Ongeveer 3 à 4 verschillende<br>
                    soorten kunstaas.
                </p>
                <img src="/assets/images/cardboard.jpg" alt="box" class="cartboard-img">
                <h2 class="box-price">€24,99 <span class="price-small">/ maand</span></h2>
                <p class="box-slogan">Met deze selectie aan kunstaas kan je direct aan de slag.</p>
                <p class="box-desc">Deze box bevat een paar soorten kunstaas van verschillende merken, met een totaalwaarde van ongeveer €20,-. </p>
                <button class="cta">
                    <svg class="button-cart" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
                    VOEG TOE
                </button>
            </div>

            <div class="box" style="opacity: 0;">
                <h2 class="box-title">'Big one' box</h2>
                <p class="box-amount">Ongeveer 3 à 4 verschillende<br>
                    soorten kunstaas.
                </p>
                <img src="/assets/images/cardboard.jpg" alt="box" class="cartboard-img">
                <h2 class="box-price">€34,99 <span class="price-small">/ maand</span></h2>
                <p class="box-slogan">Met deze selectie aan kunstaas kan je direct aan de slag.</p>
                <p class="box-desc">Deze box bevat een paar soorten kunstaas van verschillende merken, met een totaalwaarde van ongeveer €20,-. </p>
                <button class="cta">
                    <svg class="button-cart" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
                    VOEG TOE
                </button>
            </div>
        </div>
        <div class="description-section">
            <div class="description-content streetfishing-description-content" style="opacity: 0;">
                <button onclick="window.location.href='/producten'" class="back-button">
                    <svg class="button-list" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M3 13h2v-2H3v2zm0 4h2v-2H3v2zm0-8h2V7H3v2zm4 4h14v-2H7v2zm0 4h14v-2H7v2zM7 7v2h14V7H7z"/></svg>
                    Terug naar overzicht
                </button>
            </div>
        </div>
    </div>

    @endsection