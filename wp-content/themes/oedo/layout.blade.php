<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
	<title>{{ bloginfo('name') }}</title>
	<meta name="description" content="CODE for 大江戸の公式Webサイトです。">
	<meta name="keyword" content="Code for Japan, Code for Oedo, Oedo, 大江戸">
{{-- ページ共通のスタイルシートを指定します。 --}}
    <link rel="stylesheet" href="{!! bloginfo('template_directory') !!}/assets/honoka/css/bootstrap.min.css">
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
@include('theme::global-menu')
</div>

@yield('content')

<div id="footer">
	<div id="inner-footer">
		<p id="copy">Copyright &copy; Code for Oedo, All rights reserved.</p>
	</div>
</div>

@action('wp_footer')

{{-- ページ共通のスクリプトを指定します。 --}}
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="{!! bloginfo('template_directory') !!}/assets/honoka/js/bootstrap.min.js"></script>
<script src="{!! bloginfo('template_directory') !!}/js/common.js"></script>
@section('scripts')
{{-- ページ固有のスクリプト指定のプレースホルダです。 --}}
@show
</body>
</html>
