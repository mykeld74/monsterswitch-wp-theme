<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
?>
	<footer class="footer">
		<div class="footer-container">
			<div class="footer-grid">
				<a>Follow Us:
					<a href="#"><i class="fab fa-facebook"></i></a>
					<a href="https://twitter.com/switch_monster" target="_blank"><i class="fab fa-twitter-square"></i></a>
					<a href=""https://www.instagram.com/monsterswitch1/" target="_blank"><i class="fab fa-instagram"></i></a>
				</p>
			</div>
		</div>
	</footer>
	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?> </div>
	<!-- Close off-canvas content -->
	<?php endif; ?>
	<?php wp_footer(); ?> </body>

	</html>
