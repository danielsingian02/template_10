<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<?php
	wp_head();
	?>
</head>

<body>

	<header>
		<div class="header">
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

			<nav>
				<button class="hamburger" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
					<i class="fa fa-bars" aria-hidden="true"></i>
				</button>

				<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
					<div class="offcanvas-header">
						<h5 class="offcanvas-title" id="offcanvasExampleLabel">
							<?php echo get_bloginfo(); ?>
						</h5>
						<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
					</div>
					<div class="offcanvas-body">
						<div class="navigation">
							<?php wp_nav_menu('primary'); ?>
						</div>
					</div>
				</div>
			</nav>
		</div>
	</header>