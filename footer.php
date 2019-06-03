</div>
</div>
	<footer id="footer">
		<div id="wrapper">
			<div id="footer-sidebar1">
				<?php
				if(is_active_sidebar('footer-sidebar-1')){
				dynamic_sidebar('footer-sidebar-1');
				}
				?>
			</div>
			<div id="footer-sidebar2">
				<?php
				if(is_active_sidebar('footer-sidebar-2')){
				dynamic_sidebar('footer-sidebar-2');
				}
				?>
			</div>
			<div id="footer-sidebar3">
				<?php
				if(is_active_sidebar('footer-sidebar-3')){
				dynamic_sidebar('footer-sidebar-3');
				}
				?>
			</div>
			<div id="copyright">
				<p>Copyright The Pantry Plus More, Inc. <nobr>© 2019</nobr></p>
			<!-- &copy; <?php echo esc_html( date_i18n( __( 'Y', 'ppm2019' ) ) ); ?> <?php echo esc_html( get_bloginfo( 'name' ) ); ?> -->
			</div>
		</div>
	</footer>
	<?php wp_footer(); ?>
</body>
</html>