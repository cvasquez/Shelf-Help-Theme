<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Shelf Help
 */

get_header(); ?>

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
					<div class="col-sm-12 col-lg-8 col-lg-offset-2">

						<article class="card xs-mtlg" id="post-<?php the_ID(); ?>">
							<?php if ( has_post_thumbnail() ) { ?>
								<a href="<?php the_permalink(); ?>">
									<img src="<?php the_post_thumbnail_url(); ?>" class="post__hero" />
								</a>
							<?php } ?>

							<div class="card__content">
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
						</article>

					</div>
				</div>
			</div>

		</div>
	</div>
</div>
<?php get_footer(); ?>
