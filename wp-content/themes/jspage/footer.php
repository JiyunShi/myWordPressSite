<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Jspage
 */

?>

	</div><!-- #content -->
        
        <?php        get_sidebar('footer') ?>

	<footer id="colophon" class="site-footer">
                <nav class="social-menu">
                <?php
                    wp_nav_menu(['theme_location' => 'menu-2',
                                 'menu_id'      => 'social-menu',
                                 'link_before'    => '<span class="screen-reader-text">',
				 'link_after'     => '</span>' 
                                 
                                ] );
		?>
                </nav><!-- .social-menu -->
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'jspage' ) ); ?>"><?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'jspage' ), 'WordPress' );
			?></a>
			<span class="sep"> | </span>
			<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'jspage' ), 'jspage', '<a href="https://www.linkedin.com/in/jiyunshi/">Jiyun</a>' );
			?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
