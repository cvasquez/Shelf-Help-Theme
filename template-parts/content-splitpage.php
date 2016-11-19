<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage ShelfHelp
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<img src="<?php bloginfo('template_directory');?>/images/shelfHelpOrnate.png" alt="Shelf Help" class="shlogo" />

	<!--
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header>.entry-header
	-->

	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
