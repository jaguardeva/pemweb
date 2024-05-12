</main>

<!-- Flowbite Js -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script> -->

<script src="../node_modules/flowbite/dist/flowbite.min.js"></script>

<!-- sweetalert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
  <?php if (isset($_GET['success'])) { ?>
    Swal.fire({
      title: "SUCCESS!",
      text: "<?php echo $_GET['success']; ?>",
      icon: "success"
    });
  <?php } ?>
</script>

<script>
  window.addEventListener('scroll', () => {
    const navbar = document.querySelector('nav');
    navbar.classList.toggle('bg-white', window.scrollY > 0);
    navbar.classList.toggle('shadow-lg', window.scrollY > 0);
  });
</script>



</body>

</html>