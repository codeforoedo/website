<?php

add_action( 'init', 'create_post_type' );
function create_post_type() {

//カスタム投稿タイプ
	$labels = array(
		'name' => __( 'イベント告知' )
//		'singular_name' => __( 'イベント告知' ),
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
//		'menu_position' => 0,
		'supports' => array('title','editor'),
		'has_archive' => true
	);
	register_post_type('event',$args);

	$labels = array(
		'name' => __( 'メンバー' )
//		'singular_name' => __( 'イベント告知' ),
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
//		'menu_position' => 0,
		'supports' => array('title','editor'),
		'has_archive' => true
	);
	register_post_type('members',$args);

//カスタムタクソノミー
/*
	register_taxonomy(
		'type',
		array( '' ),
		array(
			'label' => '',
			'hierarchical' => true,
			'query_var' => true,
			'show_admin_column' => true,
			'rewrite' => true
			'show_ui' => false
		)
	);
*/

//画像設定
add_image_size( 'member_thumb', 320, 320, true );
}