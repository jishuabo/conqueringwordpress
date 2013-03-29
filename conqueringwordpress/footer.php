<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
<?php 
	$footer_hidden = get_option('footer_hidden');
	$footer_text = get_option('footer_text');
?>
	</div><!-- #main .wrapper -->
	<?php if (!$footer_hidden){ ?>
		<footer id="colophon" role="contentinfo">
			<div class="site-info">
				<?php do_action( 'twentytwelve_credits' ); ?>
				<!--<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentytwelve' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentytwelve' ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentytwelve' ), 'WordPress' ); ?></a>-->
				&copy; <?php echo $footer_text; ?>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	<?php } ?>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>