<?php
/**
 * The default template for displaying content
 *
 * Used for both singular and index.
 * 
 * Modified to show a single post sidebar menu if applicable.
 * 
 * Sivistymattomat Festival theme modifications, Copyright 2020 Sivistymättömät workgroup
 * Based on the Twenty Twenty WordPress default theme, Copyright 2019-2020 WordPress.org
 * Licensed as GPL 2.0 or later
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Sivistymattomat_Festival
 * @since Sivistymattomat_Festival 0.7.0
 */

?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<?php 
	   // Show image on the side of the content
    	if ( ! is_search() ) {
    	    get_template_part( 'template-parts/featured-image' );
    	}
	?>
	<?php if ( is_page( ) ): ?>
	<div class="section-inner section-single-page-sidebar-menu">
	
		<?php
		// Add sidebar menu option to single pages (not articles!)
		 wp_nav_menu( array( 'theme_location' => 'info-page-sidebar-menu' ) );

		?>
		
	</div><!-- .section-inner -->
	<?php endif; ?>
	<div class="post-inner <?php echo is_page_template( 'templates/template-full-width.php' ) ? '' : 'thin'; ?> ">
    	
    	<?php
    
    	get_template_part( 'template-parts/entry-header' );
    
    	?>

		<div class="entry-content">

			<?php
			if ( is_search() || ! is_singular() && 'summary' === get_theme_mod( 'blog_content', 'full' ) ) {
				the_excerpt();
			} else {
				the_content( __( 'Continue reading', 'twentytwenty' ) );
			}
			
			edit_post_link();
			
			?>

		</div><!-- .entry-content -->

	</div><!-- .post-inner -->

	<?php

	if ( is_single() ) {

		get_template_part( 'template-parts/navigation' );

	}

	/**
	 *  Output comments wrapper if it's a post, or if comments are open,
	 * or if there's a comment number – and check for password.
	 * Disabled for this theme by hand - see functions.php
	 * */
	if ( ( is_single() || is_page() ) && ( comments_open() || get_comments_number() ) && ! post_password_required() ) {
		?>

		<div class="comments-wrapper section-inner">

			<?php comments_template(); ?>

		</div><!-- .comments-wrapper -->

		<?php
	}
	?>

</article><!-- .post -->
