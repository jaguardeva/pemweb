document.addEventListener("DOMContentLoaded", () => {
  const navbar = document.querySelector("#main-nav");
  const btnRegister = document.querySelector("#btnRegister");
  const btnRegister2 = document.querySelector("#btnRegister2");
  const navLink = document.querySelectorAll(".nav-link");
  window.addEventListener("scroll", () => {
    navbar.classList.toggle("bg-white", window.scrollY > 0);
    navbar.classList.toggle("shadow-lg", window.scrollY > 0);

    navLink.forEach((link) => {
      link.classList.toggle("text-black", window.scrollY > 0);
    });

    if (window.scrollY > 0) {
      btnRegister2.classList.remove("hidden");
      btnRegister2.classList.add("flex");
      btnRegister.classList.remove("flex");
      btnRegister.classList.add("hidden");
    } else {
      btnRegister2.classList.add("hidden");
      btnRegister2.classList.remove("flex");
      btnRegister.classList.add("flex");
      btnRegister.classList.remove("hidden");
    }
  });
});
