<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
	</div><!-- .posts -->

	<div id="footer" role="contentinfo">
		<div id="colophon">


			<div id="site-info">
			</div><!-- #site-info -->

			<div id="site-generator">
			</div><!-- #site-generator -->

		</div><!-- #colophon -->
	</div><!-- #footer -->

</div>
</div><!-- #wrapper -->

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>
