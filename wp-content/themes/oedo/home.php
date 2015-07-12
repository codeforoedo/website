<?php /* This file made by Blade. Do not modified. */ ?>
<?php /* レイアウトを指定します。 */ ?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
	<title><?php echo e(bloginfo('name')); ?></title>
	<meta name="description" content="CODE for 大江戸の公式Webサイトです。">
	<meta name="keyword" content="Code for Japan, Code for Oedo, Oedo, 大江戸">
<?php /* ページ共通のスタイルシートを指定します。 */ ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/honoka/css/bootstrap.min.css">
<?php /*	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">*/ ?>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/theme.css">

<?php /* ページ固有のスタイルシート指定のプレースホルダです。 */ ?>


<?php /* スタイルシートを指定するブロックです。 */ ?>
<?php /* <link rel="stylesheet" href=""> */ ?>


<?php do_action('wp_head'); ?>
</head>

<body id="pagetop">
<div id="header">
<?php /* ヘッダー */ ?>
	<div class="header-row">
		<p class="header-text">Code for Oedo / コードフォー大江戸</p>
		<?php /*<p class="header-social">socialicons area</p>*/ ?>
	</div>
<?php /* メニュー */ ?>

<div id="navbar">
	<nav class="navbar navbar-default" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<?php /* ハンバーガーボタン */ ?>
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-top">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>

				<?php /* ブランド */ ?>
				<a class="navbar-brand" href="/">
					<img src="<?php echo bloginfo('template_directory'); ?>/images/sitetitle.png" alt="Code for Oedo / コードフォー大江戸">
				</a>
			</div>
			<div id="navbar-top" class="collapse navbar-collapse">
				<?php /* MEMO: お問い合わせはモーダルダイアログで出すために、WordPressメニューの外に出した。 */ ?>
				<ul class="nav navbar-nav navbar-right">
					<li class="menu-item menu-item-type-custom menu-item-object-custom">
						<?php /* MEMO: href属性に "#" を指定するとモーダルダイアログが開かない */ ?>
						<a title="お問い合わせ" class="btn btn-default" href="" data-toggle="modal" data-target="#contact">お問い合わせ</a>
					</li>
				</ul>
				<?php echo e(wp_nav_menu([
					'menu'              => 'global-menu',
					'theme_location'    => 'global-menu',
					'depth'             => 2,
					'container'         => false,
					'menu_class'        => 'nav navbar-nav navbar-right',
					'walker'            => new WPBootstrapNavwalker(),
					'fallback_cb'       => [WPBootstrapNavwalker::class, 'fallback'],
				])); ?>

			</div>
		</div>
	</nav>
</div>

</div>

<?php /* コンテント */ ?>

<?php /* コンテンツを指定するブロックです。 */ ?>

<div class="container">

<div class="row">
	<ul class="breadcrumb">
		<li><a href="/">Home</a></li>
		<li class="active"><?php echo e(the_title()); ?></li>
	</ul>
</div>

<?php $__postquery_1 = $GLOBALS['wp_query']; ?>
<?php if ($__postquery_1->have_posts()) : ?>
	<?php while ($__postquery_1->have_posts()) : $__postquery_1->the_post(); ?>
<div class="article row">
	<?php /* タイトル */ ?>
	<h2><a href="<?php echo the_permalink(); ?>" title="<?php echo e(the_title_attribute()); ?>"><?php echo e(the_title()); ?></a></h2>
	<p>

	<?php /* 日付 */ ?>
	<span>日付：<a href="<?php echo the_permalink(); ?>"><time datetime="<?php echo e(the_time('y-m-d')); ?>" /><?php echo e(the_time(get_option('date_format'))); ?></a></span>
	</p>

	<?php /* サムネイル画像 */ ?>
	{{-- 
	<a href="<?php echo the_permalink(); ?>">
	<?php if(has_post_thumbnail()): ?>
		<?php echo e(the_post_thumbnail('thumbnail')); ?>

	<?php else: ?>
		<img src="<?php echo e(bloginfo('template_url')); ?>/images/the_post_thumbnail_default.png" alt="デフォルト画像" />
	<?php endif; ?>
	</a>
	--}}

	<?php /* 本文の要約 */ ?>
	<p><?php echo e(the_excerpt()); ?></p>

	<?php /* カテゴリ、タグ */ ?>
	<span>カテゴリー：<?php echo e(the_category(',')); ?></span>
	<span><?php echo e(the_tags()); ?></span>

	<hr/>
</div><?php /* .row */ ?>
	<?php endwhile; ?>
<?php else : ?>
記事がありません。
<?php endif; ?>

<div class="pagination row">
	<?php echo bootstrap_paginate(); ?>

</div>

</div><?php /* .container */ ?>



<?php /* フッター */ ?>
<div id="footer">
	<div id="inner-footer">
		<p id="copy">Copyright &copy; Code for Oedo, All rights reserved.</p>
	</div>
</div>

<?php do_action('wp_footer'); ?>

<?php /* ページ共通のスクリプトを指定します。 */ ?>
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/honoka/js/bootstrap.min.js"></script>
<?php /*<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>*/ ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>

<?php /* ページ固有のスクリプト指定のプレースホルダです。 */ ?>


<?php /* スクリプトを指定するブロックです。 */ ?>
<?php /* <script type="javascript" src=""></script> */ ?>

</body>
</html>








