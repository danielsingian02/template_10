<?php
wp_footer();
?>

<footer>
	<div class="left-foot">
		<a class="header-link" href="<?php bloginfo('url'); ?>">
			<?php
			$custom_logo_id = get_theme_mod('custom_logo');
			$logo = wp_get_attachment_image_src($custom_logo_id, 'full');

			if (has_custom_logo()) {
				echo '<img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '">';
			} else {
				echo '<h1>' . get_bloginfo('name') . '</h1>';
			}
			?>
		</a>

		<div class="navigation">
			<?php wp_nav_menu('primary'); ?>
		</div>
		<p class="copyright">© Copyright 2021 HOA Management Name Here</p>
	</div>
	<div class="right-foot">
		<img src="<?php echo get_theme_mod('leaf', get_bloginfo('template_directory') . '/assets/images/Asset 12_1 1.png') ?>" alt="">
	</div>
</footer>

</body>

</html>