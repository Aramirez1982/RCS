<?php 
/**
 * The template for displaying Home Page.
 * Template Name: Homepage Template
 */

get_header(); ?>
	
	<div class="hero clear">
		<div class="l-constrain--hero">

			<div class="profile">
				<?php 
				$image = get_field('profile_image');
				if( !empty($image) ): ?>

					<img class="profile__image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

				<?php endif; ?>
			</div>

			<div class="hero-text">
				<?php the_field('intro_text'); ?>
				<p class="hero-text__contact"><?php the_field('contact_info'); ?></p>
			</div>

		</div>
	</div>

	<?php get_template_part('post-hero'); ?>
	

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="l-constrain">

				<?php
				while ( have_posts() ) : the_post();

					// get_template_part( 'template-parts/content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>

				<!-- Content Begins Here -->
				<div class="page__content">
					<div class="l-constrain">

						<div class="summary">
							<h3><?php the_field('summary_title'); ?></h3>
							<p><?php the_field('summary_text'); ?></p>
						</div>

						<div class="section section--experience">
							<h3><?php the_field('experience_title'); ?></h3>
							<p><?php the_field('experience_text'); ?></p>
						</div>

						<?php the_content(); ?>
						
					</div>
				</div>


				<!-- Content Ends Here -->

				<?php get_template_part('sidebar'); ?>

			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
  
  <div class="l-constrain">
		<?php get_template_part('fullwidth-sections'); ?>
	</div>

<?php

get_footer(); 
