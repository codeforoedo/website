<?php

add_action('init', function () {
	// カスタム投稿タイプ「メンバー」を登録する
	register_post_type('members', [
		'labels' => [
			'name' => 'メンバー',
		],
		'public' => true,
//		'menu_position' => 0,
		'supports' => ['title', 'editor'],
		'has_archive' => true,
	]);

	// カスタム投稿タイプ「アプリ」を登録する
	register_post_type('app', [
		'labels' => [
			'name' => 'アプリ',
		],
		'public' => true,
//		'menu_position' => 0,
		'supports' => ['title', 'editor'],
		'has_archive' => true,
	]);

	// 画像の設定をする
	add_image_size('member_thumb', 320, 320, true);
});
