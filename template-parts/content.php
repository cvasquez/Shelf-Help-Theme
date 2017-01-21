<?php
/**
 * The template part for displaying content
 *
 * @package WordPress
 * @subpackage Shelf_Help
 * @since Shelf Help 1.0
 */
?>
<article class="card xs-mtlg" id="post-<?php the_ID(); ?>">
	<?php if ( has_post_thumbnail() ) { ?>
		<a href="<?php the_permalink(); ?>">
			<img src="<?php the_post_thumbnail_url(); ?>" class="post__hero" />
		</a>
	<?php } ?>
	<div class="card__content">
		<a href="<?php the_permalink(); ?>"><h2>
			<?php the_title(); ?>
		</h2></a>

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
		<?php //echo get_avatar( $post->post_author, 49 ); ?> Written by <?php the_author(); ?> on <?php the_date(); ?>
	</footer><!-- .entry-footer -->
	</div>
</article><!-- #post-## -->
