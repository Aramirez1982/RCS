<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package StarterPistol
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="l-constrain">

			<div class="footer-menu">
				<div class="menu-footer-menu-container">
					<ul id="menu-footer-menu" class="menu">
						<li id="menu-item-1107" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-1107"><a href="http://localhost:8888/Ramirez/">Home</a></li>
					  <li id="menu-item-1135" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-1110 current_page_item menu-item-1135"><a href="http://localhost:8888/Ramirez/blogs/">Blogs</a></li>
					  <li id="menu-item-1109" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1109"><a href="http://localhost:8888/Ramirez/terms-and-conditions/">Terms &amp; Conditions</a></li>
					  <li id="menu-item-1142" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1142"><a href="http://localhost:8888/Ramirez/lets-work-together/">Let’s Work Together!</a></li>
					</ul>
			  </div>
			</div>

			<div class="footer__widgets">
				<div class="footer-widget__item">
					<?php dynamic_sidebar( 'footer_widget_1' ); ?>
				</div>

				<div class="footer-widget__item">
					<?php dynamic_sidebar( 'footer_widget_2' ); ?>
				</div> 

				<div class="footer-widget__item">
					<?php dynamic_sidebar( 'footer_widget_3' ); ?>
				</div>
			</div>

			<div class="site-info">
				Copyright © 2017 <?php bloginfo( 'name' ); ?>. All Rights Reserved. Developed by Ramirez Creative Solutions.
			</div><!-- .site-info -->
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
