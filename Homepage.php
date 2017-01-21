<?php
/**
 * Template Name: Homepage
 * @package WordPress
 * @subpackage Shelf_Help
 */

get_header(); ?>

<!-- Services Modal -->
	<div class="modal fade" id="servicesModal" tabindex="-1" role="dialog" aria-labelledby="servicesModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
				<div class="embed-responsive embed-responsive-16by9">
					<iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/HbkJwbWvhLM?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
				</div>
	    </div>
	  </div>
	</div>
<!-- END Services Modal -->

	<div class="hero hero--room hero--cover">
		<div class="hero__content text-center xs-pvlg xs-phsm sm-pvxxl sm-phmd">
			<h1 class="embiggen text-white">Shelf<br>Help.</h1>
			<a class="playBtn" data-toggle="modal" data-target="#servicesModal">
				<div class="playBtn__icon"></div>
			</a>
		</div>
	</div>

	<div class="full-width bg-white">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<?php include('template-parts/navBar.php'); ?>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid bg-gray03 xs-ptsm sm-ptlg xs-pbxl">
		<div class="row">
			<div class="col-sm-12">

				<div class="container xs-pa0">
					<div class="row">
						<div class="col-sm-5">

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


						<div class="col-sm-7">
							<div class="card xs-mtlg">
								<div class="embed-responsive embed-responsive-16by9 xs-mtlg">
									<iframe class="embed-responsive-item" src="//www.youtube.com/embed/HtDnU7ylGsk?list=PLTAUuCPhHk0lq-RFHmQq4v6J6hcrGqsUX&amp;wmode=transparent&amp;iv_load_policy=3&amp;modestbranding=1&amp;rel=0&amp;autohide=1&amp;v=<?php the_field('shelfhelp_example_id'); ?>&amp;index=10&amp;autoplay=0" frameborder="0" scrolling="no"></iframe>
								</div>

								<div class="card__content">
									<?php the_field('shelfhelp_series_description'); ?>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-12">
							<h1 class="xs-mtlg">Projects</h1>
						</div>
					</div>

					<?php $loop = new WP_Query( array(
						'post_type' 			=> 'shelfhelp-project',
						'posts_per_page' 	=> 5,
						'meta_key'				=> 'project_order',
						'orderby'					=> 'meta_value_num',
						'order'						=> 'ASC'
						)
					); ?>
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
