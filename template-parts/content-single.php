<?php
/**
 * The template part for displaying single posts
 *
 * @package WordPress
 * @subpackage Shelf_Help
 * @since Shelf Help 1.0
 */
?>

<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

<?php twentysixteen_excerpt(); ?>

<div class="entry-content">
	<?php
		the_content();
	?>
</div><!-- .entry-content -->

<footer class="entry-footer">
	<?php //echo get_avatar( $post->post_author, 49 ); ?> Written by <?php the_author(); ?> on <?php the_date(); ?>
</footer><!-- .entry-footer -->
