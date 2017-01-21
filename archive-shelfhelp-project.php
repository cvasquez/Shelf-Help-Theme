<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage ShelfHelp
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

				<?php if ( have_posts() ) : ?>

					<div class="row">
						<div class="col-sm-12">
							<?php
								the_archive_title( '<h1 class="xs-mtlg">', '</h1>' );
							?>
						</div>
					</div>

					<?php
					// Start the Loop.
					while ( have_posts() ) : the_post();
					?>

					<div class="case-study xs-mtlg xs-mblg sm-mbxl">
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

					<?php
					// End the loop.
					endwhile;

					// Previous/next page navigation.
					the_posts_pagination( array(
						'prev_text'          => __( 'Previous page', 'twentysixteen' ),
						'next_text'          => __( 'Next page', 'twentysixteen' ),
						'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
					) );

				// If no content, include the "No posts found" template.
				else :
					get_template_part( 'template-parts/content', 'none' );

				endif;
				?>

			</div>
		</div>
	</div>
</div>
