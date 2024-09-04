document.addEventListener("DOMContentLoaded", function () {
  eventListeners();
  darkMode();
});

function darkMode() {
  const btnDarkMode = document.querySelector(".toggle");
  const sunIcon = document.querySelector(".toggle .bxs-sun");
  const moonIcon = document.querySelector(".toggle .bx-moon");

  btnDarkMode.addEventListener("click", function () {
    document.body.classList.toggle("dark-mode");
    sunIcon.className =
      sunIcon.className == "bx bxs-sun" ? "bx bx-sun" : "bx bxs-sun";
    moonIcon.className =
      moonIcon.className == "bx bxs-moon" ? "bx bx-moon" : "bx bxs-moon";
  });
}

const preferDarkMode = window.matchMedia("(prefers-color-scheme: dark)");
if (preferDarkMode.matches) {
  document.body.classList.add("dark-mode");
} else {
  document.body.classList.remove("dark-mode");
}

const mobileMenu = document.querySelector(".mobile-menu");

eventListeners = () =>
  mobileMenu.addEventListener("click", responsiveNavigation);

responsiveNavigation = () => {
  const navigation = document.querySelector(".navbar");

  navigation.classList.toggle("show-menu");
};
