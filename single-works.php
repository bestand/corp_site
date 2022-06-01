<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package bestand_s
 */
?>

<?php
get_header();
?>

	<main id="primary" class="single-works-main">
		<h1 class="single-works-item-title"><?php echo the_title(); ?></h1>
		<h2 class="single-works-item-date"><?php echo the_time('Y/m/d'); ?></h2>	
		<p class="single-works-item-content"><?php echo the_content(); ?></p>
	</main>

<?php
get_footer();
?>