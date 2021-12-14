// **********************
// Change color of top nav on scroll down
// **********************

var masthead = document.getElementById("masthead");
var topNavLinks = document.querySelectorAll("#wide-screen-nav > .header-menu > .menu-item > a");
var hamburgerLines = document.querySelectorAll(".hamburger-box > span");

masthead.style.backgroundColor = "#111111";

window.onscroll = function () {
 scrollFunction();
};

function scrollFunction() {

 if (
  document.body.scrollTop > 100 ||
  document.documentElement.scrollTop > 100
 ) {
  masthead.style.backgroundColor = "#f9fafc";
  masthead.style.boxShadow = "0 3px 15px #d3d3d3";

  for (i = 0; i < topNavLinks.length; i++) {
   topNavLinks[i].style.color = "#111111";
  }

  for (i = 0; i < hamburgerLines.length; i++) {
   hamburgerLines[i].style.backgroundColor = "#111111";
  }

 } else {
  masthead.style.backgroundColor = "#111111";
  masthead.style.boxShadow = "none";

  for (i = 0; i < topNavLinks.length; i++) {
   topNavLinks[i].style.color = "white";
  }

  for (i = 0; i < hamburgerLines.length; i++) {
   hamburgerLines[i].style.backgroundColor = "white";
  }
 }
}
