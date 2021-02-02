<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Deepdive
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
            <img src="<?php echo get_theme_file_uri('/images/logo.svg');?>">
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
