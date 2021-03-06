<?php 
/**
 * The template for displaying Full Width Internal Pages.
 * Template Name: Full Width Internal Page
 */

get_template_part('header-2'); ?>

	
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="l-constrain">

				<div class="summary">
					<h1><?php the_title(); ?></h1>
					
				</div>

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
				<div class="page__content-internal">
					<div class="l-constrain">

						<?php the_content(); ?>
						
					</div>
				</div>
				<!-- Content Ends Here -->

			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer(); 
