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

<header>
	<h1>{{ the_title() }}</h1>
	<p class="lead">{{ the_time('Y年n月j日') }} Posted</p>
</header>
<article class="single">
	<div class="single-content">
		{{ the_content() }}
	</div>
	<div class="single-post-links text-center">
		{!! previous_post_link() !!}
		|
		{!! next_post_link() !!}
	</div>
</article>

@endsection
