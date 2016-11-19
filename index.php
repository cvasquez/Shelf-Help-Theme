<?php
/**
 * @package WordPress
 * @subpackage ShelfHelp
 */

get_header(); ?>

<?php show_admin_bar( false ); ?>

	<img src="<?php bloginfo('template_directory');?>/images/cornerFlowers.png" alt="Lula Belle" class="cornerFlowers-bottom" />
	<div class='navBar'>
		<a href="<?php echo get_site_url(); ?>"><img width="120" height="120" src="<?php bloginfo('template_directory');?>/images/lula-belle.png" alt="Lula Belle" class="lulaLogo" /></a>
		<div class="trigger">menu</div>
		<?php include('template-parts/navBar.php'); ?>
	</div>

	<div class="container pageContent">
		<div class="row">

			<div class="col-md-8 col-md-offset-2">

				<?php if ( have_posts() ) : ?>

					<?php if ( is_home() && ! is_front_page() ) : ?>
						<header>
							<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
						</header>
					<?php endif; ?>

					<?php
					// Start the loop.
					while ( have_posts() ) : the_post();

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content', get_post_format() );

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

<?php get_footer(); ?>
