<?php
/**
 * The default template for displaying content
 *
 * Used for both singular and index.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Child
 * @since Twenty Twenty 1.0
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
		// TODO: It might be stupid to have this, as we need to be able to set sidebar according to the page....

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
