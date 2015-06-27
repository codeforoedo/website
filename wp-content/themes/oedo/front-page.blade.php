{{-- レイアウトを指定します。 --}}
@extends('theme::layout')

{{--

	スタイルシートを指定するブロックです。

--}}
@section('styles')
@parent
{{-- <link rel="stylesheet" href=""> --}}
@endsection

{{--

	スクリプトを指定するブロックです。

--}}
@section('scripts')
@parent
<script src="https://maps.google.com/maps/api/js?sensor=false"></script>
<script src="{!! bloginfo('template_directory') !!}/js/min/jquery.gmap3.min.js"></script>
@endsection

{{--

	コンテンツを指定するブロックです。

--}}
@section('content')

{{--

	カバー画像

--}}
<section id="key-area">
	<div id="key">
		<img src="{!! bloginfo('template_directory') !!}/images/slide01.jpg" class="pic">
{{--
		<img src="{!! bloginfo('template_directory') !!}/images/slide02.jpg" class="pic">
		<img src="{!! bloginfo('template_directory') !!}/images/slide03.jpg" class="pic">
--}}
	</div>
	<p id="key-text"></p>
	<p id="whats">CODE for 大江戸</p>
	<p id="arrow"><a href="#aboutus"><img src="{!! bloginfo('template_directory') !!}/images/key_btn.png" alt="About usへ"></a></p>
</section>



{{--

	更新情報

--}}
<section id="recents">
	<div class="headings-area">
		<h2 class="headings">- Recents -</h2>
		<p class="lead">最近のこと</p>
	</div>
@include('theme::front-page-recents')
</section>


{{--

	アプリケーション

--}}
<section id="applications">
	<div class="headings-area">
		<h2 class="headings">- Applications -</h2>
		<p class="lead">アプリ</p>
	</div>
@include('theme::front-page-applications')
</section>



{{--

	お問い合わせフォーム

--}}
<section id="contact">
	<div class="headings-area">
		<h2 class="headings">- Contact -</h2>
		<p class="lead">お問い合わせ</p>
	</div>
{{--@include('theme::front-page-contact')--}}
	<div class="section">
@shortcode([contact-form-7 id="40" title="Code for 大江戸参加登録フォーム"])
	</div>
</section>



{{--

	CODE for 大江戸とは

--}}
<section id="aboutus">
	<div class="headings-area">
		<h2 class="headings">- About us -</h2>
		<p class="lead">CODE for 大江戸とは？</p>
	</div>
@include('theme::front-page-aboutus')
</section>



{{--

	CODE for 大江戸運営メンバー

--}}
<section id="members">
	<div class="headings-area">
		<h2 class="headings">- Members -</h2>
		<p class="lead">CODE for 大江戸の運営メンバー</p>
	</div>
@include('theme::front-page-members')
</section>



{{--

	活動拠点

--}}
<section id="place">
	<div class="headings-area">
		<h2 class="headings">- 活動拠点 -</h2>
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
	<div class="gmap-area"></div>
</section>



{{--

	ページトップへ戻るボタン

--}}
<div id="pagetop-btn">
	<p><a href="#pagetop">^</a></p>
</div>

@endsection
