<?php
/**
 * Template Name:archive-news
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
		<h1>archive-news.php</h1>

		<?php
		$args = array(
			'post_type' 	=> 'news',
    		'posts_per_page'=> 10,
			'orderby'       => 'date',
			'order'         => 'DESC',
		);

		$the_query = get_posts( $args );

		if ( $the_query ) :
			foreach ( $the_query as $post ) : setup_postdata( $post );
				the_time('Y年m月d日');	
				the_title();
				the_permalink();
			endforeach;
			wp_reset_postdata();
		else:
		?>
    		<?php echo 'お知らせはありません。'; ?>
		<?php
		endif;
		?>

	</main>

<?php
get_footer();
?>