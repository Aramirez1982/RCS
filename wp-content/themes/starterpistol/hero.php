<?php
/**
 * The template for displaying the hero
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package StarterPistol
 */

?>

<div class="hero">
	<video autoplay loop id="bgvid">
    <source src="<?php bloginfo('template_url'); ?><?php the_field('artist_webm_link'); ?>" type="video/webm">
    <source src="<?php bloginfo('template_url'); ?><?php the_field('artist_video_link'); ?>" type="video/mp4">
	</video>
	<script> document.getElementById('bgvid').play(); </script>
</div>