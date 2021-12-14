// **********************
// Animated logo
// **********************

let logo = document.querySelector(".site-branding");
let siteTitle = document.querySelector(".site-title");

logo.addEventListener("mouseover", function () {
 siteTitle.style.display = "block";
 siteTitle.classList.add("animate__animated", "animate__fadeInLeft");
 siteTitle.style.setProperty("--animate-duration", "1s");
});

logo.addEventListener("mouseout", function () {
 siteTitle.style.display = "none";
});
