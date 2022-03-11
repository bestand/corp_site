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

	<main id="primary" class="single-news-main">
		<img class="top-img-back" src="<?php echo get_template_directory_uri(); ?>/img/top-back.png">
		<h2 class="single-news-item-date"><?php echo the_time('Y/m/d'); ?></h2>	
		<h1 class="single-news-item-title"><?php echo the_title(); ?></h1>
		<p class="single-news-item-content"><?php echo the_content(); ?></p>
	</main>

<?php
get_footer();
?>