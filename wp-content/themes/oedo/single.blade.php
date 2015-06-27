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

<ul class="breadcrumb">
	<li><a href="/">Home</a></li>
	<li class="active">{{ the_title() }}</li>
</ul>

<div class="headings-area">
	<h1 class="headings">{{ the_title() }}</h1>
	<p class="lead">{{ the_time('Y年n月j日') }} Posted</p>
	{{-- Previous/next page navigation. --}}
	{{ get_the_posts_pagination([
		'prev_text'          => __( 'Previous page', 'twentyfifteen' ),
		'next_text'          => __( 'Next page', 'twentyfifteen' ),
		'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
	]) }}
</div>
<div id="single-main">
	<div id="single-post">
		{{ the_content() }}
		<p id="go-top"><a href="/">トップページに戻る &gt;</a></p>
	</div><!--/single-post-->
</div><!--main-->

@endsection
