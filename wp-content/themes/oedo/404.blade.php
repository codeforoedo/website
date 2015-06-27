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

<ul class="breadcrumb">
	<li><a href="/">Home</a></li>
	<li class="active">404</li>
</ul>

<div class="headings-area">
	<h1 id="sec01-headings" class="headings">404 File Not Found</h1>
</div>
<div id="single-main">
	<div id="single-post">
		<p>ページが見つかりません。</p>
		<p id="go-top"><a href="/">トップページに戻る &gt;</a></p>
	</div><!--/single-post-->
</div><!--main-->

@endsection
