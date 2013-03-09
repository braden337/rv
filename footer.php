<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package thirtyseven
 * @since thirtyseven 1.0
 */
?>

	</div><!-- #main -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php do_action( 'rv_credits' ); ?>
			<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'rv' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'rv' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'rv' ), 'thirtyseven', '<a href="http://twitter.com/braden337" rel="designer">Braden Jonsson</a>' ); ?>
		</div><!-- .site-info -->
    &copy <?php echo date('Y'); ?> Zhoda International Raceway<br><a href="tel:2047924757">(204) 792-4757</a>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.fittext.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/prefixfree.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/fitvids.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/responsiveslides.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/villo.js"></script>

</body>
</html>