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
			<li class="active">404</li>
		</ul>
	</div>

	<header>
		<h1>{{ trans('theme::messages.404.title') }}</h1>
	</header>

	<div class="row">
		<div class="col-md-12">
			<p>{{ trans('theme::messages.404.message') }}</p>
		</div>
	</div>
</div>

@endsection
