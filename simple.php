<?php
/**
 * Template Name: Simple
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage ShelfHelp
 */

get_header(); ?>



<div class="container pageContent">

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<a href="<?php echo get_site_url(); ?>"><img src="<?php bloginfo('template_directory');?>/images/shelfHelp-logo-chubby.png" alt="Shelf Help" /></a>
			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();

				// Include the page content template.
				get_template_part( 'template-parts/content', 'pagesimple' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}

				// End of the loop.
			endwhile;
			?>
		</div>
	</div>
</div><!-- .content-area -->
<?php get_footer(); ?>
