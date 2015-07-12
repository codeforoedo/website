<?php

add_action('init', function () {
	register_nav_menus([
		'global-menu' => 'グローバルメニュー',
//		'primary-left'     => __('Primary Menu Left', 'L'),
//		'primary-right'    => __('Primary Menu Right', 'L'),
//		'sidebar'          => __('Sidebar Menu', 'L'),
	]);

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

	// カスタム投稿タイプ「アプリケーション」を登録する
	register_post_type('applications', [
		'labels' => [
			'name' => 'アプリケーション',
		],
		'public' => true,
//		'menu_position' => 0,
		'supports' => ['title', 'editor'],
		'has_archive' => true,
	]);

	// 画像の設定をする
	add_image_size('member_thumbnail', 320, 320, true);
});



function bootstrap_category_list()
{
	$items = get_categories([
		'orderby' => 'name',
		'order' => 'ASC',
		'hide_empty' => false,
	]);

	$html = '';
	$html .= '<h4>'.__('Categories').'</h4>'.PHP_EOL;

	$html .= '<ul class="list-group">'.PHP_EOL;
	if (count($items) > 0) {
		foreach ($items as $item) {
			$html .= '<li class="list-group-item"><span class="badge">'.$item->count.'</span><a href="'.get_term_link($item).'">'.e($item->name).'</a></li>'.PHP_EOL;
		}
	}
	else {
		$html .= '<li class="list-group-item">'.e(__('No categories')).'</li>'.PHP_EOL;
	}
	$html .= '</ul>'.PHP_EOL;

	return $html;
}

function bootstrap_paginate()
{
	$items = paginate_links([
		'type' => 'array',
	]);

	$html = '';
	$html .= '<ul class="pagination">'.PHP_EOL;
	foreach ($items as $item) {
		$html .= "<li>$item</li>".PHP_EOL;
	}
	$html .= '</ul>'.PHP_EOL;

	return $html;
}

/*
previous-post:
	SELECT p.ID FROM wp_posts AS p
		WHERE p.post_date < '2015-06-28 18:12:27' AND p.post_type = 'post'
		AND ( p.post_status = 'publish' OR p.post_status = 'private' )
		ORDER BY p.post_date DESC LIMIT 1
*/

