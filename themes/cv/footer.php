<!-- DEBUT FOOTER -->
</main>

<div class="footer">
<footer>Copyright Christopher Ares</footer>
</div>
    <?php get_template_part('templates/newsletter'); ?>
<?php wp_footer(); ?>
<?php if ( is_active_sidebar( 'footer-widget' ) ) { ?>
	<ul id="sidebar">
		<?php dynamic_sidebar('footer-widget'); ?>
	</ul>
<?php } ?>
</body>
</html>
<!-- FIN FOOTER -->
 