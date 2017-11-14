<?php
/**
 * The template for displaying Website Links
 *
 */

?>

<div class="website-item">
	<div class="website-item__image"><a href="<?php the_field('website_link'); ?>"><img src="<?php the_field('website_image'); ?>"></a></div>
	<div class="website-item__link"><a href="<?php the_field('website_link'); ?>"><?php the_title(); ?></a></div>
	<div class="website-item__type"><?php the_field('website_type'); ?></div>
	<div class="website-item__position"><?php the_field('developer_position'); ?></div>
	<div class="website-item__date"><?php the_field('date_range'); ?></div>
</div>