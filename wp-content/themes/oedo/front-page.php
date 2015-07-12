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


<?php /*

	スタイルシートを指定するブロックです。

*/ ?>
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

<?php /*

	コンテンツを指定するブロックです。

*/ ?>

<?php /*

	カバー画像

*/ ?>
<section id="key-area">
	<div id="key">
		<img src="<?php echo bloginfo('template_directory'); ?>/images/slide01.jpg" class="pic">
<?php /*
		<img src="<?php echo bloginfo('template_directory'); ?>/images/slide02.jpg" class="pic">
		<img src="<?php echo bloginfo('template_directory'); ?>/images/slide03.jpg" class="pic">
*/ ?>
	</div>
	<p id="key-text"></p>
	<p id="whats">CODE for 大江戸</p>
	<p id="arrow"><a href="#recents"><img src="<?php echo bloginfo('template_directory'); ?>/images/key_btn.png"></a></p>
</section>



<?php /*

	更新情報

*/ ?>
<section id="recents" class="theme-section">
	<header class="header">
		<h2>- Recents -</h2>
		<p class="lead">最近のこと</p>
	</header>
	<div class="body">
<div class="container">
	<div class="row">
		<?php /* 最近の記事リスト */ ?>
		<div class="top-event-sec col-md-10 col-xs-12">
			<ul>
<?php $__postquery_1 = new WP_Query([
	'post_status' => 'publish',
//	'category_name' => 'event',
	'posts_per_page' => 5,
]); ?>
<?php if ($__postquery_1->have_posts()) : ?>
	<?php while ($__postquery_1->have_posts()) : $__postquery_1->the_post(); ?>
				<li><a href="<?php echo the_permalink();; ?>">
					<dl>
						<dt><?php echo e(the_time(get_option('date_format'))); ?></dt>
						<dd><?php echo e(the_title()); ?></dd>
					</dl>
				</a></li>
	<?php endwhile; ?>
<?php else : ?>
				<li>記事がありません。</li>
<?php endif; ?>
			</ul>
			<p class="more-btn"><a href="/all/">もっと見る &gt;</a></p>
		</div>

		<?php /* カテゴリリスト */ ?>
		<div class="col-md-2 col-xs-12">
			<?php echo bootstrap_category_list(); ?>

		</div>
	</div>
</div>

	</div>
</section>



<?php /*

	アプリケーション

*/ ?>
<section id="applications" class="theme-section">
	<header class="header">
		<h2>- Applications -</h2>
		<p class="lead">アプリケーション</p>
	</header>
	<div class="body">
<div class="container">
	<ul class="row">
<?php $__postquery_1 = new WP_Query([
	'post_status' => 'publish',
	'post_type' => 'applications',
	'posts_per_page' => -1,
]); ?>
<?php if ($__postquery_1->have_posts()) : ?>
	<?php while ($__postquery_1->have_posts()) : $__postquery_1->the_post(); ?>
		<li class="col-sm-4 col-xs-6">
			<p class="name-thumb"><img class="img-circle" src="<?php echo $image_url; ?>" alt="<?php echo e(the_field('name')); ?>"></p>
			<dl class="profile">
				<dt class="ja"><?php the_field('name'); ?><span><?php echo e(the_field('pronunciation')); ?></span></dt>
				<dd><?php echo e(the_field('post_edo')); ?>：<?php echo e(the_field('post_present')); ?></dd>
				<dd><?php echo e(the_field('comment')); ?></dd>
			</dl>
		</li>
	<?php endwhile; ?>
<?php else : ?>
	<li>アプリケーションを設定してください。</li>
<?php endif; ?>
	</ul>
</div>

	</div>
</section>



<?php /*

	CODE for 大江戸とは

*/ ?>
<section id="aboutus" class="theme-section">
	<header class="header">
		<h2>- About us -</h2>
		<p class="lead">CODE for 大江戸とは？</p>
	</header>
	<div class="body">
