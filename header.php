<?php
/**
 * The header for our theme
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bestand_s
 */
?>

<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<title>株式会社BESTAND（ビースタンド）</title>
	<meta name="description" content="株式会社BESTANDは、顧客企業の成功・成長を幅広く支援します。"/>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-QX0NBEBS6Q"></script>
	<script>
  		window.dataLayer = window.dataLayer || [];
  		function gtag(){dataLayer.push(arguments);}
  		gtag('js', new Date());
  		gtag('config', 'G-QX0NBEBS6Q');
	</script>

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	
	<div>
		<header>
			<div class="site-title">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">	
					<img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png">
				</a>
			</div>
			<button type="button" class="hamburger-btn">
				<span></span>
				<span></span>
				<span></span>
			</button>
			<nav id="header-menu">
				<?php wp_nav_menu( array( 'theme_location' => 'header_menu' )); ?>
			</nav>
		</header>
