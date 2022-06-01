<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 * @package bestand_s
 */
?>

<?php
	get_header();
?>

	<main>
		<img class="404" alt="404" src="<?php echo get_template_directory_uri(); ?>/img/404.png">
	</main>

<?php
	get_sidebar();
	get_footer();
?>