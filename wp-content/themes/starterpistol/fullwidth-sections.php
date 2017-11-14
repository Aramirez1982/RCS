<div class="section section--websites" id="recentwebsites">
	<h3><?php the_field('website_title'); ?></h3>
	<div class="websites">
		<?php the_field('website_content'); ?>
	</div>
</div>

<div class="section section--graphics" id="portfolio">
	<h3><?php the_field('graphic_title'); ?></h3>
	<div class="section--graphics-link"><a href="<?php the_field('graphic_link'); ?>"><?php the_field('graphic_link'); ?></a></div>
</div>

<div class="section section--hireme" id="hireme">
	<div class="button button--hireme">
		<a href="<?php the_field('button_link'); ?>"><?php the_field('button_text'); ?></a>
		<p class="buttons__helper-text">* Click Here to Contact Me for Work</p>
	</div>
</div>