<?php

?>

			</div><!-- .row -->
		</div><!-- .container -->

    <?php get_template_part( 'footer-widget' ); ?>
	<footer id="colophon" class="site-footer " role="contentinfo">
		<div class="container pt-3 pb-3">
            <div class="site-info">
                &copy; <?php echo date('Y'); ?> <?php echo '<a href="'.home_url().'">'.get_bloginfo('name').'</a>'; ?>
                <span class="sep"> | </span>
               

            </div><!-- close .site-info -->
		</div>
	</footer><!-- #colophon -->

</div><!-- #page -->

</div><!-- #main -->
<?php wp_footer(); ?>
</body>
</html>