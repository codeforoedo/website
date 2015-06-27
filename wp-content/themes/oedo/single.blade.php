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
{{-- <script type="javascript" src=""></script> --}}
@endsection

{{-- コンテンツを指定するブロックです。 --}}
@section('content')

<?php the_post(); ?>
<ol id="bred">
	<li id="home"><a href="/">Home</a></li>
	<li>{{ the_title() }}</li>
</ol>

<div class="headings-area">
	<h1 id="sec01-headings" class="headings">{{ the_title() }}</h1>
	<p class="lead">{{ the_time('Y年n月j日') }} Posted</p>
</div>
<div id="single-main">
	<div id="single-post">
		{{ the_content() }}
		<p id="go-top"><a href="/">トップページに戻る &gt;</a></p>
	</div><!--/single-post-->
</div><!--main-->

@endsection
