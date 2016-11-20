<?php
/**
 * Template Name: Homepage
 * @package WordPress
 * @subpackage ShelfHelp
 */

get_header(); ?>

	<div class="hero hero--cover hero--room"></div>

	<div class="full-width bg-white">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<?php include('template-parts/navBar.php'); ?>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid bg-gray03 xs-ptlg xs-pbxl">
		<div class="row">
			<div class="col-sm-12">

				<div class="container">
					<div class="row">
						<div class="col-md-4 col-sm-6">

							<div class="card xs-mtlg">
								<div class="card__content">
									<h2>
										Meet Liz MacDonald
									</h2>
									<p>
										<?php
										// Start the loop.
										while ( have_posts() ) : the_post();

											the_content();

											// End of the loop.
										endwhile;
										?>
									</p>
								</div>
								<img src="<?php the_post_thumbnail_url(); ?>" alt="Liz MacDonald" class="img-fluid" />
							</div>

						</div>

						<div class="col-md-8 col-sm-6">
							<div class="embed-responsive embed-responsive-16by9 xs-mtlg">
								<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/HtDnU7ylGsk?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-12">
							<h1 class="xs-mtlg">Projects</h1>
						</div>
					</div>

					<?php $loop = new WP_Query( array( 'post_type' => 'shelfhelp-project', 'posts_per_page' => 3 ) ); ?>
					<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
						<div class="case-study xs-mtlg">
							<div class="case-study__container">
								<img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid" />

								<div class="case-study__content">
									<h2><?php echo get_the_title(); ?></h2>
									<p>
										<b><?php the_field('tagline'); ?></b>
									</p>
									<p>
										<?php echo get_the_content(); ?>
									</p>
								</div>
							</div>
							<div style="clear:both;"></div>
						</div>
					<?php endwhile; wp_reset_query(); ?>

				</div>

			</div>
		</div>
	</div>

<?php get_footer(); ?>
