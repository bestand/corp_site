<?php
/**
 * The template for displaying all pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bestand_s
 */
?>

<?php
get_header();
?>

	<main id="primary" class="site-main">
		<h1>page</h1>
		
		<?php
		while ( have_posts() ) :
			the_post();
		endwhile;
		?>

	</main>

<?php
get_sidebar();
get_footer();
?>