<?php
/**
 * The template for displaying All Recent Posts
 *
 */

?>

<div class="recent-posts">
	<h3>Here's Some Other Blog Posts You May Enjoy</h3>

	<div class="recent-posts__list">
	  <?php echo do_shortcode("[ic_add_posts showposts='5' template='recent-posts.php']"); ?>
	</div>
</div>