// gsap.to('.nav-logo', .5, {opacity: 0});
var pike = document.getElementById('pike-button');
var zander = document.getElementById('zander-button');
var perch = document.getElementById('perch-button');
var streetfishing = document.getElementById('streetfishing-button');

gsap.set('.description-content', { x: -50 });
gsap.set('.boxes>*', { y: -50 });
gsap.set('.snoek', { x: -50 } );
gsap.set('.snoekbaars', { x: -50 } );
gsap.set('.baars', { x: -50 } );
gsap.set('.streetfishing', { x: -50 } );


// Entrance animations
var ea = gsap.timeline();

ea.to('.snoek', .3, {x: 0, opacity: 1});
ea.to('.snoekbaars', .3, {x: 0, opacity: 1});
ea.to('.baars', .3, {x: 0, opacity: 1});
ea.to('.streetfishing', .3, {x: 0, opacity: 1});


var openPike = gsap.timeline( { paused:true } );

openPike.to('.snoek .product-text', .5, { opacity: 0 } );
openPike.set('.snoek .product-text', { display: "none" } );
openPike.set('.snoek .clicked-text', { display: "flex" } ) ;
openPike.set('.back-button', { display: "flex"} );
openPike.to('.snoek .clicked-text', .5, { opacity: 1 } );

openPike.to('.streetfishing', .3, { y: 100, opacity: 0 }, "-=.4" );
openPike.to('.baars', .3, { y: 100, opacity: 0 }, "-=.2" );
openPike.to('.snoekbaars', .3, { y: 100, opacity: 0 }, "-=.2" );

openPike.to('.back-button', .5, { opacity: 1 } );

openPike.set('.pike-product-section', { display: "flex"}, "+=.5" );
openPike.to('.pike-product-section', .3, { opacity: 1 } );
openPike.to('.pike-description-content', .3, { opacity: 1, x: 0 } );
openPike.set('.streetfishing-container, .perch-container, .zander-container', { display: "none" } );
openPike.to('.pike-boxes>*', .9, { stagger: .2, opacity: 1, y: 0 } );



pike.addEventListener("click", function(){
   openPike.play();
});

var openZander = gsap.timeline( { paused:true } );

openZander.to('.snoekbaars .product-text', .5, { opacity: 0 } );
openZander.set('.snoekbaars .product-text', { display: "none" } );
openZander.set('.snoekbaars .clicked-text', { display: "flex" } ) ;
openZander.set('.back-button', { display: "flex"} );
openZander.to('.snoekbaars .clicked-text', .5, { opacity: 1 } );

openZander.to('.snoek', .3, { opacity: 0 }, "-=.2" );
openZander.to('.streetfishing', .3, { y: 100, opacity: 0 }, "-=.4" );
openZander.to('.baars', .3, { y: 100, opacity: 0 }, "-=.2" );

openZander.to('.zander-container', .5, { y: -220 } );

openZander.to('.back-button', .5, { opacity: 1 } );

openZander.set('.zander-product-section', { y: -220, display: "flex"}, "+=.5" );
openZander.to('.zander-product-section', .3, { opacity: 1 } );
openZander.to('.zander-description-content', .3, { opacity: 1, x: 0 } );
openZander.set('.streetfishing-container, .perch-container', { display: "none" } );
openZander.set('footer', {css: { bottom: '220px'} });
openZander.to('.zander-boxes>*', .9, { stagger: .2, opacity: 1, y: 0 } );



zander.addEventListener("click", function(){
   openZander.play();
});

var openPerch = gsap.timeline( { paused:true } );

openPerch.to('.baars .product-text', .5, { opacity: 0 } );
openPerch.set('.baars .product-text', { display: "none" } );
openPerch.set('.baars .clicked-text', { display: "flex" } ) ;
openPerch.set('.back-button', { display: "flex"} );
openPerch.to('.baars .clicked-text', .5, { opacity: 1 } );

openPerch.to('.snoek', .3, { opacity: 0 }, "-=.2" );
openPerch.to('.snoekbaars', .3, { opacity: 0 }, "-=.2" );

openPerch.to('.streetfishing', .3, { y: 100, opacity: 0 }, "-=.4" );

openPerch.to('.perch-container', .5, { y: -440 } );

openPerch.to('.back-button', .5, { opacity: 1 } );

openPerch.set('.perch-product-section', { y: -440, display: "flex"}, "+=.5" );
openPerch.to('.perch-product-section', .3, { opacity: 1 } );
openPerch.to('.perch-description-content', .3, { opacity: 1, x: 0 } );
openPerch.to('.perch-boxes>*', .9, { stagger: .2, opacity: 1, y: 0 } );

openPerch.set('.streetfishing, .streetfishing-container', { display: "none" } );
openPerch.set('footer', {css: { bottom: '440px'} });



perch.addEventListener("click", function(){
   openPerch.play();
});

var openStreetfishing = gsap.timeline( { paused:true } );

openStreetfishing.to('.streetfishing .product-text', .5, { opacity: 0 } );
openStreetfishing.set('.streetfishing .product-text', { display: "none" } );
openStreetfishing.set('.streetfishing .clicked-text', { display: "flex" } ) ;
openStreetfishing.set('.back-button', { display: "flex"} );
openStreetfishing.to('.streetfishing .clicked-text', .5, { opacity: 1 } );

openStreetfishing.to('.snoek', .3, { opacity: 0 }, "-=.2" );
openStreetfishing.to('.snoekbaars', .3, { opacity: 0 }, "-=.2" );
openStreetfishing.to('.baars', .3, { opacity: 0 }, "-=.2" );

openStreetfishing.to('.streetfishing-container', .5, { y: -660 } );

openStreetfishing.to('.back-button', .5, { opacity: 1 } );

openStreetfishing.set('.streetfishing-product-section', { y: -660, display: "flex"}, "+=.5" );
openStreetfishing.to('.streetfishing-product-section', .3, { opacity: 1 } );
openStreetfishing.to('.streetfishing-description-content', .3, { opacity: 1, x: 0 } );
openStreetfishing.to('.streetfishing-boxes>*', .9, { stagger: .2, opacity: 1, y: 0 } );
// openStreetfishing.set('footer', {css: { bottom: '660px'} });


streetfishing.addEventListener("click", function(){
   openStreetfishing.play();
});
