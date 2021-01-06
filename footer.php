<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

?>

<footer class="footer">
    <div class="container">
        <div class="row d-flex flex-column flex-md-row align-items-center w-100 mx-auto">
            <?php the_custom_logo() ?>
            <?php wp_nav_menu(array(
                'container_class'       => 'ml-md-auto col-lg-3 col-md-4 col-sm-5 col-6 d-flex align-items-center',
                'menu_class'            => 'list-unstyled mt-5 mt-md-0 text-black d-flex justify-content-between w-100',
            )) ?>
            <p class="copyright col-12 text-center mt-4">Copyright &copy; <span class="year">2020</span> Skyward Designs</p>
        </div>
    </div>
</footer>

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

