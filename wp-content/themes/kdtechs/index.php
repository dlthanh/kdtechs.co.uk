<?php get_header(); ?>

<div class="banner" style="background-image: url('<?php echo get_theme_file_uri('/assets/images/front-page-banner.jpg'); ?>')">
	<div class="banner--home w1166">
		<div class="banner--home__image">
			<img src="<?php echo get_theme_file_uri('assets/images/home--banner__image.png'); ?>" alt="">
		</div>

		<div class="banner--home__left">
			<div class="banner--home__left--text">
				<h1><?php echo get_field('heading_banner', 'option'); ?></h1>
				<span><?php echo get_field('description_banner', 'option') ?></span>
			</div>

			<div class="banner-home__left--button">
				<img src="<?php echo get_theme_file_uri('/assets/images/play.png'); ?>" alt="">
			</div>
		</div>
	</div>
</div>

<div class="function">
	<div class="function--home w1166">
		<?php
			$args = array(
				'post_type'	=>	'function',
				'order'		=>	'ASC'
			);

			$function = new WP_Query($args);

			if($function->have_posts()) : while($function->have_posts()) : $function->the_post();
		?>

		<div class="function--home__item">
			<span class="function--home__item--icon"></span>

			<h3><?php the_title(); ?></h3>

			<p><?php the_content(); ?></p>
		</div>

		<?php endwhile; ?>
		<?php endif; ?>
	</div>
</div>

<div class="customer">
	<div class="customer--home">
		<div class="customer--home__heading w1166">
			<h2><?php echo get_field('customer_heading', 'option') ?></h2>
			<span><?php echo get_field('customer_description', 'option') ?></span>
		</div>

		<div class="customer--home__main">
			<div class="customer--home__main--list w1166 swiper-container">
				<div class="swiper-wrapper">
					<?php
						$args = array(
							'post_type'	=>	'customer',
							'order'		=>	'DESC'
						);

						$customer = new WP_Query($args);

						if($customer->have_posts()) : while($customer->have_posts()) : $customer->the_post();
					?>
					<div class="customer--home__main--item swiper-slide">
							<div class="customer--home__main--content">
								<?php the_content(); ?>
							</div>
							<div class="customer--home__main--info">
								<div class="customer--home__main--avatar">
									<img src="<?php echo get_field('avatar', $customer->ID); ?>" alt="">
								</div>

								<div class="customer--home__main--left">
									<p class="customer--home__main--fullname"><?php the_title(); ?></p>
									<p class="customer--home__main--career"><?php echo get_field('career', $customer->ID) ?></p>
								</div>
							</div>
					</div>
					<?php endwhile; ?>
					<?php endif; ?>
				</div>
				
				<div class="swiper-pagination w1166"></div>
			</div>
		</div>
	</div>
</div>