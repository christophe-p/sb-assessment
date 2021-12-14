// **********************
// Responsive hamburger menu toggle
// **********************

var hamburger = document.querySelector("#hamburger");
var targetNav = document.querySelector("#wide-screen-nav");
var targetMobileNav = document.querySelector("#mobile-nav");

// On click
hamburger.addEventListener("click", function () {
  // Toggle class "is-active"
  hamburger.classList.toggle("is-active");
  // Do something else, like open/close menu
  if (targetNav.className === "wide-screen-nav") {
    targetNav.className += " responsive";
    targetMobileNav.style.display = "block";
    targetMobileNav.classList.add("animate__animated", "animate__slideInRight");
    targetMobileNav.style.setProperty("--animate-duration", "0.8s");
  } else {
    targetNav.className = "wide-screen-nav"; // Is this needed?
    targetMobileNav.style.display = "none"; // Is this needed?
  }
});

// Apply mobile menu closing mechanism to mobile menu links

var mobileMenuLink = document.querySelectorAll(".mobile-nav > .header-menu > li > a");
var i;

for (i = 0; i < mobileMenuLink.length; i++) {
  // On click
  mobileMenuLink[i].addEventListener("click", function () {
    // Toggle class "is-active"
    hamburger.classList.toggle("is-active");
    // Do something else, like open/close menu
    targetMobileNav.style.display = "none";
    targetNav.className = "wide-screen-nav"; // Is this needed?
  });
}
