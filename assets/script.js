// window.onscroll = function () {
//   scrollFunction();
// };

// function scrollFunction() {
//   var navbar = document.getElementById("navbar");
//   var sign = document.getElementById("btn-sign");
//   if (
//     document.body.scrollTop > 120 ||
//     document.documentElement.scrollTop > 120
//   ) {
//     navbar.classList.add("shadow");
//     navbar.classList.add("bg-white");
//     navbar.classList.add("fixed-top");
//   } else {
//     navbar.classList.remove("shadow");
//     navbar.classList.remove("bg-white");
//     navbar.classList.remove("fixed-top");
//   }
// }

const header = document.querySelector("nav");

window.addEventListener("scroll", function () {
  header.classList.toggle("sticky", window.scrollY > 120);
});

// Detect request animation frame
var scroll =
  window.requestAnimationFrame ||
  // IE Fallback
  function (callback) {
    window.setTimeout(callback, 1000 / 60);
  };
var elementsToShow = document.querySelectorAll(".show-on-scroll");

function loop() {
  elementsToShow.forEach(function (element) {
    if (isElementInViewport(element)) {
      element.classList.add("is-visible");
    } else {
      element.classList.remove("is-visible");
    }
  });

  scroll(loop);
}

// Call the loop for the first time
loop();

// Helper function from: http://stackoverflow.com/a/7557433/274826
function isElementInViewport(el) {
  // special bonus for those using jQuery
  if (typeof jQuery === "function" && el instanceof jQuery) {
    el = el[0];
  }
  var rect = el.getBoundingClientRect();
  return (
    (rect.top <= 0 && rect.bottom >= 0) ||
    (rect.bottom >=
      (window.innerHeight || document.documentElement.clientHeight) &&
      rect.top <=
        (window.innerHeight || document.documentElement.clientHeight)) ||
    (rect.top >= 0 &&
      rect.bottom <=
        (window.innerHeight || document.documentElement.clientHeight))
  );
}
