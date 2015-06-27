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

<ol id="bred">
	<li id="home"><a href="/">Home</a></li>
	<li>404 File Not Found</li>
</ol>

<div class="headings-area">
	<h1 id="sec01-headings" class="headings">404 File Not Found</h1>
</div>
<div id="single-main">
	<div id="single-post">
		<p>ご指定のページが見つかりません</p>
		<p id="go-top"><a href="/">トップページに戻る &gt;</a></p>
	</div><!--/single-post-->
</div><!--main-->

@endsection
