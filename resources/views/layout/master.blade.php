<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/css/master.css">
    <link rel="stylesheet" href="/css/{{$css}}.css">
    <title>Lurebox - {{$pagina}}</title>
    @yield('stylesheets')
</head>
<body>
    <nav>
        <div class="nav-content">
            <div class="nav-left">
                <a href="/">
                    <img src="/assets/images/logo.png" alt="logo" class="nav-logo">
                </a>
            </div>
            <div class="nav-middle">
                <a href="/">Home</a>
                <a href="/producten">Lureboxes</a>
                <a href="/over-ons">Over ons</a>
                <a href="/faq">FAQ</a>
            </div>
            <div class="nav-right">
                <a href=""><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg></a>
                <a href=""><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 6c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2m0 9c2.7 0 5.8 1.29 6 2v1H6v-.99c.2-.72 3.3-2.01 6-2.01m0-11C9.79 4 8 5.79 8 8s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 9c-2.67 0-8 1.34-8 4v3h16v-3c0-2.66-5.33-4-8-4z"/></svg></a>
            </div>
        </div>
    </nav>
    <div class="container">
    </div>
    <main>

        @yield('main')
        </div>
    </main>
    <footer>
        <div class="footer-content">
            <div class="footer-frame">
                <h2 class="footer-title">Lurebox</h2>
                <p class="footer-paragraph">
                    Op onze lurebox pagina bieden
                    wij voor verschillende visserijen
                    dezen met selecties aan kunstaas
                    aan.
                </p>
            </div>
            <div class="footer-frame">
                <h2 class="footer-title">Wie zijn wij</h2>
                <p class="footer-paragraph">
                    Met al meer dan 8 jaar aan ervaring
                    zoeken onze professionals maandelijks
                    een selectie uit van innovatief kunstaas
                    met vangstgarantie.
                </p>

            </div>
            <div class="footer-frame">
                <h2 class="footer-title">Vragen</h2>
                <p class="footer-paragraph">
                    Heb je vragen of opmerkingen
                    over onze service?
                </p>
                <br> <br> <br>

            </div>
            <div class="footer-frame">
                <h2 class="footer-title">Social Media</h2>
                <div class="footer-paragraph socialmedia-paragraph">
                    <a href="https://www.instagram.com/hehallo" class="socialmedia">
                        <svg class="socialmedia-icon" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="169.063px" height="169.063px" viewBox="0 0 169.063 169.063" style="enable-background:new 0 0 169.063 169.063;" xml:space="preserve"> <g> <path d="M122.406,0H46.654C20.929,0,0,20.93,0,46.655v75.752c0,25.726,20.929,46.655,46.654,46.655h75.752 c25.727,0,46.656-20.93,46.656-46.655V46.655C169.063,20.93,148.133,0,122.406,0z M154.063,122.407 c0,17.455-14.201,31.655-31.656,31.655H46.654C29.2,154.063,15,139.862,15,122.407V46.655C15,29.201,29.2,15,46.654,15h75.752 c17.455,0,31.656,14.201,31.656,31.655V122.407z"/> <path d="M84.531,40.97c-24.021,0-43.563,19.542-43.563,43.563c0,24.02,19.542,43.561,43.563,43.561s43.563-19.541,43.563-43.561 C128.094,60.512,108.552,40.97,84.531,40.97z M84.531,113.093c-15.749,0-28.563-12.812-28.563-28.561 c0-15.75,12.813-28.563,28.563-28.563s28.563,12.813,28.563,28.563C113.094,100.281,100.28,113.093,84.531,113.093z"/> <path d="M129.921,28.251c-2.89,0-5.729,1.17-7.77,3.22c-2.051,2.04-3.23,4.88-3.23,7.78c0,2.891,1.18,5.73,3.23,7.78 c2.04,2.04,4.88,3.22,7.77,3.22c2.9,0,5.73-1.18,7.78-3.22c2.05-2.05,3.22-4.89,3.22-7.78c0-2.9-1.17-5.74-3.22-7.78 C135.661,29.421,132.821,28.251,129.921,28.251z"/> </g> </svg>
                        <p class="socialmedia-title">lurebox.inc</p>
                    </a>
                    <a href="https://www.instagram.com/hehallo" class="socialmedia">
                        <svg class="socialmedia-icon" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="m75 512h167v-182h-60v-60h60v-75c0-41.355469 33.644531-75 75-75h75v60h-60c-16.542969 0-30 13.457031-30 30v60h87.292969l-10 60h-77.292969v182h135c41.355469 0 75-33.644531 75-75v-362c0-41.355469-33.644531-75-75-75h-362c-41.355469 0-75 33.644531-75 75v362c0 41.355469 33.644531 75 75 75zm-45-437c0-24.8125 20.1875-45 45-45h362c24.8125 0 45 20.1875 45 45v362c0 24.8125-20.1875 45-45 45h-105v-122h72.707031l20-120h-92.707031v-30h90v-120h-105c-57.898438 0-105 47.101562-105 105v45h-60v120h60v122h-137c-24.8125 0-45-20.1875-45-45zm0 0"/></svg>
                        <p class="socialmedia-title">Lurebox</p>
                    </a>
                </div>
            </div>
            <div class="links">
                <a href="/producten" class="footer-link">Bekijk hier onze lureboxes</a>

                <a href="/producten" class="footer-link">Leer meer over ons</a>

                <a href="/producten" class="footer-link">
                    Bekijk de FAQ of<br>
                    stel hier je vraag
                </a>
                <h2 class="copyright">© Copyright 2020</h2>

            </div>
        </div>
    </footer>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.6/gsap.min.js"></script>
    <script type="text/javascript" src="/js/master.js"></script>
    <script type="text/javascript" src="/js/{{$css}}.js"></script>
</body>