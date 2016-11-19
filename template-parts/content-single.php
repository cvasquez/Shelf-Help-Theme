<?php
/**
 * The template part for displaying single posts
 *
 * @package WordPress
 * @subpackage Lula_Belle
 * @since Lula Belle 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<?php if(get_field("video_embed")) { ?>

		<div class="embedContainer">
			<?php echo get_field("video_embed") ?>
		</div>

	<? } elseif (the_post_thumbnail()) { ?>
		<div class="postThumbContainer">
			<?php the_post_thumbnail(); ?>
		</div>
	<?php } ?>

	<?php twentysixteen_excerpt(); ?>

	<div class="entry-content">
		<?php
			the_content();
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php echo get_avatar( $post->post_author, 49 ); ?> Written by <?php the_author(); ?> on <?php the_date(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
