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

<div id="key-area">
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
</div>



{{--

	更新情報

--}}
<div id="recents" class="headings-area">
	<h2 class="headings">- Recents -</h2>
	<p class="lead">最近のこと</p>
</div>
@include('theme::front-page-recents')



{{--

	アプリケーション

--}}
<div id="applications" class="headings-area">
	<h2 class="headings">- Applications -</h2>
	<p class="lead">アプリ</p>
</div>
@include('theme::front-page-applications')



{{--

	お問い合わせフォーム

--}}
<div id="contact" class="headings-area">
	<h2 class="headings">- Contact -</h2>
	<p class="lead">お問い合わせ</p>
</div>
{{--@include('theme::front-page-contact')--}}
<div class="section">
@shortcode([contact-form-7 id="40" title="Code for 大江戸参加登録フォーム"])
</div><!--/sec05-->



{{--

	CODE for 大江戸とは

--}}
<div id="aboutus" class="headings-area">
	<h2 class="headings">- About us -</h2>
	<p class="lead">CODE for 大江戸とは？</p>
</div>
@include('theme::front-page-aboutus')



{{--

	CODE for 大江戸運営メンバー

--}}
<div id="members" class="headings-area">
	<h2 class="headings">- Members -</h2>
	<p class="lead">CODE for 大江戸の運営メンバー</p>
</div>
@include('theme::front-page-members')




{{--

	活動拠点

--}}
<div id="place" class="headings-area" id="sec06-headings-area">
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




{{--

	ページトップへ戻るボタン

--}}
<div id="pagetop-btn">
	<p><a href="#pagetop">^</a></p>
</div>

@endsection
