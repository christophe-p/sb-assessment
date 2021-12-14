// **********************
// Accordion
// **********************

var question = document.getElementsByClassName("faq-question");
var i;

for (i = 0; i < question.length; i++) {
  question[i].addEventListener("click", function () {
    this.classList.toggle("active-faq-question");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  });
}
