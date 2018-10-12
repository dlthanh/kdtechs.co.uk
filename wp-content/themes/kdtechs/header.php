<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmgp.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<?php wp_head(); ?>

	<?php if(is_home()) { ?>
	<script>
		$(document).ready(function() {
			var customer_slider = new Swiper('.customer--home__main--list', {
				speed: 600,
				spaceBetween: 80,
				slidesPerView: 2,
				pagination: {
					el: '.swiper-pagination',
        			clickable: true,
				}
			})
		})
	</script>
	<?php } ?>
</head>
<body <?php body_class(); ?>>
	<div class="kdtechs-wrapper">
		<nav class="nav">
			<div class="nav--main w1166">
				<div class="nav--logo">
					<a href="#" class="clearfix">
						<img src="<?php echo get_theme_file_uri('/assets/images/logo.png') ?>" alt="">
						<span class="nav--logo__text">kdtech</span>
					</a>
				</div>

				<?php
					wp_nav_menu(array(
						'theme_location'  => 'main',
						'menu'            => '',
						'container'       => 'div',
						'container_class' => 'nav--right',
						'container_id'    => '',
						'menu_class'      => 'nav--right__menu',
						'menu_id'         => '',
						'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
					));
				?>
			</div>
		</nav>