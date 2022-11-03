<?php
get_header();
?>
<div class="banner">
	<div class="banner-container">
		<div class="left-banner">
			<h1 class="text">Live <span class="text--green">Green</span><br>Live With Us</h1>
			<div class="log">
				<div class="button-container">
					<button class='login'>Login</button>
					<button class='register'>Register</button>
				</div>

				<hr class="hr hr--green">
			</div>
		</div>
	</div>
</div>
<div class="head-text">

	<div class="container">
		<div class="d-flex">
			<h2>We Live Together As One</h2>
			<img class="leaf-img" src="<?php echo get_theme_mod('leaf', get_bloginfo('template_directory') . '/assets/images/Asset 11 2.png') ?>" alt="" srcset="">
		</div>

		<p class="we-live-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque justo metus, auctor non consequat vel, iaculis
			ut ante. Nulla vitae condimentum libero, ac pretium lectus. Pellentesque eget turpis tempus, accumsan odio ac,
			suscipit ex. Sed malesuada, leo posuere rutrum viverra, turpis neque ornare augue, vitae convallis dolor libero vitae
			lectus. Donec in dictum neque. Nunc tempor, odio nec sodales lacinia, tellus urna viverra nulla, ac lacinia leo erat id
			erat. Etiam accumsan cursus ipsum iaculis dapibus. Praesent viverra vitae velit sit amet maximus</p>
	</div>

</div>

<div class="landscape">
	<img class="landscape__img" src="<?php echo get_theme_mod('river', get_bloginfo('template_directory') . '/assets/images/Asset 12 1.png') ?>" alt="">
</div>

<div class="last d-flex flex-row">
	<div class="left-last">
		<p>Posuere rutrum viverra, turpis neque ornare augue, vitae convallis
			dolor libero vitae lectus. Donec in dictum neque. Nunc tempor,
			odio nec sodales lacinia, tellus urna viverra nulla, ac lacinia leo
			erat id erat. Etiam accumsan cursus ipsum iaculis dapibus.
			Praesent viverra vitae velit sit amet maximus</p>
	</div>
	<div class="right-last">
		<div class="right-last__content ">
			<h3 class="text-right">Green community <br> is a healthy community</h3>
			<img class="leaf-img" src="<?php echo get_theme_mod('leaf', get_bloginfo('template_directory') . '/assets/images/Asset 11 2.png') ?>" alt="" srcset="">
		</div>
	</div>
</div>

<?php
get_footer();
?>