<?php
/**
 * The template for displaying all single posts and attachments
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

	<div class="container pageContent">
		<div class="row">

			<div class="col-md-8 col-md-offset-2">

				<?php
				// Start the loop.
				while ( have_posts() ) : the_post();

					// Include the single post content template.
					get_template_part( 'template-parts/content', 'single' );

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
