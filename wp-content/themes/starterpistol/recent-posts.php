<?php
/**
 * The template for displaying Individual Recent Posts
 *
 */

?>

<div class="recent-posts__list-item">

	<div class="blog__image">
	<?php if ( has_post_thumbnail() ) : ?>
	    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
	        <?php the_post_thumbnail(); ?>
	    </a>
	<?php endif; ?>
	</div>
  
  <div class="blog__date">
	  <?php the_date(); ?>
	</div>

	<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>

</div>