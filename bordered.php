<?php
/**
 * Template Name: Bordered Page
 * @package WordPress
 * @subpackage ShelfHelp
 */

get_header(); ?>

	<div class="container-fluid borderedpage bg-teal2 text-white">
		<div class="row">
			<div class="col-sm-12">

				<div class="container">
					<div class="row">
						<div class="col-md-6 col-lg-4 text-center">
							<div class="xs-ptxl xs-pblg xs-phlg sm-pbxl">
								<img width="148" height="148" src="<?php bloginfo('template_directory');?>/images/liz-avatar.png" alt="Liz MacDonald" class="xs-mblg" />
								<h1 class="xs-mblg">Hi! I'm Liz.</h1>
								<?php
								// Start the loop.
								while ( have_posts() ) : the_post();

									// Include the page content template.
									get_template_part( 'template-parts/content', 'bordered' );
								endwhile;
								?>
							</div>

						</div>

						<div class="col-md-6 col-lg-8">
							<div class="container">
								<div class="row">
									<div class="col-sm-12 xs-ptsm sm-ptxl">
										<?php rewind_posts(); ?>
										<?php
											$query_args = array(
												'post_type' => 'post',
												'posts_per_page' => '10'
											);
											$query = new WP_Query($query_args);
										?>
										<?php
										if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();

											// Include the page content template.
											get_template_part( 'template-parts/content', 'borderedfeed' );

											// End of the loop.
										endwhile;
										?>

										<?php else : ?>
											<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
										<?php endif; ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

<?php get_footer(); ?>
