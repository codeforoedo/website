<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
	<title>{{ bloginfo('name') }}</title>
	<meta name="description" content="CODE for 大江戸の公式Webサイトです。">
	<meta name="keyword" content="Code for Japan, Code for Oedo, Oedo, 大江戸">
{{-- ページ共通のスタイルシートを指定します。 --}}
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="{!! bloginfo('template_directory') !!}/theme.css">
@section('styles')
{{-- ページ固有のスタイルシート指定のプレースホルダです。 --}}
@show

@action('wp_head')
</head>
<body>
<body id="pagetop" class="single-page">
<div id="header-line">
	<p id="header-text">Code for Oedo / コードフォー大江戸</p>
	{{--<p id="header-social">socialicons area</p>--}}
</div>
<div id="header">
	<div id="inner-header">
		<p id="sitetitle"><a href="/"><img src="{!! bloginfo('template_directory') !!}/images/sitetitle.png" alt="Code for Oedo / コードフォー大江戸"></a></p>
	</div><!--/inner-header-->
	<div id="mainnav-area">
		<ul id="mainnav">
			<li class="item01"><a href="/#sec01-headings">About us</a></li>
			<li class="item02"><a href="/#sec02-headings">Members</a></li>
			<li class="item03"><a href="/#sec03-headings">Events</a></li>
			<li class="item04"><a href="/#sec05-headings">Contact</a></li>
		</ul>
	</div><!--/mainnavarea-->
</div><!--/header-->

@yield('content')

<div id="footer">
	<div id="inner-footer">
		<p id="copy">Copyright &copy; Code for Oedo, All rights reserved.</p>
	</div><!--/inner-footer-->
</div><!--/footer-->

@action('wp_footer')

{{-- ページ共通のスクリプトを指定します。 --}}
<script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="{!! bloginfo('template_directory') !!}/js/common.js"></script>
@section('scripts')
{{-- ページ固有のスクリプト指定のプレースホルダです。 --}}
@show
</body>
</html>
