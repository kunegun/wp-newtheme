<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>
			<div class="animsition">
			<!-- header -->
			<header class="header clear" role="banner">
				<div class="navegacion clear">
						<div class="wrapper">
							<!-- logo -->
							<div class="logo">
								<a href="<?php echo home_url(); ?>">
									<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
									<?php if ( get_theme_mod( 'themeslug_logo' ) ) : ?>
									    <div class='site-logo'>
									        <a class="logo" href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img class="logo-img" src='<?php echo esc_url( get_theme_mod( 'themeslug_logo', 'logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>
									    </div>
									<?php else : ?>
										<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" class="logo-img">
									<?php endif; ?>
								</a>
							</div>
							<!-- /logo -->

							<!-- nav -->
							<nav class="nav" role="navigation">
								<?php html5blank_nav(); ?>
							</nav>
							<!-- /nav -->
						</div> <!--.wrapper -->

				</div><!--.navegacion -->


			<?php if(is_page() )  { ?>
				<?php $destacada = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full'); ?>
				<?php $destacada = $destacada[0]; ?>

				<div class="imagenFondo" style="background-image:url(<?php echo $destacada ?>);"></div>


			<?php } ?>


			</header>
			<!-- /header -->




			<!-- wrapper -->
			<div class="wrapper">
