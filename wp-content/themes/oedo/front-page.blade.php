{{-- レイアウトを指定します。 --}}
@extends('theme::layout')

{{-- スタイルシートを指定するブロックです。 --}}
@section('styles')
@parent
{{-- <link rel="stylesheet" href=""> --}}
@endsection

{{-- スクリプトを指定するブロックです。 --}}
@section('scripts')
@parent
<script src="https://maps.google.com/maps/api/js?sensor=false"></script>
<script src="{!! bloginfo('template_directory') !!}/js/min/jquery.gmap3.min.js"></script>
@endsection

{{-- コンテンツを指定するブロックです。 --}}
@section('content')

<?php
	$events = new WP_Query([
		'post_status' => 'publish',
		'category_name' => 'event',
		'posts_per_page' => 5,
	]);
	$members = new WP_Query([
		'post_status' => 'publish',
		'post_type' => 'members',
		'posts_per_page' => -1,
	]);
?>

<div id="key-area">
	<div id="key">
		<img src="{!! bloginfo('template_directory') !!}/images/slide01.jpg" class="pic">
{{--
		<img src="{!! bloginfo('template_directory') !!}/images/slide02.jpg" class="pic">
		<img src="{!! bloginfo('template_directory') !!}/images/slide03.jpg" class="pic">
--}}
	</div>
	<p id="key-text"></p>
	<p id="whats"><a href="#sec01-headings">Code for 大江戸とは?</a></p>
	<p id="arrow"><a href="#sec01-headings"><img src="{!! bloginfo('template_directory') !!}/images/key_btn.png" alt="About usへ"></a></p>
</div>

<div class="headings-area">
	<h2 id="sec01-headings" class="headings">- About us -</h2>
	<p class="lead">Code for 大江戸とは？</p>
</div>
<div id="sec01-bg"><div class="section" id="sec01">
	<h3 class="sec01-subtitle">東京を面白くしたい</h3>
	<div class="sec-group text">
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
	</div><!--secgroup-->

	<h3 class="sec01-subtitle">ミッション</h3>
	<div class="sec-group">
		<ul>
			<li>シビックテックの推進 - 市民による市民のための情報テクノロジー活用　<a href="http://code4japan.org"><i class="fa fa-external-link"></i> CODE for Japan</a></li>
			<li>地域課題・問題をともに考え、解決策をともに作る</li>
			<li>異なる立場・似ている価値観の人たちが出会い、協働する場の創出</li>
			<li>難しいことをわかりやすく伝える、コンピューター恐怖症治療</li>
			<li>活動は何よりも楽しくやろう！</li>
		</ul>
	</div><!--secgroup-->

	<h3 class="sec01-subtitle">主な活動内容</h3>
	<div class="sec-group">
		<ul>
			<li>東京都（23区）のオープンデータの定義と活用</li>
			<li>歴史や文化、コミュニティのマッピング</li>
			<li>市民のインターネット技術活用ワークショップの実施</li>
		</ul>
	</div><!--secgroup-->
</div></div><!--/sec01-->

<div class="headings-area">
	<h2 id="sec02-headings" class="headings">- Members -</h2>
	<p class="lead">Code for 大江戸のメンバー紹介</p>
</div>
<div id="sec02-bg"><div class="section" id="sec02">
	<ul id="member">
@while ($members->have_posts())
<?php
	$members->the_post();
	$attachment_id = get_field('mem_thumb');
	$size = 'member_thumb';
	$image_urls = wp_get_attachment_image_src($attachment_id, $size);
	$image_url = $image_urls[0];
?>
		<li>
			<p class="name-thumb"><img src="{!! $image_url !!}" alt="{{ the_field('mem_name') }}"></p>
			<dl class="profile">
				<dt class="ja"><?php the_field('mem_name'); ?><span>{{ the_field('mem_name_en') }}</span></dt>
				<dd>{{ the_field('mem_post_edo') }}：{{ the_field('mem_post') }}</dd>
				<dd>{{ the_field('mem_comment') }}</dd>
			</dl>
		</li>
@endwhile
<?php wp_reset_query(); ?>
	</ul>
</div></div><!--/sec02-->

<div class="headings-area">
	<h2 id="sec03-headings" class="headings">- Events -</h2>
	<p class="lead">Code for 大江戸主催のイベントの告知</p>
</div>
<div class="section top-event-sec" id="sec03">
	<ul>
@while ($events->have_posts())
<?php
	$events->the_post();
?>
		<li><a href="{!! the_permalink(); !!}">
			<dl>
				<dt>{{ the_time('Y年n月j日') }}</dt>
				<dd>{{ the_title() }}</dd>
			</dl>
		</a></li>
@endwhile
<?php wp_reset_query(); ?>
	</ul>
	<!--<p class="more-btn"><a href="">イベント情報をもっと見る &gt;</a></p>-->
</div><!--/sec03-->
{{--
<div class="headings-area">
	<h2 id="sec04-headings" class="headings">- News -</h2>
	<p class="lead">更新情報</p>
</div>
<div class="section top-news-sec" id="sec04">
	<ul>
		<li><a href="#">
			<dl>
				<dt>2015.05.02</dt>
				<dd>Code for大江戸のホームページを公開いたしました。</dd>
			</dl>
		</a></li>
		<li><a href="#">
			<dl>
				<dt>2015.05.15</dt>
				<dd>Code for大江戸のメンバーに新たに○○さんが加わりました！</dd>
			</dl>
		</a></li>
		<li><a href="#">
			<dl>
				<dt>2015.05.15</dt>
				<dd>Code for大江戸のfacebookページを公開いたしました。</dd>
			</dl>
		</a></li>
		<li><a href="#">
			<dl>
				<dt>2015.05.15</dt>
				<dd>Code for大江戸ダミーダミーダミーダミーダミーダミーダミー</dd>
			</dl>
		</a></li>
		<li><a href="#">
			<dl>
				<dt>2015.05.15</dt>
				<dd>Code for大江戸ダミーダミーダミーダミーダミーダミーダミー</dd>
			</dl>
		</a></li>
	</ul>
	<p class="more-btn"><a href="">お知らせをもっと見る &gt;</a></p>
</div>
<!--/sec03-->
--}}

<div class="headings-area">
	<h2 id="sec05-headings" class="headings">- Contact -</h2>
	<p class="lead">{{--Code for 大江戸 のメンバーになる--}}</p>
</div>
<div class="section" id="sec05">
@shortcode([contact-form-7 id="40" title="Code for 大江戸参加登録フォーム"])
</div><!--/sec05-->

<div class="headings-area" id="sec06-headings-area">
	<h2 id="sec06-headings" class="headings">- 活動拠点 -</h2>
	<p class="lead">五反田のコワーキングスペース<br> VACANCY OFFICE GOTANDAを拠点に活動をしております。</p>
	<div id="map-in-box">
		<img src="{!! bloginfo('template_directory') !!}/images/vaycat.png" alt="">
		<h4>空猫（ベイキャット）</h4>
		<p>
			空猫はCODE for 大江戸の財政を支える募金猫です。
			普段はVACANCYにいます。{{--見かけたら頭をなでなでしてあげて下さい。--}}
			空猫の背中の溝に入れられた募金は、空猫基金（そらねこききん）としてCODE for 大江戸の活動に役立てられます。
		</p>
	</div>
</div>
<div class="gmap-area" id="sec06"></div>
</div><!--/sec06-->

<div id="pagetop-btn">
	<p><a href="#pagetop">^</a></p>
</div>

@endsection
