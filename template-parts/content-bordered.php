<?php
/**
* The template used for displaying page content
*
* @package WordPress
* @subpackage ShelfHelp
*/
?>

<article id="post-<?php the_ID(); ?>" class="xs-mbxl">

	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->

	<!-- YouTube Subscribe Button -->
	<div class="g-ytsubscribe" data-channelid="UC0gZ31W5hzXGGKxD6TM7FgA" data-layout="default" data-count="default"></div><br/>

	<!-- Facebook Like Button -->
	<div class="fb-like" data-href="https://www.facebook.com/getshelfhelp/" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div><br/>

	<!-- Instagram Button -->
	<style>.ig-b- { display: inline-block; margin-top: 12px; }
	.ig-b- img { visibility: hidden; }
	.ig-b-:hover { background-position: 0 -60px; } .ig-b-:active { background-position: 0 -120px; }
	.ig-b-v-24 { width: 137px; height: 24px; background: url(//badges.instagram.com/static/images/ig-badge-view-sprite-24.png) no-repeat 0 0; }
	@media only screen and (-webkit-min-device-pixel-ratio: 2), only screen and (min--moz-device-pixel-ratio: 2), only screen and (-o-min-device-pixel-ratio: 2 / 1), only screen and (min-device-pixel-ratio: 2), only screen and (min-resolution: 192dpi), only screen and (min-resolution: 2dppx) {
		.ig-b-v-24 { background-image: url(//badges.instagram.com/static/images/ig-badge-view-sprite-24@2x.png); background-size: 160px 178px; } }</style>
		<a href="https://www.instagram.com/getshelfhelp/?ref=badge" class="ig-b- ig-b-v-24"><img src="//badges.instagram.com/static/images/ig-badge-view-24.png" alt="Instagram" /></a><br/>

	<img width="120" height="120" src="<?php bloginfo('template_directory');?>/images/shelfHelp-white.png" alt="Shelf Help Badge" class="xs-mtmd" />

</article><!-- #post-## -->
