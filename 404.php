<?php
/**
 * The template for displaying the 404 template in the Twenty Twenty theme.
 * Modified for Sivistymättömät Festival purposes (removed search for example)
 * 
 * Sivistymattomat Festival theme modifications, Copyright 2020 Sivistymättömät workgroup
 * Based on the Twenty Twenty WordPress default theme, Copyright 2019-2020 WordPress.org
 * Licensed as GPL 2.0 or later
 * 
 * @package WordPress
 * @subpackage Sivistymattomat_Festival
 * @since Sivistymattomat_Festival 0.7.0
 */

get_header();
?>

<main id="site-content" role="main">

	<div class="section-inner thin error404-content">

		<h1 class="entry-title"><?php _e( 'Page Not Found', 'twentytwenty' ); ?></h1>

		<div class="intro-text"><p><?php _e( 'The page you were looking for could not be found. It might have been removed, renamed, or did not exist in the first place.', 'twentytwenty' ); ?></p></div>

	</div><!-- .section-inner -->

</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php
get_footer();
