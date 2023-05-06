<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CoffeeShop
 */

?>


	<footer class="d-flex flex-wrap justify-content-between align-items-center py-3  border-top bg-dark text-white">
    <div class="col-md-4 d-flex align-items-center">
      <a href="/" class="mb-3 me-2 mb-md-0 text-white text-decoration-none lh-1">
        <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
      </a>
      <span class="mb-3 mb-md-0 text-white">© 2023 CoffeeShops, Inc</span>
      <span class="mb-3 mb-md-0 text-white">&nbsp;&nbsp;Powered by Ashp</span>
    </div>

    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex text-white pe-3">
      <li class="ms-3 text-white"><a class="text-white" href="#"><i class="bi bi-twitter" width="24" height="24"><use xlink:href="#twitter"></use></i></a></li>
      <li class="ms-3"><a class="text-white" href="#"><i  class="bi bi-facebook" width="24" height="24"><use xlink:href="#instagram"></use></i></a></li>
      <li class="ms-3"><a class="text-white" href="#"><i  class="bi bi-instagram" width="24" height="24"><use xlink:href="#facebook"></use></i></a></li>
    </ul>
  </footer>
	
</div><!-- #page -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<?php wp_footer(); ?>

</body>
</html>
