/* Présentation visuelle dans la console. Utilisé : 0 mais c'est stylé :) */

function init() {
  console.log(
    "%cRMES - Profs sans frontières",
    "font-size: 50px; font-weight: bold; color: red; text-shadow: 2px 2px 4px black;text-align: center;"
  );
  console.log(
    "%cProjet Open Source : https://github.com/NoePoirier5327/RMES",
    "font-size: 15px; font-weight: bold; color: darkgray; text-shadow: 2px 2px 4px black;text-align: center;"
  );
  console.log(
    "%c⚠️ Attention : Ne collez pas de code ici qui provient d’une source inconnue.\nCela peut vous exposer à des attaques (comme le vol de données ou l'exécution de code malveillant).",
    "font-size: 10px; font-weight: italic; color: gray; text-shadow: 2px 2px 4px black;"
  );
  console.log(
    "%cConsole du développeur : ",
    "font-size: 15px; font-weight: bold; color: green; text-shadow: 2px 2px 4px black;text-align: center;"
  );
}
init();

/* SLIDER ECOLES */

var sliderEcoles = new Swiper(".slider-ecoles", {
  slidesPerView: 1,
  spaceBetween: 10,
  loop: true,
  speed: 3000,
  autoplay: {
    delay: -1,
    disableOnInteraction: false,
  },
  breakpoints: {
    640: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 4,
      spaceBetween: 40,
    },
    1024: {
      slidesPerView: 5,
      spaceBetween: 50,
    },
  },
});

/* SLIDER DEVS */

var sliderDevs = new Swiper(".slider-devs", {
  slidesPerView: "auto",
  loop: true,
  autoplay: {
    delay: 5000,
    disableOnInteraction: false,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  grabCursor: true,
});
