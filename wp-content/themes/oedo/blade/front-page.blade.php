{{-- レイアウトを指定します。 --}}
@extends('theme::layout')

@section('styles')
{{--

	スタイルシートを指定するブロックです。

--}}
{{-- <link rel="stylesheet" href=""> --}}
@append

@section('scripts')
{{--

	スクリプトを指定するブロックです。

--}}
<script src="https://maps.google.com/maps/api/js?sensor=false"></script>
<script src="{!! bloginfo('template_directory') !!}/js/min/jquery.gmap3.min.js"></script>
@append

@section('content')
{{--

	コンテンツを指定するブロックです。

--}}

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
	<p id="arrow"><a href="#recents"><img src="{!! bloginfo('template_directory') !!}/images/key_btn.png"></a></p>
</section>



{{--

	更新情報

--}}
<section id="recents" class="theme-section">
	<header class="header">
		<h2>- Recents -</h2>
		<p class="lead">最近のこと</p>
	</header>
	<div class="body">
@include('theme::front-page-recents')
	</div>
</section>



{{--

	アプリケーション

--}}
<section id="applications" class="theme-section">
	<header class="header">
		<h2>- Applications -</h2>
		<p class="lead">アプリケーション</p>
	</header>
	<div class="body">
@include('theme::front-page-applications')
	</div>
</section>



{{--

	CODE for 大江戸とは

--}}
<section id="aboutus" class="theme-section">
	<header class="header">
		<h2>- About us -</h2>
		<p class="lead">CODE for 大江戸とは？</p>
	</header>
	<div class="body">
@include('theme::front-page-aboutus')
	</div>
</section>



{{--

	CODE for 大江戸運営メンバー

--}}
<section id="members" class="theme-section">
	<header class="header">
		<h2>- Members -</h2>
		<p class="lead">CODE for 大江戸の運営メンバー</p>
	</header>
	<div class="body">
@include('theme::front-page-members')
	</div>
</section>



{{--

	活動拠点

--}}
<section id="place" class="theme-section">
	<header class="header">
		<h2>- Place -</h2>
		<p class="lead">活動拠点</p>
	</header>
	<div class="body">
@include('theme::front-page-place')
	</div>
</section>



{{--

	ページトップへ戻るボタン

--}}
<div id="pagetop-btn">
	<p><a href="#pagetop">^</a></p>
</div>



{{--

	ダイアログ

--}}
@include('theme::front-page-contact')



@endsection
