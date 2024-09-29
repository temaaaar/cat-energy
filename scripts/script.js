// source/scripts/script.js
var element = document.getElementById("navMenu");
var button = document.getElementById("navMenuBtn");
button.onclick = function() {
  if (element.classList.contains("visually-hidden")) {
    element.classList.remove("visually-hidden");
  } else {
    element.classList.add("visually-hidden");
  }
};
//# sourceMappingURL=script.js.map
