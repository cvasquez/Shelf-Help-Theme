<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Lula_Belle
 * @since Lula Belle 1.0
 */
?>

<div class="row">

	<div class="<?php if (has_post_thumbnail()) { ?>col-sm-6<?php } else { ?>col-lg-8 col-lg-offset-2<?php } ?>">
		<article id="post-<?php the_ID(); ?>" class="text-xs-center">
			<header class="entry-header">
				<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
			</header><!-- .entry-header -->
			<div class="entry-content">
				<?php the_content(); ?>
			</div><!-- .entry-content -->

		</article><!-- #post-## -->

		<?php if(get_field("include_social_links")) { ?>
			<div class="socialIcons">
				<a href="http://www.instagram.com/smilelulabellefashion" target="_blank"><img src="<?php bloginfo('template_directory');?>/images/social/instagram.jpg" alt="Instagram" class="socialIcon" /></a>
				<a href="https://www.facebook.com/stylelulabelle" target="_blank"><img src="<?php bloginfo('template_directory');?>/images/social/facebook.jpg" alt="Facebook" class="socialIcon" /></a>
				<a href="https://www.pinterest.com/smilelula/" target="_blank"><img src="<?php bloginfo('template_directory');?>/images/social/pinterest.jpg" alt="Pinterest" class="socialIcon" /></a>
				<a href="https://twitter.com/smilelulabelle" target="_blank"><img src="<?php bloginfo('template_directory');?>/images/social/twitter.jpg" alt="Twitter" class="socialIcon" /></a>
			</div>
		<?php } ?>
	</div>

</div>
