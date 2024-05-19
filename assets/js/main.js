document.addEventListener("DOMContentLoaded", () => {
  const navbar = document.querySelector("#main-nav");
  const btnRegister = document.querySelector("#btnRegister");
  const btnRegister2 = document.querySelector("#btnRegister2");
  const navLink = document.querySelectorAll(".nav-link");
  const buttonTop = document.getElementById("button-top");
  window.addEventListener("scroll", () => {
    navbar.classList.toggle("bg-white", window.scrollY > 0);
    navbar.classList.toggle("shadow-lg", window.scrollY > 0);

    navLink.forEach((link) => {
      if (window.scrollY > 0) {
        link.classList.remove("text-white");
        link.classList.add("text-black");
      } else {
        link.classList.add("text-white");
        link.classList.remove("text-black");
      }
    });

    if (window.scrollY > 0) {
      btnRegister2.classList.remove("hidden");
      btnRegister2.classList.add("flex");
      btnRegister.classList.remove("flex");
      btnRegister.classList.add("hidden");

      buttonTop.classList.remove("-right-20");
      buttonTop.classList.add("right-10");
    } else {
      btnRegister2.classList.add("hidden");
      btnRegister2.classList.remove("flex");
      btnRegister.classList.add("flex");
      btnRegister.classList.remove("hidden");
      buttonTop.classList.add("-right-20");
      buttonTop.classList.remove("right-10");
    }
  });

  buttonTop.addEventListener("click", () => {
    window.scrollTo({
      top: 0,
      behavior: "smooth",
    });
  });
});
