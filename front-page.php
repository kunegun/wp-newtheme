<?php get_header(); ?>

</div>
	<section class="slider">
		<?php $args = array(
			'post_type' => 'slider',
			'order_by' => 'date',
			'order' => 'DESC',
			'post_per_page' => -1
		); ?>

		<?php $slider = new WP_Query($args); ?>
		<ul class="slider">
		<?php while($slider->have_posts()): $slider->the_post(); ?>
			<li>
				<a href="<?php the_field(enlace); ?>">
					<?php the_post_thumbnail('slider'); ?>
				</a>
			</li>
		<?php endwhile; wp_reset_postdata(); ?>
		</ul>
	</section>
	<div class="wrapper">
		<section class="tours clear">
			<h1><span>Proximos tours</span></h1>

			<?php $args = array(
				'post_type' => 'rutas',
				'post_per_page' => 3,
				'order' => 'DESC',
				'orderby' => 'name'
			); ?>

			<?php $tours = new WP_Query($args); ?>
			<?php while($tours->have_posts() ): $tours->the_post(); ?>
				<article id="post-<?php the_ID();?>" <?php post_class('grid1-3'); ?>>
					<div class="imagen-destacada">
						<?php the_post_thumbnail('rutaDestacada'); ?>
						<a href="<?php the_permalink(); ?>" class="mas-info">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/masinfo.png" alt="">
						</a>
					</div>
					<div class="info-ruta">
						<a href="<?php the_permalink(); ?>">
							<?php the_title(); ?>
						</a>
					</div>
					<div class="clear"></div>
				</article>
			<?php endwhile; wp_reset_postdata(); ?>



		</section>

<?php get_footer(); ?>
