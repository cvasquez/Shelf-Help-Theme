<?php
/**
 * Template Name: Split Page
 * @package WordPress
 * @subpackage ShelfHelp
 */

get_header(); ?>

	<div class="container-fluid splitpage">

		<div class="row">
			<div class="col-sm-6 col-sm-push-6 col-md-8 col-md-push-4 splitpage__featureimage" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
			</div>

			<div class="col-sm-6 col-sm-pull-6 col-md-4 col-md-pull-8">
				<?php
				// Start the loop.
				while ( have_posts() ) : the_post();

					// Include the page content template.
					get_template_part( 'template-parts/content', 'splitpage' );

					// End of the loop.
				endwhile;
				?>
			</div>

		</div>

	</div>

<?php get_footer(); ?>
