const scrollBtn = document.querySelector(".scroll-button");
const responsiveBtn = document.querySelector("header .container .responsive-navbar i");
const navbar = document.querySelector("header .container .navbar");
const activeBtn = document.querySelectorAll("header .container .navbar .menu a");
const profilBtn = document.querySelector("header .navbar .menu .profilBtn");
const informBtn = document.querySelector("header .navbar .menu .informBtn");
const mediaBtn = document.querySelector("header .navbar .menu .mediaBtn");
const profil = document.querySelector("#profil");
const informasi = document.querySelector("#informasi");
const media = document.querySelector("#media");
const profilResponsive = document.querySelector("header .container .navbar .menu .carousel-1");
const informasiResponsive = document.querySelector("header .container .navbar .menu .carousel-2");
const mediaResponsive = document.querySelector("header .container .navbar .menu .carousel-3");

const refreshButtonVisibility = () => {
  if (document.documentElement.scrollTop > 300) {
    scrollBtn.style.opacity = "1";
    scrollBtn.style.pointerEvents = "auto";
  } else {
    scrollBtn.style.opacity = "0";
    scrollBtn.style.pointerEvents = "none";
  }
};

refreshButtonVisibility();

scrollBtn.addEventListener("click", () => {
  window.scrollTo({
    top: 0,
    behavior: "smooth",
  });
});

responsiveBtn.addEventListener("click", () => {
  navbar.classList.toggle("active");
});

document.addEventListener("scroll", (e) => {
  refreshButtonVisibility();
});

activeBtn.forEach((m) =>
  m.addEventListener("click", function () {
    for (const a of activeBtn) {
      a.classList.remove("active");
    }
    m.classList.add("active");
  })
);

activeBtn.forEach((m) => console.log(m));

profilBtn.addEventListener("click", function (e) {
  profil.classList.toggle("profil");
  informasi.classList.remove("informasi");
  media.classList.remove("media");
  profilResponsive.classList.toggle("profilActive");
  informasiResponsive.classList.remove("informasiActive");
  mediaResponsive.classList.remove("mediaActive");
});

informBtn.addEventListener("click", function () {
  informasi.classList.toggle("informasi");
  profil.classList.remove("profil");
  media.classList.remove("media");
  informasiResponsive.classList.toggle("informasiActive");
  profilResponsive.classList.remove("profilActive");
  mediaResponsive.classList.remove("mediaActive");
});

mediaBtn.addEventListener("click", function () {
  media.classList.toggle("media");
  profil.classList.remove("profil");
  informasi.classList.remove("informasi");
  mediaResponsive.classList.toggle("mediaActive");
  profilResponsive.classList.remove("profilActive");
  informasiResponsive.classList.remove("informasiActive");
});

$(document).ready(function () {
  $("#banner").slick({
    autoplay: true,
    autoplaySpeed: 2500,
  });

  $("#gambar").slick({
    autoplay: true,
    autoplaySpeed: 2500,
  });
});
