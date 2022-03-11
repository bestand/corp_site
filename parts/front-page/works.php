<?php
$args = array(
    'post_type' 	=> 'works',
    'posts_per_page'=> 10,
    'orderby'       => 'date',
    'order'         => 'DESC',
);

$the_query = get_posts( $args );

if ( $the_query ) :
    foreach ( $the_query as $post ) : setup_postdata( $post );
?>
    <section class="works-item">
        <a href="<?php echo the_permalink(); ?>">
            <h3 class="works-item-date"><?php echo the_time('Y/m/d'); ?></h3>	
            <h2 class="works-item-title"><?php echo the_title(); ?></h2>
            <p class="works-item-excerpt"><?php echo the_excerpt(); ?></p>
        </a>
    </section>
<?php
    endforeach;
    wp_reset_postdata();
else:
?>

    <p class="no-works"><?php echo 'Comming Soon…'; ?></p>

<?php
    endif;
?>