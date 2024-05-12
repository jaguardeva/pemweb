document.addEventListener("DOMContentLoaded", () => {
  const navbar = document.querySelector("nav");
  const btnRegister = document.querySelector("#btnRegister");
  window.addEventListener("scroll", () => {
    navbar.classList.toggle("bg-white", window.scrollY > 0);
    navbar.classList.toggle("shadow-lg", window.scrollY > 0);
    btnRegister.classList.toggle("border-blue-600", window.scrollY > 0);
    btnRegister.classList.toggle("text-blue-600", window.scrollY > 0);
    btnRegister.classList.toggle("duration-700", window.scrollY > 0);
    btnRegister.classList.toggle("transition-all", window.scrollY > 0);

    if (window.scrollY > 0) {
      btnRegister.classList.remove("border-white");
      btnRegister.classList.remove("text-gray-900");
    } else {
      btnRegister.classList.add("border-white");
      btnRegister.classList.add("text-gray-900");
    }
  });
});
