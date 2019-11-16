<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="page-header">
	<div class="container-fluid">
		<div class="row align-items-center justify-content-between">
			<div class="col">
				<a class="logo page-header__logo">
					<img class="logo__img" src="<?php echo get_template_directory_uri() ?>/img/logo-blue.png" alt="Windward logo">
				</a>
			</div>
			<div class="col col-lg-5">
				<button class="mobile-toggle">
					<span class="mobile-toggle__line"></span>
					<span class="mobile-toggle__line"></span>
					<span class="mobile-toggle__line"></span>
				</button>
				<?php wp_nav_menu(); ?>
			</div>
			<div class="col">
				<div class="book-now">
					<a href="#" class="button button--blue book-now__link">Book now</a>
				</div>
			</div>
		</div>
	</div>
</header>
