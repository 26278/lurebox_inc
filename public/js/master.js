// Entrance animations
// var ea = gsap.timeline();
// gsap.to('.nav-logo', .5, {opacity: 0});

var profile = document.querySelector('#profile');
var profileClose = document.querySelector('#profile-close')
var cart = document.querySelector('cart');

var openProfile = gsap.timeline({paused: true})
openProfile.set('#profile-menu', {display: "block"});
openProfile.to('#profile-menu', .3, {opacity: 1, ease: "power2.out"});


profile.addEventListener('click', function(){
    openProfile.play();
});
profileClose.addEventListener('click', function(){
    openProfile.reverse();
});

