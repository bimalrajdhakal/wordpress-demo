<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blogpostapp
 */

?>

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
  </footer>
  <!-- Footer ends here  -->

    <!-- Bootstrap core JavaScript -->
	<script src="<?php bloginfo('stylesheet_directory');?>/assets/jquery/jquery.min.js"></script>
  	<script src="<?php bloginfo('stylesheet_directory');?>/assets/bootstrap/js/bootstrap.bundle.min.js"></script>

<?php wp_footer(); ?>

</body>
</html>
