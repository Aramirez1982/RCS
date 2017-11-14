<?php
/**
 * The template for displaying Blog Excerpts
 *
 */

?>

<div class="blog">

<h3><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>

<div class="blog__date">
  <?php the_date(); ?>
</div>

<div class="blog__image">
<?php if ( has_post_thumbnail() ) : ?>
    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
        <?php the_post_thumbnail(); ?>
    </a>
<?php endif; ?>
</div>

<div class="blog__excerpt">
  <?php the_excerpt(); ?>
</div>



</div> <!-- End of Blog Teaser -->