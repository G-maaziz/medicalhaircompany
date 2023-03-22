<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css">
	<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css">
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
	<?php wp_head(); ?>

</head>

<?php
	global $template;
	$blank = basename($template) == 'blank-page.php';
	if(function_exists("get_field"))
	{
		if(get_field("blank-page") === true)
		{
			$blank = true;
		}
	}
	if(basename($template) == "search.php")
		$blank = false;
?>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<div id="wrapper">
		<?php
		if (!$blank):
		?>
			<header class="sticky-nav">
				<nav class="navbar">
					<div id="nav_overlay"></div>
					<div class="container">

						<div class="logo">
							<a href="<?= get_site_url() ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
								<?php
									$header_logo = get_theme_mod('header_logo');
									if (!empty($header_logo)):
								?>
										<img src="<?php echo esc_url($header_logo); ?>" alt="Logo von Dr. Balwi" width="150" height="63" />
								<?php
									else:
										echo esc_attr(get_bloginfo('name', 'display'));
									endif;
								?>
							</a>
						</div>

						<div>
							<?php
								wp_nav_menu(
									array(
										'theme_location' => 'main-menu',
										'container'      => '',
									)
								);
							?>
							
						</div>
						

<!-- 			
						<div class="no-scroll-menu">
							<div><a href=""></a>Partner werden</div>
							<div><a href=""></a>Services</div>
							<div><a href=""></a>Referenzen</div>
						</div> -->
						<div id="hamburger">
							<div></div>
						</div>

					</div>
				</nav>
			</header>
		<?php endif; ?>

		<main <?php if (isset($navbar_position) && 'fixed_top' === $navbar_position) : echo ' style="padding-top: 0;"';
						elseif (isset($navbar_position) && 'fixed_bottom' === $navbar_position) : echo ' style="padding-bottom: 100px;"';
						endif; ?>>