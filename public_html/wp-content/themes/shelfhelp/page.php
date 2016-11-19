<?php
/**
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

<img src="<?php bloginfo('template_directory');?>/images/cornerFlowers.png" alt="Lula Belle" class="cornerFlowers-bottom" />
<div class='navBar'>
	<a href="<?php echo get_site_url(); ?>"><img width="120" height="120" src="<?php bloginfo('template_directory');?>/images/lula-belle.png" alt="Lula Belle" class="lulaLogo" /></a>
	<div class="trigger">menu</div>
	<?php include('template-parts/navBar.php'); ?>
</div>

<div class="container pageContent <?php the_field('page_class'); ?>">

	<?php
	// Start the loop.
	while ( have_posts() ) : the_post();

		// Include the page content template.
		get_template_part( 'template-parts/content', 'page' );

		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) {
			comments_template();
		}

		// End of the loop.
	endwhile;
	?>
</div><!-- .content-area -->
<?php get_footer(); ?>
