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
								<img width="168" height="168" src="<?php bloginfo('template_directory');?>/images/liz-avatar.png" alt="Liz MacDonald" class="xs-mblg" />
								<h1 class="xs-mblg">Hi! I'm Liz.</h1>
								<p class="jumbo">I’m an interior designer with a background in video production. I married my two loves to create Shelf Help, where I teach people how to decorate their home in a fun and budget friendly way.</p>
							</div>
						</div>

						<div class="col-md-6 col-lg-8">
							<div class="container">
								<div class="row">
									<div class="col-sm-12 xs-ptsm sm-ptxl">
										<?php $query = new WP_Query('showposts=5'); ?>
										<?php
										if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();

											// Include the page content template.
											get_template_part( 'template-parts/content', 'bordered' );

											// End of the loop.
										endwhile;
										endif;
										?>
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
