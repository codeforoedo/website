{{-- レイアウトを指定します。 --}}
@extends('theme::layout')

@section('styles')
{{-- スタイルシートを指定するブロックです。 --}}
{{-- <link rel="stylesheet" href=""> --}}
@append

@section('scripts')
{{-- スクリプトを指定するブロックです。 --}}
{{-- <script type="javascript" src=""></script> --}}
@append

@section('content')
{{-- コンテンツを指定するブロックです。 --}}

<div class="container">

<div class="row">
	<ul class="breadcrumb">
		<li><a href="/">Home</a></li>
		<li class="active">{{ the_title() }}</li>
	</ul>
</div>

@postloop
<div class="article row">
	{{-- タイトル --}}
	<h2><a href="{!! the_permalink() !!}" title="{{ the_title_attribute() }}">{{ the_title() }}</a></h2>
	<p>

	{{-- 日付 --}}
	<span>日付：<a href="{!! the_permalink() !!}"><time datetime="{{ the_time('y-m-d') }}" />{{ the_time(get_option('date_format')) }}</a></span>
	</p>

	{{-- サムネイル画像 --}}
	{{-- 
	<a href="{!! the_permalink() !!}">
	@if (has_post_thumbnail())
		{{ the_post_thumbnail('thumbnail') }}
	@else
		<img src="{{ bloginfo('template_url') }}/images/the_post_thumbnail_default.png" alt="デフォルト画像" />
	@endif
	</a>
	--}}

	{{-- 本文の要約 --}}
	<p>{{ the_excerpt() }}</p>

	{{-- カテゴリ、タグ --}}
	<span>カテゴリー：{{ the_category(',') }}</span>
	<span>{{ the_tags() }}</span>

	<hr/>
</div>{{-- .row --}}
@postempty
記事がありません。
@endpostloop

<div class="pagination row">
	{!! bootstrap_paginate() !!}
</div>

</div>{{-- .container --}}

@endsection
