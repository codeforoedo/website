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

<ul class="breadcrumb">
	<li><a href="/">Home</a></li>
	<li class="active">404</li>
</ul>

<header>
	<h1>{{ trans('theme::messages.404.title') }}</h1>
</header>
<div id="single-main">
	<div id="single-post">
		<p>{{ trans('theme::messages.404.message') }}</p>
	</div>
</div>

@endsection
