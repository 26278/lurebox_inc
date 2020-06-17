//Picking up the windows of the profile menu and the shopping cart menu

let profile = document.querySelector('#profile');
let cart = document.querySelector('#cart');


//Picking up the close buttons of this menu's
let profileClose = document.querySelector('#profile-close');
let cartClose = document.querySelector('#cart-close');

//Setting a boolean for the state of the window (toggle for open/close)
let profileMenuOpen = false;
let cartMenuOpen = false;

//Timeline for the opening and closing of the windows with animations
let openProfile = gsap.timeline({paused: true});
openProfile.set('#profile-menu', {display: "block"});
openProfile.to('#profile-menu', .3, {opacity: 1, ease: "power2.out"});

let openCart = gsap.timeline({paused: true});
openCart.set('#cart-menu', {display: "block"});
openCart.to('#cart-menu', .3, {opacity: 1, ease: "power2.out"});


//Handler for opening the menu which checks if there is a menu open already
profile.addEventListener('click', function(){
    if ( profileMenuOpen === true){
        openProfile.reverse();
        profileMenuOpen = false;
    }
    else if ( cartMenuOpen === true){
        openCart.reverse();
        cartMenuOpen = false;

        openProfile.play();
        profileMenuOpen = true;
    }
    else {
        openProfile.play();
        profileMenuOpen = true;
    }
});

cart.addEventListener('click', function(){
    if ( profileMenuOpen === true){
        openProfile.reverse();
        profileMenuOpen = false;

        openCart.play();
        cartMenuOpen = true;
    }
    else if ( cartMenuOpen === true){
        openCart.reverse();
        cartMenuOpen = false;
    }
    else {
        openCart.play();
        cartMenuOpen = true;
    }
});

//Event listener for the close button, to close the windows
profileClose.addEventListener('click', function(){
    openProfile.reverse();
    profileMenuOpen = false;
});

cartClose.addEventListener('click', function(){
    openCart.reverse();
    profileMenuOpen = false;
});

