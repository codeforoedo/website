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

<div class="container">
	<div class="row">
		<ul class="breadcrumb">
			<li><a href="/">Home</a></li>
			<li class="active">{{ the_title() }}</li>
		</ul>
	</div>

	<article class="single">
		<header>
			<h1> {{ the_title() }}</h1>
@if (get_field('event_date'))
			<div>
				<span class="label label-primary">イベント開催日</span> {{ date(get_option('date_format'), strtotime(get_field('event_date'))) }}</span>
			</div>
@endif
			<div><span class="label label-default">更新日</span> {{ the_time('Y年n月j日') }}</div>
		</header>
		<hr>
		<div class="row">
			<div class="single-content col-md-12">
				{{ the_content() }}
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="single-post-links text-center col-md-12">
				{!! previous_post_link() !!}
				|
				{!! next_post_link() !!}
			</div>
		</div>
	</article>
</div>

@endsection
