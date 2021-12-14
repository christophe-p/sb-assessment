let goTopBtn = document.querySelector(".back-to-top");

// Track scrolling and show/hide back-to-top button when the scrolling distance is greater than the client's height
function trackScroll() {
  let scrolled = window.pageYOffset;
  let coords = document.documentElement.clientHeight;

  if (scrolled > coords) {
   goTopBtn.style.opacity = "1";
   goTopBtn.style.visibility = "visible";
  }

 if (scrolled < coords) {
   goTopBtn.style.opacity = "0";
   goTopBtn.style.visibility = "hidden";
 }
}

window.addEventListener("scroll", trackScroll);
