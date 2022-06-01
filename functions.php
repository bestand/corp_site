<?php
/**
 * bestand functions and definitions
 *
 * @package bestand_s
 */


/**
 * Enqueue scripts and styles.
 */
function bestand_scripts() {
	wp_enqueue_style('reset.css', get_template_directory_uri().'/css/reset.css' );
	wp_enqueue_style('style.css', get_template_directory_uri().'/css/style.css' );
	wp_enqueue_script( 'header.js', get_template_directory_uri().'/js/header.js');
}
add_action( 'wp_enqueue_scripts', 'bestand_scripts' );


/**
 * Register menus.
 */
function bestand_setup_theme() {
	register_nav_menus(array(
		'header_menu' => 'ヘッダーメニュー',
	));
}
add_action( 'after_setup_theme', 'bestand_setup_theme' );


/**
 * Register post_type
 */

function bestand_post_type() {
	register_post_type( 'news', 
		array(
			'labels'			=> array(
				'name'				=> 'お知らせ',
				'name_admin_bar'	=> 'お知らせ',
				'singular_name'		=> 'お知らせ',
				'add_new_item'		=> '新規お知らせを投稿',
				'view_item'			=> 'お知らせを表示',
				'search_items'		=> 'お知らせを検索',
				'not_found'			=> 'お知らせはありません',
				'not_found_in_trash'=> 'ゴミ箱にお知らせはありません',
			),
			'public'			=> true,
			'has_archive'		=> true,
			'hierarchical'		=> false,
			'map_meta_cap'		=> true,
			'delete_with_user'	=> false,
			'rewrite'			=> array( 'slug'=>'news' ),
			'menu_position'		=> 5,
			'supports'			=> array( 'title', 'editor', 'thumbnail')
		)
	);

	register_post_type( 'works', 
		array(
			'labels'			=> array(
				'name'				=> '事例',
				'name_admin_bar'	=> '事例',
				'singular_name'		=> '事例',
				'add_new_item'		=> '事例を投稿',
				'view_item'			=> '事例を表示',
				'search_items'		=> '事例を検索',
				'not_found'			=> '事例はありません',
				'not_found_in_trash'=> 'ゴミ箱に事例はありません',
			),
			'public'			=> true,
			'has_archive'		=> true,
			'hierarchical'		=> false,
			'map_meta_cap'		=> true,
			'delete_with_user'	=> false,
			'rewrite'			=> array( 'slug'=>'works' ),
			'menu_position'		=> 5,
			'supports'			=> array( 'title', 'editor', 'thumbnail')
		)
	);
}
add_action('init', 'bestand_post_type');


?>