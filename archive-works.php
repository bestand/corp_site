<?php
/**
 * Template Name:archive-works
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bestand_s
 */
?>

<?php
get_header();
?>

	<main>
		<h1>archive-works.php</h1>
		<?php
		if ( have_posts() ) :
		?>

			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header>

			<?php
			while ( have_posts() ) :
				the_post();
			endwhile;
			the_posts_navigation();

		else :

		endif;
		?>

	</main>

<?php
get_footer();
?>