<div class="container">
	<h3>東京を面白くしたい</h3>
	<div class="row sec-group text">
		<p>
			東京は、「近隣住民への無関心」「孤独な老人」「空き家問題」といったコミュニケーション不足に起因した問題を抱えている世界有数の大都市です。
			日本各地だけでなく世界中から人々が集まり、人口密度はものすごく高いのですが、人と人とのつながりは人数の割にはそれほど多くも強くもないように感じられます。
			しかし、人々が集まり活動していないわけではなく、「どこでどんな人たちが何をしているのか」を知る手段が少ないだけで、たくさんの人たちが活動しているのです。
		</p>
		<p>
			地図は地域を俯瞰できるツールです。
			紙の地図は地域の二次元的な位置情報を知るのにとても便利です。
			電子の地図は、レイヤー（層）を表現できるのでより複雑で情報量の多い三次元的な表現も可能です。
			スマートフォンの普及により、外出先でも電子地図を活用できる時代になりました。
		</p>
		<p>
			CODE for 大江戸は、東京の歴史・文化を語りデータ化するイベントなどの提供を通じて、同じ方向性を向く人たちの新しい出会いを生み出し、新しい活動のきっかけとなる場つくりを行います。
		</p>
	</div>

	<h3>ミッション</h3>
	<div class="row sec-group">
		<ul>
			<li>シビックテックの推進 - 市民による市民のための情報テクノロジー活用　<a href="http://code4japan.org"><i class="fa fa-external-link"></i> CODE for Japan</a></li>
			<li>地域課題・問題をともに考え、解決策をともに作る</li>
			<li>異なる立場・似ている価値観の人たちが出会い、協働する場の創出</li>
			<li>難しいことをわかりやすく伝える、コンピューター恐怖症治療</li>
			<li>活動は何よりも楽しくやろう！</li>
		</ul>
	</div>

	<h3>主な活動内容</h3>
	<div class="row sec-group">
		<ul>
			<li>東京都（23区）のオープンデータの定義と活用</li>
			<li>歴史や文化、コミュニティのマッピング</li>
			<li>市民のインターネット技術活用ワークショップの実施</li>
		</ul>
	</div>
</div>

	</div>
</section>



<?php /*

	CODE for 大江戸運営メンバー

*/ ?>
<section id="members" class="theme-section">
	<header class="header">
		<h2>- Members -</h2>
		<p class="lead">CODE for 大江戸の運営メンバー</p>
	</header>
	<div class="body">
<div class="container">
	<ul class="row">
<?php $__postquery_1 = new WP_Query([
	'post_status' => 'publish',
	'post_type' => 'members',
	'posts_per_page' => -1,
	'orderby' => 'meta_value',
	'meta_key' => 'display_order',
	'order' => 'ASC',
]); ?>
<?php if ($__postquery_1->have_posts()) : ?>
	<?php while ($__postquery_1->have_posts()) : $__postquery_1->the_post(); ?>
<?php
	$image_url = wp_get_attachment_image_src(get_field('thumbnail'), 'member_thumbnail')[0];
?>
		<li class="col-sm-4 col-xs-6">
			<img class="img-circle" src="<?php echo $image_url; ?>" alt="<?php echo e(the_field('name')); ?>">
			<dl class="profile">
				<dt class="ja"><?php the_field('name'); ?><span><?php echo e(the_field('pronunciation')); ?></span></dt>
				<dd><?php echo e(the_field('post_edo')); ?>

<?php if(the_field('post_present')): ?>
：<?php echo e(the_field('post_present')); ?>

<?php endif; ?>
				</dd>
				<dd><?php echo e(the_field('comment')); ?></dd>
			</dl>
		</li>
	<?php endwhile; ?>
<?php else : ?>
		<li>メンバーを設定してください。</li>
<?php endif; ?>
	</ul>

</div>

<div class="vaycat">
	<img src="<?php echo bloginfo('template_directory'); ?>/images/vaycat.png" alt="">
	<h4>空猫（ベイキャット）</h4>
	<p>
		空猫はCODE for 大江戸の財政を支える募金猫です。
		空猫の背中の溝に入れられた募金は、空猫基金（そらねこききん）としてCODE for 大江戸の活動に役立てられます。
	</p>
</div>

	</div>
</section>



<?php /*

	活動拠点

*/ ?>
<section id="place" class="theme-section">
	<header class="header">
		<h2>- Place -</h2>
		<p class="lead">活動拠点</p>
	</header>
	<div class="body">
<div class="gmap-area"></div>

	</div>
</section>



<?php /*

	ページトップへ戻るボタン

*/ ?>
<div id="pagetop-btn">
	<p><a href="#pagetop">^</a></p>
</div>



<?php /*

	ダイアログ

*/ ?>
<div id="contact" class="modal fade" role="dialog" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <?php /* モーダルダイアログのヘッダー */ ?>
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="modal-label">CODE for 大江戸へのお問い合わせ</h4>
            </div>
            <?php /* モーダルダイアログの本体 */ ?>
            <div class="modal-body">
<?php echo do_shortcode('[contact-form-7 id="40" title="お問い合わせ"]'); ?>
            </div>
            <?php /* モーダルダイアログのフッター */ ?>
<?php /*
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">閉じる</button>
            </div>
*/ ?>
        </div>
    </div>
</div>






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


<?php /*

	スクリプトを指定するブロックです。

*/ ?>
<script src="https://maps.google.com/maps/api/js?sensor=false"></script>
<script src="<?php echo bloginfo('template_directory'); ?>/js/min/jquery.gmap3.min.js"></script>

</body>
</html>







