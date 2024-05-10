</main>
<!-- Flowbite Js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

<script>


  window.addEventListener('scroll', () => {
    const navbar = document.querySelector('nav');
    navbar.classList.toggle('bg-white', window.scrollY > 0);
    navbar.classList.toggle('shadow-lg', window.scrollY > 0);
  });
</script>
</body>

</html>