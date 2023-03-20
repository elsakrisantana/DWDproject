// STICKY WEBSITE
// Reference : https://www.w3schools.com/howto/howto_js_navbar_sticky.asp
// When the user scrolls the page, execute myFunction
window.onscroll = function() {stickyHeaderFunction()};

// Get the navbar
var navbar = document.getElementById("navbar");
var backtotop = document.getElementById("backtotop");

// Get the offset position of the navbar
var sticky = navbar.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function stickyHeaderFunction() {
    if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky");
        backtotop.classList.add("backtotop");
    } else {
        navbar.classList.remove("sticky");
        backtotop.classList.remove("backtotop");
    }
}

// REVEAL TRANSITION
// Reference : https://alvarotrigo.com/blog/css-animations-scroll/
function reveal() {
    var reveals = document.querySelectorAll(".reveal");

    for (var i = 0; i < reveals.length; i++) {
        var windowHeight = window.innerHeight;
        var elementTop = reveals[i].getBoundingClientRect().top;
        var elementVisible = 70;

        if (elementTop < windowHeight - elementVisible) {
            reveals[i].classList.add("activate");
        } else {
            reveals[i].classList.remove("activate");
        }
    }
}

window.addEventListener("scroll", reveal);


$(document).ready(function () {
    var reveals1 = document.querySelectorAll(".reveal1");
    for (var i = 0; i < reveals1.length; i++) {
        reveals1[i].classList.add("activate");
    }

    var reveals2 = document.querySelectorAll(".reveal2");
    for (var i = 0; i < reveals2.length; i++) {
        reveals2[i].classList.add("activate");
    }

    var reveals3 = document.querySelectorAll(".reveal3");
    for (var i = 0; i < reveals3.length; i++) {
        reveals3[i].classList.add("activate");
    }
});