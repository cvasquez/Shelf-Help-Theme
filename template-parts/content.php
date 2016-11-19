<?php
/**
 * The template part for displaying content
 *
 * @package WordPress
 * @subpackage Lula_Belle
 * @since Lula Belle 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	</header><!-- .entry-header -->

	<?php if(get_field("video_embed")) { ?>

		<div class="embedContainer">
			<?php echo get_field("video_embed") ?>
		</div>

	<? } elseif (get_the_post_thumbnail()) { ?>
		<div class="postThumbContainer">
			<?php the_post_thumbnail(); ?>
		</div>
	<?php } ?>

	<?php twentysixteen_excerpt(); ?>

	<div class="entry-content">
		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ),
				get_the_title()
			) );

			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentysixteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php echo get_avatar( $post->post_author, 49 ); ?> Written by <?php the_author(); ?> on <?php the_date(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
